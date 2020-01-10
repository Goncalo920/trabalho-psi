<h1>Aluguer</h1>
<p><?= $this->Html->link("Adicionar Aluguer", ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id Contrato</th>
        <th>Id Propriedade</th>
        <th>Id Utilizador</th>
        <th>Data de Entrada</th>
        <th>Data de Saida</th>
    </tr>
     <?php foreach ($aluguer as $alugado): //Lista todos os utilizadores existentes na tabela?>
        <tr>
            <td><?= $alugado->id_aluguer ?></td>
            <td>
                <?= $alugado->id_propriedade ?>
            </td>
            <td>
                <?= $alugado->id_utilizador ?>
            </td>
            <td>
                <?= $alugado->data_entrada  ?>
            </td>
            <td>
                <?= $alugado->data_saida  ?>
            </td>
            <td>
                <?= $this->Html->link('Editar', ['action' => 'edit', $alugado->id_aluguer]) //Onde iremos editar o registo ?>
            </td>
            <td>
                <?= $this->Form->postLink('Apagar',['action' => 'delete', $alugado->id_aluguer],['confirm' => 'Deseja apagar o utilizador selecionado?'])?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>