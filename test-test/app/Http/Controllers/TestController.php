<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $values  = Test::all();
        $count = Test::count();
        $first = Test::findOrFail(1);
        $whereBBB = Test::Where('text', '=', 'aba')->get();
        //dd($values);
        $gueryBuilder = DB::table('tests')->where('text', '=', 'aba')
        ->select('id', 'text')
        ->get();

        dd($values, $count, $first, $whereBBB, $gueryBuilder);
        
        return view('tests.test', compact('values'));
    }
}
