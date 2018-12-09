<?php
namespace App\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use LaravelSubmigration\Database\Migrations\UpdateMigration;

class CategoryUpdateMigration extends UpdateMigration
{
    protected $table = 'app_category';

    public function create(Blueprint $table)
    {
        $table->integer('parent_id')->unsigned()->after('is_active')->change();
    }
}
