<?php

namespace Controllers;

use Model\Color;
use Model\TipoTopicos;
use Model\Producto;
use MVC\Router;
class ColorController{

    public function index(Router $router)
    {
        $topicos = TipoTopicos::where('situacion', '1');
        $router->render('colores/index', [
            'topicos' => $topicos
        ]);
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
        $colores = Producto::where('situacion', '1');
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

    public function buscarTopicosAPI(){
        getHeadersApi();

        $topicos = TipoTopicos::where('situacion', '1');
        echo json_encode($topicos);

    }
    public function buscarTopicosAPI1(){
        getHeadersApi();

        $topicos = TipoTopicos::where('situacion', '0', '>');
        echo json_encode($topicos);

    }
} 

