<!--This is the carts controller for which sets up cart settings for the website-->


<?php
App::uses('AppController', 'Controller');
 
class CartsController extends AppController {
 
    public $uses = array('Product','Cart');
     
    public function add() {
        $this->autoRender = false;
        if ($this->request->is('post')) {
            $this->Cart->add($this->request->data['Cart']['productId']);
        }
        echo $this->Cart->getCount();
    }

    public function view() {
    $carts = $this->Cart->read();
    $products = array();
    if (null!=$carts) {
        foreach ($carts as $productId => $count) {
            $product = $this->Product->read(null,$productId);
            $product['Product']['count'] = $count;
            $products[]=$product;
        }
    }
    $this->set(compact('products'));
}

    public function update() {
        if ($this->request->is('post')) {
            if (!empty($this->request->data)) {
                $cart = array();
                foreach ($this->request->data['Cart']['count'] as $index=>$count) {
                    if ($count>0) {
                        $productId = $this->request->data['Cart']['product_id'][$index];
                        $cart[$productId] = $count;
                    }
                }
                $this->Cart->save($cart);
            }
        }
        $this->redirect(array('action'=>'view'));
}

}
