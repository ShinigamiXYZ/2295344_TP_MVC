<?php

function base_controller_index(){
    require(MODEL_DIR.'/base.php');
    $data = base_model_list();
    render(VIEW_DIR.'/base/welcome.php', $data);
}





?>