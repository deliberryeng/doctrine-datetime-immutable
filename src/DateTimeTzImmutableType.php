<?php

namespace Deliberry\Doctrine\DateTimeImmutable;

use Doctrine\DBAL\Types\DateTimeTzType;

class DateTimeTzImmutableType extends DateTimeTzType
{
    use DateTimeImmutableTypeTrait;
}
