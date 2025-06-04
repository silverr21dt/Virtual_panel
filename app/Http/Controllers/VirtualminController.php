<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class VirtualminController extends Controller
{
    public function listDomains()
    {
        $response = Http::withBasicAuth(env('VIRTUALMIN_USER'), env('VIRTUALMIN_PASS'))
                        ->withoutVerifying()
                        ->get(env('VIRTUALMIN_URL') . '/virtual-server/remote.cgi', [
                            'program' => 'list-domains',
                            'multiline' => '',
                            'json' => ''
                        ]);

        return response()->json(json_decode($response->body(), true));
    }
}
