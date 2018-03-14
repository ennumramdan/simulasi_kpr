@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('home.update', $user->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input name="_method" value="PUT" type="hidden">   
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="id" type="hidden" name="if" value="{{ $user->id }}" required autofocus>
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ $user->address }}" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('job') ? ' has-error' : '' }}">
                            <label for="job" class="col-md-4 control-label">Job</label>

                            <div class="col-md-6">
                                <input id="job" type="text" class="form-control" name="job" value="{{ $user->job }}" required>

                                @if ($errors->has('job'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('income') ? ' has-error' : '' }}">
                            <label for="income" class="col-md-4 control-label">Income</label>

                            <div class="col-md-6">
                                <input id="income" type="text" class="form-control" name="income" value="{{ $user->income }}" required>

                                @if ($errors->has('income'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('income') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('npwp') ? ' has-error' : '' }}">
                            <label for="npwp" class="col-md-4 control-label">NPWP</label>

                            <div class="col-md-6">
                                <input id="npwp" type="file"accept="image/*" class="form-control" name="npwp" value="">
                                <small>*empty it, if you won't edit</small>
                                @if ($errors->has('npwp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('npwp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('home_price') ? ' has-error' : '' }}">
                            <label for="home_price" class="col-md-4 control-label">Home Price</label>

                            <div class="col-md-6">
                                <input id="home_price" type="number" class="form-control" name="home_price" value="{{ $user->home_price }}" required>

                                @if ($errors->has('home_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('home_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <small>*empty it, if you won't edit</small>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
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
