
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
 <meta name="title" content="My Top 20 songs in 2020"> <meta name="description" content="Here is a list of 20 of my favourite songs in the year 2020"> 
 <meta name="keywords" content=", music, top20songs2020"> <meta name="robots" content="index, follow"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta name="language" content="English"> <meta name="revisit-after" content="1 days"> <meta name="author" content="aywriter ">
 <title>My Top 20 songs in 2020</title>
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
  
    
    <div id="headerDiv" style="background-image: url(img/main.jpg); 
      background-repeat: no-repeat;
      background-position: 50% 24%;
      background-color: crimson;
      background-size: cover;
                      "> <ht><a class="transparentlink" href="http://localhost:8080">
        ReadMag  </a> </ht> </div><brk></brk>
    <div class="sect" style="background-image: url(img/main.jpg);
      background-repeat: no-repeat;
      background-position: 50% 50%;
      background-color: crimson;
      background-size: cover 
                      "> 
    <tcont><topic> My Top 20 songs in 2020</topic></tcont>
    <br> written by <rpx>aywriter  </rpx>
    </div>
    <br><br>    
         
    <thecontent>
    <div class="regulartext"><!--
        Lorem ipsum dorem sarem ari calum anim enime nonsense i am writing to test the information.Lorem ipsum dorem sarem ari calum anim enime nonsense i am writing to test the information.<br><br>
Lorem ipsum dorem sarem ari calum anim enime nonsense i am writing to test the information. </div><br><br>
<img src="img/sample.png" class="regularimage"> </img><br>
    <div class="regulartext">
<h1>  This is the header</h1>
Lorem ipsum dorem sarem ari calum anim enime nonsense i am writing to test the information.Lorem ipsum dorem sarem ari calum anim enime nonsense i am writing to test the information.<br><br>
<h2>  This is a header</h2>
Lorem ipsum dorem sarem ari calum anim enime nonsense i am writing to test the information. 
Lorem ipsum dorem sarem ari calum anim enime nonsense i am writing to test the information.Lorem ipsum dorem sarem ari calum anim enime nonsense i am writing to test the information.</div><br><br>
<img src="img/sample2.png" class="regularimage"> </img><br>
    <div class="regulartext">
Lorem ipsum dorem sarem ari calum anim enime nonsense i am writing to test the information.  -->

Here is a list of the biggest songs in2020.
<br>L1.
<br>L2.
<br>L3.
<br>L4    </div>

</thecontent>
    
    
    <commentsandpostingspace>
    <br>    <br><br>
    <?php include("../../commentsandposting.php") ?> 
    </commentsandpostingspace>
    
    <trendingspace><br>
    <div><span id="latestheader">Latest </span></div>
    <br><br>
    <?php  $to_root= "../../"; include("../../tandl.php") ?>
    <br><br><br> 
    <br><br><br>
    </trendingspace>  
    



<div id="thefooter">

                  <p class="itemAtFoot">About ReadMag</p>
                     <p class="storyAtFoot"> <a href=""> </a>
                     </p>
                  <p class="itemAtFoot">Privacy policy</p>
                     <p class="storyAtFoot"> <a href=""></a>
                     </p>
                  <p class="itemAtFoot">Terms of use</p>
                     <p class="storyAtFoot"> <a href=""> </a>
                     </p>
    </div>    
        <div id="empty"></div>
</body><?php   
$searchwhat = "My Top 20 songs in 2020";
include("../func_logpostviews.php");
?></html>