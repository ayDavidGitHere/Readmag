<?php
$viewer = $_POST["viewer"];
$dir_topicname = $_POST["URL_topicname"];
$dir_postviews = "$dir_topicname/views.json";
if(!file_exists($dir_postviews)){
      file_put_contents($dir_postviews, "[]");
}

$fileCont = file_get_contents($dir_postviews, true);
$fileContInArray = json_decode($fileCont, true);
$cntArr = count($fileContInArray); 

$searchwhat = $viewer;
$indexOfViewer = false;
        for($i=0; $cntArr> $i; $i++){ 
$indexOfViewer = array_search($searchwhat, $fileContInArray);
} 

     
array_push( $fileContInArray, $viewer);
$newfileContInJson = json_encode($fileContInArray);
file_put_contents($dir_postviews, $newfileContInJson);

echo "$cntArr\n";
print_r($newfileContInJson);


?>