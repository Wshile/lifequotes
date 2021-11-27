# CoinMc-laravel 
[![PHP version](https://badge.fury.io/ph/andskur%2Fcoinmc.svg)](https://badge.fury.io/ph/andskur%2Fcoinmc)
[![Latest Stable Version](https://poser.pugx.org/andskur/coinmc/v/stable)](https://packagist.org/packages/andskur/coinmc)

**CoinMc-laravel** is a sCoinMarketCap.com api wrapper for Laravel 5.4

## Install

    composer require andskur/coinmc

### Configuration

After installing, register the `Andskur\CoinMc\CoinMcServiceProvide` in your `config/app.php` configuration file:

```php
'providers'