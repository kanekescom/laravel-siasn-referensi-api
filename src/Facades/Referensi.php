<?php

namespace Kanekescom\Siasn\Referensi\Api\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kanekescom\Siasn\Referensi\Api\Referensi
 */
class Referensi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kanekescom\Siasn\Referensi\Api\Referensi::class;
    }
}
