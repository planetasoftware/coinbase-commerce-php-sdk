coinbase-commerce-php-sdk
=================================

This SDK is a way to simplify the usage of Coinbase Commerce REST API for your web application.

About Coinbase Commerce
-------------

Coinbase Commerce is the easiest and safest way for your business to start accepting digital currency payments.
For more info go to [Coinbase Commerce API reference page](https://commerce.coinbase.com/docs/)

Available Endpoints
-------------------

The following are the endpoints available
    
### Charge
    POST /api/charge
    GET /api/charge
### Checkout
    POST /api/checkout
    GET /api/checkout

Instalation
-----------

The coinbase-commerce-php-sdk is available at GitHub. 
It requires [PHP Guzzle](http://docs.guzzlephp.org/en/latest/) and PHP 5.6 or later.

You will need to use [Composer](https://getcomposer.org/) to install
dependencies. Assuming you already have Composer:

### Via Composer command

```bash
$ composer require planetasoftware/coinbase-commerce-php-sdk
```

### Via Composer update/install

To use the Coinbase Commerce PHP SDK from Composer:
* Add a `composer.json` file to your project and link to Coinbase Commerce:

```json
{
    "require": {
        "planetasoftware/coinabse-commerce-php-sdk": "*"
    }
}
```

Run `composer install` or `composer update` to download the latest version and dependencies.

### Via Git (clone)

First, clone the repository:

```bash
# git clone https://github.com/planetasoftware/coinbase-commerce-php-sdk.git # optionally, specify the directory in which to clone
$ cd path/to/install
```

Then, you can run the composer command to install:

```bash
$ composer install
```

Usage
-----

### Architecture

The SDK has a very simple architecture:

      HTTP Client       to communicate with Coinbase Commerce servers
      Models            Data Objects, to hold and transport data

### Using the SDK

Below you can find an example for the Charge endpoint ( \charge )

```
<?php

// Include Composer autoload
require_once ('vendor/autoload.php');

// Create a Http client
$client = new \PlanetaSoftware\Coinbase\Commerce\Client('{your API Key}');

// Create a Coinbase Commerce Manager
$coinbase_commerce = new \PlanetaSoftware\Coinbase\Commerce\Manager($client);

// Prepare the charge
$charge = new \PlanetaSoftware\Coinbase\Commerce\Model\Charge();

// Create local price
$money = new \PlanetaSoftware\Coinbase\Commerce\Model\Money();
$money->SetAmount('5.00');
$money->SetCurrency('USD');

$charge->setName('$5 Talk Credits');
$charge->setDescription('Talk to Anyone, Anytime!');
$charge->setPricingType('fixed_price');
$charge->setLocalPrice($money);
$charge->setRedirectUrl('{https://your.site.com}');
//Developer defined key value pairs
$charge->setMetadata(['key'=>'value']);

try{
    // Create the Coinbase Commerce charge request
    $chargeResponse = $coinbase_commerce->createCharge($charge); 
}catch(\Exception $ex){
    echo $ex->getMessage();
}

// Print charge resource object response
var_dump($chargeResponse);

```
### Hosted URL
![](https://s3.amazonaws.com/ntedata/svn/coinbasecommerce_sdk1.png)

### Congratulations, You're done!

Any questions regarding the Coinbase Commerce PHP SDK , don't hesitate to contact us at developers@planetasoftware.com
