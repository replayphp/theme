@extends("replay-theme::layout")

@section("title")
    Request your password reset
@endsection

@section("content")
    <form class="form-horizontal" role="form" method="POST" action="{{ route("replay.auth.request") }}">
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
            <div class="col-sm-push-3 col-sm-9">
                <button class="btn btn-default" type="submit">Send Password Reset Link</button>
            </div>
        </div>
    </form>
@endsection
