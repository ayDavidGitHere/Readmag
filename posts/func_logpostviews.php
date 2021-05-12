<?php
$dir_postviews = "../../posts.json";
if(!file_exists($dir_postviews)){
      file_put_contents($dir_postviews, "[]");
}

$fileCont = file_get_contents($dir_postviews, true);
$fileContInArray = json_decode($fileCont, true);
$cntArr = count($fileContInArray); 
        for($i=0; $cntArr> $i; $i++){ 
$indexOfTitle  = array_search($searchwhat, $fileContInArray[$i]);
//echo "$indexOfTitle"; echo "<br>_me";
$foundAtI = $i;
if($indexOfTitle !== false){  break; }
         }
if($indexOfTitle !== false){ 
     $postViews = $fileContInArray[$foundAtI]["views"];
     $fileContInArray[$foundAtI]["views"] = $postViews+1;
     //echo $fileContInArray[$foundAtI]["views"];
     $fileContInJson = json_encode($fileContInArray);
     file_put_contents($dir_postviews, $fileContInJson);
} 
?>