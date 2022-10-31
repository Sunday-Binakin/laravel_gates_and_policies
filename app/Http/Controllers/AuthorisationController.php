<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Response;

class AuthorisationController extends Controller
{
    //
    public function index()
    {
        Gate::allows('isAdmin')? Response::allow():abort(403); //controller guard
        return "You are authorised";
    }
}
