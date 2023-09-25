<?php

namespace Kanekescom\Siasn\Api\Referensi\Facades;

use Illuminate\Support\Facades\Facade;
use Kanekescom\Siasn\Api\Referensi\Referensi as ReferensiBuilder;

class Referensi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @see \Kanekescom\Siasn\Api\Referensi
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ReferensiBuilder::class;
    }
}
