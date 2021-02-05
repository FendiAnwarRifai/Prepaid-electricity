@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Change Password') }}</div>
                @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                       {{ csrf_field() }}
                        {{ method_field('put') }}

                        

                        <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }} row">
                            <label for="current_password" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>

                            <div class="col-md-6">
                                <input id="current_password" type="password" class="form-control" name="current_password" autofocus>
                                <span class="help-block">{{ $errors->first('current_password') }}</span>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
 
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
                                <span class="help-block">{{ $errors->first('password') }}</span>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} row">
                            <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">Password Confirmation</label>
 
                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                                <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Change Password') }}
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
