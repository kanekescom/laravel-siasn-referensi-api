# Laravel SIASN REFERENSI API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kanekescom/laravel-siasn-referensi-api.svg?style=flat-square)](https://packagist.org/packages/kanekescom/laravel-siasn-referensi-api)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/kanekescom/laravel-siasn-referensi-api/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/kanekescom/laravel-siasn-referensi-api/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/kanekescom/laravel-siasn-referensi-api/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/kanekescom/laravel-siasn-referensi-api/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kanekescom/laravel-siasn-referensi-api.svg?style=flat-square)](https://packagist.org/packages/kanekescom/laravel-siasn-referensi-api)

SIASN REFERENSI REST API Client for Laravel.
This library is the abstraction of SIASN REFERENSI API for access from applications written with Laravel PHP Framework.

## Support us

Want to provide tangible support? Use the following platform to contribute to open-source software developers. Every contribution you make is a significant boost to continue building and enhancing technology that benefits everyone.

- Buy Me a Coffee https://s.id/hadibmac
- Patreon https://s.id/hadipatreon
- Saweria https://s.id/hadisaweria

We highly appreciate you sending us a few cups of coffee to accompany us while writing code. Super, thanks.

## Use pro version

We also offer a professional version. We're excited for you to try it out, as it allows us to consistently deliver high-quality software. Feel free to contact us at kanekescom@gmail.com or @achmadhadikurnia (maintainer) for further information.

- Laravel SIASN Referensi Panel
- Laravel SIASN SIMPEG Panel
- SIMPEGDA App

## Installation

You can install the package via composer:

```bash
composer require kanekescom/laravel-siasn-api
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="siasn-referensi-api-config"
```

This is the contents of the published config file:

```php
// config/siasn-referensi-api.php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Base URL
    |--------------------------------------------------------------------------
    |
    | This base url is used for the SIASN REFERENSI API.
    |
    */

    'base_url' => 'https://apimws.bkn.go.id:8243/referensi_siasn/1',

];
```

Or, all installations can be completed with the installation command:

```bash
php artisan siasn-referensi-api:install
```

## Usage

### Get data using console

Get referensi data from SIASN

```bash
php artisan siasn-referensi:get
```

Get specific endpoint referensi data from SIASN

```bash
php artisan siasn-referensi:get agama
```

Available endpoints:
- agama
- alasan-hukuman-disiplin
- asn-jenis-jabatan
- asn-jenjang-jabatan
- eselon
- golongan
- instansi
- jabatan-fungsional
- jabatan-fungsional-umum
- jenis-anak
- jenis-hukuman
- jenis-jabatan
- kanreg
- kedudukan-hukum
- kel-jabatan
- latihan-struktural
- lokasi
- pendidikan
- ref-dokumen
- ref-jenjang-jf
- satuan-kerja
- tingkat-pendidikan
- jenis-diklat

Optional:
- `--limit=n` limit n number of records
- `--offset=n` offset n number of records


### Get data using `Referensi` class

Get referensi data from API

```php
use Kanekescom\Siasn\Referensi\Api\Referensi;

$limit = 10;
$offset = 0;

// get list of agama
Referensi::getAgama([
    'limit' => $limit,
    'offset' => $offset,
]);

// get list of alasan hukuman disiplin
Referensi::getAlasanHukumanDisiplin([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of asn jenis jabatan
Referensi::getAsnJenisJabatan([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of asn jenjang jabatan
Referensi::getAsnJenjangJabatan([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of eselon
Referensi::getEselon([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of golongan
Referensi::getGolongan([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of instansi
Referensi::getInstansi([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of jabatan fungsional
Referensi::getJabatanFungsional([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of jabatan fungsional umum
Referensi::getJabatanFungsionalUmum([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of jenis anak
Referensi::getJenisAnak([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of jenis diklat
Referensi::getJenisDiklat([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of jenis hukuman
Referensi::getJenisHukuman([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of jenis jabatan
Referensi::getJenisJabatan([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of kanreg
Referensi::getKanreg([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of kedudukan hukum
Referensi::getKedudukanHukum([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of kel jabatan
Referensi::getKelJabatan([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of latihan struktural
Referensi::getLatihanStruktural([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of lokasi
Referensi::getLokasi([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of pendidikan
Referensi::getPendidikan([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of ref dokumen
Referensi::getRefDokumen([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of ref jenjang jf
Referensi::getRefJenjangJf([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of satuan kerja
Referensi::getSatuanKerja([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of tingkat pendidikan
Referensi::getTingkatPendidikan([
    'limit' => $limit,
    'offset' => $offset,
]);
```

## Testing

```bash
composer test
```

## Our other cool packages

Need a package for other BKN's Web Service APIs? Consider installing our packages for seamless integration.

### Referensi APIs

- https://github.com/kanekescom/laravel-siasn-referensi-api as API client

- https://github.com/kanekescom/laravel-siasn-referensi as backend

### SIASNAPI-SIMPEG APIs

- https://github.com/kanekescom/laravel-siasn-simpeg-api as API client

- https://github.com/kanekescom/laravel-siasn-simpeg as backend

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Achmad Hadi Kurnia](https://github.com/kanekescom)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
