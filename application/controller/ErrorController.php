<?php

class ErrorController extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function error404()
	{
		$this->View->render('error/index');
	}

} 