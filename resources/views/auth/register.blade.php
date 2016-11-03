@extends("replay-theme::layout")

@section("title")
    Register
@endsection

@section("content")
    <form class="form-horizontal" role="form" method="POST" action="{{ route("replay.auth.register") }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="col-sm-3 control-label" for="name">Name</label>
            <div class="col-sm-9">
                <input class="form-control" id="name" type="text" name="name" value="{{ old("name") }}" autofocus>
                @if ($errors->has("name"))
                    <div class="alert alert-danger">{{ $errors->first("name") }}</div>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="email">E-mail Address</label>
            <div class="col-sm-9">
                <input class="form-control" id="email" type="email" name="email" value="{{ old("email") }}">
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
                <button class="btn btn-default" type="submit">Register</button>
            </div>
        </div>
    </form>
@endsection
