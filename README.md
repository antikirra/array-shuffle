# Consistent parameterized array shuffling for PHP
Using a numerical representation of anything (whether it's a client's IP address, a date in the format YYYYMMDD, or a unique user identifier), you can generate a deterministic array of data sorted in a pseudorandom manner. This can be useful for implementing both business tasks and writing tests.

> Be cautious when using associative arrays, deeply nested arrays, or arrays containing objects. The implementation of this library does not guarantee predictable results in all of the mentioned cases. Special attention is given to simplicity of implementation and data processing speed.

## Install

```console
composer require antikirra/array-shuffle
```

## Basic usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

// only if the function has not been defined in the global scope
array_shuffle($array, 100500);

// if the function could not be defined globally
\Antikirra\array_shuffle($array, 100500);

// under the hood
\Antikirra\ArrayShuffle\ArrayShuffle::shuffle($array, 100500);
```

## Demo

```php
<?php

require __DIR__ . '/vendor/autoload.php';

$array = [0, 2, 6, 1, 8, 9, 5, 4, 3, 7];

$seed = 100500;

$array1 = array_shuffle($array, $seed);

print_r($array1); // [1, 2, 4, 7, 8, 6, 5, 3, 9, 0]

$array2 = $array1;

for ($i = 0; $i < $seed; $i++) {
    shuffle($array2);
}

$array3 = array_shuffle($array2, $seed);

print_r($array3); // [1, 2, 4, 7, 8, 6, 5, 3, 9, 0]

var_dump($array1 === $array3); // true
```
