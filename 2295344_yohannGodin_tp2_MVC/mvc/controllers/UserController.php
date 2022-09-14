<?php
function user_controller_index(){
    require(MODEL_DIR.'/user.php');
    $data = user_model_list();
    render(VIEW_DIR.'/user/index.php', $data);
}

function user_controller_create(){
    require(MODEL_DIR.'/user.php');
    $data = user_model_list();
    render(VIEW_DIR.'/user/create.php', $data);
    
}

function user_controller_insert($request){
    require(MODEL_DIR.'/user.php');
    user_model_insert($request);
    header("Location: ?module=user&action=login");
}

function user_controller_view($request){
    require(MODEL_DIR.'/user.php');
    $user = user_model_view($request);
    $data = array('user' => $user);
    render(VIEW_DIR.'/user/view.php', $data);
}


function user_controller_login($request){
    require(MODEL_DIR.'/forum.php');
    require(MODEL_DIR.'/user.php');
    user_model_login($request);
    
    if($_SESSION['nom']){
        $data = forum_model_list();
      render(VIEW_DIR.'/forum/index.php', $data);
    }
    else{ 
    render(VIEW_DIR.'/user/login.php');
    echo $_SESSION['nom'];
}
}

function user_controller_logout($request){
    require(MODEL_DIR.'/user.php');
    user_model_logout();
    header("Location: ?module=user&action=login");
   
}

?>