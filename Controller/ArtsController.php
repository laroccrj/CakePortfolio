<?php
class ArtsController extends AppController {
    public $helpers = array('Html', 'Form');
    var $uses = array('Art', 'Categorie');
    private $adminPassword = 'Passport123';

    public function index($id = null) {		
        if(!$id){
            $firstCategory = $this->Categorie->find('first');
            if($firstCategory)
                $id = $firstCategory['Categorie']['id'];
        }
        $this->set('jsVars', $this->Art->find('all', array(
            'conditions' => array('Art.Category' => $id)
        )));
        $this->set('Categories', $this->Categorie->find('all'));
    }
    
    public function admin() {
        if($this->Session->read('admin')) {
            $this->redirect(array('action' => 'panel'));
        }
        if ($this->request->is('post')) {
            if ($this->request->data('login.password') == $this->adminPassword) {
                $this->Session->write('admin',true);
                $this->redirect(array('action' => 'panel'));
            } else {
                $this->Session->setFlash('Invalid Password');
            }
        }
    }
    
    public function panel() {
        $this->requireAdmin();
        $this->set('arts', $this->Art->find('all'));
    }
    
    public function add() {
        $this->requireAdmin();
        if ($this->request->is('post')) {
            $this->Art->set('name', $this->request->data('name'));
            $this->Art->set('category', $this->request->data('Category'));
            $this->Art->set('image', $this->handleImage());
            if ($this->Art->save()) {
                $this->Session->setFlash('Art added');
                $this->redirect(array('action' => 'panel'));
            } else {
                $this->Session->setFlash('Unable to add art.');
            }
        }
        
        $this->set('Categories', $this->Categorie->find('all'));
    }
    
    public function delete($id = null){
        $this->requireAdmin();
        if (!$id) {
            throw new NotFoundException(__('Invalid Category'));
        }
        $art = $this->Art->findById($id);
        unlink('../webroot/img/'.$art['Art']['image']);
        var_dump($art);
        $this->Art->delete($id, false);
        $this->Session->setFlash('Art deleted');
        $this->redirect(array('action' => 'panel'));
    }
    
    public function edit($id = null){
        $this->requireAdmin();
        if (!$id) {
            throw new NotFoundException(__('Invalid art'));
        }

        $art = $this->Art->findById($id);
        if (!$art) {
            throw new NotFoundException(__('Invalid art'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            $this->Art->id = $id;
            $this->Art->set('name', $this->request->data('name'));
            $this->Art->set('category', $this->request->data('Category'));
            if ($this->Art->save($this->request->data)) {
                $this->Session->setFlash('Art has been updated.');
                $this->redirect(array('action' => 'panel'));
            } else {
                $this->Session->setFlash('Unable to update Art.');
            }
        }

        if (!$this->request->data) {
            $this->request->data = $art;
        }
        
        $this->set('Categories', $this->Categorie->find('all'));
    }
    
    public function about() {
    
    }
    
    public function contact() {
    
    }
    
    public function logout(){
        $this->Session->write('admin',false);
        $this->redirect(array('action' => 'index'));
    }
    
    private function handleImage() {
        $name = date("U").'-'.$_FILES["image"]["name"];
        while(file_exists("../webroot/img/uploads/" . $name))
            $name = date("U").$_FILES["image"]["type"];
        move_uploaded_file($_FILES["image"]["tmp_name"], "../webroot/img/uploads/" . $name);
        return $name;
    }
    
    private function requireAdmin() {
        if(!$this->Session->read('admin')) {
            $this->redirect(array('action' => 'admin'));
        }
    }
}