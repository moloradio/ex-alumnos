<?php

class LogginController extends BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function login() {
		return View::make('div_izquierdo/login');
	}
}
