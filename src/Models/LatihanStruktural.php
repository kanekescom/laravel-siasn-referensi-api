<?php

namespace Kanekescom\Siasn\Api\Referensi\Models;

use Kanekescom\Helperia\Support\ClassExtender;
use Kanekescom\Siasn\Api\Referensi\Facades\Referensi;
use Kanekescom\Siasn\Api\Referensi\Transformers\LatihanStrukturalTransformer;

class LatihanStruktural extends ClassExtender
{
    /**
     * Create a new instance.
     */
    public function __construct($params = [])
    {
        $response = Referensi::getLatihanStruktural($params);
        $data = $response->collect()->get('results');

        $this->class = null;

        if ($response->ok()) {
            $this->class = collect([]);
        }

        if ($response->ok() && is_array($data)) {
            $items = fractal($data, new LatihanStrukturalTransformer)->toArray();

            $this->class = collect($items['data']);
        }
    }
}
