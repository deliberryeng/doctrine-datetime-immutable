<?php

namespace Deliberry\Doctrine\DateTimeImmutable;

use Doctrine\DBAL\Types\DateTimeType;

class DateTimeImmutableType extends DateTimeType
{
    use DateTimeImmutableTypeTrait;
}
