BiasRandom for PHP
==========
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
$biasRandom->addElement('Tran', 10);
$biasRandom->addElement('Duc', 30);
$biasRandom->addElement('Thang', 60);

// Random one element with weight.
$biasRandom->random();

// Random two elements
$biasRandom->random(2);
```
