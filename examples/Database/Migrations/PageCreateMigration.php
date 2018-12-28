<?php
namespace App\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use LaravelSubMigration\Database\Migrations\CreateMigration;

class PageCreateMigration extends CreateMigration
{
    protected $table = 'app_page';

    public function create(Blueprint $table)
    {
        $table->increments('id');
        $table->string('slug', 255)->unique();
        $table->boolean('is_active')->default(1);
        $table->timestamps();
        $table->string('name', 255);
        $table->text('description');
        $table->string('image', 255)->nullable();
        $table->string('head_title', 255);
        $table->string('meta_description', 255);
        $table->string('meta_keywords', 255);
    }
}
