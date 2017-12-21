<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Experience Controller
 *
 * @property \App\Model\Table\ExperienceTable $Experience
 *
 * @method \App\Model\Entity\Experience[] paginate($object = null, array $settings = [])
 */
class ExperienceController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $experience = $this->paginate($this->Experience);

        $this->set(compact('experience'));
        $this->set('_serialize', ['experience']);
    }

    /**
     * View method
     *
     * @param string|null $id Experience id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $experience = $this->Experience->get($id, [
            'contain' => []
        ]);

        $this->set('experience', $experience);
        $this->set('_serialize', ['experience']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $experience = $this->Experience->newEntity();
        if ($this->request->is('post')) {
            $experience = $this->Experience->patchEntity($experience, $this->request->getData());
            if ($this->Experience->save($experience)) {
                $this->Flash->success(__('The experience has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The experience could not be saved. Please, try again.'));
        }
        $this->set(compact('experience'));
        $this->set('_serialize', ['experience']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Experience id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $experience = $this->Experience->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $experience = $this->Experience->patchEntity($experience, $this->request->getData());
            if ($this->Experience->save($experience)) {
                $this->Flash->success(__('The experience has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The experience could not be saved. Please, try again.'));
        }
        $this->set(compact('experience'));
        $this->set('_serialize', ['experience']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Experience id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $experience = $this->Experience->get($id);
        if ($this->Experience->delete($experience)) {
            $this->Flash->success(__('The experience has been deleted.'));
        } else {
            $this->Flash->error(__('The experience could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
