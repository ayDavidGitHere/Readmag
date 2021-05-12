<?php


function getRandomToken(){
    mt_srand( (double) microtime()  * 100000000);
    $randToken = "";
    $pool = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"."abcdefghijklmnopqrstuvwxyz";
    for($i=0; 8>$i; $i++){
        $randToken.= $pool[mt_rand(0, strlen($pool)-1)];
    }
    return($randToken);
}

if(isset($_COOKIE["id_uploader"])){ $writer = $_COOKIE["id_uploader"]; }
else{   echo "ERROR_LOGGED_OUT"; exit(); } 
$imgFile =  $_FILES["uploadimg"];//$_FILES["uploadimg"];


           //$writerpath = "../writers/".$writer;
           //if (!file_exists($writerpath)){ mkdir($writerpath); }
           //$uploadpath = "$writerpath"."/uploadImg";
           $uploadpath = "../".$_POST['tempuploadpath'];
           if (!file_exists($uploadpath)){ mkdir($uploadpath); }
     $originalfilename = basename($imgFile["name"]);  //ecy.jpg
     $imgExt = pathinfo($originalfilename)["extension"]; //jpg
     $newImgName = getRandomToken().".$imgExt";
     $saveimgto= "$uploadpath/".$newImgName;//uploadimg/new.jpg
     move_uploaded_file($imgFile["tmp_name"],  $saveimgto  );
     $uploadImg =  $saveimgto;
     echo "$newImgName";
     
     
     ?>