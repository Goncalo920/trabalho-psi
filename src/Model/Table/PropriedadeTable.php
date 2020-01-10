<?php
namespace App\Controller;

use Cake\Controller\Controller;

class PropriedadeTable extends Controller//criaçao da modal
{
    public function initialize()
    {
        $this->addBehavior('Timestamp');
    }
}
?>