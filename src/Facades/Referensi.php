<?php

namespace Kanekescom\Siasn\Api\Referensi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kanekescom\Siasn\Api\Referensi\Referensi
 */
class Referensi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kanekescom\Siasn\Api\Referensi\Referensi::class;
    }
}
