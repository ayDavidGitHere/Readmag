

             var uploadImFunction =   function (){

function timestamp(){
     var dt = new Date(); 
     dt1 = dt.getMinutes(); dt2 = dt.getHours();
     dt3 = dt.getDate(); dt4 = dt.getYear();
     //alert(dt4);
     //return (dt1+","+dt2+","+dt3+","+dt4);
     return dt.toString();
    }



function showIms(uploadtype, tempUploadPath,evt, callback=function(){}){    
 var arrOfImsData = [];
 var files = evt.target.files;
 if (files.length === 0){ console.log('No files selected'); return; }
 
if(uploadtype==="todataurl"){
 var reader = new FileReader();   
 reader.onload = function(event) {  
            var imgIndex = arrOfImsData.length+1;
            var imsInfo = {
                        id:"imsIndex:"+imgIndex,
                        main: event.target.result+"",
                        info: timestamp()+""
                          };
            
            arrOfImsData.push(imsInfo);  
            callback(arrOfImsData);  
 };//EO reader
 reader.readAsDataURL(files[0]);
}
 
 
 if(uploadtype==="fileupload"){ 
     var formData = new FormData();
     formData.append("uploadimg", files[0]);
     formData.append("tempuploadpath", tempUploadPath);
     fetch("../php_func/func_uploadims_temp.php", {
         method: "POST",
         body: formData
     }).then(resp=>resp.text())
       .then( function(resp){  
            var imgIndex = arrOfImsData.length+1;
            var imsInfo = {
                        id:"imsIndex:"+imgIndex,
                        main: resp,
                        info: timestamp()
                          };
            arrOfImsData.push(imsInfo);  
            callback(imsInfo);   
       })
       .catch(function(err){   alert("err: "+ err);       });
 }//EO uploadtype

} //EO showIms 




return{
uplImsClick: function(tempUploadPath,callback = function(){}){    
    $("uploadIms").click();  
    $("uploadIms").onchange = function(evt){   
           showIms("fileupload", tempUploadPath, evt, function(getImData){ 
                   //returns dataurl
                   callback(getImData); 
           }) 
    }//EO onchange
}//EO uplImsClick
}//Eo return
          
              }//EO uploadImFunction
       
       
      
       
            
        
        
        
        
        
        
        


