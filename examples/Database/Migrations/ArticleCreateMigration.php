<?php
namespace App\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;

class ArticleCreateMigration extends PageCreateMigration 
{
    protected $table = 'app_article';

    public function create(Blueprint $table)
    {
        parent::create($table);
        $table->integer('category_id')->unsigned();
        $table->foreign('category_id')->references('id')->on('app_category');
    }
}
