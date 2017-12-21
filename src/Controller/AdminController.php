<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * Admin Controller
 *
 * @property \App\Model\Table\AdminTable $Admin
 *
 * @method \App\Model\Entity\Admin[] paginate($object = null, array $settings = [])
 */
class AdminController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $admin = $this->paginate($this->Admin);

        $this->set(compact('admin'));
        $this->set('_serialize', ['admin']);
    }

    /**
     * View method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $admin = $this->Admin->get($id, [
            'contain' => []
        ]);

        $this->set('admin', $admin);
        $this->set('_serialize', ['admin']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $admin = $this->Admin->newEntity();
        if ($this->request->is('post')) {
            //start controller code to handle file uploading
            if(!empty($this->request->data['photo']['name']))
            {
                $fileName = $this->request->data['photo']['name'];
                $fileName = md5(time());
                $uploadPath = 'img/';
                $uploadFile = $uploadPath.$filename;
                if(move_uploaded_file($this->request->data['photo']['tmp_name'],$uploadFile))
                {
                    $this->request->data['photo'] = $fileName;
                }
            }
            //end
            $admin = $this->Admin->patchEntity($admin, $this->request->getData());
            
            if ($this->Admin->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }
        $this->set(compact('admin'));
        $this->set('_serialize', ['admin']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $admin = $this->Admin->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $admin = $this->Admin->patchEntity($admin, $this->request->getData());
            if ($this->Admin->save($admin)) {
                $this->Flash->success(__('You site has been updated.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Your site could not be updated. Please, try again.'));
        }
        $this->set(compact('admin'));
        $this->set('_serialize', ['admin']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $admin = $this->Admin->get($id);
        if ($this->Admin->delete($admin)) {
            $this->Flash->success(__('The admin has been deleted.'));
        } else {
            $this->Flash->error(__('The admin could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
/*
 //start
            if(!empty($this->request->data['file']['name'])){
                $filename = $this->request->data['file']['name'];
                $url = Router::url('/', true).'webroot/img/'.$filename;
                $uploadpath = 'img/';
                $uploadfile = $uploadpath.$filename;
                if(move_uploaded_file($this->request->data['file']['tmp_name'], 

$uploadfile)){
                    $admin = $this->Admin->newentity();
                    $admin->image = $url;
                }
            }
            else{
                $this->Flash->error(__('fail to Upload'));
            }
            //end
*/