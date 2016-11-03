@extends("replay-theme::layout")

@section("title")
    Reset your password
@endsection

@section("content")
    <form class="form-horizontal" role="form" method="POST" action="{{ route("replay.auth.reset") }}">
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group">
            <label class="col-sm-3 control-label" for="email">E-Mail Address</label>
            <div class="col-sm-9">
                <input class="form-control" id="email" type="email" name="email" value="{{ old("email", $email) }}">
                @if ($errors->has("email"))
                    <div class="alert alert-danger">{{ $errors->first("email") }}</div>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="password">Password</label>
            <div class="col-sm-9">
                <input class="form-control" id="password" type="password" name="password" autofocus>
                @if ($errors->has("password"))
                    <div class="alert alert-danger">{{ $errors->first("password") }}</div>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="password-confirm">Confirm Password</label>
            <div class="col-sm-9">
                <input class="form-control" id="password-confirm" type="password" name="password_confirmation">
                @if ($errors->has("password_confirmation"))
                    <div class="alert alert-danger">{{ $errors->first("password_confirmation") }}</div>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-push-3 col-sm-9">
                <button class="btn btn-default" type="submit">Reset Password</button>
            </div>
        </div>
    </form>
@endsection
