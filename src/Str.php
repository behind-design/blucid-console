<?php


namespace Behind\BLucidConsole;

use Lucid\Console\Str as LucidStr;

/**
 * Class Str
 * @package Behind\BLucidConsole
 */
class Str extends LucidStr
{
    /**
     * Get the given name formatted as a model.
     *
     * Model names are just CamelCase
     *
     * @param string $name
     *
     * @return string
     */
    public static function model($name)
    {
        return studly_case($name);
    }

    /**
     * Get the given name formatted as a policy.
     *
     * @param $name
     * @return string
     */
    public static function policy($name)
    {
        return studly_case(preg_replace('/Policy(\.php)?$/', '', $name) . 'Policy');
    }

    /**
     * Get the given name formatted as a request.
     *
     * @param $name
     * @return string
     */
    public static function request($name)
    {
        return studly_case(preg_replace('/Request(\.php)?$/', '', $name) . 'Request');
    }
}