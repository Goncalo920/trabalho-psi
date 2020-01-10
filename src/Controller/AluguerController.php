<?php
namespace App\Controller;
class AluguerController extends AppController
{
    public function index()//este codigo cria o index
    {
        $aluguer = $this->Aluguer->find('all');
        $this->set(compact('aluguer'));
    }
     public function view($id = null)
    {
        $aluguer = $this->Aluguer->get($id);
        $this->set(compact('aluguer'));
    }
    
    public function add()//permite adicion
    {
        $aluguer = $this->Aluguer->newEmptyEntity();
        if ($this->request->is('post')) {
            $aluguer = $this->Aluguer->patchEntity($aluguer, $this->request->getData());
    
            if ($this->Aluguer->save($aluguer)) {
                $this->Flash->success(__('Reserva feita com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
        }
    }
    public function delete($id) //este codigo cria a funçao de apagar
    {
        $this->request->allowMethod(['post', 'delete']);

        $aluguer = $this->Aluguer->get($id);
        if ($this->Aluguer->delete($aluguer)) {
            $this->Flash->success(__('O propriedades com id: {0} foi apagado.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
    public function edit($id = null)//este codigo cria a funçao de editar
    {
        $aluguer = $this->Aluguer->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Aluguer->patchEntity($aluguer, $this->request->getData());
            if ($this->Aluguer->save($aluguer)) {
                $this->Flash->success(__('A propriedades foi atualizado.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A propriedades não pôde ser atualizado.'));
        }

        $this->set('aluguer', $aluguer);
    }
}
?>
