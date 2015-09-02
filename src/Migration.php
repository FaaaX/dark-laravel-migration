<?php namespace dark\DarkMigration;

use Illuminate\Database\Migrations\Migration as BaseMigration;
use Illuminate\Support\Facades\Artisan;

abstract class Migration extends BaseMigration
{

    public function __construct() {
        Artisan::call('cache:clear');
    }

}