


function $(string){
          return  document.getElementById(string);
}
function CLS(string, index){
     if(typeof index == "number"){
          return  document.getElementsByClassName(string)[index];
      }
     if(index == "length"){
         return  document.getElementsByClassName(string).length;    
      }
     if(index == "class"){ 
         return  document.getElementsByClassName(string);
     }
}
function TAGN(string, index){ 
     if(typeof index == "number"){
          return  document.getElementsByTagName(string)[index];
      }
     if(index == "length"){
         return  document.getElementsByTagName(string).length;    
      }
     if(index == "class"){ 
        return  document.getElementsByTagName(string);
     }
}//EO tagn
function getAllElem( elementsBy, callback ){
[].slice.call( elementsBy ).map( function(elementAt, elementInd){
       callback(elementAt, elementInd);
});  
}



















///HTTP 

function ajaxer(type, phpAddress, callback, callbackYet=function(){} ){
var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
     
if (xmlhttp.readyState == 4 ){
    if (xmlhttp.status == 200) {
          callback(xmlhttp.responseText);
    }
}
    else{
           callbackYet();
    }
     
 
 };
 xmlhttp.open(type, phpAddress, true);
 xmlhttp.send();
             }
             
             
             
             
             
             
             
             
             
             
             
             
      
function wordCount( val ){
 var wom = val.match(/\S+/g);
 return {
 charactersNoSpaces : val.replace(/\s+/g, '').length,
 characters : val.length,
 words : wom ? wom.length : 0,
 lines : val.split(/\r*\n/).length
 };
}
// Use like:







//Element utils
              var adjustTextArea = function(theTextArea, fontSize){
theTextArea.addEventListener("input", function(){ 
       var textAreaV = theTextArea.value; 
       var nOfCols = theTextArea.cols
       var tALen = textAreaV.length;
       var defaultHeight = 0;
       
       var wordsLines = (wordCount( textAreaV ).lines)-1;
       var rows = (theTextArea.rows)-1;
       var rows2 = 1+Math.ceil( textAreaV.length/nOfCols );
       var newHeight = defaultHeight+(wordsLines*fontSize)+(rows2*fontSize);
       
       theTextArea.style= "height: "+newHeight+"px;";
       //TAGN("rpx", 0).innerHTML = nOfCols+"; "+rows2+"; "+newHeight+"; "
     
     return{
           info: function(){ return "first release: buggy"; }
          }
} )
              }
           
             
             
             
             
             
             
             
             
             
function getAll$Properties(obj, props = []){
 return obj == null ? props :
 getAll$Properties(Object.getPrototypeOf(obj),
 props.concat(Object.getOwnPropertyNames(obj)));
}
     
             
             
             
             
             