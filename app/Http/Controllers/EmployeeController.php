<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Employee;
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
        $employee = Employee::all();
        $totalEmployee = $employee->count();
        return view('employee.index', compact('employee', 'totalEmployee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->nick_name = $request->nick_name;
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->position = $request->position;
        $employee->email = $request->email;
        $employee->active = 1;
        $employee->save();

        return redirect()->route('employee.index')
            ->with('success', 'Account for ' .  $employee->nick_name . ' create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $checkPhone = Str::contains($request->phone, '+6');

        $employee = Employee::find($id);
        $employee->nick_name = $request->nick_name;
        $employee->name = $request->name;
        if ($checkPhone) {
            $employee->phone = $checkPhone;
        } else {
            $employee->phone = '+6' . $request->phone;
        }
        $employee->position = $request->position;
        $employee->email = $request->email;
        $request->password == null ? $employee->password = null : $employee->password =  $request->password;
        $employee->active = $request->active == 'on' ? 1 : 0;
        $employee->save();

        return redirect()->route('employee.index')
            ->with('success', 'Account for ' .  $employee->log . ' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
