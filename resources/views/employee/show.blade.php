@extends('employee.layout')

@section('title')
    Show
@endsection

@section('content')
    <br>

    <div class="container">

        <a href="{{ route('emp.index') }}" class=" btn btn-primary link">Back</a>

        <br>
        <br>

        <label>Name </label>
        <p class="border border-success p-2 border-opacity-10">{{ $employee->name }}</p>

        <label>Phone </label>
        <p class="border border-success p-2 border-opacity-10">{{ $employee->phone }}</p>

        <label>Address </label>
        <p class="border border-success p-2 border-opacity-10">{{ $employee->address }}</p>

        <label>Net Salary </label>
        <p class="border border-success p-2 border-opacity-10">{{ $employee->salary }}</p>

        <label>Role Name </label>
        <p class="border border-success p-2 border-opacity-10">{{ $role->name }}</p>

        <label>Rloe Description </label>
        <p class="border border-success p-2 border-opacity-10">{{ $role->description }}</p>

        <label>Department </label>
        <p class="border border-success p-2 border-opacity-10">{{ $dept->name }}</p>


    </div>
@endsection
