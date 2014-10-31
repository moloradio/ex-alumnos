<?php

class LogginController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function login() {
		return View::make('div_izquierdo/login');
	}
}
