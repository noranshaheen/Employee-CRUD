@extends('employee.layout')

@section('title')
    Edit
@endsection

@section('content')
    <br>

    <div class="container">

        <form action="{{ route('emp.update',$employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $employee->name }}">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control" name="phone" id="phone" value="{{ $employee->phone }}">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address" value="{{ $employee->address }}">
            </div>

            <div class="mb-3">
                <label for="hiring" class="form-label">Hiring Date</label>
                <input type="date" class="form-control" name="hiring_date" id="hiring"
                    value="{{ $employee->hiring_date }}">
            </div>

            <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" class="form-control" name="salary" id="salary" value="{{ $employee->salary }}">
            </div>

            <div class="mb-3">
                @php
                    $employee_role = $employee->role_id;
                    $role_name = $roles->find($employee_role)->name;
                @endphp
                <select class="form-select" name="role">
                    <option selected>{{ $role_name }}</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                @php
                    $employee_dept = $employee->dept_id;
                    $dept_name = $depts->find($employee_dept)->name;
                @endphp
                <select class="form-select" name="dept">
                    <option selected>{{$dept_name}}</option>
                    @foreach ($depts as $dept)
                        <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

            <br>
            <br>
        </form>
    </div>
@endsection




