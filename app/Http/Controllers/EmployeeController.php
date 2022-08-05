<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        //Get all the data from database
        $employees = Employee::all();//received all the data
        // return view('employees', ['employees' => $employees]);
        return view('employees', compact('employees'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $age = $request->age;
        $salary = $request->salary;
        $phone = $request->phone;

        // echo $email;
        // echo $name;
        // echo $age;
        // echo $salary;
        // echo $phone;
        $obj = new Employee(); //Create a new employee object

        $obj->name = $name;
        $obj->email = $email;
        $obj->age = $age;
        $obj->salary = $salary;
        $obj->phone = $phone;

        if ($obj->save()) { //insert a new employee kind of query
            // echo "Successfully Inserted";
            return redirect()->to('employees');
        }
    }
    public function nav()
    {
        return view('nav');
    }
    public function edit($id)
    {
        // SELECT *
        // $employee = Employee::where('id', $id)->get(); returns an array
        $employee = Employee::find($id); //must provide the primary key
        return view('edit', compact('employee'));
    }
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->age = $request->age;
        $employee->salary = $request->salary;
        $employee->phone = $request->phone;
        if ($employee->save()) {
            return redirect('employees');
        }
    }
    public function delete($id)
    {
        $employee = Employee::find($id);

        if ($employee->delete()) {
            return redirect('employees');
        }
    }
}
