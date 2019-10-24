<?php

/**
 *
 * Created by PhpStorm.
 * @author DL
 * @date   2019/10/24 09:10:23
 */

namespace ggob\dfa;

use Illuminate\Support\ServiceProvider;

class DfaServiceProvider extends ServiceProvider
{

	public function boot(){

	}


	public function register(){
		$this->app->singleton('dfa',function(){
			return new Dfa;
		});
	}

}