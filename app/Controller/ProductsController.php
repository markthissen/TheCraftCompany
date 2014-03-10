<?php

class ProductsController extends AppController{
	
	public function add(){

		if ($this->request->is('post')){
			$this->Product->save( $this->request->data);
		}

	}
}


?>