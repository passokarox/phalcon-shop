<?php

namespace Multiple\Admin\Controllers;

class IndexController extends \Phalcon\Mvc\Controller
{

	public function indexAction()
	{
		return $this->_forward('/login');
	}

}