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
var topicname =  ""+"biggest fashion Brands Agree patership with Federal Government Industries to put me.".split(" ").join("%20"); 
var url ="posts/"+topicname;
var urlmod =  sitehost+"/posts/"+topicname;
var urlmod2 = urlmod.split("%20").join("-");
var topicdescription="This where the description works".split(" ").join("%20"); 
var writer = "RedPx".split(" ").join("%20");
var arrayofimagessrc = urlmod2+'/img/sample.png'+':itm:'+urlmod2+'/img/sample2.png';
var arrayoftags = 'instructions:itm:music:itm:fashion';
var password= "ayboi550";



         $("savebutton").addEventListener("click", function(){
var dir = url;

ajaxer("GET", "savepostinjson.php?topicname="+topicname+"&topicdescription="+topicdescription+"&writer="+writer+"&arrayofimagessrc="+arrayofimagessrc+"&arrayoftags="+arrayoftags+"&url="+urlmod+"&password="+password, function(resp){
                   alert(resp);
                   //$("empty").innerHTML = resp+"";
               });


var save =  (TAGN("export1", 0).innerHTML)+
            "</replacephpnodeforcomments></replacephpnodeforcommentposting></replacephpnodefortandl>"+
             (TAGN("exportlast", 0).innerHTML);   
        
//save =save.replace(/\n/g,"%0A").replace(/&/g,"%26").replace(/#/g,"%23").replace(/ /g, "%20").replace( /\+/g,  "%2B" );   
save = escape(save).replace( /\+/g,  "%2B" )  ;   //alert(escape("\n"));
ajaxer("GET", "saveposttemplate.php?dir="+dir+"&save="+save, function(resp){
                   alert(resp);
                   //$("empty").innerHTML = resp+"";  
               });   


         })//EO savebutton addEventListener
           
           
      
           
      } 
      
      



  

        
        
    </script>
    
    <export1>
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
    <?php
      $topicname ="biggest fashion Brands Agree patership with Federal Government Industries to put me.";
      $topicdescription= "This where the description works";
      $writer= "RedPx";
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
Lorem ipsum dorem sarem ari calum anim enime nonsense i am writing to test the information.
    </div>
    <br><br>
    <h2> This is a list</h2>
    <ul class="regularlist">
        <li class="regularlistitem">A boy</li>
        <li>A girl</li>
    </ul>
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
        $cnt = count($filecont); 
        $tagsspace = "";
        for($i=0; $cnt> $i; $i++){
              $tags =   $filecontArr[$i]["arrayoftags"];
              $cntT = count($tags);
        for($t=0; $cntT>$t; $t++){  $tagsspace = $tagsspace.'<span class="tags">'.$tags[$t].'</span>';
        }
             print '
    <a class="transparentlink" href="'.$filecontArr[$i]["url"].'">
    <div class="divtoothers">
    <div class="imageandtext">
    <p class="ptoothers">'.$filecontArr[$i]["topicname"].'</p>
    <img src="'.$filecontArr[$i]["arrayofimagessrc"][1].'" class="dtoimage"/>
        </div>
     '.$tagsspace.'  
    </div>
    </a>
    <br><br>' ;      unset($tagsspace);
         }
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