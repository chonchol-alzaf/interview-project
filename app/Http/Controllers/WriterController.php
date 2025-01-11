<?php

namespace App\Http\Controllers;

use App\Models\Writer;

class WriterController extends Controller
{
    public function index()
    {
        $writers = Writer::with("posts")
        ->get();
        
        return $writers;
    }
}
