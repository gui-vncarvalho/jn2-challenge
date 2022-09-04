<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class PlateSearchControler extends Controller
{
    public function show(Client $client, Request $request)
    {
        $clients = Client::query();

        $clients->when($request->search, function($query, $vl){
            $query->where('plate', 'like', '%'.$vl);
        });


        $clients = $clients->get();

        return view('numero', [
            'numero' => $client
        ]);
    }
}
