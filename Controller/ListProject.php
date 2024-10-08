<?php

namespace FacturaScripts\Plugins\ZSPlugin\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListProject extends ListController
{
    public function getPageData(): array
  {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'ZSPlugin';
        $pageData['title'] = 'projects';
        $pageData['icon'] = 'fas fa-file';
        return $pageData;
    }

    protected function createViews() {
        $this->addView('ListProject', 'Project');
        $this->addSearchFields('ListProject', ['name']);
        $this->addOrderBy('ListProject', ['name'], 'name');
    }
}