<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS</title>

<style>
* {
  box-sizing: border-box;
}

body {
 
     background-image: url("backpic.jpg");
}



.header {
  background: #122b40;
  padding: 20px;
  text-align: center;
   color: white
}


.topnav {
  overflow: hidden;
  background-color: #333;
}


.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.topnav a:hover {
  background-color: #ddd;
  color: black;
}


.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}
img {
    width: 100%;
     height:  100%;
     border-radius: 75%;
         height: 400px
}

</style>
</head>
<body >

<div class="header">
  <h1>Home</h1>
  <a href='https://github.com/DylanOC21/phpProject10'>Github</a>
  <a href=' https://doc118351691.herokuapp.com/'>Heroku</a>
</div>

<div class="topnav">
  <a style="margin-left: 200px"  href="Resume.html">CV</a>
  <a style="margin-left: 410px " href="tiltedpage_scroll_demo.html">Interest</a>
  <a style="float: right; margin-right: 150px" href="ConsultancyServices.html">Consulting Services</a>
</div>

<div class="row">
  <div class="column">
      <img src="cvback.jpg">
  </div>
  
  <div class="column">
      <img src="interestback.jpg">
  </div>
  
  <div class="column">
      <img src="consultingback.jpg">
  </div>
</div>

</body>
</html>
