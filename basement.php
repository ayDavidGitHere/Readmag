<?php
      
       $email = $_POST["emailAddress"];
       $username = $_POST["username"];
       $ps = $_POST["ps2"];
        
        
        
$every[0] = array("email"=>"$email","username"=>"$username","ps"=>"$ps");
$every23 = array("email"=>"$email","username"=>"$username","about"=>"notset");
        
        
        
if(!file_exists('baser.json')){
     file_put_contents('baser.json', "[]");
}
        
if(!file_exists('users.json')){
     file_put_contents('users.json', "[]");
}
        
        
$inp = file_get_contents('baser.json');/* get content of json*/
$tempArray = json_decode($inp, true); /* convertjsontoarray*/
array_push($tempArray, $every[0]);/*  push content into array*/
$jsonData = json_encode($tempArray); /*convert result to json*/


$inp23 = file_get_contents('users.json');
$tempArray23 = json_decode($inp, true); 
array_push($tempArray23, $every23[0]);
$jsonData23 = json_encode($tempArray23);

   function save(){
file_put_contents('results.json', $jsonData);
file_put_contents('users.json', $jsonData23);
   }



    $existEm = "wait";
       for($i=0; $i<count($tempArray)-1; $i++){
   if($email == $tempArray[$i]["email"]){ $existEm = "true";
               //echo "exist <br>" ; 
                break; }
   else{  //echo "do not <br>";  
        }
                     }
    
    
$existUser = "wait";
       for($i=0; $i<count($tempArray)-1; $i++){
   if($username == $tempArray[$i]["username"]){ $existUser = "true";
               //echo "exist <br>" ; 
                break; }
   else{  //echo "do not <br>";  
        }
                     }
    
    
    
    
    
    
    if($existEm == "true" || $existUser == "true" ){ 
        setcookie("notvalid", "email or username already exist", time()+1*1*2);
        header("Location: regup.php");
    }
    else{
 save();
 $fp = fopen('baser.json', 'w');//opens file in append mode
 fwrite($fp, $jsonData); 
 fclose($fp);// echo "File appended successfully"; 
   header("Location: write.php");
    }
      
 

   //header("Location: index.html");
?>