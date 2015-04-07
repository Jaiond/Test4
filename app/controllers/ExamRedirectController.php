<?php
class ExamRedirectController extends BaseController{
	public function display(){
		return View::make('eaxm_redirect.display');
	}
	public function goToDisplay(){
		return Redirect::to('display');
	}
	public function getText(){
		return View::make('eaxm_redirect.getText');
	}
	public function setText(){
		return Redirect::to('getText')
			-> with('text','Test Text flash massage');
	}
}
?>