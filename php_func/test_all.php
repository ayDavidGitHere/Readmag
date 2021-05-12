<?php


function json_encode_private($object) {

    function extract_props($object) {
        $public = [];

        $reflection = new ReflectionClass(get_class($object));

        foreach ($reflection->getProperties() as $property) {
            $property->setAccessible(true);

            $value = $property->getValue($object);
            $name = $property->getName();

            if(is_array($value)) {
                $public[$name] = [];

                foreach ($value as $item) {
                    if (is_object($item)) {
                        $itemArray = extract_props($item);
                        $public[$name][] = $itemArray;
                    } else {
                        $public[$name][] = $item;
                    }
                }
            } else if(is_object($value)) {
                $public[$name] = extract_props($value);
            } else $public[$name] = $value;
        }

        return $public;
    }

    return json_encode(extract_props($object));
}









$testVal = new stdClass();
$testVal->method = "method1";
class testClass{// implements jsonSerializable{
    private $innerPrivProp = "innerPrivPropValue";
    public $innerPubProp = "innerPubPropValue";
    public $innerMeth;
    function __construct($classArg){
        $constructed = true;
        $this->innerMeth = function (){
            return "innerMeth is called¿";
        };
    }
    public function jsonSerialize() {
         return [
         //'innerPubProp' => $this->innerPubProp,
         'innerMethod' => $this->innerMethod(),
         'innerMeth' => $this->innerMeth
                 ];
    }
    public function innerMethod(){
         return "innerMethod is called¿";
    }//EO
    
    public function innerMeth(){
        return "innerMeth is called¿";
    }
    
    

}//EO class
//$testVal = new testClass("innerClass");





class cspj{
    function __construct($fileDir){
        
    }
    public $a = 0;
    public function loadAllComment($pathId, $loadChildren, $callBack){
        $a = $this->a;
        $this->a++;
        $callBack("senderCb", "messageCb", [0], []);
        if($a<7) $this->loadAllComment($pathId, $loadChildren, $callBack);
    }
}
    
    
    
    
    
    
    
    
    
    
    
    /*
if(isset($_POST["new"])){   
    //trying to send back class with properties wnd method - fail
    header("Content-Type: application/json");
    $saveToUrl = $_POST["new"];
    $cspj = new testClass($saveToUrl); 
    $resultsInJson = json_encode($cspj); 
    print_r($cspj);
    print("\n".$cspj ->innerMethod()."\n\n"); 
    print_r($resultsInJson); 
    print("\n".json_decode($resultsInJson)->innerMeth->__invoke());
    
}//EO isset
    */
    
    
    
    
    
    
    
if(isset($_POST["new"])){   
    //#making relative url 
    header("Content-Type: application/json");
    $saveToUrl = $_POST["new"];
    $saveToUrlPath = parse_url($saveToUrl)["path"];
    $thisUrlPath = $_SERVER["PHP_SELF"];
    $saveToUrlPathArr = explode("/", $saveToUrlPath);
    $thisUrlPathArr = explode("/", $thisUrlPath);
    $diff = count($saveToUrlPathArr)-count($thisUrlPathArr);
        $arr_newPath = [];
        for($i=0; count($saveToUrlPathArr)>$i; $i++){ 
           if( isset($thisUrlPathArr[$i]) && $saveToUrlPathArr[$i] === $thisUrlPathArr[$i]){            }
           else{   $arr_newPath[] = $saveToUrlPathArr[$i];    }
           if( isset($thisUrlPathArr[$i]) && $saveToUrlPathArr[$i] != $thisUrlPathArr[$i]){   
               array_unshift($arr_newPath, "..");  
           }
        }
              array_shift($arr_newPath);
    $newPath = implode("/", $arr_newPath);
    
    
if(isset($_POST["loadAllComment"])){
    
    #json type
    $argumentsInJson = json_decode($_POST["loadAllComment"]);
    if($argumentsInJson){
    $loadInd = []; 
    $loadChildren = true;
        if(is_object($argumentsInJson)){            
            $loadInd = $argumentsInJson->loadInd;
            $loadChildren = $argumentsInJson->loadChildren;
        }
        if(is_array($argumentsInJson)){            
            $loadInd = $argumentsInJson[0];
            $loadChildren = $argumentsInJson[1];
        }
        //print_r($argumentsInJson);
    }
    else{
    $argumentsInArray = $_POST["loadAllComment"];
    $loadInd = $argumentsInArray[0];
    $loadChildren = $argumentsInArray[1];
    echo gettype($argumentsInArray)."\n";
    print_r($argumentsInArray);
    }
    
    
    
    header("Content-Type: application/json");
    
    $cspj = new cspj($newPath);
    //$cspj = new comm_system_php_jsoner("comments_t1.json");
    //$cspj ->sendComment($commentSender, "sending comment", []); 
    $resultsInArray = [];
    $cspj ->loadAllComment( [], true, function($N_sender, $N_message, $N_pathId, $N_parent) use(&$resultsInArray){
         //return result to request.
         $resultsInArray[] = array("sender"=>$N_sender, "message"=>$N_message, "pathInd"=>$N_pathId, "parent"=>$N_parent);
    });
    $resultsInJson = json_encode($resultsInArray);
    print_r($resultsInJson);
    
    
}//EO isset

if(isset($_POST["sendComment"])){
    $arguments = $_POST["sendComment"];
}
   
   
   
   

}//EO isset $_POST["New"];



   


?>