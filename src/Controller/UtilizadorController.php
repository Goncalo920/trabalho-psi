<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

class UtilizadorController  extends AppController
{
    public function index()
    {
       $this->loadComponent('Paginator');
       $utilizadores = $this->Paginator->paginate($this->Utilizador->find());
      $this->set(compact('utilizadores'));
    }
    public function view($id) 
{
    $utilizadores = $this->Utilizador->get($id);
    $this->set(compact('utilizadores'));
}

    public function add()
    {
        $utilizador = $this->Utilizador->newEntity();

        if ($this->request->is('post')) {
            $utilizador = $this->Utilizador->patchEntity($utilizador, $this->request->getData());

            if ($this->Utilizador->save($utilizador)) {
                $this->Flash->success(__('Utilizador criado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro ao criar o utilizador.'));
        }
        $this->set('utilizador', $utilizador);
    }
    public function delete($id) 
    {
        $this->request->allowMethod(['post', 'delete']);

        $utilizadores = $this->Utilizador->get($id);
        if ($this->Utilizador->delete($utilizadores)) {
            $this->Flash->success(__('O utilizador com id: {0} foi apagado.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
    public function edit($id = null)
    {
        $utilizadores = $this->Utilizador->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Utilizador->patchEntity($utilizadores, $this->request->getData());
            if ($this->Utilizador->save($utilizadores)) {
                $this->Flash->success(__('O Utilizador foi atualizado.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O utilizador não pôde ser atualizado.'));
        }

        $this->set('utilizador', $utilizadores);
    }


}
