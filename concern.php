<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>



.box1{
position:fixed;
top:110;
left:20%;
width:80%;
height:100%;
border:0px solid black;
margin:0;
overflow:scroll;
overflow-x:hidden;
overflow-y:scroll;
padding:zero;
box-sizing:border-box;
font-size:60px;}

.box2{
position:fixed;
top:11;
left:0%;
width:20%;
height:100%;
border:1px solid black;
margin:0;
padding:zero;
box-sizing:border-box;
}

body{
    margin:0px;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
overflow:hidden;
 background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding-top:50px;
  padding: 20px 125px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {

  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: black;
  color: white;
}


.sidenav {
  height: 100%;
  width: 0;
  position:fixed;
  z-index: 1;
  top: 0;
  left: 10;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


#myInput {
  
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width:60%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  overview:hidden;  
 list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
   margin-top: -1px; 
  background-color: #f6f6f6;
  padding:10px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
}



  body {
  background: url('https://source.unsplash.com/twukN12EN7c/1920x1080') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}
}

</style>
</head>
<body bgcolor="white">
<div class="border">
<div style="padding-left:10px">
 <br><button><span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; </span>
  </button>
<div style="top:0px">  <h1><font color=black><center><i>CONSULT TO COUNSELLOR</i></center></font></h1>
</div>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="meeting.php">Appoient a meeting</a>
  <a href="Feedback.html">Feedback</a>
  <a href="Login.html">Logout</a>
<a href="links.html">About</a>
</div>
<div class="box1">
<iframe src="          " height="700" width="100%"></iframe>


</div>

<div class="box2">
<h2> COUNSELLORS</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Counslar" title="Type in Topic">

<ul id="myUL">
  <li><a href="">DR</a></li>
  <li><a href="">DR</a></li>
  <li><a href="">DR</a></li>
  <li><a href="">DR</a></li>
  <li><a href="">DR</a></li>
  <li><a href="">DR</a></li>
  <li><a href="">DR</a></li>
</ul>
</div>


</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1)
     {        li[i].style.display = "";  } 
   else {
            li[i].style.display = "none";
        }
    }
}

</script>
   

</body>
</html>
