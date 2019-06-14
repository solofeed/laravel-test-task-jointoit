@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Company {{ $company->name }}
            <form method="DELETE" action="{{ route('companies.destroy', ['company' => $company->id]) }}">
                @csrf
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
                    <td>{{ $company->id }}</td>
                </tr>
                <tr>
                    <th>Website</th>
                    <td>{{ $company->website}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $company->email}}</td>
                </tr>
                <tr>
                    <th>ID</th>
                    <td><img src="{{ $company->logo}}" alt="logo"></td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
