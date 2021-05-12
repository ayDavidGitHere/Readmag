<?php  if(isset($_COOKIE["username"])){ $cookme = $_COOKIE["username"]; }  ?>
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
       $quoteTitle = $_POST["quoteTitle"];
       $quoteDescription = $_POST["quoteDescription"];
       $quote = $_POST["quote"];
       $imageData = $_POST["imageData"];
       $storykey = $_POST["storykey"];
       $storyTopic = $_POST["storyTopic"];
       $writer = str_replace(" ", "",$_POST["writer"]);
       $tags= $_POST["tags"];
       
       $uploadImg = "img/defaultim.png";
       $styleforheaderdivbg = "";   
       $styleforsectdivbg = "";
       $istopicimageset = false;
       
                      if(isset($_FILES["uploadimg"])){
           if ($_FILES["uploadimg"]["error"] == UPLOAD_ERR_OK){
                 $fL2 = "writers/".$writer;
                 if (!file_exists($fL2)){ mkdir($fL2); }
           $folderLocation = "$fL2"."/uploadImg";
           if (!file_exists($folderLocation)){ mkdir($folderLocation); }
     $originalfilename = basename($_FILES["uploadimg"]["name"]);  //ecy.jpg
     $imgExt = pathinfo($originalfilename)["extension"]; //jpg
     $saveimgto = "$folderLocation/"."new.".$imgExt;   // uploadimg/new.jpg
     move_uploaded_file($_FILES["uploadimg"]["tmp_name"],  $saveimgto  );
     $uploadImg =  $saveimgto;
     $styleforheaderdivbg = 
                      'style="background-image: url('.$uploadImg.'); 
      background-repeat: no-repeat;
      background-position: 50% 24%;
      background-color: crimson;
      background-size: cover;
                      "';
     $styleforsectdivbg = 
                      'style="background-image: url('.$uploadImg.');
      background-repeat: no-repeat;
      background-position: 50% 50%;
      background-color: crimson;
      background-size: cover 
                      "';

      $istopicimageset = $saveimgto;
           }//EO not error
                     }//EO if isset
                     
    
    
      $topicname =$quoteTitle;
      $topicdescription= $quoteDescription;
      $writer= $writer;      
      $quote = str_replace("<", "&lt;",$quote);
      $quote = str_replace(">", "&gt;",$quote);
      $quote = str_replace("/H/", "</h2>",$quote);
      $quote = str_replace("/H", "<h2 blogh2> ",$quote);
      $quote = str_replace("/I/", "</i>",$quote);
      $quote = str_replace("/I", "<i blogi> ",$quote);
      $quote = str_replace("/B/", "</b>",$quote);
      $quote = str_replace("/B", "<b blogb> ",$quote);
      $quote = str_replace("\n", "<br>",$quote);
      
     ?>




<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/redpxconstant.css"> 
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/posttemplate.css"> 
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/footer.css"> 
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/commentboxes.css"> 
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/tandldiv.css"> 
   <link rel="shortcut icon"  href="http://<?php print $_SERVER['HTTP_HOST']; ?>/img/mainlogo.png" />
   <meta name="theme-color" content="crimson"/>
 <meta name="title" content="posttitlenode"> <meta name="description" content="postdescriptionode"> <meta name="keywords" content="postkeywordsnode"> <meta name="robots" content="index, follow"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta name="language" content="English"> <meta name="revisit-after" content="1 days"> <meta name="author" content="aydavidgithere">
 <title> posttitlenode</title>
<noscript>Unfortunately, JavaScript must be enabled in your browser</noscript>
    </head>
    
    <body onload="run()">
     <script src="http://<?php print $_SERVER['HTTP_HOST']; ?>/lidsacaebasic.js"></script>
     <script src="http://<?php print $_SERVER['HTTP_HOST']; ?>/js_func/func_uploadims.js"></script>
    <script>
 function run(){
     
     
var sitehost = "http://"+"<?php echo $_SERVER['HTTP_HOST'];   ?>";
var topicname =  "<?php  echo $topicname;     ?>".split(" ").join("%20"); 
var url ="posts/"+topicname;
var urlmod =  sitehost+"/posts/"+topicname;
var urlmod2 = urlmod.split("%20").join("-");
var topicdescription=  "<?php echo $topicdescription; ?>".split(" ").join("%20"); 
var writer = "<?php echo $writer; ?>".split(" ").join("%20").trim();
var arrayofimagessrc = urlmod2+'/img/sample.png'+':itm:'+
                       urlmod2+'/img/sample2.png';
var arrayoftags =  "<?php  echo $tags;  ?>".replace(/ /g, "")
                    .replace(/,/g, ":itm:")     
var password= "qwertyui";
var savetype = '<?php  echo $storykey;  ?>'; 
var istopicimageset =  '<?php  echo $istopicimageset;  ?>'; 
var storyTopic = '<?php  echo $storyTopic;  ?>'; 


  
         $("savebutton").addEventListener("click", function(){
var dir = url;
ajaxer("GET", "savepostinjson.php?topicname="+topicname+"&topicdescription="+topicdescription+"&writer="+writer+"&storyTopic="+storyTopic+"&arrayofimagessrc="+arrayofimagessrc+"&arrayoftags="+arrayoftags+"&url="+urlmod+"&istopicimageset="+istopicimageset+"&savetype="+savetype, function(resp){
                   alert(resp);
                   //$("empty").innerHTML = resp+"";
               });
var save =  "</replacescriptnode>"+(TAGN("export1", 0).innerHTML)+
            "</replacephpnodeforcomments></replacephpnodeforcommentposting></replacephpnodefortandl>"+
             (TAGN("exportlast", 0).innerHTML);   
save = escape(save).replace( /\+/g,  "%2B" );
var theContent =
(TAGN("theContent", 0).innerHTML).replace("contenteditable", "");
var otherNes = JSON.stringify({ thecontent: theContent }); 
ajaxer("GET", "saveposttemplate.php?dir="+dir+"&save="+save
              +"&otherNes="+otherNes, function(resp){
                   alert(resp);
               });   
         })//EO savebutton addEventListener
         
        
        
        
        
        
        
        
        
        
        
        
        
        
        
     var imgStore = [];
    function setImagesByClass(className){  
[].slice.call( CLS(className,"class") ).map(function(classAt, elInd){
classAt.addEventListener('click', function(){ 
    uploadFunc.uplImsClick(function(getImData){ 
           imgStore.push(getImData);
           CLS(className, elInd).src = getImData[0].main;
    }); 
})//EO listener
        })//EO map
    }//EO addToEvent
    
    
        
        
        
         
         
   function tager(replText ,replStart, startTag, replEnd, closeTag ){
var reStart = (new RegExp(replStart, "g") )
replText = replText.replace(reStart,startTag);
var reClose = (new RegExp(replEnd, "g") )
replText = replText.replace(reClose,closeTag);
return replText
         };
    function previewIt(){
var regTextVal = CLS("regulartext", 0).innerHTML; 
regTextVal = tager(regTextVal, "/H ", "<h2 blogh2>", " H/","</h2> ");
regTextVal = tager(regTextVal, "/h ", "<h3 blogh3>", " h/","</h3> ");
regTextVal = tager(regTextVal, "/I ", "<em blogi>", " I/","</em> ");
regTextVal = tager(regTextVal, "/B ", "<strong blogb>", " B/","</strong> ");
regTextVal = tager(regTextVal, "/M ", "<mark blogmark>", " M/","</mark> ");
regTextVal = tager(regTextVal, "/List ", "<ul blogul>", " List/","</ul> ");
regTextVal = tager(regTextVal, "/L ", "<li blogli>", " L/","</li> ")
regTextVal = tager(regTextVal, "/IMG ", "<img blogimg class='blogims' src='img/defaultim.png'>", " IMG/","</img> ");
CLS("regulartext", 0).innerHTML = regTextVal+"";
    }
    function revetIt(){
var regTextVal = CLS("regulartext", 0).innerHTML; 
regTextVal = tager(regTextVal, "<h2 blogh2=\"\">", "/H ", "</h2>", " H/");
regTextVal = tager(regTextVal, "<h3 blogh3=\"\">", "/h ", "</h3>", " h/");
regTextVal = tager(regTextVal, "<em blogi=\"\">", "/I ", "</em>", " I/");
regTextVal = tager(regTextVal,"<strong blogb=\"\">","/B ","</strong>", " B/");
regTextVal = tager(regTextVal,"<mark blogmark=\"\">","/M ","</mark>", " M/");
regTextVal = tager(regTextVal,"<ul blogul=\"\">","/List ","</ul>", " List/")
regTextVal = tager(regTextVal,"<li blogli=\"\">","/L ","</li>", " L/");
//regTextVal = tager(regTextVal,"<img blogimg=\"\" src='img/defaultim.png' class=","/IMG "," ></img>", " IMG/");
CLS("regulartext", 0).innerHTML = regTextVal;
    }
         
        
        
        
    // onload set initial text
var init_Text = 
'/H Guide to write an article. H/<br> Use the /B preview B/ button to see how the article would appear.<br>Use /B revet B/ to return the raw editing.<br>Use the /B clear B/ button to clear the article of all text.'
.concat('<br>/h Markups h/',
'/List ',
'/L Surrond text with "/H" Tags "H/" to make an heading. L/',
'/L Surrond text with "/h" tags "h/" to make a sub-heading. L/',
'/L Surrond with "/B" tags "B/" to make a /B bold B/ text. L/',
'/L Surrond with "/I" tags "I/" to make an /I italic I/ text. L/',
'/L Surrond with "/M" tags "M/" to make an /M marked M/ text. L/',
'/L To make a list: Surrond the whole list with "/List" and "List/" <br>Then Surrond an item with "/L" tags "L/" L/',
' List/'
);
CLS("regulartext", 0).innerHTML = init_Text;
previewIt();



// controls
$("previewContr").addEventListener("click", function(){ 
    previewIt();
    setImagesByClass("blogims")
})  
$("revetContr").addEventListener("click", function(){ 
    revetIt()
})
$("clearContr").onclick = function(){
    var regTextVal = CLS("regulartext", 0).innerHTML; 
    CLS("regulartext", 0).innerHTML = ""
    CLS("regulartext", 0).focus()
}
     
     
    var uploadFunc = new uploadImFunction();





      } //EO run()
      
      



  
  

        
        
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
    <div id="headerDiv" '.$styleforheaderdivbg.'> <hT> <a class="transparentlink" href="http://'.$_SERVER['HTTP_HOST'].'">
        ReadMag  </a> </hT> </div><brk></brk>
    <div class="sect"  '.$styleforsectdivbg.'>
    <tcont> <h1 blogh1><topic> '.$topicname.'</topic></h1>
    </tcont>
    <br> written by <rpx>'.$writer.' </rpx>
    </div>
    <br><br>    
     '; ?>
    
    <thecontent>
    <div class="regulartext" contenteditable >
                    <?php   echo  $quote;    ?>
    </div>
     </thecontent>
    
    
    <br>    <br><br>
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
              
              
              
        print "
        <div id='editingcontrols'>
        <span id='revetContr'> revet</span>
        <span id='clearContr'> Clear All</span>
        <span  id='previewContr'>preview</span>
        </div>
        <br><br><br>
      
      
<input type='file' id='uploadIms' value='Add' accept='image/*' style='display: none' >
        <br><br>

        
        
        
        <div class='viewsDiv'></div>
    <div><span id='commentsHeader'>Comments </span> </div>
    <br><br>
        ";
             
              
              
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
           print '


           <mcontain>
                 
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
    <div><span id="latestheader">New Articles </span></div>
    <br><br>    
    
    
    <?php   include('tandl.php');    ?>
    <?php /*
       $dir = "posts.json";
       if(!file_exists($dir)){  file_put_contents($dir, "[]");     }
       $filecont = file_get_contents($dir);
       $filecontArr = json_decode($filecont, true);
        $cnt = count($filecontArr); 
        for($i=0; $cnt> $i; $i++){
              $tagsspace = "";
              $tags =   $filecontArr[$i]["arrayoftags"];
              $cntT = count($tags);
        for($t=0; $cntT>$t; $t++){  $tagsspace = $tagsspace.'<span class="tags">'.$tags[$t].'</span>';
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
        */
         ?>
    
    <br><br><br>
    </trendingspace>
    
    
    
    
    <savetempbut>
    <div id="savebutton">save</div>
    </savetempbut>

<exportlast>
    <br><br><br>
        <?php   include('footer.php');    ?>
    
        <div id="empty"></div>
</exportlast>
    </body>


    
</html>