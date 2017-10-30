# Extension PHP library for Plesk API-RPC demo

[![Apache 2](http://img.shields.io/badge/license-Apache%202-blue.svg)](http://www.apache.org/licenses/LICENSE-2.0)

A test extension intended to demonstrate how to use PHP library for Plesk API-RPC

## How to use PHP library for Plesk API-RPC in your extension

1. Add composer.json with require of plesk/api-php-lib
2. Add use PleskX\Api\InternalClient in you PHP file (controller or library class)
3. Use necessary API calls

You can find an example in src/plib/controllers/IndexController.php

## PHP library for Plesk API-RPC

Source coude of the library is [here](https://github.com/plesk/api-php-lib). You are welcome to contribute!
