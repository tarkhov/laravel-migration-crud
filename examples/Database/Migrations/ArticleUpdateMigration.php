<?php
namespace App\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use LaravelSubmigration\Database\Migrations\UpdateMigration;

class ArticleUpdateMigration extends UpdateMigration 
{
    protected $table = 'app_article';

    public function update(Blueprint $table)
    {
        $table->integer('category_id')->unsigned()->after('is_active')->change();
    }
}
