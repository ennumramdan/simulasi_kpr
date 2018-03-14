@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You logged in, Welcome back {{ $user->name }}!

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>ID. </td>
                                <td>Name</td>
                                <td>E-mail</td>
                                <td>Address</td>
                                <td>Job</td>
                                <td>Income </td>
                                <td>NPWP </td>
                                <td>Home Price </td>
                                <td>Action </td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $usr)
                                <tr>
                                    <td>{{ $usr->id }}</td>
                                    <td>{{ $usr->name }}</td>
                                    <td>{{ $usr->email }}</td>
                                    <td>{{ $usr->address }}</td>
                                    <td>{{ $usr->job }}</td>
                                    <td>{{ $usr->income }} </td>
                                    <td>
                                        <img src="{{ $usr->npwp }}" width="75" />
                                    </td>
                                    <td>{{ $usr->home_price }}</td>
                                    <td>
                                    <a href="{{ route('home.edit', $usr->id) }}" class="btn btn-ms btn-primary"> Edit </a>
                                    @if ($user->id === 1)
                                        @if ($usr->id !== 1)
                                        <form class="form-horizontal" method="post" action="{{ route('home.destroy', $usr->id) }}" >
                                            {{ csrf_field() }}
                                            <input name="_method" value="DELETE" type="hidden"> 
                                            <input type="submit" class="btn btn-ms btn-danger" value="Delete">
                                        </form>
                                        @endif
                                    @endif
                                    </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
