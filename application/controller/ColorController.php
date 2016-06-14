<?php 

/**
 * CreateController
 * users can create their own color here
 */
class ColorController extends Controller
{

	public function __construct() 
	{
		parent::__construct();
	}

	public function index()
	{
		$this->View->render('color/index');
	}

	public function edit()
	{
		$this->View->render('topRated/edit');
	}

	public function addColor()
	{
		
	}
	
}