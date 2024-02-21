<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TagAsociation;
use App\Http\Controllers\Controller;

class AsociationController extends Controller
{
    public function asociation()
    {
        $asociationTag = TagAsociation::all();
        return response()->json($asociationTag);
    }
}
