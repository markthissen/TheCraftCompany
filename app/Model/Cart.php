<!--This is the cart model where items are got from the product database-->


<?php
App::uses('AppModel', 'Model');
App::uses('CakeSession', 'Model/Datasource');
 
class Cart extends AppModel {
 
    public $useTable = false;
     
    /*
     * add a product to cart
     */
    public function add($productId) {
        $allProducts = $this->read();
        if (null!=$allProducts) {
            if (array_key_exists($productId, $allProducts)) {
                $allProducts[$productId]++;
            } else {
                $allProducts[$productId] = 1;
            }
        } else {
            $allProducts[$productId] = 1;
        }
         
        $this->save($allProducts);
    }
     
    /*
     * get total count of products
     */
    public function getCount() {
        $allProducts = $this->find('all');
         
        if (count($allProducts)<1) {
            return 0;
        }
         
        $count = 0;
        foreach ($allProducts as $product) {
            $count=$count+$product;
        }
         
        return $count;
    }
 
    /*
     * save data to session
     */
    public function save($data) {
        return CakeSession::write('cart',$data);
    }
 
    /*
     * read cart data from session
     */
    public function read() {
        return CakeSession::read('cart');
    }
 }

