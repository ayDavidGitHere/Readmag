
<?php
     
       $savetype = $_GET["storykey"];
       $dir = "posts.json";
       if(!file_exists($dir)){  file_put_contents($dir, "[]");     }
       $filecont = file_get_contents($dir);
       $filecontArr = json_decode($filecont, true);
       $cnt = count($filecontArr); 
       $key = "";
       
       
         for($i=0; $cnt> $i; $i++){
$key = array_search($savetype, $filecontArr[$i]);  
if($key != ""){  $foundIndex = $i;  break;        }
           }
           
           
             if($key == ""){
       echo "keynotexist";
             }   
           else{
       $atInd = json_encode( $filecontArr[$foundIndex] );
       echo "".$atInd;
            }
             
      ?>  