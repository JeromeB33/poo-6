<?php

Class Speedometer
{
    public const SPEED_CONVERSION = 0.621;

    public static function convertKmToMiles(int $speed)
    {
        return $speed * self::SPEED_CONVERSION;
    }

    public static function convertMilesToKm(int $speed)
    {
        return $speed / self::SPEED_CONVERSION;
    }
}