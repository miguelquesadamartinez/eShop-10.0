<?php
/**
 * Polyfill para funciones de sesión deprecadas (PHP 5.4+)
 * Proporciona compatibilidad con código legacy que usa session_register()
 */

if (!function_exists('session_register')) {
    function session_register() {
        $args = func_get_args();
        foreach ($args as $var) {
            if (!isset($_SESSION[$var])) {
                $_SESSION[$var] = '';
            }
            // Crear referencia global
            $GLOBALS[$var] = &$_SESSION[$var];
        }
        return true;
    }
}

if (!function_exists('session_unregister')) {
    function session_unregister($varname) {
        unset($_SESSION[$varname]);
        unset($GLOBALS[$varname]);
        return true;
    }
}

if (!function_exists('session_is_registered')) {
    function session_is_registered($varname) {
        return isset($_SESSION[$varname]);
    }
}
?>
