<?php namespace ErnestWisniewski\LaravelSofort\Facades;

use Illuminate\Support\Facades\Facade;

class Sofort extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'Sofort'; }

}
