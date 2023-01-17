
<?php

namespace Model; 

class Color extends ActiveRecord{

    protected static $tabla = 'amc_colores'; //nombre de la tablaX
    protected static $columnasDB = ['ID','PRIMER_DESC','PRIMER_CANTIDAD','PRIMER_COLOR', 'SEGUNDO_DESC','SEGUNDA_CANTIDAD','SEGUNDO_COLOR','TERCER_DESC','TERCERA_CANTIDAD','TERCER_COLOR', 'SITUACION'];

    public $id;
    public $primer_desc;
    public $primer_cantidad;
    public $primer_color;
    public $segundo_desc;
    public $segunda_cantidad;
    public $segundo_color;
    public $tercer_desc;
    public $tercera_cantidad;
    public $tercer_color;
    public $situacion;


    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->primer_desc = $args['primer_desc'] ?? '';
        $this->primer_cantidad = $args['primer_cantidad'] ?? '';
        $this->primer_color = $args['primer_color'] ?? '';
        $this->segundo_desc = $args['segundo_desc'] ?? '';
        $this->segunda_cantidad = $args['segunda_cantidad'] ?? '';
        $this->segundo_color = $args['segundo_color'] ?? '';
        $this->tercer_desc = $args['tercer_desc'] ?? '';
        $this->tercera_cantidad = $args['tercera_cantidad'] ?? '';
        $this->tercer_color = $args['tercer_color'] ?? '';
        $this->situacion = $args['situacion'] ?? '1';
    }

}