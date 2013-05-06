<!--
  Source Example From:
  http://book.cakephp.org/2.0/en/tutorials-and-examples/simple-acl-controlled-application/simple-acl-controlled-application.html
  http://book.cakephp.org/2.0/en/tutorials-and-examples/simple-acl-controlled-application/part-two.html
  http://book.cakephp.org/2.0/en/tutorials-and-examples/blog-auth-example/auth.html
  https://github.com/pawlobanano/Simple-Acl-controlled-Application/
-->

<?php
class GroupsController extends AppController {

  public function beforeFilter() {
    parent::beforeFilter();
    //$this->Auth->allow();
  }

  public function index() {
    $this->Group->recursive = 0;
    $this->set('groups', $this->paginate());
  }

 public function view($id = null) {
    $this->Group->id = $id;
    if (!$this->Group->exists()) {
        throw new NotFoundException(__('Invalid Group'));
    }
    $this->set('group', $this->Group->read(null, $id));
  }

  public function add() {
    if ($this->request->is('post')) {
      $this->Group->create();
      if ($this->Group->save($this->request->data)) {
        $this->Session->setFlash(__('The group has been saved'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('The group could not be saved. Please, try again.'));
      }
    }
  }

  public function edit($id = null) {
      $this->Group->id = $id;
      if (!$this->Group->exists()) {
          throw new NotFoundException(__('Invalid group'));
      }
      if ($this->request->is('post') || $this->request->is('put')) {
          if ($this->group->save($this->request->data)) {
              $this->Session->setFlash(__('The group has been saved'));
              $this->redirect(array('action' => 'index'));
          } else {
              $this->Session->setFlash(__('The group could not be saved. Please, try again.'));
          }
      } else {
          $this->request->data = $this->group->read(null, $id);
          //unset($this->request->data['User']['password']);
      }
  }

  public function delete($id = null) {
      if (!$this->request->is('post')) {
          throw new MethodNotAllowedException();
      }
      $this->Group->id = $id;
      if (!$this->Group->exists()) {
          throw new NotFoundException(__('Invalid group'));
      }
      if ($this->Group->delete()) {
          $this->Session->setFlash(__('Group deleted'));
          $this->redirect(array('action' => 'index'));
      }
      $this->Session->setFlash(__('Group was not deleted'));
      $this->redirect(array('action' => 'index'));
  }





}
?>