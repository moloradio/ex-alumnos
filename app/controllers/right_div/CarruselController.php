<?php

class CarruselController extends BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function carrusel() {
		return View::make('div_derecho/carrusel');
	}
}
