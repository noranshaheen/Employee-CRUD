@extends('employee.layout')

@section('title')
    create
@endsection

@section('content')
    <div class="container">

        <h2> Create Employee </h2>

        <br>
        <br>

        
        <form action="{{route('emp.store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control" name="phone" id="phone">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address">
            </div>

            <div class="mb-3">
                <label for="hiring" class="form-label">Hiring Date</label>
                <input type="date" class="form-control" name="hiring_date" id="hiring">
            </div>

            <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" class="form-control" name="salary" id="salary">
            </div>

            <div class="mb-3">
            <select class="form-select"  name="role">
                <option selected>Select A Role</option>
                @foreach ($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
              </select>
            </div>
            
            <div class="mb-3">
                <select class="form-select" name="dept">
                    <option selected>Select A Department</option>
                    @foreach ($depts as $dept)
                    <option value="{{$dept->id}}">{{$dept->name}}</option>
                    @endforeach
                  </select>
                </div>

            <button type="submit" class="btn btn-primary">Submit</button>

            <br>
            <br>
        </form>
    
    </div>
@endsection
