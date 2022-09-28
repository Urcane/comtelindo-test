<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TestController extends Controller
{
    public function index(Request $req, Group $group)
    {
        if (request()->ajax()) {
            $selectRaw = "

            ";

            return Datatables::of();
        }



        return view('test');
    }
}
