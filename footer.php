<?php
    $s_protVal = $_SERVER["SERVER_PROTOCOL"];
    $s_prot = substr($s_protVal, 0, 4);
    print '<div id="thefooter">
        <footer>
                  <p class="itemAtFoot">
<a class="transparentlink" href="'.$s_prot.'://'.$_SERVER["HTTP_HOST"].'/about"  >About ReadMag </a>
                     <p class="storyAtFoot"> <a href=""> </a></p>  
                   </p>
     

     
                  <p class="itemAtFoot">
<a class="transparentlink" href="'.$s_prot.'://'.$_SERVER["HTTP_HOST"].'/privacy-policy"  > Help </a>
                     <p class="storyAtFoot"> <a href=""> </a></p>  
                   </p>
                   
     
                  <p class="itemAtFoot">
<a class="transparentlink" href="'.$s_prot.'://'.$_SERVER["HTTP_HOST"].'/privacy-policy"  >Privacy Poilcy and Terms of Use </a>
                     <p class="storyAtFoot"> <a href=""> </a></p>  
                   </p>
                   
                   
                   Copyright  '. date_format(new DateTime(), "Y" ).'
                   
         </footer>
    </div>';
    ?>