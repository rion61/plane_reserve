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

        public function airplane_reserve(Request $request)
        {
            $users = User::orderBy('created_at', 'asc')->get();
            return view('airplane_reserve', [
                'users' => $users,
            ]);
        }
        // public function plane_create(Request $request)
        // {
        //     $users = User::orderBy('created_at', 'asc')->get();
        //     return view('plane_create', [
        //         'users' => $users,
        //     ]);
        // }
        public function airplane_check(Request $request)
        {
            $users = User::orderBy('created_at', 'asc')->get();
            return view('airplane_check', [
                'users' => $users,
            ]);
        }
        public function airplane_edit(Request $request)
        {
            $users = User::orderBy('created_at', 'asc')->get();
            return view('airplane_edit', [
                'users' => $users,
            ]);
        }
        public function manager_profile_edit(Request $request)
        {
            $users = User::orderBy('created_at', 'asc')->get();
            return view('manager_profile_edit', [
                'users' => $users,
            ]);
        }
        public function airplane_list(Request $request)
        {
            $users = User::orderBy('created_at', 'asc')->get();
            return view('airplane_list', [
                'users' => $users,
            ]);
        }
        public function reserve_list(Request $request)
        {
            $users = User::orderBy('created_at', 'asc')->get();
            return view('reserve_list', [
                'users' => $users,
            ]);
        }
        public function member_list(Request $request)
        {
            $users = User::orderBy('created_at', 'asc')->get();
            return view('member_list', [
                'users' => $users,
            ]);
        }
        public function reservation_person_list(Request $request)
        {
            $users = User::orderBy('created_at', 'asc')->get();
            return view('reservation_person_list', [
                'users' => $users,
            ]);
        }
        public function airplane_choice(Request $request)
        {
            $users = User::orderBy('created_at', 'asc')->get();
            return view('airplane_choice', [
                'users' => $users,
            ]);
        }
        public function welcome(Request $request)
        {
            $users = User::orderBy('created_at', 'asc')->get();
            return view('welcome', [
                'users' => $users,
            ]);
        }
}

