<?php
/**
 * This file contains a database table migration.
 */

namespace App\System\Migrations;

use Charm\Vivid\Base\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Migration class
 */
class Users extends Migration
{
    /** @var string the table name */
    protected $tablename = 'users';

    /**
     * Run the migration (if table is not existing)
     */
    public function up()
    {
        if (!$this->database->hasTable($this->tablename)) {
            $this->database->create($this->tablename, function (Blueprint $table) {
                $table->increments('id');

                // Basic fields
                $table->string('email');
                $table->string('password');
                $table->string('secret', 128)->nullable(); // 2FA secret

                // User data
                $table->integer('gender')->nullable(); // 1 - male, 2 - female
                $table->string('name')->nullable();

                // API token
                $table->string('api_token')->nullable();

                $table->timestamps();
                $table->softDeletes();
            });

        }
    }

    /**
     * Revert everything
     */
    public function down()
    {
        $this->database->dropIfExists($this->tablename);
    }
}