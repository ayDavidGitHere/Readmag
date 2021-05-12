
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
 <meta name="title" content="About Sizzle Text Animation"> <meta name="description" content="How the sizzle text animation works in your web page on your browser."> 
 <meta name="keywords" content=", Sizzle, textanimation"> <meta name="robots" content="index, follow"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta name="language" content="English"> <meta name="revisit-after" content="1 days"> <meta name="author" content="aywriter">
 <title>About Sizzle Text Animation</title>
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
  
    
    <div id="headerDiv" style="background-image: url(writers/aywriter/img/main.png); 
      background-repeat: no-repeat;
      background-position: 50% 24%;
      background-color: rgb(50, 50, 105);
      background-size: cover;
                      "> <ht> <a class="transparentlink" href="http://localhost:8080">
        ReadMag  </a> </ht> </div><brk></brk>
    <div class="sect" style="background-image: url(writers/aywriter/img/main.png);
      background-repeat: no-repeat;
      background-position: 50% 50%;
      background-color: rgb(50, 50, 105);
      background-size: cover 
                      ">
    <tcont> <h1 blogh1=""><topic> About Sizzle Text Animation</topic></h1>
    </tcont>
    <br> written by <rpx>aywriter </rpx>
    </div>
    <br><br>    
         
    <thecontent>
    <div id="regulartext" class="regulartext" contenteditable=""><h2 blogh2="">How to do the sizzle animation .</h2> <br>To to styles to the <mark blogmark="">article, highlight texts</mark> and use the <strong blogb="">buttons</strong>  change their styles.<br><br>The article must be more than 200 words. <br>Use the <strong blogb="">clear</strong>  button to <strong blogb="">clear the article</strong> of all text.</div>
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
$searchwhat = "About Sizzle Text Animation";
include("../func_logpostviews.php");
?></html>