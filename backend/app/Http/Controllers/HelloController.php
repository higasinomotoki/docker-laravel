<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class HelloController extends Controller
{
    public function index()
    {
        return 'こんにちは、世界';
    }
    public function list(){
        $data = [
            'records' => Task::all()
        ];
        return view('list',$data);
    }
    
}
