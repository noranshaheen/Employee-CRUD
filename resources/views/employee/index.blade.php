@extends('employee.layout')

@section('title')
    Index
@endsection

@section('content')

<div class="container">
    
        <h2> All Employees </h2>

        <br>

        <a href="{{route('emp.create')}}" class="btn btn-primary link">Create Employee</a>

        <br>
        <br>

        @php
            $x=1;
        @endphp

        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Hiring date</th>
                <th scope="col">Role</th>
                <th scope="col">Salary</th>
                <th scope="col">Department</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($employees as $employee)
                @php
                    $dept_id = $employee->dept_id;
                    $dept_name = $depts->find($dept_id)->name ;

                    $role_id = $employee->role_id;
                    $role_name = $roles->find($role_id)->name;
                @endphp
                <tr>
                    <th scope="row">{{$x++}}</th>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->address}}</td>
                    <td>{{$employee->phone}}</td>
                    <td>{{$employee->hiring_date}}</td>
                    <td>{{$role_name}}</td>
                    <td>{{$employee->salary}}</td>
                    <td>{{$dept_name}}</td>
                    <td>
                        <div class="btn-group"  aria-label="Basic outlined example">
                            <a href="{{route('emp.show',$employee->id)}}" class="btn btn-link  ">Show</a>
                            <a href="{{route('emp.edit',$employee->id)}}" class="btn btn-link ">Edit</a>
                            <form action="{{route('emp.delete',$employee->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                 <input type="submit" class="btn btn-link " value="Delete">
                            </form>
                        </div> 
                    </td>
                  </tr>

                @endforeach

            </tbody>
          </table>

</div>
@endsection