<?php 

/**
 * CreateController
 * users can create their own color here
 */
class CreateController extends Controller
{

	public function __construct() 
	{
		parent::__construct();
	}

	public function index()
	{
		$this->View->render('create/index');
	}

	public function edit()
	{
		$this->View->render('topRated/edit');
	}
}