<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
   public function index(User $user)
   {
      $user=User::count();

      return view('admin.dashbord',[
         'user'=>$user
      ]);
   }
}
