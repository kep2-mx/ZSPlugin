<?php


namespace FacturaScripts\Plugins\ZSPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditProject extends EditController {
    
    public function getModelClassName(): string {
        return 'Project';
    }
}
