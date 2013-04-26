<?php
class CategoriesController extends AppController {
    public $helpers = array('Html', 'Form');
    var $uses = array('Categorie');
    
    public function index() {
        $this->requireAdmin();
        $this->set('Categories', $this->Categorie->find('all'));
    }
    
    public function add() {
        $this->requireAdmin();
        if ($this->request->is('post')) {
            $this->Categorie->set('name', $this->request->data('name'));
            if ($this->Categorie->save()) {
                $this->Session->setFlash('Category added');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add Category.');
            }
        }
    }
    
    public function delete($id = null){
        if (!$id) {
            throw new NotFoundException(__('Invalid Category'));
        }
        
        $this->Categorie->delete($id, false);
        $this->Session->setFlash('Category deleted');
        $this->redirect(array('action' => 'index'));
    }
    
    public function edit($id = null){
        if (!$id) {
            throw new NotFoundException(__('Invalid category'));
        }

        $Category = $this->Categorie->findById($id);
        if (!$Category) {
            throw new NotFoundException(__('Invalid category'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            $this->Categorie->id = $id;
            $this->Categorie->set('name', $this->request->data('name'));
            if ($this->Categorie->save($this->request->data)) {
                $this->Session->setFlash('Category has been updated.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to update Category.');
            }
        }

        if (!$this->request->data) {
            $this->request->data = $Category;
        }
        
    }
    
    private function requireAdmin() {
        if(!$this->Session->read('admin')) {
            $this->redirect(array('controller' => 'arts', 'action' => 'admin'));
        }
    }
}