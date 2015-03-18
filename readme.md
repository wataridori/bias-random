BiasRandom for PHP
==========
[![Build Status](https://travis-ci.org/wataridori/bias-random.svg)](https://travis-ci.org/wataridori/bias-random)
[![Latest Stable Version](https://poser.pugx.org/wataridori/bias-random/v/stable.svg)](https://packagist.org/packages/wataridori/bias-random)
[![Total Downloads](https://poser.pugx.org/wataridori/bias-random/downloads.svg)](https://packagist.org/packages/wataridori/bias-random)
[![Latest Unstable Version](https://poser.pugx.org/wataridori/bias-random/v/unstable.svg)](https://packagist.org/packages/wataridori/bias-random)
[![License](https://poser.pugx.org/wataridori/bias-random/license.svg)](https://packagist.org/packages/wataridori/bias-random)

## Requirement
* PHP >= 5.4

## Install

You can install and manage BiasRandom by using `Composer`

```
composer require wataridori/bias-random
```

Or add `wataridori/bias-random` into the require section of your `composer.json` file then run `composer update`

## Usage

```php
$biasRandom = new wataridori/BiasRandom/BiasRandom();
$data = [
    'wataridori' => 10, 
];
$biasRandom->setData($data);
$biasRandom->addElement('Tran', 20);
$biasRandom->addElement('Duc', 30);
$biasRandom->addElement('Thang', 40);

// Random one element with weight.
$biasRandom->random();

// Random two elements
$biasRandom->random(2);
```

## Test
Just run `phpunit` to start test.