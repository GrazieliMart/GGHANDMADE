<?php
session_start();
include 'bd.php'; 


// Verifique se 'email' está definido na sessão antes de acessá-lo
$email = isset($_SESSION['email']) ? $_SESSION['email'] : null;

$pdo = conexaoBd();
$stmt = $pdo->prepare("SELECT name FROM cadGG WHERE email = :email");
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $userName = $user['name'];
} else {
    // Trate a situação em que o nome do usuário não é encontrado
    $userName = "Usuário";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Nav.css">
    <link rel="stylesheet" href="css/Index.css">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <title>GGHANDMADE | Home </title>
</head>
<?php
include 'NavBar.php';
?>


<body>


    <script src="js/scriptNav.js"></script>
    <script src="js/scriptNavLogin.js"></script>
    <div class="carousel" id="myCarousel">
  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="img/alo.png" alt="Imagem 1">
    </div>
    <div class="carousel-item">
      <img src="imagem2.jpg" alt="Imagem 2">
    </div>
    <div class="carousel-item">
      <img src="imagem3.jpg" alt="Imagem 3">
    </div>
    <div class="carousel-item">
      <img src="imagem4.jpg" alt="Imagem 4">
    </div>
    <div class="carousel-item">
      <img src="imagem5.jpg" alt="Imagem 5">
    </div>
  </div>
  <div class="carousel-controls">
    <button class="carousel-control" onclick="prevSlide()">&#10094;</button>
    <button class="carousel-control" onclick="nextSlide()">&#10095;</button>
  </div>
</div>

<script>
  let currentIndex = 0;
  const totalSlides = document.querySelectorAll('.carousel-item').length;

  function showSlide(index) {
    const carouselInner = document.querySelector('.carousel-inner');
    const newTransformValue = -index * 100 + '%';
    carouselInner.style.transform = 'translateX(' + newTransformValue + ')';
    currentIndex = index;
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    showSlide(currentIndex);
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    showSlide(currentIndex);
  }
</script>

    

    <!--Responsividade-->
    <div class="mobile-menu">
   
    </div>

</body>
</html>