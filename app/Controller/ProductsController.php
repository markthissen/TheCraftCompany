<!--This is the product controller for which sets up product settings for the website-->


<?php
App::uses('AppController', 'Controller');
 
class ProductsController extends AppController {

        public function beforeFilter() {
        
    }

    public function index() {
            $this->set('products', $this->Product->find('all'));
    }
             
    public function view($id) {
            if (!$this->Product->exists($id)) {
                    throw new NotFoundException(__('Invalid product'));
            }
                 
            $product = $this->Product->read(null,$id);
            $this->set(compact('product'));
    }  
}
?>
