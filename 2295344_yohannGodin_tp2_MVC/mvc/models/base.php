<?php
function base_model_list(){
    require(CONNEX_DIR);
    $sql = "SELECT * FROM forum";
    $result = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $result;
}

?>