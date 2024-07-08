<?php
class Utils{


    public static function mostrarError($errores, $campo){
        $alerta = '';
        if(isset($errores[$campo]) && !empty($campo)){
            $alerta = "<div class='alert-error'>".$errores[$campo].'</div>';
        }
        
        return $alerta;
    }

    public static function borrarErrores(){
        $borrado = false;
        
        if(isset($_SESSION['errores'])){
            $_SESSION['errores'] = null;
            $borrado = true;
        }
            
        if(isset($_SESSION['completado'])){
            $_SESSION['completado'] = null;
            $borrado = true;
        }
        
        return $borrado;
    }

    public static function deleteSession($name){
        if(isset($_SESSION[$name])){
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        
        return $name;
    }
}