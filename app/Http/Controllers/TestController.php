<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\DataTables;

class TestController extends Controller
{
    public function index(Request $req, Group $group)
    {
        $group = Group::find($group);

        if (request()->ajax()) {
            $selectRaw = "
                contacts.*,
                groups.id as group_id
            ";

            $query = DB::table('contacts')
                ->join('contact_has_groups', 'contact_has_groups.contact_id', '=', 'contacts.id')
                ->join('groups', 'contact_has_groups.group_id', '=', 'groups.id')
                ->where('groups.id', '=', $group->id)
                ->selectRaw($selectRaw);

            return Datatables::of($query);
        }

        return view('test');
    }
}
