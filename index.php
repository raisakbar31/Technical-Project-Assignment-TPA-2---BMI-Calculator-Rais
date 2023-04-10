<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./img/icon.png" type="image/x-icon">
    <title>BMI Calculator</title>
</head>
<body>
    <div class="judul">
      <h1>Check Your BMI</h1> <br>
      <h3>Enter your weight and height to check your BMI result</h3>
      </div>
    <div class="container-form">
    <p>Put your weight in here (KG)</p><br>
    <input class="isi-form" type="number" id="berat" placeholder="60"><br>
    <p>And your Height in here (CM)</p><br>
    <input class="isi-form" type="number" id="tinggi" placeholder="167"><br>
    <br>
    </div>
    <button class="button" onclick="calculateBMI()">Calculate</button>

    <!-- ==========hasil============     -->
   <div class="container-hasil">
    <p class="hasil">Your BMI is <span id="bmi"></span></p>
    <p class="hasil" >which means You are  <span id="status"></span></p>
  </div>


  <!-- ==========footer================ -->
 
  <footer>
    <div class="footer-content">
        <h3>Rais Akbar Sidik</h3>
        <p>I am a web designer who loves beauty and functionality. I am required to create an engaging and intuitive online experience, with an elegant and functional design. Let's create your dream website together!</p>
        <ul class="socials">
            <li><a href="https://www.facebook.com/rais.akbar3110/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://github.com/raisakbar31"><i class="fa fa-github"></i></a></li>
            <li><a href="https://www.youtube.com/@RAISSUND"><i class="fa fa-youtube"></i></a></li>
            <li><a href="https://www.instagram.com/sikang_is/?hl=id"><i class="fa fa-instagram"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy; <a href="#">sikang_is</a>  </p>
    </div>

</footer>
<!-- ===============script=================== -->
 <script src="./js/index.js"></script>
</body>
</html>