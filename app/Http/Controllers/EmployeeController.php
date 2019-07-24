<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
//use Validator;

class EmployeeController extends Controller
{
    public function create(Request $request)
    {
        $employee = new  Employee();

//        $rules = ['name' => 'required', 'address' => 'required'];
//        $validator = Validator::make($request->all(), $rules);
//
//        if ($validator->fails()){
//            return response()->json($validator->error(), 400);
//        }

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->contact_no = $request->input('contact_no');
        $employee->address = $request->input('address');

        $employee->save();
        return response()->json($employee);
    }

    public function employeeById($id)
    {
        $employee = Employee::find($id);
        return response()->json($employee);

    }

    public function updateEmployee(Request $request, $id)
    {

        $employee = Employee::find($id);
//        $employee->name = $request->input('name');
//        $employee->id = $request->input('id');
//        $employee->email = $request->input('email');
//        $employee->contact_no = $request->input('contact_no');
//        $employee->address = $request->input('address');

        $employee->update($request->all());
        return response()->json($employee);
    }

    public function deleteEmployeeById($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return response()->json($employee);
    }
}
