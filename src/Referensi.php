<?php

namespace Kanekescom\Siasn\Api\Referensi;

use Kanekescom\Helperia\Support\ClassExtender;
use Kanekescom\Siasn\Api\Facades\Siasn;
use Kanekescom\Siasn\Api\Referensi\Traits\HasEndpoint;
use Kanekescom\Siasn\Api\Referensi\Traits\HasSearchEndpoint;

class Referensi extends ClassExtender
{
    use HasEndpoint;
    use HasSearchEndpoint;

    /**
     * Create a new instance.
     */
    public function __construct()
    {
        $this->class = Siasn::baseUrl(config('siasn_referensi_api.base_url'));
    }
}
