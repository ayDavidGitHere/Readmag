<html >
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">


<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/redpxconstant.css"> 
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/redpxmain.css"> 
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/footer.css"> 
   <link rel="shortcut icon"  href="http://<?php print $_SERVER['HTTP_HOST']; ?>/img/mainlogo.png" />
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/tandldiv.css"> 


   <meta name="theme-color" content="rgb(55, 37, 111)"/>
 <meta name="title" content="Read and Write Real-Life, Fiction Stories"> <meta name="description" content="Read and write erotica, sci-fi, fantasy, fiction stories || share your griefs and seek advices from people"> <meta name="keywords" content=" erotica, sci-fi, fantasy, relationship, advices, stories, read, write"> <meta name="robots" content="index, follow"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta name="language" content="English"> <meta name="revisit-after" content="1 days"> <meta name="author" content="aydavidgithere">
 <title >Read or Write Stories, Seek Advice on ReadMag</title>
<noscript>Unfortunately, JavaScript must be enabled in your browser</noscript>
    </head>
    
    <body onload="run()">
<script src="http://<?php print $_SERVER['HTTP_HOST']; ?>/lidsacaebasic.js"></script>
    <script>
   

 function run(){
    
var loadingGif = "<img src='../img/loadinggifbars.gif' class='loadinggif'> </img>";
var selecttypeval = "latest"
var tlSettings = JSON.stringify( {  to_root: "../",
                            loadAllLatestPosts: true,
                            atPageLatest: true  } );
var resetFilter =  JSON.stringify( { f1: ""});


function queryIt(filters){
    ajaxer("GET", siteHost+"/tandl.php?settings="+tlSettings+"&filters="+filters+"&selecttypeval="+selecttypeval, function(resp){
if( !resp.includes("nothingfound") ){ 
        TAGN("spForLatest", 0).innerHTML = (resp);
        TAGN("loadingspace", 0).innerHTML = "";
                }
        }, function(){
              TAGN("loadingspace", 0).innerHTML = ""+loadingGif;
        })
}
     
     
     
     
     
$("searchBox").addEventListener("input", function(){  
        var sVal = $("searchBox").value; 
        var filters = JSON.stringify( { f1: ""+sVal});
        queryIt( filters )
})//EO searchBox

      
      
$("selectlatest").addEventListener("click", function(){  
        Array.prototype.slice.call( CLS("selecttypelist", "class"))
        .map(function(child, val, arr){ 
                  child.setAttribute("selected", "no");
        })
        $("selectlatest").setAttribute("selected", "yes");
        selecttypeval = "latest";
        queryIt(resetFilter);
})
$("selecttrending").addEventListener("click", function(){ 
        Array.prototype.slice.call( CLS("selecttypelist", "class"))
        .map(function(child, val, arr){ 
                  child.setAttribute("selected", "no");
        })
        $("selecttrending").setAttribute("selected", "yes");
        selecttypeval = "trending"; 
        queryIt(resetFilter)
})

       

       
         var func_cssselector = function(classtoselect, eventtype, attribute, callback){
var selectcategoryclass = classtoselect;
var selectcategoryarray = Array.prototype.slice.call(selectcategoryclass);
           selectcategoryarray.map(function(childofclass){
        childofclass.addEventListener(eventtype, function(){
selectcategoryarray.map(function(child, val, arr){ 
                  child.setAttribute(attribute[0], attribute[2]);
                   })
childofclass.setAttribute(attribute[0], attribute[1]);
callback(childofclass.getAttribute("id"));
               })
         });
                                 }//func_cssselector
                                 
                                 
   func_cssselector(  CLS("selectcategorylist", "class"), "click",  ["selectedcategory", "yes", "no"], function(arg){
              $( "h_"+(arg.replace("goto", "")) ).scrollIntoView({behavior: "smooth", block: "start"});
              //$( "h_"+(arg.replace("goto", "")) ).scrollTo(-20)
   })
  










      }//EO run
var siteHost = 'http://'+'<?php  print $_SERVER['HTTP_HOST'];   ?>';

    
        
        
      



  

        
        
    </script>

    <div id="headerDiv"> 
    
          <div  class="logoatsectcontainer" >
              <img  class="logoatsect"  src="../img/defaultim.png" />
           </div>
    <span id="linkatheader" hideme>
    <a class="transparentlink" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/"> HOME  </a>
    </span>    
    
       
    <fixedContainer>
<list id="gotomovies" class="selectcategorylist" selectedcategory="yes">
Movies</list>
&nbsp;
<list id="gotosport" class="selectcategorylist" selectedcategory="no">
Sport
</list>
&nbsp;
<list id="gotomusic" class="selectcategorylist" selectedcategory="no">
Music
</list>
&nbsp;
<list id="gotoentertainment" class="selectcategorylist" selectedcategory="no">
Entertainment
</list>
    <brk></brk>
    </fixedContainer>
    
    
    
    
    </div>
       
       
       


        <br>
    <div class="sect">
        <br></br>
            <about>Browse All Categories of Articles on READMAG</about>
         <br>
    </div>
    <br>
<input type="text" value="" id="searchBox" name="searchBox" placeholder="Search By Keywords">
   <br>
   
    <selecttype>
<list id="selectlatest" class="selecttypelist" selected="yes">Latest</list>
&nbsp;
<list id="selecttrending" class="selecttypelist" selected="no">Trending</list>
    </selecttype>
    <br>
    
     <brk></brk>
    <br>
    <loadingspace>
    </loadingspace>
    <br>
    
    
     
     
<latestspace>
    
    

    
    
    <br>
    <spForLatest>
    <?php   
    $to_root= "../"; 
    $loadAllLatestPosts = true;
    $atPageLatest = true;
    include('../tandl.php');    ?>
     </spForLatest>
    

    <br><br>    <br><br>    <br><br>
    </latestspace>

    
        <?php   include('../footer.php');    ?>
    
    </body>
        
    
</html>  