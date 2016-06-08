<?php

class TopController extends Controller
{

	public function __Construct()
	{
		parent::__Construct();
	}

	public function Index()
	{
		$this->View->render('topRated/index');
	}

}