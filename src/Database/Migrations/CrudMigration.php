<?php
namespace LaravelMigrationInherit\Database\Migrations;

use Illuminate\Database\Migrations\Migration;

abstract class CrudMigration extends Migration
{
    protected $table = null;
}
