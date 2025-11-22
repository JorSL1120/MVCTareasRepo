<?php
    require_once "./controlador/tareaController.php";

    $controller = new tareaController();

    if(isset($_GET['action']))
    {
        if($_GET['action'] == 'agregar' && !empty($_POST['descripcion']))
        {
            $controller->agregar($_POST['descripcion']);
        }
        elseif ($_GET['action'] == 'completar' && isset($_GET['id']))
        {
            $controller->completar($_GET['id']);
        }
    }
    else
    {
        $controller->listar();
    }
?>