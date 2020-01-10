<h1>Criar Propiedade</h1>
<?php
echo $this->Form->create($propriedades);
echo $this->Form->control('localidade');
echo $this->Form->control('n_quartos', ['type' => 'number']);
echo $this->Form->control('wcpriv', ['type' => 'number']);
echo $this->Form->button(__('Salvar Utilizador'));
echo $this->Form->end();
?>