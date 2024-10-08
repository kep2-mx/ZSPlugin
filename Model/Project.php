<?php
namespace FacturaScripts\Plugins\ZSPlugin\Model;

use FacturaScripts\Core\Model\Base;

class Project extends Base\ModelClass
{
    use Base\ModelTrait;
 
    public $codcliente; 
    public $creationdate;
    public $description;
    public $idproject;
    public $name;
    public $total;
    public $user;
    public $verified;

    public function clear()
    {
        parent::clear();
        $this->creationdate = date('d-m-y');
        $this->total=0;
        $this->verified=false;
    }    
    
    public static function primaryColumn(): string
        {
        return 'idproject';
    }

    public static function tableName(): string
        {
        return 'projects';
    }
}