<h1>Propriedades</h1>
<p><?= $this->Html->link("Adicionar Propriedade", ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id Contrato</th>
        <th>Id Propriedade</th>
        <th>Id Utilizador</th>
    </tr>

    <?php foreach ($propriedades as $propriedade): //Lista todos os utilizadores existentes na tabela?>
        <tr>
            <td><?= $propriedade->id_propriedade ?></td>
            <td>
                <?= $propriedade->localidade ?>
            </td>
            <td>
                <?= $propriedade->n_quartos ?>
            </td>
            <td>
                <?= $this->Html->link('Editar', ['action' => 'edit', $propriedade->id_propriedade ]) //Onde iremos editar o registo ?>
            </td>
            <td>
                <?= $this->Form->postLink('Apagar',['action' => 'delete', $propriedade->id_propriedade],['confirm' => 'Deseja apagar o utilizador selecionado?'])?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>