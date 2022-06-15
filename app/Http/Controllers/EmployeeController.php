<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Role;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=Employee::all();
        $depts = Department::all();
        $roles = Role::all();
        return view('employee.index',compact('employees','depts','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $depts = Department::all();
        $roles = Role::all();
        return view('employee.create',compact('depts','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'hiring_date'=>'required',
            'salary'=>'required',
            'role'=>'required',
            'dept'=>'required',
        ]);

        Employee::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'hiring_date'=>$request->hiring_date,
            'role_id'=>$request->role,
            'salary'=>$request->salary,
            'dept_id'=>$request->dept,
        ]);
     
        return redirect()->route('emp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee,$id)
    {
        $employee = Employee::find($id);
        $emp_role_id = $employee->role_id;
        $role = Role::find($emp_role_id);

        $emp_dept_id = $employee->dept_id;
        $dept = Department::find($emp_dept_id);

        return view('employee.show',compact('employee','role','dept'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee,$id)
    {
        $employee = Employee::find($id);
        $depts = Department::all();
        $roles = Role::all();
        return view('employee.edit',compact('employee','depts','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee,$id)
    {

        $employee->find($id)->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'hiring_date'=>$request->hiring_date,
            'role_id'=>$request->role,
            'salary'=>$request->salary,
            'dept_id'=>$request->dept,
        ]);

        return redirect()->route('emp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee,$id)
    {
        $employee->destroy($id);
        return redirect()->back();
    }
}
