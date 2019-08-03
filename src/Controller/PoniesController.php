<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ponies Controller
 *
 * @property \App\Model\Table\PoniesTable $Ponies
 *
 * @method \App\Model\Entity\Pony[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PoniesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $ponies = $this->paginate($this->Ponies);

        $this->set(compact('ponies'));
    }

    /**
     * View method
     *
     * @param string|null $id Pony id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pony = $this->Ponies->get($id, [
            'contain' => []
        ]);

        $this->set('pony', $pony);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pony = $this->Ponies->newEntity();
        if ($this->request->is('post')) {
            $pony = $this->Ponies->patchEntity($pony, $this->request->getData());
            if ($this->Ponies->save($pony)) {
                $this->Flash->success(__('The pony has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pony could not be saved. Please, try again.'));
        }
        $this->set(compact('pony'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pony id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pony = $this->Ponies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pony = $this->Ponies->patchEntity($pony, $this->request->getData());
            if ($this->Ponies->save($pony)) {
                $this->Flash->success(__('The pony has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pony could not be saved. Please, try again.'));
        }
        $this->set(compact('pony'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pony id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pony = $this->Ponies->get($id);
        if ($this->Ponies->delete($pony)) {
            $this->Flash->success(__('The pony has been deleted.'));
        } else {
            $this->Flash->error(__('The pony could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
