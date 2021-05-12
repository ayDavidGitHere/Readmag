<?php
    
      print '<link rel="stylesheet" href="writers/index.css">';
    
    
    
    $getJson = file_get_contents("posts.json", true);
    $toArray = json_decode($getJson, true);
    $toArrayLength = count($toArray);
    $arr_bufferedWriters = array();
    
    for($i=0; $toArrayLength>$i; $i++){
         $writer = $toArray[$i]["writer"];
         $writerUrl = "writers/$writer";
         $writerDp = $writerUrl."/main.png";
         if( !file_exists($writerDp) ){   $writerDp = "img/defaultim.png";   }
         
         
         if( !file_exists($writerUrl) ){
                mkdir($writerUrl, 0775);
                file_put_contents("$writerUrl/index.php", "");
         }
         
         

        
        $found = in_array($writer, $arr_bufferedWriters); 
        if($found == ""){
              array_push($arr_bufferedWriters, $writer);
              print "<br><div class='divGroupWriters' ><img src='$writerDp' class='writerDp' ></img><br> <a href='$writerUrl'>$writer</a></div><br>" ;
        }
        else{
           
        }
        
        
        
 
    }//EO for
    
    
    
    
?>