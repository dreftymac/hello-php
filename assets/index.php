<!DOCTYPE html>
<html>
<head>
  <title>Hello, Skyliner!</title>
<style>
body {
  font: bold 14px "Helvetica Neue", Arial, Helvetica, sans-serif;
  background-image: url("background.png");
  background-repeat: no-repeat;
  background-size: cover;
}

#logo {
  position: absolute;
  top: 50px;
  left: 50px;
}

#headline {
  margin-top: 250px;
  margin-left: auto;
  margin-right: auto;
  display: block;
}

p {
  color: white;
  margin-top: 30px;
  margin-left: auto;
  margin-right: auto;
  width: 500px;
  line-height: 200%;
  text-align: left;
}

#prompt {
  text-align: center;
}

div {
  margin-top: 70px;
  text-align: center;
}

a.button {
  padding: 20px 150px;
  color: gray;
  text-decoration: none;
  border-color: white;
  border-width: 1px;
  border-style: solid;
  background-color: white;
}
</style>
</head>
<body>
<a href="https://www.skyliner.io/"><img src='logo.svg' id='logo'/></a>
<img src='headline.svg' id='headline'/>
<p>
  You&rsquo;ve successfully deployed your first application with Skyliner!
  You can use this as a template for future application deploys.
  Once you&rsquo;re finished with this tutorial, we recommend deleting
  the application so you&rsquo;re not charged by Amazon.
</p>

<p id="prompt">
  Ready to launch your own application?
</p>

<div>
  <a class="button" href="https://www.skyliner.io/dashboard">Okay, let&rsquo;s go</a>
</div>

</body>
</html>
