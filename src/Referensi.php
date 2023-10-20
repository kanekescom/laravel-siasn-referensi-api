<?php

namespace Kanekescom\Siasn\Api\Referensi;

use Kanekescom\Helperia\Support\ClassExtender;
use Kanekescom\Siasn\Api\Facades\Siasn;
use Kanekescom\Siasn\Api\Referensi\Traits\HasEndpoint;

class Referensi extends ClassExtender
{
    use HasEndpoint;

    /**
     * Create a new instance.
     */
    public function __construct()
    {
        $this->class = Siasn::baseUrl(config('siasn-referensi-api.base_url'));
    }
}
