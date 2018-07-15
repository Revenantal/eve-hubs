<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\EVE\SolarSystem;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $data["systems"] = SolarSystem::where([
            ['jita', '<>', 0],
            ['amarr', '<>', 0],
            ['rens', '<>', 0],
            ['hek', '<>', 0],
            ['dodixie', '<>', 0],
        ])->orderBy('security', 'desc')->orderBy('name')->get();
        return view('home', $data);
    }
}
