<?php 
include('emptyheader.php');
?>
<style>
#container {
    clear: both;
    margin: 0 auto;
    max-width: 832px;
    text-align:center; 
}
.gapabove {
  margin-top: 10px;
}
.navbar {
  display: none;
}
.item {
	padding-top:35px;
	padding-bottom:35px;
    width: 450px; 
    display:inline-block; 
	font-family: Jura;
	font-size: 18px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	line-height: 20px;
}​​​​​​​

.btn { 
  font-size: 18px #FF0000;  
  border: 1px solid #FF0000;  
  border-radius: 4px ;  
} 

.btn-default {  
  color: white;  
  background-color: #FF0000;  
  border-color: #FF0000;  
} 

.btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {  
color: #FF0000;  
background-color: white;  
border-color: #FF0000;  
}  
</style>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Jura" />

<div class="container gapabove">
 
  <div id="container" >
  
  <img class="item" src="images/logobright.png" alt="blip logo" width="128" height="250"> 
  
  <p class="item">Blip is a unique Debian server monitoring system that will collate data about your server, 
  including bandwidth, load, and storage. It then cleverly uploads it to a database and right onto the 
  devices you use the most, including phone and desktop, allowing you to monitor your server from anywhere in the world.
  <br>
  <br>
  A simple setup script will install everything you need to be up and running in mere seconds!
  </p>
 
  
  <form action="setup_blip.sh" method="get">
    <input class="btn btn-default btn-lg" type="submit" value="Download" 
         name="Submit" id="btn" />
</form>


<a class="item guide" href="instr.php" > installation guide </a>
<a class="item guide" href="loginpage.php"> login </a>

  
  </div>
  </div>
 
