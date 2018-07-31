<?php
/**
 * This file contains the basic configuration.
 */

namespace App;

use App\Models\User;
use Charm\Vivid\Kernel\EngineManager;
use Charm\Vivid\Kernel\Interfaces\ModuleInterface;

/**
 * Class Engine
 *
 * @package App
 */
class Engine extends EngineManager implements ModuleInterface
{
    /**
     * Engine constructor.
     */
    public function __construct()
    {
        // Set the environment for configuration
        //
        // This value must be identic with the sub directory
        // inside app/Config/Environments.
        //
        // A file 'app.env' inside the app directory will
        // override this value with it's content.
        // Make sure this will be gitignored.
        // This can be used e.g. on production servers where
        // you deploy via deployer, git or something similar.

        $this->setEnvironment('Local');
    }

    /**
     * Load the module
     */
    public function loadModule()
    {
        // Nothing to do yet.
    }
}