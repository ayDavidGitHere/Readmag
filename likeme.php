<?php 

if(!isset($_COOKIE["username"])){   echo "guest";  exit();    }
    /*     code to check if liked already and remove   */
$dir = "comments.json";
$index = $_GET['index']; 
$cookme = $_COOKIE["username"];
$type = $_GET['type'];
    
    
if(!file_exists($dir)){
      file_put_contents($dir, "[]");
}

$inp = file_get_contents($dir);
$tempArray = json_decode($inp, true); 

$theArray = $tempArray[$index]["upvote"];   
$theArrayDV = $tempArray[$index]["downvote"];   


$key = in_array($cookme, $theArray);
$keyI = array_search($cookme, $theArray);
$keyDV = in_array($cookme, $theArrayDV);
$keyIDV = array_search($cookme, $theArrayDV);

if($type === "liker"){
   if($keyDV === true){     
        array_splice($theArrayDV, $keyIDV, $keyIDV);
        $tempArray[$index]["downvote"] = $theArrayDV; 
        $jsonData = json_encode($tempArray);
        file_put_contents($dir, $jsonData);
        echo "removedDV";
   }
        if($key=== true){
        array_splice($theArray, $keyI, $keyI);
        $tempArray[$index]["upvote"] = $theArray; 
        $jsonData = json_encode($tempArray);
        file_put_contents($dir, $jsonData);
        echo "removed";
        }
        else{
        array_push($theArray, $cookme);
        $tempArray[$index]["upvote"] = $theArray; 
        $jsonData = json_encode($tempArray);
        file_put_contents($dir, $jsonData);
        echo "added";
            }
  
        
   
   
}//EO if





if($type === "disliker"){
   if($key === true){     
        array_splice($theArray, $keyI, $keyI);
        $tempArray[$index]["upvote"] = $theArray; 
        $jsonData = json_encode($tempArray);
        file_put_contents($dir, $jsonData);
        echo "removed";
   }
        if($keyDV=== true){
        array_splice($theArrayDV, $keyIDV, $keyIDV);
        $tempArray[$index]["downvote"] = $theArrayDV; 
        $jsonData = json_encode($tempArray);
        file_put_contents($dir, $jsonData);
        echo "removedDV";
        }
        else{
        array_push($theArrayDV, $cookme);
        $tempArray[$index]["downvote"] = $theArrayDV; 
        $jsonData = json_encode($tempArray);
        file_put_contents($dir, $jsonData);
        echo "addedDV";
            }
  
        
}//EO if

   
   
   
   
   
   
   
   
   
     
?>