<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class SystemController extends Controller
{
      /**
        * 
        *
        * @param Request $request
        * @return Response
        */
        public function managerhome(Request $request)
        {
            $users = User::orderBy('created_at', 'asc')->get();
            return view('managerhome', [
                'users' => $users,
            ]);
        }
}

