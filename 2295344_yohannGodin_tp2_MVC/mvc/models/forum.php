<?php
function forum_model_list(){
    require(CONNEX_DIR);
  
    $sql = "SELECT * FROM forum";
    $result = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $result;
}
function forum_model_listId(){
    require(CONNEX_DIR);
  
    $sql = "SELECT * FROM forum WHERE idUtilisateur = '{$_SESSION['idUtilisateur']}';";
    $result = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $result;

}


function forum_model_view($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($conn,$value);
    }
    $sql = "SELECT * FROM forum";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

 function forum_model_update($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($conn, $value);
    }
     $sql = "UPDATE forum SET titre = '$titre', article = '$article' WHERE idForum = '$idForum'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
} 

function forum_model_insert($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($conn,$value);
        echo $key . ' ---- > ' . $value ;
    }
    $sql = "INSERT INTO forum VALUES(NULL, '$titre','$article','$dateParution','$idUtilisateur')";
    mysqli_query($conn, $sql);
    mysqli_close($conn); 
}



function forum_model_delete($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){ 
        $$key=mysqli_real_escape_string($conn,$value);
    }
    $sql = "DELETE FROM forum WHERE idForum = '$idForum'"; 
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}



?>