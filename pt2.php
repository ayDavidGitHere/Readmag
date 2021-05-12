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

header("Location: ");
echo '';

}//EO if message exist
    

?>   
    
<html >
<?php  
     
      $topicname ="Davido Breaks Down Over BodyGuard's Death!";
      $topicdescription= "Davido's Bodyguard Tijani dies and Davido Breaks Down Over It";
      $writer= "RedPx";
     

?>




<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/redpxconstant.css"> 
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/posttemplate.css"> 
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/footer.css"> 
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/commentboxes.css"> 
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/tandldiv.css"> 
   <link rel="shortcut icon"  href="http://<?php print $_SERVER['HTTP_HOST']; ?>/img/mainlogo.png" />
   <meta name="theme-color" content="firebrick"/>
 <meta name="title" content="posttitlenode"> <meta name="description" content="postdescriptionode"> <meta name="keywords" content="postkeywordsnode"> <meta name="robots" content="index, follow"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta name="language" content="English"> <meta name="revisit-after" content="1 days"> <meta name="author" content="aydavidgithere">
 <title> posttitlenode</title>
<noscript>Unfortunately, JavaScript must be enabled in your browser</noscript>
    </head>
    
    <body onload="run()">
     <script src="http://<?php print $_SERVER['HTTP_HOST']; ?>/lidsacaebasic.js"></script>
    <script>
 function run(){
     

var sitehost = "http://"+"<?php echo $_SERVER['HTTP_HOST'];   ?>";
var topicname =  "<?php echo  $topicname;  ?>".split(" ").join("%20"); 
var topicid1 = "davBreOver"; var topicid2 = "";
var url ="posts/"+topicname;
var urlmod =  sitehost+"/posts/"+topicname;
var urlmod2 = urlmod.split("%20").join("-");
var topicdescription="<?php echo  $topicdescription;  ?>".split(" ").join("%20"); 
var writer = "RedPx".split(" ").join("%20");
var arrayofimagessrc = urlmod2+'/img/sample.png'+':itm:'+urlmod2+'/img/sample2.png';
var arrayoftags = 'davido:itm:bodyguard:itm:dies:itm:breakdown';
var password= "ayboi550";
var savetype = "12345"; 


  
         $("savebutton").addEventListener("click", function(){
var dir = url;
    
ajaxer("GET", "savepostinjson.php?topicname="+topicname+"&topicdescription="+topicdescription+"&writer="+writer+"&arrayofimagessrc="+arrayofimagessrc+"&arrayoftags="+arrayoftags+"&url="+urlmod+"&savetype="+savetype, function(resp){
                   alert(resp);
                   //$("empty").innerHTML = resp+"";
               });


var save =  "</replacescriptnode>"+(TAGN("export1", 0).innerHTML)+
            "</replacephpnodeforcomments></replacephpnodeforcommentposting></replacephpnodefortandl>"+
             (TAGN("exportlast", 0).innerHTML);   
        alert(escape(","));
//save =save.replace(/\n/g,"%0A").replace(/&/g,"%26").replace(/#/g,"%23").replace(/ /g, "%20").replace( /\+/g,  "%2B" );   
save = escape(save).replace( /\+/g,  "%2B" ); 
ajaxer("GET", "saveposttemplate.php?dir="+dir+"&save="+save, function(resp){
                   alert(resp);
               });   


         })//EO savebutton addEventListener
           
           
      
           
      } 
      
      



  

        
        
    </script>

        </replacescriptnode>
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
        
    
    <export1>
    <?php
    print '
    <div id="headerDiv"> <a class="transparentlink" href="http://'.$_SERVER['HTTP_HOST'].'">
        RedPx   </a></div><brk></brk>
    <div class="sect"> 
    <topic> '.$topicname.'</topic> 
    <br> written by <rpx>'.$writer.' </rpx>
    </div>
    <br><br>    
     '; ?>
    
    <thecontent>
    <div class="regulartext">
        The personal bodyguard of David Adeleke a.k.a Davido is dead. He died on Tuesday. Sharing the sad news in his twitter @davido, the musician said “Please tell me I am dreaming…my Tj gone? What imma do without you uncle Tj ehn…11 years you did all for me.
<br><br>"
“Put me before you at all times, all the times I wouldn’t wanna wake up for a show or flight you’d carry me like a baby in the car.
<br><br>
“No matter what I did right or wrong, you were there for me, to allow me spend money sometimes nah problem.


 
<br><br>
“Everytime, ‘david don’t worry I’ll use my card’, you were such a big person with a baby heart. Everyone loves you, I wanna wake up late for a show so you’d come and carry me again.
<br>
“I don’t even know what I am typing man…RIP UNCLE TIJANI..tired of being ‘Strong’.
<br><br><br>
Davido, though did not made an official announcement on Tuesday as the news went viral on social media but shared a post on social media indicating he was heartbroken.
<br><br>
Another member of his crew, Aloma of Davido Music Worldwide (DMW), also confirmed the bodyguard’s death on his IG page.
<br><br>
Fans have since expressed condolences to the music star.
    </div>
    
</thecontent>
    
    
    <br>    <br><br>
    <div><span id="commentsHeader">Comments </span> </div>
    <br><br>
    </export1>
    </replacephpnodeforcomments>
              <?php
              function filter__Arr($tempArray){
                  $newArr = array();
                  $cnt = count($tempArray);
          for($i=0; $cnt>$i; $i++){
              $cntUV =  count( $tempArray[$i]["upvote"] );
              $cntDV =  count( $tempArray[$i]["downvote"] );
                           if($cntUV+$cntDV>3){
                                array_push($newArr, $tempArray[$i] );
                           }//EO if
           }//EO for
                          return $newArr;
              }//EO filter__Arr
              
              
              $baseurl =  ""; //"http://".$_SERVER["HTTP_HOST"]."/";
              $cookme = "anonymousguest";
        if(isset($_COOKIE["username"])){ $cookme = $_COOKIE["username"];   }
        $upvotesvgPlain = file_get_contents($baseurl."img/like.svg");
        $upvotesvg = str_replace('xmlns="http://www.w3.org/2000/svg"', 'class="svgupvote"',$upvotesvgPlain) ;
        $downvotesvgPlain = file_get_contents($baseurl."img/thumbdown3.svg");
        $downvotesvg = str_replace('xmlns="http://www.w3.org/2000/svg"', 'class="svgdownvote"',$downvotesvgPlain) ;
            
            
            $dir = "comments.json";
            if(!file_exists($dir)){ file_put_contents($dir, "[]");    }
            $inp = file_get_contents($dir, true);
            $tempArray =  json_decode($inp, true) ;
            $cnt = count($tempArray);
        


           for($i=$cnt-1; $i>-1; $i--){
                  $sender = "".$tempArray[$i]["sender"];
                  $message = "".$tempArray[$i]["message"];
                  $att = "".$i;
                  
                  $theArrayUV = $tempArray[$i]["upvote"];   
                  $cntUV = count($theArrayUV)-1;
                  $key = in_array($cookme, $theArrayUV);
                  $adderor = 0;
                  if($key === true){  $stateUV = "voted";   }
                  else{  $stateUV = "nvoted";  }
                  
                  $theArrayDV = $tempArray[$i]["downvote"];   
                  $cntDV = count($theArrayDV)-1;
                  $keyDV = in_array($cookme, $theArrayDV);
                  $adderor = 0;
                  if($keyDV === true){  $stateDV = "voted";   }
                  else{  $stateDV = "nvoted";  }
           print '<mcontain>
                 
           <div class="contentPager">  
        <div class="poster" > <img loading="eager" src="'.$baseurl.'img/plainmb.png" class="posterimage"/>
    <div class="posterinfo" ><p class="postername" >  '.$sender.'</p></div>
    </div>
    <div class="quoteSpace" > <p class="cpText">'. $message. '</p> </div>
    <br0></br0> 
    <div class="upvoteBut" id="upvb'.$att.'" stateUV='.$stateUV.' onclick="unction('.$att.')" >'.$cntUV.''.$upvotesvg.'</div>
     <div class="downvoteBut" id="downvb'.$att.'" stateDV='.$stateDV.' onclick="unction2('.$att.')" >'.$cntDV.''.$downvotesvg.'</div>
    </div>
              </mcontain>';
           }
           
           
           
              ?> 
        </replacephpnodeforcommentposting>
        
        <?php 

    $cookme = "anonymousguest";
          if(isset($_COOKIE["username"])){ $cookme = $_COOKIE["username"];   }
    $sendsvgPlain = file_get_contents("img/send2.svg");
    $sendsvg = str_replace('xmlns="http://www.w3.org/2000/svg"', 'class="svgsend"',$sendsvgPlain) ;
      
        print'
        <form  method="post" action="#!">
       <div class="contentPager">  
<div class="poster" > <img src="img/plainmb.png" class="posterimage"/>
<div class="posterinfo" ><p class="postername" >
        '.$cookme.'</p>
</div>
<input type="hidden" value="'.$cookme.'" name="cookme">   
    </div>
       <div class="quoteSpace" >  
       <textarea class="cpText" id="messageTextarea" placeholder="Type Your Comments message here." name="themess"></textarea>
        </div><br></br>
    <div class="sendBut" id="sendBut" >    
    <inputsubmitmask><input  type="submit" name="submit" id="inputsubmit">
    </inputsubmitmask>'.$sendsvg.'</div>
    </div><br><br>
 </form>
     '  ?>
     
     
     
        </replacephpnodefortandl>
    <trendingspace>
    <div><span id="latestheader">Trending </span></div>
    <br><br>
    
    <?php 
       $dir = "posts.json";
       if(!file_exists($dir)){  file_put_contents($dir, "[]");     }
       $filecont = file_get_contents($dir);
       $filecontArr = json_decode($filecont, true);
        $cnt = count($filecontArr); 
        
        for($i=0; $cnt> $i; $i++){
              $tagsspace = "";
              $tags =   $filecontArr[$i]["arrayoftags"];
              $cntT = count($tags);
        for($t=0; $cntT>$t; $t++){
            $tagsspace = $tagsspace.'<span class="tags">'.$tags[$t].'</span>';
        }  
             print '
    <a class="transparentlink" href="'.$filecontArr[$i]["url"].'">
    <div class="divtoothers">
    <div class="imageandtext">
    <p class="ptoothers">'.$filecontArr[$i]["topicname"].'</p>
    <img src="'.$filecontArr[$i]["arrayofimagessrc"][0].'" class="dtoimage"/>
        </div>
     '.$tagsspace.'  
    </div>
    </a>
    <br><br>' ;
         }
      unset($tagsspace);
         ?>
    
    <br><br><br>
    </trendingspace>
    
    
    
    
    <savetempbut>
    <div id="savebutton">save</div>
    </savetempbut>

<exportlast>
    <br><br><br>
    <div id="thefooter">

                  <p class="itemAtFoot">About RedPx</p>
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
</exportlast>
    </body>


    
</html>