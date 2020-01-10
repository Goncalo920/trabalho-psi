<?php
namespace App\Model\Table;

use Cake\ORM\Table;
//criação da modal
class UtilizadorTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
    }
}
?>
