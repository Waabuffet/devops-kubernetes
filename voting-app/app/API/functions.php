<?php

function isnotempty(array $vars){
    foreach($vars as $v){
        if(!is_null($v)){
            if($v != ''){
                continue;
            }
        }
        return false;
    }
    return true;
}

function returnJSON(int $status, string $data){
    return json_encode(array(
        'status' => $status,
        'data' => $data
    ));
}

function showAlert(string $msg){
    echo '
    <div class="alert alert-danger" role="alert">
        '.$msg.'
    </div>
    ';
}

?>