
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
echo '';

}//EO if message exist

    

?><?php  include("../../metasnode.php");  ?>
 <meta name="title" content="How to ignore people."> <meta name="description" content="Here are five guides to ignoring people"> 
 <meta name="keywords" content=", General, life, people"> <meta name="robots" content="index, follow"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta name="language" content="English"> <meta name="revisit-after" content="1 days"> <meta name="author" content="aywriter">
 <title>How to ignore people.</title>
 <body    >
<script src="http://<?php print $_SERVER['HTTP_HOST']; ?>/lidsacaebasic.js"></script>
 
        <script>
        var sitehost = "http://"+"<?php echo $_SERVER['HTTP_HOST'];   ?>";
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
  
    
    <div id="headerDiv" style="background-image: url(writers/aywriter/img/main.jpeg); 
      background-repeat: no-repeat;
      background-position: 50% 24%;
      background-color: rgb(50, 50, 105);
      background-size: cover;
                      "> <ht> <a class="transparentlink" href="http://localhost:8080">
        ReadMag  </a> </ht> </div><brk></brk>
    <div class="sect" style="background-image: url(writers/aywriter/img/main.jpeg);
      background-repeat: no-repeat;
      background-position: 50% 50%;
      background-color: rgb(50, 50, 105);
      background-size: cover 
                      ">
    <tcont> <h1 blogh1=""><topic> How to ignore people.</topic></h1>
    </tcont>
    <br> written by <rpx>aywriter </rpx>
    </div>
    <br><br>    
         
    <thecontent>
    <div id="regulartext" class="regulartext" contenteditable=""><h2 blogh2="">&nbsp; &nbsp; &nbsp;Here is how to ignore people.&nbsp;&nbsp;</h2> <div>People all over the world tends to annoy you all the time, leading you into frustration among other things. Here is how to effectively ignore them.</div><div><h3 blogh3="">Steps to ignoring people</h3> </div><div>1. Be yourself.</div><div>2. Love yourself.</div><div>3. Cuddle yourself.</div><div><br></div><div>Picture prove.&nbsp;</div></div>
     </thecontent>
    
    
    <br>    <br><br>
    <?php include("../../commentsandposting.php") ?> <trendingspace>
    <div><span id="latestheader">Latest </span></div>
    <br><br>
    <?php  $to_root= "../../"; include("../../tandl.php") ?>
    <br><br><br> </trendingspace>  
    <br><br><br>
        <div id="thefooter">
        <footer>
                  <p class="itemAtFoot">
<a class="transparentlink" href="HTTP://localhost:8080/about">About ReadMag </a>
                     </p><p class="storyAtFoot"> <a href=""> </a></p>  
                   <p></p>
     

     
                  <p class="itemAtFoot">
<a class="transparentlink" href="HTTP://localhost:8080/privacy-policy"> Help </a>
                     </p><p class="storyAtFoot"> <a href=""> </a></p>  
                   <p></p>
                   
     
                  <p class="itemAtFoot">
<a class="transparentlink" href="HTTP://localhost:8080/privacy-policy">Privacy Poilcy and Terms of Use </a>
                     </p><p class="storyAtFoot"> <a href=""> </a></p>  
                   <p></p>
                   
                   
                   Copyright  2021
                   
         </footer>
    </div>    
        <div id="empty"></div>
</body><?php   
$searchwhat = "How to ignore people.";
include("../func_logpostviews.php");
?></html>