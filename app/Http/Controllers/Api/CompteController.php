<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Compte;


class CompteController extends Controller
{
    public function index()
    {
        return Compte::orderBy('numero')->get();
    }
}
