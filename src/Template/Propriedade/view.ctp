<h1>ID: <?= h($propriedades->id_propriedade) ?></h1>
<p>Nome: <?= h($propriedades->localidade) ?></p>
<p>Email: <?= h($propriedades->n_quartos) ?></p>
<?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?>
