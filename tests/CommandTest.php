<?php

it('can not get doesnt exist endpoint', function () {
    $this->artisan('siasn-referensi:get doesnt-exist-endpoint --limit=10')->assertSuccessful();
})->throws(\Kanekescom\Siasn\Api\Referensi\Exceptions\BadEndpointCallException::class);

it('can not get doesnt exist endpoint and in the question, choose to exit', function () {
    $this->artisan('siasn-referensi:get --limit=10')
        ->expectsQuestion('What do you want to call endpoint?', 'exit')
        ->assertSuccessful();
});

$class = new ReflectionClass(\Kanekescom\Siasn\Api\Referensi\Referensi::class);
$methods = array_filter($class->getMethods(), function ($method) {
    return ! $method->isConstructor()
        && ! $method->isDestructor()
        && ! $method->isInternal()
        && strpos($method->name, '__') !== 0;
});
$methodNames = array_map(function ($method) {
    return \Illuminate\Support\Str::of($method->getName())
        ->kebab()
        ->replaceFirst('get-', '');
}, $methods);

foreach ($methodNames as $endpoint) {
    $testName = \Illuminate\Support\Str::of($endpoint)->headline()->lower();

    it("can {$testName}", function () use ($endpoint) {
        $this->artisan("siasn-referensi:get {$endpoint} --limit=10")
            ->expectsQuestion('Write json for filter! (Optional)', '')
            ->assertSuccessful();

        $this->artisan('siasn-referensi:get --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', (string) $endpoint)
            ->expectsQuestion('Write json for filter! (Optional)', '')
            ->assertSuccessful();
    });

    it("can not {$testName} because invalid json", function () use ($endpoint) {
        $this->artisan("siasn-referensi:get {$endpoint} --limit=10")
            ->expectsQuestion('Write json for filter! (Optional)', fake()->word())
            ->assertSuccessful();

        $this->artisan('siasn-referensi:get --limit=10')
            ->expectsQuestion('What do you want to call endpoint?', (string) $endpoint)
            ->expectsQuestion('Write json for filter! (Optional)', fake()->word())
            ->assertSuccessful();
    });
}
