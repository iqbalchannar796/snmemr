<?php

namespace App\Http\Controllers;
//use App\Category;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;
class Controller extends BaseController
{

   public function __construct()
   {
      // $catNav = Category::all();
      // view()->share('catNav', $catNav);
       View::share('pakistan','it is great contruy asdf sdf asdf asdf a');
   }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

}
