<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotes;

class EditPostController extends Controller
{
    public function __invoke(Request $request, $postId) {
        return view('edit-post', [
            'quote' => Quotes::find($postId)
        ]);
    }
}
