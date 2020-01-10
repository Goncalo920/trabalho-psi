<!-- File: src/Template/Articles/add.ctp -->

<h1>Adicionar aluguer</h1>
<?php
    echo $this->Form->create($aluguer);
    echo $this->Form->input('title');
    echo $this->Form->input('body', ['rows' => '3']);
    echo $this->Form->button(__('Salvar artigo'));
    echo $this->Form->end();
?>