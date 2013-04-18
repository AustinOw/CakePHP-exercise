<!-- Refrence Web: 
http://www.marcofolio.net/webdesign/building_a_blog_with_cakephp_part_1_getting_started.html
-->

<?php
	class ProductController extends AppController {
		var $name = 'Product';
		var $uses = array('Inventory');

		// Used when indexing the page (http://yourdomain.com/product/)
		function index() {
			$this->set('Items', $this->Inventory->find('all'));
			//To check if the controller is now connected to the model.
			//This code will ask the Blog-model to do a "findAll()" (standard model function in CakePHP) 
			//to retrieve all the data the model can get from the database 
			//(in this case: Everything from the "Products" table).
			//debug($this->Inventory->find('all'));
		}
	}
?>