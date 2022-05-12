<?php

namespace App\Http\Controllers;

use App\Models\User;

class HighChartController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $users = User::selectRaw('YEAR(created_at) as year,COUNT(*) as count')->groupBy('year')->get();

        $data = [
            'year' => json_encode($users->pluck('year')),
            'user' => json_encode($users->pluck('count')),
        ];

        return view('chart',$data);
    }
}
