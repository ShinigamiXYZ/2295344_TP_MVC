<?php
function user_model_list(){
    require(CONNEX_DIR);
    $sql = "SELECT * FROM utilisateur ";
    $result = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $result;
}

function user_model_insert($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($conn,$value); 
        
    }
    
    $password = password_hash($password, PASSWORD_BCRYPT); 
    $sql = "INSERT INTO utilisateur (idUtilisateur, nomUtilisateur, nom, motDePasse) VALUES ('NULL','$nomUtilisateur','$nom','$password')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

function user_model_view($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($conn,$value);
    }
    $sql = "SELECT * FROM utilisateur WHERE idUtilisateur = '$id'";
    $result = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $result;
}





function user_model_login($request){
    require(CONNEX_DIR);

    foreach($_POST as $key=>$value){
        $$key=mysqli_real_escape_string($conn,$value);
    }

    $sql = "SELECT * FROM utilisateur WHERE nomUtilisateur = '$nomUtilisateur'";
    
    $result = mysqli_query($conn, $sql);

       $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
       
    
       $dbpassword = $user['motDePasse'];
       if(password_verify($password, $dbpassword))
       {
      
        session_start();
        $_SESSION['nom'] = $user['nom'];
        $_SESSION['nomUtilisateur'] = $user['nomUtilisateur'];
        $_SESSION['idUtilisateur'] = $user['idUtilisateur'];


        $_SESSION['fingerPrint'] =md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']); 
    
    
}}



function user_model_logout(){
    session_destroy();
}

?>

