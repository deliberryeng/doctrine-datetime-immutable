deliberry/doctrine-datetime-immutable
=====================================

Start using `DateTimeImmutable` in your Doctrine entities instead of the error prone `DateTime`.

`DateTime` mutability is the source of many bugs and erratic behaviour, two of the most heinous are:
- Sharing instances of `DateTime` between objects. When one changes, so does the others.
- Doctrine cannot detect if a `DateTime` had changed internally, you must replace with another instance. (ring a bell?)

Solution
--------
This library adds support for `DateTimeImmutable` to Doctrine types `date`, `datetime` and `datetimetz`.
You may load only some of them or change the name they map to.
Can be used as a full replacement or as an addition to the default ones.

Installation
------------
Just your regular composer setup: `composer require deliberry/doctrine-datetime-immutable`

Setup
-----

### Symfony

Just add type mapping to your `doctrine.dbal` configuration:

```php

doctrine:
    dbal:
        types:
            date: Deliberry\Doctrine\DateTimeImmutable\DateImmutableType
            datetime: Deliberry\Doctrine\DateTimeImmutable\DateTimeImmutableType
            datetimetz: Deliberry\Doctrine\DateTimeImmutable\DateTimeTzImmutableType
```

### Without Symfony

Add the following initialization:

```php
use Doctrine\DBAL\Types\Type;

Type::addType('date',       'Deliberry\Doctrine\DateTimeImmutable\DateImmutableType');
Type::addType('datetime',   'Deliberry\Doctrine\DateTimeImmutable\DateTimeImmutableType');
Type::addType('datetimetz', 'Deliberry\Doctrine\DateTimeImmutable\DateTimeTzImmutableType');
```
