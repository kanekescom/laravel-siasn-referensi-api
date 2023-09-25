<?php

namespace Kanekescom\Siasn\Api\Referensi\Models;

use Kanekescom\Helperia\Support\ClassExtender;
use Kanekescom\Siasn\Api\Referensi\Facades\Referensi;
use Kanekescom\Siasn\Api\Referensi\Transformers\KedudukanHukumTransformer;

class KedudukanHukum extends ClassExtender
{
    /**
     * Create a new instance.
     */
    public function __construct($params = [])
    {
        $response = Referensi::getKedudukanHukum($params);
        $data = $response->collect()->get('results');

        $this->class = null;

        if ($response->ok()) {
            $this->class = collect([]);
        }

        if ($response->ok() && is_array($data)) {
            $items = fractal($data, new KedudukanHukumTransformer)->toArray();

            $this->class = collect($items['data']);
        }
    }
}