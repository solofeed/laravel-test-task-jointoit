@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Employee <a href="{{ url('/employees/create') }}" class="btn btn-primary btn-xs"
                        title="Add New Employee">Add Employee</a></h1>
        <div class="table">
            <table class="display" id="table">
                <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Company ID</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->company_id }}</td>
                        <td>
                            <a href="{{ route('employees.show', ['employee' => $employee->id]) }}"
                               title="View Employee">View</a>
                            <form method="DELETE" action="{{ route('employees.destroy', ['id' => $employee->id]) }}">
                                @csrf
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-warning">
                                            {{ __('Delete') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination-wrapper"> {!! $employees->render() !!} </div>
        </div>

    </div>
@endsection

@section('javascript')
    <script>
        $( document ).ready( function () {
            $( '#table' ).DataTable();
        } );
    </script>
@endsection
