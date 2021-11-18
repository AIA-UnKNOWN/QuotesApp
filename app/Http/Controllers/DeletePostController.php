<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotes;

class DeletePostController extends Controller
{
    public function __invoke(Request $request, $postId) {
        $quote = Quotes::find($postId);
        $quote->delete();

        return redirect(route('index'));
    }
}
