<?php
/**
 * This file contains all filters
 */

use \Charm\Vivid\Router\Elements\Filter;

// Filters
$filters = [
    'auth' => "\\App\\System\\Middleware\\Auth::checkAuth",
];

foreach($filters as $name => $callback) {
    Filter::add($name, $callback);
}