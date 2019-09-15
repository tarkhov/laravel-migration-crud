# Laravel submigration

Laravel database migration inheritance.

### Contents

1. [Compatibility](#compatibility)
2. [Installation](#installation)
   1. [Composer](#composer)
3. [Usage](#usage)
   1. [Create table](#create-table)
   2. [Create subtable](#create-subtable)
   2. [Update table columns](#update-table-columns)
4. [Author](#author)
5. [License](#license)

## Compatibility

Library | Version
------- | -------
Laravel | >=5.5

## Installation

### Composer

```bash
composer require tarkhov/laravel-submigration
```

## Usage

### Create table

```php
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
```

### Create subtable

```php
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
    }
}
```

### Update table columns

```php
<?php
namespace App\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use LaravelSubMigration\Database\Migrations\UpdateMigration;

class ArticleUpdateMigration extends UpdateMigration 
{
    protected $table = 'app_article';

    public function update(Blueprint $table)
    {
        $table->integer('category_id')->unsigned()->after('is_active')->change();
    }
}
```

## Author

**Alexander Tarkhov**

* [Facebook](https://www.facebook.com/alex.tarkhov)
* [Twitter](https://twitter.com/alextarkhov)
* [Medium](https://medium.com/@tarkhov)

## License

This project is licensed under the **MIT License** - see the `LICENSE` file for details.
