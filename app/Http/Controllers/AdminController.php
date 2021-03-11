<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $user = DB::table('users')->first();
        $visitDay = 1;
        $visitWeek = 1;
        $visitMonth = 1;
        $visitYear = 1;
        $visitAll = 1;

        return view('admin.index',
            [
                'user' => $user,
                'visitDay' => $visitDay,
                'visitWeek' => $visitWeek,
                'visitMonth' => $visitMonth,
                'visitYear' => $visitYear,
                'visitAll' => $visitAll
            ]
        );
    }
}
