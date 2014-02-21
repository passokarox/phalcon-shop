<?php

namespace Multiple\Admin\Controllers;

use Multiple\Admin\Models\Products as Products;

class ProductsController extends \Phalcon\Mvc\Controller
{

	public function indexAction()
	{
		$this->view->setVar('product', Products::findFirst());
	}

}