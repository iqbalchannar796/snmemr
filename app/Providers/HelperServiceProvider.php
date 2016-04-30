<?php

namespace App\Providers;
use App;
//use App\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{

    protected $helpers = [
        // Add your helpers in here
       // "app/Http/Helpers/helper.php",
      //  "app/Http/Helpers/helper1.php"
          "Helpers/helper",
          "Helpers/helper1",
//          "Libraries/DateTimeFormat"
    ];
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       // $companyName = Option::find(1);
       // $copyRight = Option::find(2);
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('DateTimeFormat', 'App\Http\Libraries\DateTimeFormat');
        if( !App::runningInConsole() )
        {

           // $catNav = Category::all();
           // view()->share('catNav', $catNav);
          //  View::share('fun', 'ddddddddd');
            // view()->share('copyRight', $copyRight);
        }

    }

    /**
     * Register the application services.
     *
     * @return void
     */


    public function register()
    { //Http/Helper/
        foreach ($this->helpers as $helper) {
            $helper_path = $this->app->basePath().'/app/Http/'.$helper.'.php';

            if (\File::isFile($helper_path)) { ////here we use mapper for if file not found the system will run somothly
                require_once $helper_path;
            }
        }





       // foreach (glob($this->app->basePath().'/app/Http/Helpers/*.php') as $filename){ /// here will crush ths system if not found file
        //    require_once($filename);
      //  }
    }
}
