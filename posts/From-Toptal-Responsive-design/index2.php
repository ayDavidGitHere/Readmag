
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
 <meta name="title" content="From Toptal Responsive design"> <meta name="description" content="Learn about Responsive designs."> 
 <meta name="keywords" content=", Toptal, webdevelopment, responsivedesign"> <meta name="robots" content="index, follow"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta name="language" content="English"> <meta name="revisit-after" content="1 days"> <meta name="author" content="aywriter">
 <title>From Toptal Responsive design</title>
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
      background-color: crimson;
      background-size: cover;
                      "> <ht> <a class="transparentlink" href="http://localhost:8080">
        ReadMag  </a> </ht> </div><brk></brk>
    <div class="sect" style="background-image: url(writers/aywriter/img/main.png);
      background-repeat: no-repeat;
      background-position: 50% 50%;
      background-color: crimson;
      background-size: cover 
                      ">
    <tcont> <h1 blogh1=""><topic> From Toptal Responsive design</topic></h1>
    </tcont>
    <br> written by <rpx>aywriter </rpx>
    </div>
    <br><br>    
         
    <thecontent>
    <div class="regulartext" contenteditable=""><div><h2 blogh2="">Learning Responsive design</h2> </div><div><br></div><div>To achieve an optimal user experience as a front-end engineer, your site should adjust its layout in response to these varied devices (i.e., to their varied screen resolutions and dimensions). The process of responding to the form of the user%u2019s device is referred to as (you guessed it) responsive web design (RWD).</div><div><br></div><div>Why is it worth your time to study responsive web design examples and shift your focus to RWD? Some web designers, for example, instead make it their life%u2019s work to ensure a stable user experience across all browsers, often spending days on end addressing small issues with Internet Explorer.</div><div><br></div><div>This is a foolish approach.</div><div><br></div><div>Some web designers spend days on end addressing small issues with Internet Explorer and leave their mobile users as second-hand visitors. This is a foolish approach.</div><div>Mashable called 2013 the year of responsive web design. Why? Over 30% of their traffic comes from mobile devices. They project that this number could reach 50% by the end of the year. Across the web in general, 17.4% of web traffic came from smartphones in 2013. At the same time, Internet Explorer usage, for example, accounts for just 12% of all browser traffic, down about 4% from this time last year (according to W3Schools). If you%u2019re optimizing for a specific browser, rather than the global smartphone population, you%u2019re missing the forest for the trees. And in some cases, this can mean the difference between success and failure%u2014responsive design has implications for conversion rates, SEO, bounce rates, and more.</div><div><br></div><div><h3 blogh3="">The Responsive Web Design Approach</h3> </div><div>What%u2019s commonly glossed over about RWD is that it%u2019s not just about adjusting the appearance of your webpages; instead, the focus should be on logically adapting your site for usage across different devices. For example: using the mouse does not provide the same user experience as, say, the touchscreen. Don%u2019t you agree? Your responsive mobile vs. desktop layouts should reflect these differences.</div><div><br></div><div>At the same time, you don%u2019t want to be completely rewriting your site for each of the tens of different screen sizes on which it might be viewed%u2014such an approach is simply infeasible. Instead, the solution is to implement flexible responsive design elements that use the same HTML code to adjust to the user%u2019s screen size.</div><div><br></div><div>From a technical point of view, the solution lies in this responsive design tutorial: using CSS media queries, pseudo-elements, flexible set grid layouts, and other tools to dynamically adjust to a given resolution.</div><div><br></div><div><h3 blogh3="">Media Queries in Responsive Design</h3> </div><div>Media types first appeared in HTML4 and CSS2.1, which enabled the placement of separate CSS for screen and print. In this way, it was possible to set separate styles for a page%u2019s computer display vis-à-vis its printout.</div><div><br></div></div>
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
$searchwhat = "From Toptal Responsive design";
include("../func_logpostviews.php");
?></html>