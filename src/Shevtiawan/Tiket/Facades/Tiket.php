<?php namespace Shevtiawan\Tiket\Facades;

use Illuminate\Support\Facades\Facade;

class Tiket extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'tiket';
	}

}
