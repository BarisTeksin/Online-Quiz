<?php 

function cookie_kontrol()
{
    $t = &get_instance();
    if($t->session->userdata("uid")){
        return TRUE;
    }else{
        return FALSE;
    }

}


?>