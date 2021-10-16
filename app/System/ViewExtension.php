<?php
/**
 * This file contains the global ViewExtension class
 */

namespace App\System;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Class ViewExtension
 *
 * Adding view functions to twig views and much more!
 *
 * @package Charm\Vivid\Helper
 */
class ViewExtension extends AbstractExtension
{
    /**
     * Set array of all functions to add to twig
     *
     * @return array|TwigFunction[]
     */
    public function getFunctions()
    {
        // Get all functions in this class
        $methods = get_class_methods($this);

        // Methods to ignore (from parent)
        $ignore = [
            'getTokenParsers',
            'getNodeVisitors',
            'getFilters',
            'getTests',
            'getFunctions',
            'getOperators',
            'getAdminMenu'
        ];

        $arr = [];

        // Build array, remove twig methods
        foreach($methods as $method) {
            if(!in_array($method, $ignore)) {
                $arr[$method] = new TwigFunction($method, [$this, $method]);
            }
        }

        return $arr;
    }

    /**
     * Get a random integer in a view (demo method)
     *
     * Use it in a view as {{ getRandomInt(1, 10) }}
     *
     * @param int $min min number
     * @param int $max max number
     *
     * @return int
     */
    public function getRandomInt($min, $max)
    {
        return rand($min, $max);
    }

}