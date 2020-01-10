<h1>ID: <?= h($aluguer->id_utilizador) ?></h1>
<p>Nome: <?= h($aluguer->nome) ?></p>
<p>Email: <?= h($aluguer->email) ?></p>
<p>Idade: <?= h($aluguer->idade) ?></p>
<?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?>