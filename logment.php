<?php
      
      
       $username = $_POST["username"];
       $ps = $_POST["ps"];
        
        
        

        
        
        
        
if(!file_exists("baser.json")){   file_put_contents("baser.json", "[]");   }
$inp = file_get_contents('baser.json');/* get content of json*/
$tempArray = json_decode($inp, true); /* convertjsontoarray*/

    
$existUserAndPassword = "wait";
       for($i=0; $i<count($tempArray); $i++){
   if( strcasecmp($username, $tempArray[$i]["username"]) == 0 && strcasecmp($ps, $tempArray[$i]["ps"]) == 0){ $existUserAndPassword = "true";
               //echo "exist <br>" ; 
                break; }
   else{  //echo "do not <br>";  
        }
                     }
      
    
    
    
    
    
    if($existUserAndPassword == "true" ){ 
       setcookie("username", strtolower($username));
       //echo "user found password and password match";
        header("Location: write.php");
    }
    else{
        setcookie("notvalid", "Username or Password not valid", time()+1*1*2);
        //echo "Wrong Username or Password "; 
          header("Location: regup.php");
    }
      
 


?>