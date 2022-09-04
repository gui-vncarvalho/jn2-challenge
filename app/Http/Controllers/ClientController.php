<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function show(Client $client)
    {
        return view('client', [
            'client' => $client
        ]);
    }
}
