<?php
function formatTelefone($telefone){
    if(strpos($telefone, '-') == false){
        if(strlen($telefone) == 9){
            return substr($telefone, 0,5) .  '-' . substr($telefone,5,8);
        }else if(strlen($telefone) == 8){
            return substr($telefone, 0,4) .  '-' . substr($telefone,4,7);
        }else{
            return $telefone;
        }
    }else{
        return str_replace($telefone, '-',"");
    }
}


?>