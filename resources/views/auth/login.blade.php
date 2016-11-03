@extends("replay-theme::layout")

@section("title")
    Login
@endsection

@section("content")
    <form class="form-horizontal" role="form" method="POST" action="{{ route("replay.auth.login") }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="col-sm-3 control-label" for="email">E-mail Address</label>
            <div class="col-sm-9">
                <input class="form-control" id="email" type="email" name="email" value="{{ old("email") }}" autofocus>
                @if ($errors->has("email"))
                    <div class="alert alert-danger">{{ $errors->first("email") }}</div>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="password">Password</label>
            <div class="col-sm-9">
                <input class="form-control" id="password" type="password" name="password">
                @if ($errors->has("password"))
                    <div class="alert alert-danger">{{ $errors->first("password") }}</div>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-push-3 col-sm-9">
                <label><input type="checkbox" name="remember"> Remember Me</label>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-push-3 col-sm-9">
                <button class="btn btn-default" type="submit">Login</button>
                <a href="{{ route("replay.auth.showRequestForm") }}">Forgot Your Password?</a>
            </div>
        </div>
    </form>
@endsection
