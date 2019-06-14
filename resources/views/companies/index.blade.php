@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Company <a href="{{ url('/companies/create') }}" class="btn btn-primary btn-xs"
                       title="Add New Company">Add Company</a></h1>
        <div class="table">
            <table class="display" id="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Logo</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->website }}</td>
                        <td><img src="{{ $company->logo }}" alt="logo"></td>
                        <td>
                            <a href="{{ route('companies.show', ['company' => $company->id]) }}" title="View Company">View</a>
                            <form method="DELETE"
                                  action="{{ route('companies.destroy', ['company' => $company->id]) }}">
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
            <div class="pagination-wrapper"> {!! $companies->render() !!} </div>
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
