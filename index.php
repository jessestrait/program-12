<?php
 //session_start();
 header('Content-Type: text/html; charset=iso-8859-1');
 
    
 
 ?>



<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/program-12.css">
        <title>
            ITSE 2302 Program-12: Jesse Strait
        </title>
<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}


function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint1").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint1").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
function showCar(str) {
  if (str=="") {
    document.getElementById("txtHint3").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint3").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getcar.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
<h1>ITSE 2302 Program-12: Jesse Strait</h1>
        <hr>

        <h2>#1. Top Movies for 2018.</h2>
<p><b>Start typing a name of a Movie in the input field below:</b></p>
<form> 
Movie name: <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <br><span id="txtHint"></span></p>
<hr>
<h2>#2. use AJAX for database data retrieval</h2>
<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a person:</option>
  <option value="26">The Wackers</option>
  <option value="27">The Trestles</option>
  <option value="30">The Wackers</option>
  <option value="31">The Trestles</option>
  </select>
</form>
<br>
<div id="txtHint1"><b>Team info will be listed here...</b></div>
<hr>
<h2>#3. Use Select list to see all car information from XML File.</h2>
Select a Car:
<select name="cars" onchange="showCar(this.value)">
<option value="">Select a Car:</option>
<option value="Sedona">Sedona</option>
<option value="230i">230i</option>
<option value="Miata">Miata</option>
<option value="Model S">Model S</option>
<option value="Soul">Soul</option>
<option value="Camry">Camry</option>
<option value="370Z">370Z</option>
<option value="BRZ">BRZ</option>
<option value="Challenger">Challenger</option>
<option value="86">86</option>
</select>
</form>
<div id="txtHint3"><b>Car info will be listed here...</b></div>
<hr>
<h2>#4. AJAX RSS reader</h2>
<div id="rss">
<p>Ajax rss reader works a lot like the other modules that we have worked with. There are 3 files working, if not more. You have html that the user sees, and upon ready state change if calls a php function. The php function uses the input to call the right feed, and creates a new XML DOM object. The it extracts and outputs the reasults. </p></div>
<hr>
<h2>#5. AJAX POLL </h2>
<div id="poll">
<p>
   Ajx poll reader is interesting. It uses the same setup as the previous examples, 3 working blocks. The user will see a chance to vote on something. The input gets carried to a javascript function that calls a php function that interacts with a text file, and saves the results. It is then displayed to the user after the voting...  
</p></div>
<hr>
</body>
</html>