<!DOCTYPE HTML>
<html>
<head>
<title>Site Internet de Fontaine</title>
<link rel="icon" type="image/icon" href="./Home/logo.webp" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
body{
	background-image: url("./Home/fontaine2.png");
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	margin:0;
  padding:0;
}

.fontaine {
  display: block;
  margin-left:auto;
  margin-right:auto;
  border-radius: 8px;
}

.intro {
	color:white;
	text-align:center;
}

.stem {
  text-align:center;
  color:white;
  font-family: 'palatino', serif;
	font-size: 75px;
}

.nav ul {
  list-style: none;
  text-align: center;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #2d4286;
  position: fixed;
  top: 0;
  width: 100%;
}

.nav li {
  display: inline-block;
}

.nav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 15px;
  text-decoration: none;
}

.nav li a:hover {
  background-color: #698ae8;
  transition: 0.4s;
}

.logo{
  display:block;
  margin-right:auto;
  margin-left:auto;
  height: 45px;
  width: 45px;

}

section {
  position: relative;
  width: 100%;
  height: 100vh;
}

section .wave {
  position: absolute;
  width: 100%;
  height: 227px;
  bottom: 0;
  left: 0;
  background: url("./Home/wave-large.png");
  animation: move 10s linear infinite;
}

section .wave::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 227px;
  top: 0;
  left: 0;
  background: url("wave-large.png");
  opacity: 0.4;
  animation: move-reversed 10s linear infinite;
}
section .wave::after {
  content: "";
  position: absolute;
  width: 100%;
  height: 227px;
  top: 0;
  left: 0;
  background: url("wave-large.png");
  opacity: 0.5;
  animation-delay: -4s;
  animation: move 10s linear infinite;
}

@keyframes move {
  0% {
    background-position: 0%;
  }
  100% {
    background-position: 1920px;
  }
}
@keyframes move-reversed {
  0% {
    background-position: 1920px;
  }
  100% {
    background-position: 0%;
  }
}

</style>
<body>
<div class="nav">  <ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><img src="./Home/logo.webp" width="64px" height="64px" ></li>
  <li><a href="./Home/Furina/Archon.php">Contact</a></li>
  <li ><a href="./Home/About/About.php">About</a></li>
</ul>
</div>

<div style="padding:20px;margin-top:30px;height:25px;">
<h1 class ="stem">Welcome to Fontaine!</h1>
<p class="intro">This is a website dedicated to showcase the Nation of Fontaine.</p>
</div>

<section>
  <div class="wave"></div>
</section>

</body>
</html>
