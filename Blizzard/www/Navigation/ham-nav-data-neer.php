<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
body {
    margin: 0;
    font-family: 'Arial', sans-serif;
    }

    .navbar {
    background-color: #333;
      overflow: hidden;
    }

    .navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .navbar a.icon {
    display: none;
}

    @media screen and (max-width: 600px) {
    .navbar a:not(:first-child) {display: none;}
      .navbar a.icon {
        float: right;
        display: block;
    }
    }

    @media screen and (max-width: 600px) {
    .navbar.responsive {
        position: relative;
    }
      .navbar.responsive a.icon {
        position: absolute;
        right: 0;
        top: 0;
    }
      .navbar.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
    }
  </style>
</head>
<body>

<div class="navbar" id="myNavbar">
  <a href="#" class="icon" onclick="myFunction()">
    &#9776;
  </a>
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
</div>

<script>
  function myFunction() {
      var x = document.getElementById("myNavbar");
      if (x.className === "navbar") {
          x.className += " responsive";
      } else {
          x.className = "navbar";
      }
  }
</script>

</body>
</html>



