<?php
namespace App\Providers;

use DB;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
public function boot()
{
view()->composer('layout', function($view) {
$doctors = DB::table('doctors')->get();
$view->with('doctors', $doctors);
});
}
}