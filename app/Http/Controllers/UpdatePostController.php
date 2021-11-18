<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotes;

class UpdatePostController extends Controller
{
    public function __invoke(Request $request, $postId) {
        $quotes = Quotes::find($postId);
        $quotes->quote = $request->get('updated-post');
        $quotes->save();
        
        return redirect(route('index'));
    }
}
