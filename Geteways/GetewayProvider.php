<?php
namespace Phpanonymous\Geteways;

use Illuminate\Support\ServiceProvider;

class GetewayProvider extends ServiceProvider {

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */

	public function boot() {
		$this->publishes([__DIR__ . '/publish/config' => base_path('config')]);
	}

	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register() {

	}

	public function provides() {

	}

}
