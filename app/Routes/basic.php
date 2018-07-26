<?php
/**
 * This file contains all basic site routes
 */

use \Charm\Vivid\Router\Elements\Route;

Route::get('index')
    ->url('/')
    ->call('BasicController.getIndex');
