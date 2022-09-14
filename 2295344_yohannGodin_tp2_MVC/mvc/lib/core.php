<?php
function safe($param) {
      error_reporting(0);  /*TOGGLE AU BESOIN * */
    return addslashes($param);
}

function render($file, $data = null){
     error_reporting(0);  /*TOGGLE AU BESOIN * */
    $layout_file = VIEW_DIR.'/layouts/layout.php';  
    ob_start();
    include_once($file);
    $content = ob_get_clean();
    include_once($layout_file);

    }
 ?> 