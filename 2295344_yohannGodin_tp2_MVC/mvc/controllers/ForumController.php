<?php
function forum_controller_index(){
    require(MODEL_DIR.'/forum.php');
    $data = forum_model_list();
    render(VIEW_DIR.'/forum/index.php', $data);
}


function forum_controller_create(){
  require(MODEL_DIR.'/forum.php');
  $data = forum_model_list();
  render(VIEW_DIR.'/forum/create.php', $data);
  
}

function forum_controller_insert($request){
  require(MODEL_DIR.'/forum.php');
  forum_model_insert($request);
  header("Location: ?module=forum&action=index");
}


function forum_controller_view($request){
  require(MODEL_DIR.'/forum.php');
    $data = forum_model_listId();
    render(VIEW_DIR.'/forum/view.php', $data);
}




function forum_controller_edit($request){
    require(MODEL_DIR.'/forum.php');
    $data = forum_model_listId();
   render(VIEW_DIR.'/forum/edit.php', $data);

}
function forum_controller_update($request){
    require(MODEL_DIR.'/forum.php');
    forum_model_update($request);
  header("Location: ?module=forum&action=view");

}



function forum_controller_delete($request){
  require(MODEL_DIR.'/forum.php');
  forum_model_delete($request);
  header("Location: ?module=forum&action=view");
}
