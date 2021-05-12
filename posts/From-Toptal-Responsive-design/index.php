<?php  require("../../recievecommentsnode.php");  ?> 
<?php
$dirP = "info.json";
if(!file_exists($dirP)){  file_put_contents($dirP, "[]");     }
$filecont = file_get_contents($dirP);
$filecontArr = json_decode($filecont, true);
$cnt = count($filecontArr); 
$key = "";
      $topicname = $filecontArr['topicname'];
      $topicdescription= $filecontArr['topicdescription'];
      $writer =  $filecontArr['writer'];
      $storyTopic= $filecontArr['storyTopic'];
      $savetype =  $filecontArr['savetype'];
      $url= $filecontArr['url'];
      $views= $filecontArr['views'];
      $arrayoftags= $filecontArr['arrayoftags'];
      $arrayofimagessrc= $filecontArr['arrayofimagessrc'];
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
?></html>