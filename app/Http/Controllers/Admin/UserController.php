<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\Service;
use App\Models\User;
use Yajra\Datatables\Facades\Datatables;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:users-read')->only(['index']);
        $this->middleware('permission:users-create')->only(['create', 'store']);
        $this->middleware('permission:users-update')->only(['edit', 'update']);
        $this->middleware('permission:users-delete')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
        $services = Service::all();

        return view('site.home', compact('services'));

    }// end of index


}//end of controller
