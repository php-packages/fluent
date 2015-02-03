# Fluent [![Build Status](https://travis-ci.org/php-packages/fluent.svg?branch=master)](https://travis-ci.org/php-packages/fluent)

## Navigation

- [Installation](#installation)
- [Usage](#usage)
- [Additional information](#additional-information)

## Installation

```shell
composer require php-packages/fluent
```

## Usage

```php
class A
{

    use \PhpPackages\Fluent\FluentTrait;
}

$a = new A;

$a->should->do->something("useful");
$a->getFluent()->getCalls(); # => ["should", "do", ["something", ["useful"]]]
$a->getFluent()->clearCalls();

$a->_jump_and_scream();
$a->postCatsInInstagram();
$a->getFluent()->getCalls(); # => ["jump", "and", "scream", "post", "cats", "in", "instagram"]
$a->getFluent()->clearCalls();

$a->doThat()->and()->doThis(123, null);
$a->getFluent()->getCalls(); # => ["do", "that", "and", "do", ["this", [123, null]]]
```

## Additional information

*Fluent* is licensed under the MIT license.
