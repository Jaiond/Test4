<?php
class myTemplateController extends BaseController{

	public function index(){
		return View::make('my_template.index');
	}
	public function myVar(){
		//return View::make('my_template.myVar',array('var2'=>'This is my Var.'));
		return View::make('my_template.myVar')
			-> with('var','Tao test method.' ) 
			-> with('var1','This is my var');
	}
	public function myCondition(){
		return View::make('my_template.myCondition')
		->with ('Tao',0);
	}
	public function myLoop(){
		return View::make('my_template.myLoop');
	}
	public function myInclude(){
		return View::make('my_template.myInclude');
	}
	public function myComment(){
		return View::make('my_template.myComment');
	}

}
?>
