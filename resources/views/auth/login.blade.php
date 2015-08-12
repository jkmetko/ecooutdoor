@extends('app')

@section('content')
    <section class="page-section" id="section-about">
        <div class="container">
            <div id="login-bg">
            </div>
            <form class="form-signin" action="{{ url('/auth/login') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="login-wrap">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong></strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif

                    <div class="user-login-info">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="User email" autofocus>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
                </div>
            </form>
        </div>
    </div>
@endsection
