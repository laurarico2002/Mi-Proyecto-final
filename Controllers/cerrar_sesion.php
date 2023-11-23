<?php

class Sesion
{
    public static function cerrarSesion()
    {
        // Iniciar la sesión si no está iniciada
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Destruir todas las variables de sesión
        $_SESSION = array();

        // Si se desea destruir la sesión completamente, borra también la cookie de sesión.
        // Nota: Esto destruirá la sesión pero no la información de la sesión.
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }

        // Finalmente, destruir la sesión.
        session_destroy();
    }
}

// Uso:

// Llamada para cerrar la sesión
Sesion::cerrarSesion();
?>
