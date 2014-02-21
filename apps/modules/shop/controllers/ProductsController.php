<?php

namespace Multiple\Shop\Controllers;

class ProductsController extends \Phalcon\Mvc\Controller {

    public function indexAction() {
        $this->view->product = new \ArrayObject;
        $this->view->product->name = 'oi';
    }

}
