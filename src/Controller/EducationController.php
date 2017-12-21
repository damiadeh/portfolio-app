<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Education Controller
 *
 * @property \App\Model\Table\EducationTable $Education
 *
 * @method \App\Model\Entity\Education[] paginate($object = null, array $settings = [])
 */
class EducationController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $education = $this->paginate($this->Education);

        $this->set(compact('education'));
        $this->set('_serialize', ['education']);
    }

    /**
     * View method
     *
     * @param string|null $id Education id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $education = $this->Education->get($id, [
            'contain' => []
        ]);

        $this->set('education', $education);
        $this->set('_serialize', ['education']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $education = $this->Education->newEntity();
        if ($this->request->is('post')) {
            $education = $this->Education->patchEntity($education, $this->request->getData());
            if ($this->Education->save($education)) {
                $this->Flash->success(__('The education has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The education could not be saved. Please, try again.'));
        }
        $this->set(compact('education'));
        $this->set('_serialize', ['education']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Education id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $education = $this->Education->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $education = $this->Education->patchEntity($education, $this->request->getData());
            if ($this->Education->save($education)) {
                $this->Flash->success(__('The education has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The education could not be saved. Please, try again.'));
        }
        $this->set(compact('education'));
        $this->set('_serialize', ['education']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Education id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $education = $this->Education->get($id);
        if ($this->Education->delete($education)) {
            $this->Flash->success(__('The education has been deleted.'));
        } else {
            $this->Flash->error(__('The education could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
