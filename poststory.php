<?php
      
       $quoteTitle = $_POST["quoteTitle"];
       $quoteDescription = $_POST["quoteDescription"];
       $quote = $_POST["quote"];
       $imageData = $_POST["imageData"];
       $info = $_POST["info"];
       $tags= $_POST["tags"];
       $likes[0]= array("");
        
        
$every[0] = array("quote"=>"$quote","imageData"=>"$imageData","info"=>"$info", "tags"=>"$tags " , "likes"=>$likes[0]);
        
        
        
        
        
        
$inp = file_get_contents('baser2.json');/* get content ofjson*/
$tempArray = json_decode($inp, true); /* convertjsontoarray*/
array_push($tempArray, $every[0]);/*  push content into array*/
$jsonData = json_encode($tempArray); /*convert result to json*/
file_put_contents('results2.json', $jsonData);

//echo "This is tempArray before any conversion: <br>";
//echo $tempArray[1]["quote"];

//echo "This is jsondata after appending and conversion to json: $jsonData  ";


    
    
        
 $fp = fopen('baser2.json', 'w');//opens file in append mode
 fwrite($fp, $jsonData); 
 fclose($fp);// //echo "File appended successfully"; 
 //echo "Data will be saved ";  
 header("Location: explore.php");
 
?>