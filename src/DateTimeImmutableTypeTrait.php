<?php

namespace Deliberry\Doctrine\DateTimeImmutable;

use DateTimeImmutable;
use Doctrine\DBAL\Platforms\AbstractPlatform;

trait DateTimeImmutableTypeTrait
{
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        $value = parent::convertToPHPValue($value, $platform);
        if ($value === null) {
            return $value;
        }

        return DateTimeImmutable::createFromMutable($value);
    }
}
