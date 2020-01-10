<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

class PropriedadeController  extends AppController
{
    public function index()
    {
       $this->loadComponent('Paginator');
       $propriedades = $this->Paginator->paginate($this->Propriedade->find());
      $this->set(compact('propriedades'));
    }
    
    public function view($id) 
{
    $propriedades = $this->Propiedades->get($id);
    $this->set(compact('propriedades'));
}

    public function add()
    {
        $propriedades = $this->Propriedade->newEntity();

        if ($this->request->is('post')) {
            $propriedades = $this->Propriedade->patchEntity($propriedades, $this->request->getData());
            

            if ($this->Propriedade->save($propriedades )) {
                $this->Flash->success(__('Propriedades criado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro ao criar A propriedades.'));
        }
        $this->set('propriedades', $propriedades);
    }
    
    public function delete($id) 
    {
        $this->request->allowMethod(['post', 'delete']);

        $propriedades = $this->Propriedade->get($id);
        if ($this->Propriedade->delete($propriedades)) {
            $this->Flash->success(__('O propriedades com id: {0} foi apagado.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
    public function edit($id = null)
    {
        $propriedades = $this->Propriedade->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Propriedade->patchEntity($propriedades, $this->request->getData());
            if ($this->Propriedade->save($propriedades)) {
                $this->Flash->success(__('A propriedades foi atualizado.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A propriedades não pôde ser atualizado.'));
        }

        $this->set('propriedades', $propriedades);
    }
    
}