<?php  
if(isset($_COOKIE["username"])){ }
else{  header("Location: regup.php");  } 

?>


<html> 
    <head>   <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/redpxconstant.css"> 
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/write.css"> 
<link rel="stylesheet" href="http://<?php print $_SERVER['HTTP_HOST']; ?>/footer.css"> 
   <link rel="shortcut icon"  href="http://<?php print $_SERVER['HTTP_HOST']; ?>/img/mainlogo.png" />



   <meta name="theme-color" content="rgb(55, 37, 111)"/>
 <meta name="title" content="Write an Article on READMAG"> <meta name="description" content="Write sports, fashion, movies and music"> <meta name="keywords" content="write, article, stories"> <meta name="robots" content="index, follow"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta name="language" content="English"> <meta name="revisit-after" content="1 days"> <meta name="author" content="aydavidgithere">
 <title >Read or Write Stories, Seek Advice on RedPx</title>
<noscript>Unfortunately, JavaScript must be enabled in your browser</noscript>
    </head>
<body onload="der()" id="body" class="body">
<script src="lidsacaebasic.js"></script>
    
<script type="text/javascript">

var $ = function(string){
    return document.getElementById(string)
       }
var CLS = function(string, index){    
     return document.getElementsByClassName(string)[index];
}
    
    
function der(){
    try{   
$("date").innerHTML = new Date().toDateString().split(" ").join("-");
var cookme  = "<?php  
if(isset($_COOKIE["username"])){ echo $_COOKIE["username"];}
else{ echo "Guest";  header("Location: regup.php");  } 
?>";

  

    
    function timestamp(){
     var dt = new Date(); 
     dt1 = dt.getMinutes(); dt2 = dt.getHours();
     dt3 = dt.getDate(); dt4 = dt.getYear();
     //alert(dt4);
     return (dt1+","+dt2+","+dt3+","+dt4);
    }
    posterInfo = timestamp();


function showImage(evt) {   
var files = evt.target.files;
    if (files.length === 0) {
         console.log('No files selected');
         return;
     }
var reader = new FileReader();
reader.onload = function(event) {
 var img = new Image(); 
 img.style = "width: 100%";
 img.onload = function() {
            CLS("contentPagerIm", 0).innerHTML = "";
            CLS("contentPagerIm", 0).appendChild(img);
           };
 img.src = event.target.result;
              for(i=0; files.length>i; i++){  
     var imageInfo = event.target.result;
     imageDataT = ""+imageInfo;
     $("hiddenImageData").value = imageDataT
                 } 
};  // end of reader
   
 reader.readAsDataURL(files[0]);
 $("hiddenInfo").value = timestamp();
} //end of showImage
$('upload').addEventListener('change', showImage);







$("storykey").addEventListener("input", function(){
        var sKey = $("storykey").value; 
        ajaxer("GET", "checksavetype.php?storykey="+sKey, function(resp){ 
              if( !resp.includes("keynotexist") ){ 
                var fromJson = JSON.parse(resp);
                $("quoteTitle").value = fromJson.topicname;
                $("quoteDescription").value = fromJson.topicdescription;
                $("tags").value = fromJson.arrayoftags;
                $("storyTopic").value = fromJson.storyTopic;
              }
        })
})//EO storykey
        
        
        
$("storyTopic").addEventListener("input", function(){
        var sTVal = $("storyTopic").value;
});

$("quote").addEventListener("input", function(){
});
        
        
        






      

} catch(e){    alert(""+e)  }

}

    
    




function uplClick(){    $("upload").click();  
}
function uplImsClick(){    $("uploadIms").click();  
}


function quoteonInput(){  
}
function submitonClick(){ 

}














    var posternamephp = ''
    var cnt = 0;
    var posterInfo = ""
    var imageDataT = "";
    







</script>


<div id="everything"> 
  <div id="header" >  <span class="shareAtHeader">
       <a style="text-decoration: none" class="transparentlink"  href="http://<?php print $_SERVER['HTTP_HOST']; ?>" >Your Profile</a> </span>   </div>
<div id="floatingAB_keep"> </div>  


<div id="content">
  
  
  <div id="mainHeadingDiv">
     <p id="date" hideme> </p>
  <div id="mainHeadingTextT" >  <p >  </p>  
	<p >  </p>
  </div>
  <p id="writtenby">       
  <a href="regup.php" class="lnk2" id="linkTR">
  <linkTop id="linkTopRight" hideme> Click To Login </linkTop> 
  </a>
  <blogname id="nameTopRight" ><?php  
if(isset($_COOKIE["username"])){ echo $_COOKIE["username"];}
else{ echo "Guest";  header("Location: regup.php");  } 
  ?> </blogname>
  </p>
  </div>
  
  
      
      <br>
      <h2>  How To Write An Article on READMAG     </h2>
      <ul>
          <listStyle>
          <li> Click the "Add Story Picture" to add a background to your article</li>
          <li> Input your story key. This is the password to the story. </li>
          <li> Select Category</li>
          <li> Fill Story Title, Description and Body</li>
          <li> Add Tags to improve story visibility</li>
          </listStyle>
      </ul>
      <hide hideme>
      <h3 >Guides</h3>
      <p>Begin subheadings with <b>/H</b> and end with <b>/H/</b>  </p>
       &nbsp; <i>e.g: <b>/H</b> Step 3 <b>/H/</b>      </i>
      <p>Begin quotes with <b>/Q</b> and end with <b>/Q/</b>  </p>
       &nbsp;  <i>e.g: With the <b>/Q</b> barcudas <b>/Q/</b> </i>
      <p>Begin italics with <b>/I</b> and end with <b>/I/</b>  </p>
       &nbsp; <i>e.g: With the <b>/I</b> barcudas <b>/I/</b>      </i>
      <br><br>
      </hide>
      
      
<div class="contentPagerIm"   onclick="uplClick()">   <tohide> 
	  <p class="cpText" > Upload Article Main Picture
<svg class="svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 489.8 489.8" style="enable-background:new 0 0 489.8 489.8;" xml:space="preserve"><g><g>
		<path d="M438.2,0H51.6C23.1,0,0,23.2,0,51.6v386.6c0,28.5,23.2,51.6,51.6,51.6h386.6c28.5,0,51.6-23.2,51.6-51.6V51.6
			C489.8,23.2,466.6,0,438.2,0z M465.3,438.2c0,14.9-12.2,27.1-27.1,27.1H51.6c-14.9,0-27.1-12.2-27.1-27.1V51.6
			c0-14.9,12.2-27.1,27.1-27.1h386.6c14.9,0,27.1,12.2,27.1,27.1V438.2z"/>
		<path d="M337.4,232.7h-80.3v-80.3c0-6.8-5.5-12.3-12.3-12.3s-12.3,5.5-12.3,12.3v80.3h-80.3c-6.8,0-12.3,5.5-12.3,12.2
			c0,6.8,5.5,12.3,12.3,12.3h80.3v80.3c0,6.8,5.5,12.3,12.3,12.3s12.3-5.5,12.3-12.3v-80.3h80.3c6.8,0,12.3-5.5,12.3-12.3
			C349.7,238.1,344.2,232.7,337.4,232.7z"/></g></g><g></g><g></g>
<g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
    </p>                    </tohide>
    
</div>  

      


  <div class="contentPager" id="shareBox">
 <div class="poster" ><img src="img/defaultim.png" class="posterimage"/>
 <div class="posterinfo" >
     <p class="postername" ><?php  
if(isset($_COOKIE["username"])){ echo $_COOKIE["username"];}
else{ echo "Guest";  header("Location: regup.php");  } 
  ?> </p>
     
     </div>
 </div> 
       <form action="posttemplate.php" method="post"  enctype="multipart/form-data">
	  <input type="file" id="upload" value="Add" accept="image/*" style="display: none" name="uploadimg">
<p id="labelQuote" ></p>
<br>
<input type="text" value="" id="storykey" name="storykey" placeholder="input storykey" required>
<brk></brk>
<select type="text" value="" id="storyTopic" name="storyTopic" required>
      <option value="sport">Sport</option>
      <option value="fashion">Fashion</option>
      <option value="entertainment">Entertainment</option>
      <option value="music">Music</option>
      <option value="movies">Movies</option>
</select>
<textarea type="text" value="" id="quoteTitle" class="putText" name="quoteTitle" oninput="quoteonInput()" placeholder="Story Title." required></textarea>
<textarea type="text" value="" id="quoteDescription" class="putText" name="quoteDescription" oninput="quoteonInput()" placeholder="Story Description" required></textarea>
<textarea type="text" id="quote" class="putText" name="quote" oninput="quoteonInput()" value="Edit Article Body" hideme>
Edit Article Body
  
</textarea>
<p id="labelTags" ></p>
<input type="text" value="" id="tags" name="tags" placeholder="Add Tags seperated by commas." required>
   
<input type="hidden" value="emptyIm" id="hiddenImageData" name="imageData" >
<input type="hidden" value="emptyInfo" id="hiddenInfo" name="info">
<input type="hidden" value='<?php  
if(isset($_COOKIE["username"])){ echo $_COOKIE["username"];}
else{ echo "Guest";  header("Location: regup.php");  } 
  ?> ' id="hiddenWriter" name="writer" >


<br>
  <input type="submit" onclick="submitonClick()" value="preview" name="submit"  class="cpBut"> 
	<!--<span class="cpBut"> <a class="lnk2" >Share</a>  </span> -->
	</form>
  </div>
  

  
  <br><br><br>  <br><br><br>
  
        
  <div  id="lastDiv" hideme>
	<span style="float:left" >  <a href="" class="lnk2"> Profile   </a></span>
	<span >  <a href=""  class="lnk2"> Settings </a></span>
	<span     style="float:right" >  <a href="" class="lnk2"> Terms  </a></span>
	
  </div>
    
    

      
      
    
    
    
    
    

    
    
</div>


</div>   <!-- end of everything-->

    

    </body>
</html>










