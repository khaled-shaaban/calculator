# :Introduction

Laravel Calculator package with only + & - operations.

This package was developed for learning purposes.

## Installation

You can install the package via composer:

```bash
composer require khaledshaaban/calculator
```

## Usage

```php
use KhaledShaaban\Calculator\Facades\Calculator;
$result = Calculator::add(4)->subtract(5)->getResult();
```

## Available Methods

```php
Calculator::add(int $number)
Calculator::subtract(int $number)
Calculator::clear() //reset to 0 
Calculator::getResult()
```

## Testing

```bash
composer test
```