<?php

// ERROR 151
// ERROR POR FALLA DE SEGURIDAD
function error151(){
    $host = $_SERVER['HTTP_HOST'];
    header('Location: https://'.$host.'/UNeats-Proyectos2/login/index.php?result=3ad735ebae3ff8aae1b3dcafa8c8bbff3e877fab8fd9cf7f3c933240f0544a0b');
    exit;
}

// ERROR 101
// ERROR POR FALTA DE SESSIÓN INICIADA
function error101(){
    $host = $_SERVER['HTTP_HOST'];
    header('Location: https://'.$host.'/UNeats-Proyectos2/login/index.php?result=0');
    exit;
}

// ERROR 421
// ERROR POR NO PODER AÑADIR PRODUCTO
function error421(){
    $host = $_SERVER['HTTP_HOST'];
    header('Location: https://'.$host.'/UNeats-Proyectos2/login/usuario/index.php');
    if(!empty(session_id())){
        $_SESSION["__usrerr__"] = "421";
    }else{
        error101();
    }
    exit;
}
// ERROR 521
// ERROR POR LA IMAGEN
function error521(){
    $host = $_SERVER['HTTP_HOST'];
    header('Location: https://'.$host.'/UNeats-Proyectos2/login/usuario/index.php');
    if(!empty(session_id())){
        $_SESSION["__usrerr__"] = "521";
    }else{
        error101();
    }
    exit;
}
// ERROR 621
// ERROR AL AÑADIR
function error621(){
    $host = $_SERVER['HTTP_HOST'];
    header('Location: https://'.$host.'/UNeats-Proyectos2/login/usuario/index.php');
    if(!empty(session_id())){
        $_SESSION["__usrerr__"] = "621";
    }else{
        error101();
    }
    exit;
}
// ERROR 212
// ERROR AL NO PODER CAMBIAR ROL
function error212(){
    $host = $_SERVER['HTTP_HOST'];
    header('Location: https://'.$host.'/UNeats-Proyectos2/login/usuario/index.php');
    if(!empty(session_id())){
        $_SESSION["__usrerr__"] = "212";
    }else{
        error101();
    }
    exit;
}

// ERROR 312
// ERROR AL NO BORRAR USUARIO
function error312(){
    $host = $_SERVER['HTTP_HOST'];
    header('Location: https://'.$host.'/UNeats-Proyectos2/login/usuario/index.php');
    if(!empty(session_id())){
        $_SESSION["__usrerr__"] = "312";
    }else{
        error101();
    }
    exit;
}

// ERROR 412
// ERROR AL NO BORRAR PRODUCTO
function error412(){
    $host = $_SERVER['HTTP_HOST'];
    header('Location: https://'.$host.'/UNeats-Proyectos2/login/usuario/index.php');
    if(!empty(session_id())){
        $_SESSION["__usrerr__"] = "412";
    }else{
        error101();
    }
    exit;
}



// Sucesso al añadir producto
// 
function success(){
    $host = $_SERVER['HTTP_HOST'];
    header('Location: https://'.$host.'/UNeats-Proyectos2/login/usuario/index.php');
    if(!empty(session_id())){
        $_SESSION["__sucess__"] = "true";
    }else{
        error421();
    }
    exit;
}
// Sucesso al borrar producto
function success_off(){
    $host = $_SERVER['HTTP_HOST'];
    header('Location: https://'.$host.'/UNeats-Proyectos2/login/usuario/index.php');
    if(!empty(session_id())){
        $_SESSION["__sucess__"] = "false";
    }else{
        error412();
    }
    exit;
}

// Sucesso al cambiar rol usuario
function usrsuccess(){
    $host = $_SERVER['HTTP_HOST'];
    header('Location: https://'.$host.'/UNeats-Proyectos2/login/usuario/index.php');
    if(!empty(session_id())){
        $_SESSION["__usrsucess__"] = "true";
    }else{
        error212();
    }
    exit;
}


// Sucesso al borrar usuario
function usrsuccess_off(){
    $host = $_SERVER['HTTP_HOST'];
    header('Location: https://'.$host.'/UNeats-Proyectos2/login/usuario/index.php');
    if(!empty(session_id())){
        $_SESSION["__usrsucess__"] = "false";
    }else{
        error312();
    }
    exit;
}

?>