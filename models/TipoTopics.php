<?php

namespace Model;

class TipoTopicos extends ActiveRecord{

    protected static $tabla = 'amc_tipo_topics'; //nombre de la tablaX
    protected static $columnasDB = ['ID','DESC','SITUACION'];

    public $id;
    public $color;
    public $situacion;


    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->color = $args['desc'] ?? '';
        $this->situacion = $args['situacion'] ?? '1';
       
    }

}