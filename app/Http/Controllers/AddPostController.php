<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotes;

class AddPostController extends Controller
{
    public function __invoke(Request $request) {
        if (! $request->get('user-post')) {
            return back()->with(['error' => 'Please input a post']);
        }

        Quotes::insert([
            'quote' => $request->get('user-post')
        ]);

        return back()->with(['message' => 'New post created!']);
    }
}
