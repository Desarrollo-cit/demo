<?php

namespace Controllers;

use Model\Color;
use MVC\Router;
class ColorController{

    public function index(Router $router)
    {
        $router->render('colores/index');
    }

    public function guardarAPI(){
        getHeadersApi();
        $color = new Color($_POST);
        
        $resultado = $color->guardar();

        if($resultado['resultado'] == 1){
            echo json_encode([
                "resultado" => 1
            ]);
            
        }else{
            echo json_encode([
                "resultado" => 0
            ]);

        }
    }

    public function buscarApi(){
        getHeadersApi();
        $colores = Color::where('situacion', '1');
        echo json_encode($colores);
    }

    public function modificarAPI(){
        getHeadersApi();
        $color = new Color($_POST);
        
        $resultado = $color->guardar();

        if($resultado['resultado'] == 1){
            echo json_encode([
                "resultado" => 1
            ]);
            
        }else{
            echo json_encode([
                "resultado" => 0
            ]);

        }
    }

    public function eliminarAPI(){
        getHeadersApi();
        $_POST['situacion'] = 0;
        $color = new Color($_POST);
        
        $resultado = $color->guardar();

        if($resultado['resultado'] == 1){
            echo json_encode([
                "resultado" => 1
            ]);
            
        }else{
            echo json_encode([
                "resultado" => 0
            ]);

        }
    }
} 

