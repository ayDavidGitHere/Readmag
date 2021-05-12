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
              
              

       $dir = "../../posts.json";
       if(!file_exists($dir)){  file_put_contents($dir, "[]");     }
       $filecont = file_get_contents($dir);
       $filecontArr = json_decode($filecont, true);
       $cnt = count($filecontArr); 
       $key = "";
        for($i=0; $cnt> $i; $i++){  
$key = array_search(__FILE__, $filecontArr[$i]);  
if($key != ""){  $foundIndex = $i;  break;        }
           }
             if($key == ""){
        print "";
             }   
           else{
$numberofViews =$filecontArr[$foundIndex]["views"];
$filecontArr[$foundIndex]["views"] = $filecontArr[$foundIndex]["views"]+1;
$tojson = json_encode($filecontArr);
//file_put_contents($dir, $tojson);
       print "".$numberofViews;
           }
       
        print "<div class='viewsDiv'> </div>
    <div><span id='commentsHeader'>Comments </span> </div>
    <br><br>
        ";
              
              
              
              $cookme = "anonymousguest";
        if(isset($_COOKIE["username"])){ $cookme = $_COOKIE["username"];   }
        $upvotesvgPlain = file_get_contents("../../img/like.svg");
        $upvotesvg = str_replace('xmlns="http://www.w3.org/2000/svg"', 'class="svgupvote"',$upvotesvgPlain) ;
        $downvotesvgPlain = file_get_contents("../../img/thumbdown3.svg");
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
        <div class="poster" > <img loading="eager" src="../../img/defaultimlast.png" class="posterimage"/>
    <div class="posterinfo" ><p class="postername" >  '.$sender.'</p></div>
    </div>
    <div class="quoteSpace" > <p class="cpText">'. $message. '</p> </div>
    <br0></br0> 
    <div class="upvoteBut" id="upvb'.$att.'" stateUV='.$stateUV.' onclick="unction('.$att.')" >'.$cntUV.''.$upvotesvg.'</div>
     <div class="downvoteBut" id="downvb'.$att.'" stateDV='.$stateDV.' onclick="unction2('.$att.')" >'.$cntDV.''.$downvotesvg.'</div>
    </div>
              </mcontain>';
           }
           
           
           
             
    $cookme = "anonymousguest";
          if(isset($_COOKIE["username"])){ $cookme = $_COOKIE["username"];   }
    $sendsvgPlain = file_get_contents("../../img/send2.svg");
    $sendsvg = str_replace('xmlns="http://www.w3.org/2000/svg"', 'class="svgsend"',$sendsvgPlain) ;
      
        print '
        <containcommposting>
<form id="commentform" method="post" action="#!">
       <div class="contentPager">  
<div class="poster" > <img src="../../img/defaultimlast.png" class="posterimage"/>
<div class="posterinfo" ><p class="postername" >
        '.$cookme.'</p>
</div>
<input type="hidden" value="'.$cookme.'" name="cookme">   
    </div>
       <div class="quoteSpace" >  
       <textarea class="cpText" id="messageTextarea" placeholder="Type Your Comments Here." name="themess" required></textarea>
        </div><br></br>
    <div class="sendBut" id="sendBut" onclick="send()" >    
    <inputsubmitmask><input  type="submit" name="submit"
    id="inputsubmit" hideme>
    </inputsubmitmask>'.$sendsvg.'</div>
    </div><br><br>
    </containcommposting>
 </form>
     ';
     
     //save number of views
     
     
     
     
     ?>