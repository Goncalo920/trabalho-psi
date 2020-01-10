<h1><?= h($aluguer->nome) ?></h1>

<?php
echo $this->Form->create($aluguer);
echo $this->Form->control('Contrato');
echo $this->Form->control('Propriedade', ['type' => 'number']);
echo $this->Form->control('Utilizador', ['type' => 'number']);
echo $this->Form->control('Data de Entrada',['type' => 'date']);
echo $this->Form->control('Data de Saida',['type' => 'date']);

echo $this->Form->button(__('Guardar propriedade'));
echo $this->Form->end();
?>
        
        