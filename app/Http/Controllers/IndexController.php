<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotes;

class IndexController extends Controller
{
    public function __invoke(Request $request) {
        return view('index', [
            'posts' => Quotes::all()
        ]);
    }
}
