<h1><?= h($propriedades->nome) ?></h1>

<?php
echo $this->Form->create($propriedades);
echo $this->Form->control('localidade');
echo $this->Form->control('n_quartos', ['type' => 'number']);
echo $this->Form->control('wcpriv', ['type' => 'number']);
echo $this->Form->button(__('Guardar propriedade'));
echo $this->Form->end();
?>