<?php
class ExamController extends BaseController{
	public function index(){
		return '"index" Method From "ExamController naja.';
	}
	public function myView(){
		return View::make ('exam.myView');
	}
	public function showVar(){
		return View::make('exam.showVar',array(
			'var'=>'1234'
			));
	}
	public function showVarWithMethod(){
		return View::make('exam.showVarWithMethod')
			->with('var','abc_1234');
	}
}
?>