<?php

namespace App\Http\Controllers;

use App\Users;
use App\Skill;

class UsersController extends Controller
{

  public function afficher()
  {

  $users = auth()->user();

    return view('users', [
    'users' => $users, 
    ]);

  }

  public function btn_skill()
    {
      $skills = Skill::all();
      return view('skills', [
        'skills' => $skills,
       ]);
        
    }
}