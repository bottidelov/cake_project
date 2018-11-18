<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hello Controller
 *
 *
 * @method \App\Model\Entity\Hello[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HelloController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
       /*
        $hello = $this->paginate($this->Hello);
    
        $this->set(compact('hello'));
        */

    $this->autoRender = false;
    echo 'Hello World.';
    }

    /**
     * View method
     *
     * @param string|null $id Hello id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hello = $this->Hello->get($id, [
            'contain' => []
        ]);

        $this->set('hello', $hello);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hello = $this->Hello->newEntity();
        if ($this->request->is('post')) {
            $hello = $this->Hello->patchEntity($hello, $this->request->getData());
            if ($this->Hello->save($hello)) {
                $this->Flash->success(__('The hello has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hello could not be saved. Please, try again.'));
        }
        $this->set(compact('hello'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hello id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hello = $this->Hello->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hello = $this->Hello->patchEntity($hello, $this->request->getData());
            if ($this->Hello->save($hello)) {
                $this->Flash->success(__('The hello has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hello could not be saved. Please, try again.'));
        }
        $this->set(compact('hello'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hello id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hello = $this->Hello->get($id);
        if ($this->Hello->delete($hello)) {
            $this->Flash->success(__('The hello has been deleted.'));
        } else {
            $this->Flash->error(__('The hello could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
