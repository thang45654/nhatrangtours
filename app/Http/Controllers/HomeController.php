<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\Admin\TourController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	if (!auth('api')->check()) {
			return redirect()->route('login');
		}
        $role = auth()->user()->role;

        if ($role === 'admin') {
            return app(TourController::class)->index();
        }

        return app(PartnersController::class)->index();
    }

}
