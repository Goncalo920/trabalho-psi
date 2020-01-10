<h1>ID: <?= h($utilizadores->id_utilizador) ?></h1>
<p>Nome: <?= h($utilizadores->nome) ?></p>
<p>Email: <?= h($utilizadores->email) ?></p>
<p>Idade: <?= h($utilizadores->idade) ?></p>
<?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?>
