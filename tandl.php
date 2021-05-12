    <?php 
    
       $siteUrlFull =($_SERVER['SERVER_PROTOCOL'] === "HTTP/1.1"? "http": "https") ."://".$_SERVER['HTTP_HOST'];
       $arrOfTopics = array("movies", "music", "sport", "entertainment");
       $loadType = "latest";
    
               
    function filterArrInArr($argArr, $sWord){
$newArr = [];
if($sWord === ""){  $newArr= $argArr; }
else{
        foreach($argArr as $arrAtEach){ 
$arrAtEach["arrayoftags"] = 
array_merge($arrAtEach["arrayoftags"],
explode(' ', $arrAtEach["topicname"]),
explode(' ', $arrAtEach["topicdescription"]) );
$key = array_search(  strtolower($sWord),
array_map('strtolower', $arrAtEach["arrayoftags"] )  );
                    if($key !== false){  
                       array_push($newArr, $arrAtEach);
                    }
        }//EO foreach
}//EO else

        return $newArr; 
    }//EO filterArrInArr
                       
               
    function filterArrByTopic($argArr, $sWord){
        $newArr = [];
if($sWord === ""){   $newArr= $argArr; }
else{
        foreach($argArr as $arrAtEach){ 
$key = stripos($arrAtEach["storyTopic"], $sWord); 
if($key !== false){   array_push($newArr, $arrAtEach); }
        }//EO foreach
}//EO else

        return $newArr; 
    }
    
    
    
    function sortByTrending($argArr){
        $newArr = []; $arrOfViews = []; 
foreach($argArr as $arrAtEach){ 
$views = $arrAtEach["views"]; 
array_push($arrOfViews, $views); 
sort($arrOfViews);
        }//EO foreach
foreach($argArr as $arrAtEach){ 
$views = $arrAtEach["views"]; 
$key = array_search($views, $arrOfViews);
$newArr[$key] = $arrAtEach;
        }//EO foreach
        
        //print_r($newArr);
        return $newArr;
    }
    
    
    
    
    
    
    
    
    
    
    $groupPostsStartTag = '<div class="groupPosts">';
    $groupPostsCloseTag = '</div>';
    
      //load settings
       if( isset($_GET["settings"]) ){  
           $settings = json_decode($_GET["settings"], true);
           //$to_root = $settings["to_root"];
           $loadAllLatestPosts = $settings["loadAllLatestPosts"];
           $atPageLatest= $settings["atPageLatest"];
       }
       if( isset($_GET["filters"]) ){  
           $filters = json_decode($_GET["filters"], true);
           $f1 = $filters["f1"]; 
       }
       if( isset($_GET["selecttypeval"]) ){ 
            $loadType = $_GET["selecttypeval"];
        }
         
    
        $sHost =$_SERVER['HTTP_HOST'];
        $styletype = "s2"; //or "s2"
                if($styletype === "s2"){
      print '<link rel="stylesheet" href="http://'.$sHost.'/tandldivs2.css">';
                      }
    
    // Loader from Json.
       $dir = "posts.json";
       if(isset($to_root)){ $dir = $to_root."posts.json"; }
       if(!file_exists($dir)){  file_put_contents($dir, "[]");     }
       $filecont = file_get_contents($dir, true );
       $filecontArr_int = json_decode($filecont, true);
          
    //independent loader.
        foreach ($filecontArr_int as &$eachArr){
            $eachSiteUrl = ltrim($eachArr["url"], " "); //remove first slash
            $eachDir = $eachSiteUrl."/info.json"; 
            $eachDir = urlComparator($eachDir, $_SERVER["PHP_SELF"]);
            $eachDir = ltrim($eachDir, "/\\"); 
             
            $eachViewsDir = $eachSiteUrl."/views.json"; 
            $eachViewsDir = urlComparator($eachViewsDir,$_SERVER["PHP_SELF"]);
            $eachViewsDir = ltrim($eachViewsDir, "/\\"); 
            
            $eachContArr = json_decode(file_get_contents($eachDir), true);
            $eachArr = $eachContArr;
            $eachArr["views"] =count(json_decode(file_get_contents($eachViewsDir), true));
        }
          
       
       
     

          
          
          
          
          
          
             foreach($arrOfTopics as $topic){
                 
    //categorizer
$filecontArr = $filecontArr_int;
if(isset($atPageLatest)){  
    print "<br><topicheader id='h_".$topic."'>".$topic."
     </topicheader><br><br> ";
$filecontArr = filterArrByTopic($filecontArr_int, $topic);
if(isset($_GET["filters"]) ){
    $filecontArr=filterArrInArr($filecontArr, $f1); 
}
if($loadType === "trending" ){ 
    $filecontArr=sortByTrending($filecontArr); 
}
}//EO if atPageLatest // if we are at latest page, categorize it
    
    
    print "$groupPostsStartTag   "; //start categories
       $cnt = count($filecontArr);  
       $nOfP = 2; //number of posts to load.
       if(isset($showNPosts)){ $nOfP=(($cnt>=$showNPosts)?$showNPosts:$cnt); }
       if(isset($loadAllLatestPosts)){ $nOfP = $cnt; }
       

for($i=$cnt-1;  $i>$cnt-1-$nOfP; $i--){
   $tagsspace = "";
   $tags =   $filecontArr[$i]["arrayoftags"];
   $cntT = count($tags);
         for($t=0; $cntT>$t; $t++){ 
               $tagsspace .='<span class="tags">'.$tags[$t].'</span>';
          }  //EO for i
   $nViews = "";
        if(isset($filecontArr[$i]["views"])){
   $nViews = '<span class="tags" viewsspan>'.$filecontArr[$i]["views"].'&nbsp  VIEWS</span><br>';   
         }//EO if
        
        
        
        
        
        
   //Make styles s1 or s2
                if($styletype === "s1"){
print '
   <a class="transparentlink" href="'.$siteUrlFull.$filecontArr[$i]["url"].'">
    <div class="divtoothers">
    <div class="imageandtext">
        <div class="ptoothers"> 
              '.$filecontArr[$i]["topicname"].'<br><tDes>'.$filecontArr[$i]["topicdescription"].' &nbsp- BY '.$filecontArr[$i]["writer"].'
              </tDes>
        </div>
        <div class="dtoimage" >
         <img src="'.$siteUrlFull.$filecontArr[$i]["arrayofimagessrc"][0].'" class="imgInDto"/>
         </div>
    </div>
    <br>
        <div class="tagsdiv">
         '.$nViews.$tagsspace.'  
         </div>
    </div>
    </a>
    <br><br>' ;    
                            }
    
    
    
        
        
        
                if($styletype === "s2"){
print '
    
    <div class="divtoothersS2">
<a class="transparentlink" id="linkred" 
    href="'.$siteUrlFull.$filecontArr[$i]["url"].'">
   <div class="dtoimageS2" >
            <img src="'.$siteUrlFull.$filecontArr[$i]["arrayofimagessrc"][0].'" class="imgInDtoS2"/>

            <div class="ptoothersS2">'.$filecontArr[$i]["topicname"].
                 '<br><brk></brk>
                 <tDesS2>'.$filecontArr[$i]["topicdescription"].'<br>
                         <writer>'.$filecontArr[$i]["writer"].'
                         </writer>'.$nViews.'
                  </tDesS2>
                  <div class="tagsdiv">'.$tagsspace.'</div>
            </div>
    </div>   <!--dtoimages2  -->
</a> 
    </div>
    ' ;    
                    }
    
    

         }//EO for i
print "$groupPostsCloseTag<br><br>";
         
if(!isset($atPageLatest)){ break; } // EO if not at pagelatest, stop
         } //EO foreachtopics
unset($tagsspace);  
         
          

          
               if(!isset($atPageLatest)){
          print '
          <br><br><br>
          <a class="transparentlink" href="http://'.$sHost.'/latest">
          <p class="linkToLatest">
          See All Articles 
          </p>
          </a>  ';
                    }
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
        //helper functions
           function urlComparator($compUrl, $baseUrlPath){
    $compUrlPath = parse_url($compUrl)["path"];
    //$baseUrlPath = $_SERVER["PHP_SELF"];
    $compUrlPathArr = explode("/", $compUrlPath);
    $baseUrlPathArr = explode("/", $baseUrlPath);
    $diff = count($compUrlPathArr)-count($baseUrlPathArr);
        $arr_newPath = [];
        for($i=0; count($compUrlPathArr)>$i; $i++){ 
           if( isset($baseUrlPathArr[$i]) && $compUrlPathArr[$i] === $baseUrlPathArr[$i]){            }
           else{   $arr_newPath[] = $compUrlPathArr[$i];    }
           if( isset($baseUrlPathArr[$i]) && $compUrlPathArr[$i] != $baseUrlPathArr[$i]){   
               array_unshift($arr_newPath, "..");  
           }
        }
              array_shift($arr_newPath);
    $newPath = implode("/", $arr_newPath);
    return $newPath;
           }
           
    //note
    #file_get_contents does not like first slash
           
           
            
         ?>
    