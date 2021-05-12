    <?php
       
      $savetype = $_GET['savetype'];
      $topicname =$_GET['topicname'];
      $topicdescription= $_GET['topicdescription'];
      $writer =  $_GET['writer'];
      $storyTopic = $_GET["storyTopic"];
      $arrayofimagessrc = explode( ":itm:", $_GET['arrayofimagessrc']);
      $arrayoftags = explode( ":itm:", $_GET['arrayoftags']);
      $url = str_replace(" ", "-", $_GET["url"]);
      
      $istopicimageset = $_GET['istopicimageset'];
      $urlminussitehost =  "posts/".str_replace(" ", "-", $topicname);
      
      
      //image saving
      $dirimgsrc = $arrayofimagessrc[0];
      if( !file_exists($dirimgsrc)  ){    
            $topicmainimgdir = $urlminussitehost."/img";
            if (!file_exists($topicmainimgdir)){mkdir($topicmainimgdir);}
            $imgtocopy = $istopicimageset;
            $imgtosave = str_ireplace(
                         "writers/".$writer."/uploadImg/new"
                         , "main"
                         , $topicmainimgdir.'/'.$imgtocopy );
if($istopicimageset != false&&copy($imgtocopy, $imgtosave) ){  
         $arrayofimagessrc[0]= "/$imgtosave";
         echo "upload image done\n"; 
 }
else{   
   $arrayofimagessrc[0] ="/img/defaultim.png";
   echo "could not upload image\n";
}
           echo "from $imgtocopy to $imgtosave \n";
          
              }//EO file exists
       
       

     
       $arrayofpostinfo = array("topicname"=>$topicname, "topicdescription"=>$topicdescription, "writer"=>$writer, "storyTopic"=>$storyTopic, "arrayoftags"=>$arrayoftags, "arrayofimagessrc"=>$arrayofimagessrc, "url"=>$url, "savetype"=>$savetype, "views"=>"0");
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
       array_push($filecontArr, $arrayofpostinfo);
       $tojson = json_encode($filecontArr);
       file_put_contents($dir, $tojson); 
       echo "savetype: ".$savetype. "\n new postssave created at: \" ".$url;
             }   
           else{
       $arrayofpostinfo["views"]=$filecontArr[$foundIndex]["views"];//keepview
       $filecontArr[$foundIndex] = $arrayofpostinfo;
       $tojson = json_encode($filecontArr);
       file_put_contents($dir, $tojson);
       echo "savetype: ".$savetype."\n overwrite already exist at: \"".$url;
              }
       
print_r($arrayofimagessrc);
       
       
             
                 if(!isset($runthis)){
       $arrayofpostinfo = array("topicname"=>$topicname, "topicdescription"=>$topicdescription, "writer"=>$writer, "storyTopic"=>$storyTopic, "arrayoftags"=>$arrayoftags, "arrayofimagessrc"=>$arrayofimagessrc, "url"=>$url, "savetype"=>$savetype, "views"=>"0");
       $dir = "writers/writers.json";
       if(!file_exists($dir)){  file_put_contents($dir, "[]");     }
       $filecont = file_get_contents($dir);
       $filecontArr = json_decode($filecont, true);
       $cnt = count($filecontArr); 
       $key = "";
    for($i=0; $cnt> $i; $i++){   echo  $filecontArr[$i]["savetype"]."\n";  
$key = array_search($savetype, $filecontArr[$i]);  
if($key != ""){  $foundIndex = $i;  break;        }
           }
             if($key == ""){  
       array_push($filecontArr, $arrayofpostinfo);
       $tojson = json_encode($filecontArr);
       file_put_contents($dir, $tojson);
       echo "savetype: ".$savetype. "<br><br> new writerssave created at: \" ".$url;
             }   
           else{
       $arrayofpostinfo["views"] =$filecontArr[$foundIndex]["views"];//keepview
       $filecontArr[$foundIndex] = $arrayofpostinfo;
       $tojson = json_encode($filecontArr);
       file_put_contents($dir, $tojson);
          echo "savetype: ".$savetype."\n overwrite already exist at: \"".$url;
       }
                       }
                 
             
             
             
      ?>  