<?php
namespace App\Controller;

use Cake\Controller\Controller;//criaçao da modal

class AluguerTable extends Controller
{
    public function initialize()
    {
        $this->addBehavior('Timestamp');
    }
}
?>