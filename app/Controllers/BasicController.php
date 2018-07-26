<?php
/**
 * This file contains the BasicController class
 */

namespace App\Controllers;

use Charm\Vivid\Controller;
use Charm\Vivid\Kernel\Output\View;

/**
 * Class BasicController
 *
 * Handling basic endpoints
 *
 * @package App\Controllers
 */
class BasicController extends Controller
{
    /**
     * Show index.
     *
     * @route index
     *
     * @return View
     */
    public function getIndex()
    {
        return View::make('index')->with([

        ]);
    }

}