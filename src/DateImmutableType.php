<?php

namespace Deliberry\Doctrine\DateTimeImmutable;

use Doctrine\DBAL\Types\DateType;

class DateImmutableType extends DateType
{
    use DateTimeImmutableTypeTrait;
}
