<!-- Refrence Web: 
http://www.marcofolio.net/webdesign/building_a_blog_with_cakephp_part_1_getting_started.html
-->

<?php
	//Configure::write('debug', 0);

	class HomeController extends AppController {
		var $name = 'Home';
		var $uses = array('Inventory');

		public function beforeFilter() {
			//parent::beforeFilter();
			$this->Auth->allow();
		}
		
		// Used when indexing the page (http://yourdomain.com/product/)
		public function index() {
			$this->set('Items', $this->Inventory->find('all'));
			//To check if the controller is now connected to the model.
			//This code will ask the Blog-model to do a "findAll()" (standard model function in CakePHP) 
			//to retrieve all the data the model can get from the database 
			//(in this case: Everything from the "Products" table).
			//debug($this->Inventory->find('all'));
		}

		/**
		* add method
		*
		* @return void
		*/
		public function add() {
			if ($this->request->is('post')) {
			  $this->Inventory->create();
			  if ($this->Inventory->save($this->request->data)) {
			    $this->Session->setFlash(__('The item has been saved'));
			    $this->redirect(array('action' => ''));
			  } else {
			    $this->Session->setFlash(__('The item could not be saved. Please, try again.'));
			  }
			}
			//$groups = $this->User->Group->find('list');
			//$this->set(compact('groups'));
		}
	}
?>