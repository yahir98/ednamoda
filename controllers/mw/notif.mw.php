<?php 
/**
 * PHP Version 5
 * Application Router
 *
 * @category Midleware
 * @package  Midleware/Notification
 * @author   Orlando J Betancourth <orlando.betancourth@gmail.com>
 * @license  Comercial http://
 *
 * @version 1.0.0
 *
 * @link http://url.com
 */
require_once 'models/portafolios/alerta.model.php';

/**
 * Obtiene la cantidad de Notificaciones para el usuario
 *
 * @return void
 */
function obtenerNotificacionesCantidad()
{
    addToContext(
        "notifnum", 
        obtenerNotificacionesCount($_SESSION["userCode"])["contador"]
    );
}

obtenerNotificacionesCantidad();
?>