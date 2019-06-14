@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Employee {{ $employee->first_name }} {{ $employee->last_name }}
            <form method="POST" action="{{ route('employees.destroy', ['employee' => $employee->id]) }}">
                @csrf
                @method('delete')
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-warning">
                            {{ __('Delete') }}
                        </button>
                    </div>
                </div>
            </form>
        </h1>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $employee->id }}</td>
                </tr>
                <tr>
                    <th>Website</th>
                    <td>{{ $employee->website}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $employee->email}}</td>
                </tr>
                <tr>
                    <th>ID</th>
                    <td><img src="{{ $employee->logo}}" alt="logo"></td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
