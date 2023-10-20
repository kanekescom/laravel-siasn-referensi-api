<?php

$class = new ReflectionClass(\Kanekescom\Siasn\Api\Referensi\Referensi::class);
$methods = array_filter($class->getMethods(), function ($method) {
    return ! $method->isConstructor()
        && ! $method->isDestructor()
        && ! $method->isInternal()
        && strpos($method->name, '__') !== 0;
});
$methodNames = array_map(function ($method) {
    return $method->getName();
}, $methods);

foreach ($methodNames as $method) {
    $testName = \Illuminate\Support\Str::of($method)->headline()->lower();

    it("can {$testName}", function () use ($method) {
        $limit = 10;
        $offset = 0;
        $response = \Kanekescom\Siasn\Api\Referensi\Facades\Referensi::$method([
            'limit' => $limit,
            'offset' => $offset,
        ]);
        $result = $response->collect()->toArray();

        expect($response->successful())->toBeTrue();
        expect($result)->toBeArray();
        // Not all endpoints have the same response format
        // expect($result)->toMatchArray([
        //     'limit' => $limit,
        //     'offset' => $offset,
        // ]);
    });
}
