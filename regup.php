<html> 
    <head>   <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/regup.css"> 
   <link rel="shortcut icon"  href="http://<?php print $_SERVER['HTTP_HOST']; ?>/img/mainlogo.png" />
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/redpxconstant.css"> 
   <meta name="theme-color" content="rgb(55, 37, 111)"/>

 <meta name="title" content="Login or signup to ReadMag"> <meta name="description" content="Signup with ReadMag or login"> <meta name="keywords" content="login, signup, ReadMag, create account"> <meta name="robots" content="index, follow"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta name="language" content="English"> <meta name="revisit-after" content="1 days"> <meta name="author" content="aydavidgithere">
 <title> Login or Signup to ReadMag</title>
<noscript>Unfortunately, JavaScript must be enabled in your browser</noscript>
    </head>
    </head>
<body onload="der()" id="body" class="body">
<script type="text/javascript">
   
   
   

function $(str){ return document.getElementById(str)  }
function der(){
     function $(str){ return document.getElementById(str)  }

     $("loginText").addEventListener("click", function(){  
         $("Login").style.height = "250px"; 
         $("SignUp").style.height = "0px"
              } )
     
  $("signupText").addEventListener("click", function(){     
         $("SignUp").style.height = "400px"; 
         $("Login").style.height = "0px"
              } )
              
}


function checkBefore(){  
    
 var $= function(string){ return document.getElementById(string); }
     
 var baseEm = "exist@gmail.com"
 var condS = { pMatch: "", emailEx: "", userEx: ""   }
 
    //if they don't match 
if( document.getElementById("ps").value != document.getElementById("ps2").value ){  condS.pMatch = "no"  }
    // Does not exist in db 
if( $("EmailAddress").value != baseEm && $("EmailAddress").value!= ""){ condS.emailEx= "no"   }


if(condS.pMatch == "no" && condS.emailEx == "no"){   alert("")  }
else{    }

}




function checkPs(){ 
    var len =    8-$("ps").value.length;
    psCheck = false;
         if(len>0){
    $("abCp").innerHTML =  "Create Password-"+" "+len+" characters "
    $("abCp").style = "color: red" 
            }else{  
            $("abCp").innerHTML =  "Create Password";
            $("abCp").style = "color: black" 
            psCheck = true;
                  }
        if( psCheck2 && psCheck2 ){  $("submitBut").type = "submit"  }
    
    validate();
}
var psCheck = false;
 
 
 function checkPs2(){
       psCheck2 = false
     if($("ps").value !=  $("ps2").value  ){
         $("abCp2").innerHTML =  "Repeat Password-"+" "+" "+" does not match "
          $("abCp2").style = "color: red" 
            }else{  
            $("abCp2").innerHTML =  "Repeat Password";
            $("abCp2").style = "color: black" 
            psCheck2 = true;
                  }
                  
                  
                  
        validate();
   }
   var psCheck2 = false;
   
   
   
 
 
 function validate(){
         if( psCheck2 && psCheck2 ){  $("submitBut").type = "submit"  }
         else{   $("submitBut").type = "null" } 
 }




</script>


<div id="everything"> 
  <div id="header"> <img hideme src="img/tweemwith.png" id="headerImg" /> 
      <span id="linkAtHeader">
      <a style="text-decoration: none; color: midnightblue"  href="http://<?php print $_SERVER['HTTP_HOST']; ?>/index.php">HOME</a>
                 </span>
   </div>
          
  
<div id="floatingAB_keep"> </div>


<div id="content">
  
       <!--
  <div id="mainHeadingDiv">
     <p id="date"> 8th October, 2020</p>
  <div id="mainHeadingText" >  <p > You are currentely logged out. </p>  
	<p > Signup with FREESHARE or Login. </p>
  </div>
  <p id="writtenby"> <blogname>Logged Out </blogname>
  </p>
  </div>    -->
      
      <br><br><br>
      
      <?php  
$host = 'localhost:8080';;  
$user = '';  
$pass = '';     /*
$conn = mysqli_connect($host, $user, $pass);  
$name = '';
$dbcon = new mysqli($host, $user, $pass, $name);
if(! $conn )  
{  
    die('Could not connect: ' . mysqli_error($dbcon));  
}  
echo 'Connected successfully';  
mysqli_close($dbcon);      */
setcookie("username", "", time()-3600);
      ?>
      
      
      <p style="text-align: center; font-size: 13px; font-family: Arial;">  <?php  if(isset($_COOKIE["notvalid"])){ print $_COOKIE["notvalid"]; }
            else{ echo "";  }  ?></p>
      
      
      
      
      
      
      
      
      
  <p id="signupText"> Sign Up </p>
  <div id="SignUp">
      <?php   ?>
	<form  action="basement.php" id="regup" method="post">
	    <p class="AboveInput">Create Username</p>
<input name="username" id="username" type="text" autocomplete="off" required ><br>
	  
		<div style="overflow: hidden">
		            <div style="float:left">
	    <p class="AboveInput" id="abCp">Create Password</p>
<input class="psyd" id="ps" name="ps"  type="password" placeholder=" 8 characters" oninput="checkPs()"  autocomplete="off" required><br>
	    <p class="AboveInput" id="abCp2" >Repeat Password</p>
<input class="psyd" id="ps2" name="ps2" type="password" placeholder=" Repeat password"  oninput="checkPs2()"  autocomplete="off" required><br>
                     </div>
            </div>
            
            
	    <p class="AboveInput">Enter Email Address</p>
		<input name="emailAddress" id="EmailAddress" type="email" autocomplete="off" required><br>
		
            
            <div>
 <input id="submitBut" type="submitNo" value="signup" class="submitBut" >
	       </div>
	              
	                 
	</form>
  </div>
      
      
      
      
      
      
      
      
      
      
      <br><br>
  <div id="loginText"> Login </div>
  <div id="Login">
	<form  action="logment.php" id="logup" method="post">
<p class="AboveInput">Enter Username</p>
<input name="username" id="username" type="text" autocomplete="off" required ><br>
	  
		<div style="overflow: hidden">
		            <div style="float:left">
	    <p class="AboveInput">Enter Password</p>
<input class="psyd" id="ps" name="ps"  type="password" autocomplete="off" required><br>
	    
                     </div>
            </div>
        
            
            <div>
 <input id="submitBut" type="submit" value="login" class="submitBut">
	       </div>
	              
	                 
	</form>
  </div>
  
  
      <br><br>
      <br><br>
      <br><br>
      

  
      

    
    
    
    
    

    
    
</div>


</div>   <!-- end of everything-->

    

    </body>
</html>










