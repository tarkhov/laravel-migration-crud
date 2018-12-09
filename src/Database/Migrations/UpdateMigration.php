<?php
namespace LaravelMigrationInherit\Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

abstract class UpdateMigration extends CrudMigration
{
    /**
     * Update table.
     *
     * @return void
     */
    abstract public function update(Blueprint $table);

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table($this->table, function (Blueprint $table) {
            $this->update($table);
        });
    }
}
