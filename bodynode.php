<script src="http://<?php print $_SERVER['HTTP_HOST']; ?>/lidsacaebasic.js"></script>
 
        <script >
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
function send(){ 
    
}


//create id 
<?php 
    $userId = "uniqId"; //GenerateRandomToken();
    if(isset($_COOKIE["username"] )){  $userId =$_COOKIE["username"]; }
    //setcookie("userId", $userId);
    
?>

//log views (backup for serverside logger)
     TAGN("body", 0).onload = function(){
            setTimeout(function(){
    var loggerUrl = sitehost+"/posts/func_viewslogger.php";
    var currUrl = sitehost+"<?php echo $_SERVER['REQUEST_URI'];   ?>";
    var url_topicname = "<?php echo $topicname; ?>".replace(/ /g, "-");
    var viewer = "<?php echo $userId; ?>";
    
    var formData = new FormData();
    formData.append("URL_topicname", url_topicname);
    formData.append("viewer", viewer);
    
    fetch(loggerUrl,{
           method: "POST",
           body: formData
                 }).then(resp => resp.text() )
                   .then(json => ("; "+json) )
                   .catch(err => console.log("; " +err) );
     }, 2000)//Set Timeout
             } 



        </script>
        <?php  $relativeImagePath = $url."img";  ?>
        
        
        
<section>
        <article>
    <header >
    <div id="headerDiv" 
    style="background-image: url(<?php echo $arrayofimagessrc[0]; ?>); 
      background-repeat: no-repeat;
      background-position: 50% 24%;
      background-color: rgb(22, 19, 55);
      background-size: cover;
                      ">
      <ht><a class="transparentlink" 
           href="http://<?php print $_SERVER['HTTP_HOST']; ?>">
        ReadMag &nbsp;- <?php echo $storyTopic; ?></a>
      </ht> </div><brk></brk>
    <div class="sect" 
     style="background-image: url(<?php echo $arrayofimagessrc[0]; ?>); 
      background-repeat: no-repeat;
      background-position: 50% 50%;
      background-color: rgb(22, 19, 55);
      background-size: cover;
                      ">
    <tcont>
     <h1 blogh1="">
    <topic>
          
          <?php echo $topicname;  ?>
    </topic></h1>
    </tcont>
    <br> written by <rpx> <?php echo $writer;  ?>
    </rpx>
    </div>
    </header>
    <br><br>    
         
     
    <thecontent>
        <main>
 <?php echo $fromContTxt;  ?>
         </main>
     </thecontent>
         
    
    
    <commentsandpostingspace>
    <br>    <br><br>
           <section>
                  <article >
    <?php 
    //include("../../commentsandposting.php");
    ?> 
    
    <?php  
    $commentSender =
    (isset($_COOKIE["username"])?$_COOKIE['username']:"anonymousguest");
    
       
    print "<div class='viewsDiv'> </div>
    <div><span id='commentsHeader'>Comments </span> </div>
    <br><br>
    <div id='commentsSection'>
        ";
    include("comm_system_php.php"); 
    $cspj = new comm_system_php_jsoner("comments_t1.json");
    //$cspj ->sendComment($commentSender, "sending comment", "today_date", json_encode([]), []); 
    $cspj ->loadAllComment( [], true, function($N_sender, $N_message,$N_timestamp, $N_extras, $N_uniqueTok, $N_pathId, $N_parent){
        //$appnd = array_map( function($val){ echo "/$val"; }, $N_pathId);
        print '
        <eachCommentTag>
        <div class="contentPager sub'.count($N_pathId).'"> 
        &nbsp; &nbsp; replying '.$N_parent->sender.'
            <div class="poster" > 
            <img loading="eager" src="../../img/defaultim.png" class="posterimage"/>
                <div class="posterinfo" >
                    <p class="postername" > 
                      '.$N_sender.' &nbsp; '.$N_timestamp.'</p>
                </div>
             </div>
            <div class="commentmessagediv" > 
               <p class="cpText">'. $N_message.'</p>
            </div>
             <div class="replyBut" pathInd="'.json_encode($N_pathId).'" sender="'.$N_sender.'"> Reply
             </div>
        </div>
        </eachCommentTag>';
    }); 
    print '</div>';
    
    $cookme = "anonymousguest";
    if(isset($_COOKIE["username"])){ $cookme = $_COOKIE["username"];   }
    $sendsvgPlain = file_get_contents("../../img/send2.svg");
    $sendsvg = str_replace('xmlns="http://www.w3.org/2000/svg"', 'class="svgsend"',$sendsvgPlain) ;
      
        print '
        <eachCommentTag>
        <div class="contentPager">  
        &nbsp; &nbsp; <replyingwho></replyingwho>
        <div class="poster" > <img src="../../img/defaultim.png" class="posterimage"/>
        <div class="posterinfo" ><p class="postername" >
        '.$cookme.'</p>
        </div>
        <input id="commentSenderElem" type="hidden" value="'.$cookme.'" name="cookme" >   
        </div>
        <div class="quoteSpace" >  
        <textarea class="cpText" id="commentTextarea" placeholder="Type Your Comments Here." name="themess" pathInd="[]" required></textarea>
        </div><br></br>
        <div class="sendBut" id="sendBut" 
        onclick="sendComment()" >    
        <inputsubmitmask><input  type="submit" name="submit"
        id="inputsubmit" hideme>
        </inputsubmitmask>'.$sendsvg.'</div>
        </div><br><br>
        </eachCommentTag>
    
     ';
    
    
    
    ?>
   
   
   
   
   
   
   <script>  
   
   
   function loadComments(){
     var formData = new FormData(); 
     formData.append("new", location+"comments_t1.json");
     //formData.append("loadAllComment", JSON.stringify([[], true]));
     formData.append("loadAllComment", JSON.stringify({loadInd: [], loadChildren: true}) );

     //fetch("/php_func/test_all.php", {
     fetch("/comm_system_php.php", {
         method: "POST",
         body: formData
     })//.then(resp=>resp.text()) 
       .then(resp=>resp.json()) 
       .then( function(resp){  
           alert(resp+"\n"+getAll$Properties(resp) ); 
           
           section = '';
           Object.keys(resp).map(function(keys, ind){
               section += '<eachCommentTag> <div class="contentPager sub'+resp[ind].pathInd.length+'"> &nbsp; &nbsp; replying '+resp[ind].parent.sender+'<div class="poster" > <img loading="eager" src="../../img/defaultim.png" class="posterimage"/><div class="posterinfo" ><p class="postername" >'
                   +resp[ind].sender+'&nbsp; '+resp[ind].timestamp+'</p></div></div><div class="commentmessagediv" > <p class="cpText">'
                   +resp[ind].message+'</p> </div><div class="replyBut" pathInd="'
                   +resp[ind].pathInd+'"  sender="'
                   +resp[ind].sender+'"> Reply</div></div></eachCommentTag>';
           });  //(resp[ind].pathInd)
               $("commentsSection").innerHTML = (section);
               loadCommSettings();
      })
       .catch(function(err){   alert("err: "+ err);       });
      
   }//EO loadAllComment
   
   function sendComment(){  
     var sender = $("commentSenderElem").value;
     var body = $("commentTextarea").value;
     var extras = JSON.stringify({});
     var sendInd = $("commentTextarea").getAttribute("pathInd");
     sendInd = sendInd.replace("[", "").replace("]", "").split(",");
     sendInd.map(function(val){   return Number(val);   });
     if(sendInd[0] == ""){  sendInd = []; }
     
     var formData2 = new FormData(); 
     formData2.append("new", location+"comments_t1.json"); 
     formData2.append("sendComment", JSON.stringify({sender: sender, body: body, extras: extras, sendInd: sendInd}) ); 
     
     //fetch("/php_func/test_all.php", {
     fetch("/comm_system_php.php", {
         method: "POST",
         body: formData2
     }).then(resp=>resp.text()) 
       //.then(resp=>resp.json()) 
       .then( function(resp){  alert(resp)
      })
       .catch(function(err){   alert("err: "+ err);       });  
      loadComments(); 
   }
   
   function loadCommSettings(){  a="";
        getAllElem(CLS("replyBut", "class"), function(elem, ind){ a=elem
           elem.addEventListener("click", function(ev){  setComm(ev); });
        });  
        $("commentTextarea").setAttribute("pathInd", "[]");
        TAGN("replyingwho", 0).innerHTML = "replying "+"post";
   }
   function setComm(ev){ 
       var sendInd = ev.target.getAttribute("pathInd"); 
       sendInd = sendInd.replace("[", "").replace("]", "").split(",");
       sendInd.map(function(val){   return Number(val);   }); 
       var sender = ev.target.getAttribute("sender"); 
       $("commentTextarea").setAttribute("pathInd", sendInd);
       TAGN("replyingwho", 0).innerHTML = "replying "+sender;
   }
   
   //onload
    loadCommSettings();

   
   
   
   
   
   
   
    </script>
    
    
   
   
                   </article>
           </section>
    </commentsandpostingspace>
</article>
</section>
           
           
           
           <section>
                  <article >
                      
                      
    <trendingspace>
    <br><br>
    <div><span id="latestheader">Latest </span></div>
    <br><br>
    <?php  $to_root= "../../"; include("../../tandl.php") ?>
    <br><br><br> 
    <br><br><br>
    </trendingspace>
    
    
                 </article>
           </section>
           
           
           
           
<?php  include("../../footer.php") ?>
        <div id="empty"></div>  