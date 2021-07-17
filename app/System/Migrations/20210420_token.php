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
class TokenTable extends Migration
{
    /** @var string the table name */
    protected $tablename = 'token';

    /**
     * Run the migration (if table is not existing)
     */
    public function up()
    {
        if (!$this->database->hasTable($this->tablename)) {
            $this->database->create($this->tablename, function (Blueprint $table) {
                $table->increments('id');

                $table->string('type', 50);

                // The token. Length 64 = 32 byte
                $table->string('token', 64);

                // User relation
                $table->integer('user_id')->unsigned();

                // Optional custom data
                $table->text('custom_data')->nullable();

                // Expiration
                $table->dateTime('expiration');

                $table->timestamps();
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