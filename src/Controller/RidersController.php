<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Riders Controller
 *
 * @property \App\Model\Table\RidersTable $Riders
 *
 * @method \App\Model\Entity\Rider[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RidersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Ponies']
        ];
        $riders = $this->paginate($this->Riders);

        $this->set(compact('riders'));
    }

    /**
     * View method
     *
     * @param string|null $id Rider id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rider = $this->Riders->get($id, [
            'contain' => ['Ponies']
        ]);

        $this->set('rider', $rider);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rider = $this->Riders->newEntity();
        if ($this->request->is('post')) {
            $rider = $this->Riders->patchEntity($rider, $this->request->getData());
            if ($this->Riders->save($rider)) {
                $this->Flash->success(__('The rider has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rider could not be saved. Please, try again.'));
        }
        $ponies = $this->Riders->Ponies->find('list', ['limit' => 200]);
        $this->set(compact('rider', 'ponies'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rider id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rider = $this->Riders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rider = $this->Riders->patchEntity($rider, $this->request->getData());
            if ($this->Riders->save($rider)) {
                $this->Flash->success(__('The rider has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rider could not be saved. Please, try again.'));
        }
        $ponies = $this->Riders->Ponies->find('list', ['limit' => 200]);
        $this->set(compact('rider', 'ponies'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rider id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rider = $this->Riders->get($id);
        if ($this->Riders->delete($rider)) {
            $this->Flash->success(__('The rider has been deleted.'));
        } else {
            $this->Flash->error(__('The rider could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
