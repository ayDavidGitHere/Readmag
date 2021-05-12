<?php  

$mVal = $_POST["themess"];
$user = $_POST["cookme"];
$dir = "comments.json";  
$arrOf = array("sender"=>"$user", "message"=>"$mVal", "upvote"=>["defaultuv"], "downvote"=>["defaultdv"]);

if(!file_exists($dir)){
      file_put_contents($dir, "[]");
}

$inp = file_get_contents($dir, true);
$tempArray = json_decode($inp, true);

array_push($tempArray, $arrOf);

$jsonData = json_encode($tempArray);   
//file_put_contents($dir, $jsonData);

            $cnt = count($tempArray);
echo $mVal."  ".$user."\n";
echo $tempArray[$cnt-1]["message"];
//echo $mVal." ".$cnt;
    
    
     



?>