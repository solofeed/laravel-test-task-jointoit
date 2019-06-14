@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Create company</h2>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ url('companies') }}" aria-label="{{ __('Create') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="name"
                                       class="col-sm-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name" value="{{ old('name') }}" required>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-sm-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="text"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="website"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Website') }}</label>
                                <div class="col-md-6">
                                    <input id="website" type="text"
                                           class="form-control{{ $errors->has('website') ? ' is-invalid' : '' }}"
                                           name="website" required>
                                    @if ($errors->has('website'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="logo"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>
                                <div class="col-md-6">
                                    <input id="logo" type="file"
                                           class="form-control{{ $errors->has('logo') ? ' is-invalid' : '' }}"
                                           name="logo" required>
                                    @if ($errors->has('logo'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('logo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
