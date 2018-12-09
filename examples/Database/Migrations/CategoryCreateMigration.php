<?php
namespace App\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;

class CategoryCreateMigration extends PageCreateMigration 
{
    protected $table = 'app_category';

    public function create(Blueprint $table)
    {
        parent::create($table);
        $table->integer('parent_id')->unsigned();
    }
}
