<html >
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">


<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/redpxconstant.css"> 
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/redpxmain.css"> 
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/footer.css"> 
   <link rel="shortcut icon"  href="http://<?php print $_SERVER['HTTP_HOST']; ?>/img/mainlogo.png" />
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/tandldiv.css"> 


   <meta name="theme-color" content="rgb(55, 37, 111)"/>
 <meta name="title" content="Read Articles on Various Topics on ReadMag"><meta name="description" content="Read and write erotica, sci-fi, fantasy, fiction stories || share your griefs and seek advices from people"> <meta name="keywords" content=" erotica, sci-fi, fantasy, relationship, advices, stories, read, write"> <meta name="robots" content="index, follow"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta name="language" content="English"> <meta name="revisit-after" content="1 days"> <meta name="author" content="aydavidgithere">
 <title >Read Articles on Various Topics on ReadMag</title>
<noscript>Unfortunately, JavaScript must be enabled in your browser</noscript>
    </head>
    
    <body onload="run()">
     <script src="lidsacaebasic.js"></script>
    <script>
 function run(){

      }
      
      



  

        
        
    </script>

    <div id="headerDiv"> 
    
          <div  class="logoatsectcontainer" >
<a class="transparentlink" href="http://<?php print $_SERVER['HTTP_HOST']; ?>">
<img class="logoatsect"
src="http://<?php print $_SERVER['HTTP_HOST']; ?>/img/defaultim.png"/>
</a>
           </div>
    <span id="linkatheader" hideme>
    <a class="transparentlink" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/write.php"> 
        Write   </a>
    </span>    
    </div>

    
    <div class="sect">
         <rpx>READMAG </rpx><br>    <br10></br10><brk></brk>
            <about>Read Articles on various topics on readmag!</about>
         <br><br>MUSIC, SPORTS, FASHION
    </div>
    <br><br>    
   
     <br><br>
     <br><br>

    <latestspace>
    <div><span class="regheader">New Articles   </span></div>
    <br><br>
    <?php   
    $showNPosts = 4;
    include('tandl.php');   
    ?>
    <br><br>    <br><br>    <br><br> 
    </latestspace>
    
    
    <latestspace>
    <div><span class="regheader">Top Writers  </span></div>
    <br><br>
    <?php   
    $showNWriters = 4;
    include('php_func/func_writers.php');   
    ?>
    
    <br><br>    <br><br>    <br><br> 
    </latestspace>
    
    
    
    <trendingspace hideme>    </trendingspace>
    
        <?php   include('footer.php');    ?>
    
    </body>
        
    
</html>  