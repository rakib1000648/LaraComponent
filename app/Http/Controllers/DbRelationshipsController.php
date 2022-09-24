<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DbRelationshipsController extends Controller
{
    public function index()
    {
        // $data = User::with('contact')->first();
        $data = User::with(['contact','post'])->find(2)->toArray();
        
        
        
        
        // dd($data);

        return $data;
    }
}
