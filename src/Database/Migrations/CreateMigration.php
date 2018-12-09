<?php
namespace LaravelMigrationInherit\Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

abstract class CreateMigration extends CrudMigration
{
    /**
     * Create table.
     *
     * @return void
     */
    abstract public function create(Blueprint $table);

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $this->create($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
