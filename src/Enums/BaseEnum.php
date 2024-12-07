<?php

namespace Record\Stuberator\Enums;

trait BaseEnum
{
    /**
     * Retrieves all the values of the enum cases.
     *
     * @return array An array containing the values of all enum cases.
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }


    /**
     * Retrieves an array of all enum case names.
     *
     * This method returns a list of all the names of the enum cases
     * defined in the StripeAccountType enum.
     *
     * @return array An array containing the names of all enum cases.
     */
    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }


    /**
     * Converts the enum cases to an associative array.
     *
     * This method creates an array where the keys are the names of the enum cases
     * and the values are the corresponding enum values.
     *
     * @return array An associative array where keys are enum case names and values are enum case values.
     */
    public static function toArray(): array
    {
        return array_combine(
            array_column(self::cases(), 'name'),
            array_column(self::cases(), 'value')
        );
    }
}
