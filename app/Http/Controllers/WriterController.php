<?php

namespace App\Http\Controllers;

use App\Models\Writer;

class WriterController extends Controller
{
    public function __construct(private writerInterface $writerItnterfafce)
    
    public function index()
    {
        $respones = $this->writerItnterfafce->index();

        $writers = Writer::with("posts")
        ->get();
        
        return $writers;
    }
}


class writerOne implements writerInterface
{
    function index()
    {
        ///fsdfsd
        return "one";
    }
}

class writerTwo implements writerInterface
{
    function index()
    {
        //fsfsd
        return "two";
    }
}
