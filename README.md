# Eda class reflection extension for PHPStan

* [PHPStan](https://phpstan.org/)

This extension defines dynamic methods on `Eda\Flow` instance. They are called to build an SQL query dynamically.

## Installation

To use this extension, require it in [Composer](https://getcomposer.org/):

```
composer require --dev phpstan/phpstan-eda
```

If you also install [phpstan/extension-installer](https://github.com/phpstan/extension-installer) then you're all set!

<details>
  <summary>Manual installation</summary>

If you don't want to use `phpstan/extension-installer`, include extension.neon in your project's PHPStan config:

```
includes:
    - vendor/phpstan/phpstan-eda/extension.neon
```
</details>
