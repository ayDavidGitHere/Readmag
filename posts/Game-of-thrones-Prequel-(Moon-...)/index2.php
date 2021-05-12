
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
 <meta name="title" content="Game of thrones Prequel (Moon ...)"> <meta name="description" content="The release of the prequel of GOT"> 
 <meta name="keywords" content=", Movies, GOT, gameofthrones, TV"> <meta name="robots" content="index, follow"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta name="language" content="English"> <meta name="revisit-after" content="1 days"> <meta name="author" content="aywriter">
 <title>Game of thrones Prequel (Moon ...)</title>
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
    <tcont> <h1 blogh1=""><topic> Game of thrones Prequel (Moon ...)</topic></h1>
    </tcont>
    <br> written by <rpx>aywriter </rpx>
    </div>
    <br><br>    
         
    <thecontent>
    <div id="regulartext" class="regulartext" contenteditable=""><h2 blogh2="">About GOT prequel.</h2> <br>No stylists. <h2 blogh2="">New stylists</h2> <br>Use <strong blogb="">revet</strong>  to return the raw editing.<br>Use the <strong blogb="">clear</strong>  button to <i blogi=""><img blogimg="" class="blogims" src="img/defaultimlast.png">clear</i> the article of all text.</div>
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
     <a class="transparentlink" href="HTTP://localhost:8080/about">
                  <p class="itemAtFoot">About ReadMag</p>
                     </a><p class="storyAtFoot"><a class="transparentlink" href="HTTP://localhost:8080/about"> </a><a href=""> </a>
                     </p>  
                 
     <a class="transparentlink" href="HTTP://localhost:8080/privacy-policy">
                  <p class="itemAtFoot">Privacy policy</p>
                     </a><p class="storyAtFoot"><a class="transparentlink" href="HTTP://localhost:8080/privacy-policy"> </a><a href=""></a>
                     </p>
                  
     <a class="transparentlink" href="HTTP://localhost:8080/terms-of-use">
                  <p class="itemAtFoot">Terms of use</p>
                     </a><p class="storyAtFoot"><a class="transparentlink" href="HTTP://localhost:8080/terms-of-use"> </a><a href=""> </a>
                     </p> 
                
         </footer>
    </div>    
        <div id="empty"></div>
</body><?php   
$searchwhat = "Game of thrones Prequel (Moon ...)";
include("../func_logpostviews.php");
?></html>