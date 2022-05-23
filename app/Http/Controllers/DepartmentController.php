<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\DepartmentFormRequest;
use App\Http\Requests\EmployeeFormRequest;
use Hash;


class DepartmentController extends Controller
{

    //Page Select Department
    public function index(){
        $department = Department::all();
        
        return view('department.index', compact('department'));
    }

    //Page Create Department
    public function create(){
        $department = Department::all();
        return view('department.create', compact('department'));
    }

    //Page Create Employee
    public function create_employee(){
        $department = Department::all();
        return view('department.create_employee', compact('department'));
    }

    //Query Create Department
    public function store(DepartmentFormRequest $request){
        $data = $request->validated();

        $department = new Department();
        $department->name=$data['department'];
        $department->parent=$data['parent'];
        $department-> save();

        return redirect('department')->with('success','Department added successfully');

    }

    //Query Create Employee And User
    public function store_employee(EmployeeFormRequest $request){
        $data = $request->validated();

        $id=DB::select("SHOW TABLE STATUS LIKE 'users'");
        $next_id=$id[0]->Auto_increment;
     

        $employee = new Employee();
        $employee->user_id=$next_id;
        $employee->fullname=$data['fullname'];
        $employee->email=$data['email'];
        $employee->department_id=$data['department'];
        $employee-> save();

        $user = new User();
        $user->name=$data['fullname'];
        $user->email=$data['email'];
        $user->password=Hash::make('123456');
        $user->roles='User';
        $user-> save();

        return redirect('add-employee')->with('success','Employee added successfully');

    }

    //Query Select Employee by Department
    public function department_employee($department_id){
        $employee = Employee::where('department_id',$department_id)->get();
        return view('department.department_employee', compact('employee'));
    }

    //Query Select Data by Employee
    public function select_data_employee($employee_id){
        $department = Department::all();
        $employee = Employee::find($employee_id);
        return view('department.update_employee', compact('employee','department'));
    }

    //Page Update Employee Data
    public function update_profile(EmployeeFormRequest $request, $employee_id){
        $data = $request->validated();

        $employee = Employee::find($employee_id);
        $employee->fullname=$data['fullname'];
        $employee->email=$data['email'];
        $employee->department_id=$data['department'];

        $employee-> update();
        return redirect('department')->with('success','Employee updated successfully');
    }

    //Page Delete Employee
    public function delete($employee_id){

        $employee = Employee::find($employee_id);
        $employee-> delete();

        return redirect('department')->with('success','Employee deleted successfully');
    }

    //Page Delete Department
    public function department_delete($department_id){
        $department = Department::find($department_id);
        $department-> delete();

        return redirect('department')->with('success','Department deleted successfully');
    }
}
