
<?php   $recieve = ""; $dir = "ifdirnotset.php";
        if(isset($_GET["save"])){ 
            $recieve = str_replace("posttitlenode", "Title ",$_GET["save"] );
            
$formchecker = '
<?php  
$mVal = ""; $user = "";

if(isset($_POST["cookme"])){      $user = $_POST["cookme"];   }
if(isset($_POST["themess"])){      $mVal = $_POST["themess"];    
$dir = "comments.json";  
$arrOf = array("sender"=>"$user", "message"=>"$mVal", "upvote"=>["defaultuv"], "downvote"=>["defaultdv"]);

if(!file_exists($dir)){
      file_put_contents($dir, "[]");
}

$inp = file_get_contents($dir, true);
$tempArray = json_decode($inp, true);

array_push($tempArray, $arrOf);

$jsonData = json_encode($tempArray);   
file_put_contents($dir, $jsonData);

$cnt = count($tempArray);
//echo $mVal."  user:".$user."\n";
//echo $tempArray[$cnt-1]["message"];
//echo $mVal." ".$cnt;

header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
exit;
echo \'\';

}//EO if message exist

    

?>';        
        
$url =  str_replace("posts/", "", $_GET["dir"]);      
$dirP = "posts.json";
if(!file_exists($dirP)){  file_put_contents($dirP, "[]");     }
$filecont = file_get_contents($dirP);
$filecontArr = json_decode($filecont, true);
$cnt = count($filecontArr); 
$key = "";  $foundIndex = -1;
for($i=0; $cnt> $i; $i++){
$key = array_search($url."", $filecontArr[$i]);  
if($key != ""){  $foundIndex = $i;  break;        }
           }
if($key == ""){   }  

      $topicname = $filecontArr[$foundIndex]['topicname'];
      $topicdescription= $filecontArr[$foundIndex]['topicdescription'];
      $writer =  $filecontArr[$foundIndex]['writer'];
      $storyTopic= $filecontArr[$foundIndex]['storyTopic'];
      $savetype =  $filecontArr[$foundIndex]['savetype'];
      $url= $filecontArr[$foundIndex]['url'];
      $views= $filecontArr[$foundIndex]['views'];
      $arrayoftags= $filecontArr[$foundIndex]['arrayoftags'];
      $arrayofimagessrc= $filecontArr[$foundIndex]['arrayofimagessrc'];
      $tags = array_reduce($arrayoftags, function($car, $red){ 
                                return $car.", ".$red;
                     });
        
        
$func_logpostviews = '<?php   
$searchwhat = "'.$topicname.'";
include("../func_logpostviews.php");
?>';

        
$metas = '<?php  include("../../metasnode.php");  ?>
 <meta name="title" content="'.$topicname.'"> <meta name="description" content="'.$topicdescription.'"> 
 <meta name="keywords" content="'.$tags.'"> <meta name="robots" content="index, follow"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta name="language" content="English"> <meta name="revisit-after" content="1 days"> <meta name="author" content="'.$writer.'">
 <title>'.$topicname.'</title>
 <body    >
<script src="http://<?php print $_SERVER[\'HTTP_HOST\']; ?>/lidsacaebasic.js"></script>
 ';
 
 
 $scriptnode = '
        <script>
        var sitehost = "http://"+"<?php echo $_SERVER[\'HTTP_HOST\'];   ?>";
function unction(e){
    ajaxer("GET", sitehost+"/likeme.php?index="+e+"&type=liker", function(resp){
    if(resp == "guest"){    window.location = sitehost+"/regup.php";    }
            });
        }
function unction2(e){  
    ajaxer("GET", sitehost+"/likeme.php?index="+e+"&type=disliker", function(resp){   
    if(resp == "guest"){    window.location = sitehost+"/regup.php";    }
            });
        }
        </script>
 ';
 
 
 
$phpnodeforcomments = ''; 
              
              
              
$to_root = '"../../"';
$phpnodeforcommentposting ='<?php include("../../commentsandposting.php") ?>';
$phpnodefortandl =  ' <trendingspace>
    <div><span id="latestheader">Latest </span></div>
    <br><br>
    <?php  $to_root= '.$to_root.'; include("../../tandl.php") ?>
    <br><br><br> </trendingspace>  ';   







$recieve = $formchecker."".$metas."".$recieve."</body>".$func_logpostviews."</html>";
     $recieve = str_replace("</replacephpnodeforcomments>",$phpnodeforcomments, $recieve);
     $recieve = str_replace("</replacephpnodeforcommentposting>", $phpnodeforcommentposting, $recieve);
     $recieve = str_replace("</replacephpnodefortandl>", $phpnodefortandl, $recieve);
    $recieve = str_replace("</replacescriptnode>", $scriptnode, $recieve);
     $recieve = str_replace(":and:", "&", $recieve);
     $recieve = str_replace(":plus:", "+", $recieve);
      $recieve = str_replace("uploadImg/new", "img/main", $recieve);
      
    function removeInnerH($para1, $para2, $recieve){
            $arrR = explode($para1, $recieve);
            $R1 = $arrR[0];
            $R2 = explode($para2 ,$arrR[1])[1];
            $recieve = $R1."".$R2;
             return $recieve;
    }
   // $recieve = removeInnerH("<script>", "</script>", $recieve);
    //$recieve = removeInnerH("<savetempbut>", "</savetempbut>", $recieve);
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
 $saveIt =
'<?php  require("../../recievecommentsnode.php");  ?> 
<?php
$dirP = "info.json";
if(!file_exists($dirP)){  file_put_contents($dirP, "[]");     }
$filecont = file_get_contents($dirP);
$filecontArr = json_decode($filecont, true);
$cnt = count($filecontArr); 
$key = "";
      $topicname = $filecontArr[\'topicname\'];
      $topicdescription= $filecontArr[\'topicdescription\'];
      $writer =  $filecontArr[\'writer\'];
      $storyTopic= $filecontArr[\'storyTopic\'];
      $savetype =  $filecontArr[\'savetype\'];
      $url= $filecontArr[\'url\'];
      $views= $filecontArr[\'views\'];
      $arrayoftags= $filecontArr[\'arrayoftags\'];
      $arrayofimagessrc= $filecontArr[\'arrayofimagessrc\'];
      $tags = array_reduce($arrayoftags, function($car, $red){ 
                                return $car.", ".$red;
                     });

$dirCont = "content.txt";
if(!file_exists($dirCont)){  file_put_contents($dirCont, "[]");     }
$fromContTxt = file_get_contents($dirCont, true);
?>
 <?php  require("../../metasnode.php");  ?>
 <?php  require("../../metas2node.php");  ?>

 <title> <?php echo $topicname;  ?></title>
 <body    >
 <?php  require("../../bodynode.php");  ?>

  
 
</body>
<?php   
$searchwhat = $topicname;
include("../func_logpostviews.php");
?></html>';
        
        
        
        
        
$infoinarray = array("topicname"=>$topicname, "topicdescription"=>$topicdescription, "writer"=>$writer, "storyTopic"=>$storyTopic, "arrayoftags"=>$arrayoftags, "arrayofimagessrc"=>$arrayofimagessrc, "url"=>$url, "savetype"=>$savetype, "views"=>"$views");
$infoinjson = json_encode($infoinarray);
$contentToTxt = json_decode($_GET["otherNes"], true)["thecontent"];
$blogImgsStore = json_decode($_GET["blogImgsStore"], true);
    
        
        
        if(isset($_GET["dir"])){ 
     $dir =  str_replace(" ", "-", $_GET["dir"]);      
        }     
       
        if(!file_exists($dir)){    
     mkdir($dir, 0775);   
     file_put_contents($dir."/index2.php", $recieve);
     file_put_contents($dir."/index.php", $saveIt);
     echo "New page made: ".$dir;
         }
          
          
         //echo ($_GET['otherNes']."\nContenttotxt: ".$contentToTxt."\n");
     file_put_contents($dir."/index2.php", $recieve);
     file_put_contents($dir."/index.php", $saveIt);
     file_put_contents($dir."/info.json", $infoinjson);
     file_put_contents($dir."/content.txt", $contentToTxt);
     
     //move images
$tempuploadpath = $_GET["tempuploadpath"];

        for($eachIms=0; count($blogImgsStore)>$eachIms; $eachIms++){
$copyimgfrom = "".$tempuploadpath."".$blogImgsStore[$eachIms]["main"];
//../writers/aywriter/uploadimg/
$saveimgto = $dir."/img/".$blogImgsStore[$eachIms]["main"];
// posts/how-to/img/eGTVs.png
if(copy($copyimgfrom, $saveimgto) ){  echo "uploaded blogimg\n"; }
else{ echo "could not upload blogimg";}
        }//EO for
        
           echo "\nPost Location: ".$dir;   
           //echo $recieve;     
           
           
           
           
           
        ?>     