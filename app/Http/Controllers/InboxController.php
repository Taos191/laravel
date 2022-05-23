<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inbox;
use App\Models\Employee;

class InboxController extends Controller
{

    public function inbox(){
        $employee = Employee::all();
        return view('inbox', compact('employee'));
    }


}
