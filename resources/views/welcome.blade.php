<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <link rel="stylesheet" href="./style.css">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<!-- partial:index.partial.html -->
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>



<nav>
  <ul>
    <li><a href="Salfia.co">© 2023 farm market</a></li>
    <li><button class="nav-button1"><a href="/login">login</a></button></li>
<li><button class="nav-button"><a href="/register">register</a></button></li>
    <li class="slide"></li>
  </ul>
</nav>
<section>

  <div class="title"><span>The farm-market</span><span>Allows you to sell and buy<a target="_blanck" href="salfia.com">Products</a></span>
  </div>

        <div class="col-md-6">
          <img class="img-fluid" src="https://i.pinimg.com/originals/ef/89/b5/ef89b595d7f9c5eb4be2bea8a770ce36.gif" alt="Responsive Image">
        </div>

</section>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
<style>
a {
    color: inherit;
    text-decoration: inherit;
  }

  body {
    margin: 0;
    padding: 0;
    font-family: 'Open Sans', sans-serif;
  }
  ::selection {
    background-color: #f7ca18;
    color: #1b1b1b;
  }
  nav {
    width: 100%;
    background-color:  rgba(21, 30, 47,1);
    position: fixed;
    bottom: 0;
    height: 100px;
    overflow: hidden;
  }
  nav ul {
    position: absolute;
    top: 0;
    left: 0;
    list-style-type: none;
    padding: 0;
    margin: 0;
    width: 140vw;
  }

.nav-button {
    background-color: grey;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    margin-left: 2rem;
    cursor: pointer;
    text-decoration: none;
  }

  .nav-button:hover {
    background-color: #0056b3;
  }

  .nav-button a {
    color: #fff;
    text-decoration: none;
  }



.nav-button1 {
    background-color: #be1204;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
     margin-left: 2rem;
    cursor: pointer;
    text-decoration: none;
  }

  .nav-button1:hover {
    background-color: #0056b3;
  }

  .nav-button1 a {
    color: #fff;
    text-decoration: none;
  }


  nav li {
    margin: 0;
    float: left;
    display: inline-block;
    height: 98px;
    margin-bottom: 2px;
    line-height: 100px;
    width: 20vw;
    text-align: center;
    color: white;
    transition: background-color 0.5s 0.2s ease, color 0.3s ease;
    cursor: pointer;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 4px;
    font-weight: 800;
    transform: translateY(100%);
  }
  nav li.active {
    background-color:none;

  }
  nav li.active::after {
    content: "";
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: whitesmoke;
  }
  nav li:nth-child(1) {
    animation: pop 0.5s 0.15s 1 forwards;
  }
  nav li:nth-child(2) {
    animation: pop 0.5s 0.3s 1 forwards;
  }
  nav li:nth-child(3) {
    animation: pop 0.5s 0.45s 1 forwards;
  }
  nav li:nth-child(4) {
    animation: pop 0.5s 0.6s 1 forwards;
  }
  nav li:nth-child(5) {
    animation: pop 0.5s 0.75s 1 forwards;
  }
  nav li:nth-child(6) {
    animation: pop 0.5s 0.9s 1 forwards;
  }
  nav li:nth-child(7) {
    animation: pop 0.5s 1.05s 1 forwards;
  }
  nav li:hover {
    color: #ececec;
  }
  nav li:active {
    background-color: #222;
  }
  nav li:nth-child(1):hover ~ .slide {
    left: 0;
  }
  nav li:nth-child(2):hover ~ .slide {
    left: 20vw;
  }
  nav li:nth-child(3):hover ~ .slide {
    left: 40vw;
  }
  nav li:nth-child(4):hover ~ .slide {
    left: 60vw;
  }
  nav li:nth-child(5):hover ~ .slide {
    left: 80vw;
  }
  nav li:nth-child(6):hover ~ .slide {
    left: 100vw;
  }
  nav li:nth-child(7):hover ~ .slide {
    left: 120vw;
  }
  nav li.slide {
    position: absolute;
    left: -20vw;
    top: 0;
    background-color: #fff;
    z-index: -1;
    height: 2px;
    margin-top: 98px;
    transition: left 0.3s ease;
    transform: translateY(0);
  }

  section {
      background-color: #ffffff;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    section img {
    width: 80%;
      height:80%;
    }
  section {
    background-color:#ffffff;
    height: 100vh;
    display: flex;
  }
  section .title {
    max-width: 60%;
    width: 100%;
    align-self: center;
    transform: translateY(-50px);
    margin: 0 auto;
    padding:2rem;
    overflow: hidden;
    padding-bottom: 10px;
  }
  section .title span {
    display: inline-block;
    font-size: 4.3vw;
    color: #be1204;
    width: 100%;
    text-transform: uppercase;
    transform: translateX(-100%);
    animation: byBottom 1s ease both;
    font-weight: 600;
    letter-spacing: 0.25vw;
  }
  section .title span:last-child {
    font-size: 1rem;
    animation: byBottom 1s 0.25s ease both;
  }
  section .title span a {
    position: relative;
    display: inline-block;
    margin-left: 0.5rem;
    text-decoration: none;
    color: #1a405b;
  }
  section .title span a::after {
    content: "";
    height: 2px;
    background-color: #1a405b;
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 0;
    animation: linkAfter 0.5s 1s ease both;
  }

.btn {
      background-color: grey;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    .btn a {
      color: #fff;
      text-decoration: none;
    }

    @media (max-width: 768px) {
      nav .nav-item {
        display: block;
        margin-bottom: 10px;
      }

      .btn {
        width: 100%;
      }
    }


  @-moz-keyframes pop {
    0% {
      transform: translateY(100%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @-webkit-keyframes pop {
    0% {
      transform: translateY(100%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @-o-keyframes pop {
    0% {
      transform: translateY(100%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @keyframes pop {
    0% {
      transform: translateY(100%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @-moz-keyframes byBottom {
    0% {
      transform: translateY(150%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @-webkit-keyframes byBottom {
    0% {
      transform: translateY(150%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @-o-keyframes byBottom {
    0% {
      transform: translateY(150%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @keyframes byBottom {
    0% {
      transform: translateY(150%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @-moz-keyframes linkAfter {
    0% {
      width: 0;
    }
    100% {
      width: 30px;
    }
  }
  @-webkit-keyframes linkAfter {
    0% {
      width: 0;
    }
    100% {
      width: 30px;
    }
  }
  @-o-keyframes linkAfter {
    0% {
      width: 0;
    }
    100% {
      width: 30px;
    }
  }
  @keyframes linkAfter {
    0% {
      width: 0;
    }
    100% {
      width: 30px;
    }
  }
</style>
<script>

(function($){
  // variables
  elementWidth = $('ul').width(),
  containerWidth = $('nav').width(),
  difference = elementWidth-containerWidth,
  finalWidth = difference * 5,
  element = $('ul');

  // active on click
  $('li').on('click', function(){
    $('li').removeClass('active');
    $(this).addClass('active');
  });

})(jQuery);

    </script>
</html>
