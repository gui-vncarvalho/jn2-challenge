<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $clients = Client::query();

        $clients->when($request->search, function($query, $vl){
            $query->where('id', 'like', '%' . $vl . '%');
        });

        $clients = $clients->get();

        return view('home', [
            'clients' => $clients
        ]);
    }
}
