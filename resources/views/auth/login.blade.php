@extends('layouts.app')

@section('content')
<div class="columns">
  <div class="column is-one-third is-offset-one-third m-t-50">
    <div class="card">
      {{-- card --}}
      <div class="card-content">
        <h1 class="tittle">Log In</h1>
        <form action="{{route('login')}}" method="POST" role="form">
          {{ csrf_field() }}
        <div class="field">
          <label for="email" class="label">Email Address</label>
          <p class="control">
            <input class="input" type="text" name="email" id="email" placeholder="name@example.com">
          </p>
        </div>

        <div class="field">
          <label for="email" class="label">Password</label>
          <p class="control">
            <input class="input" type="password" name="Password" id="password">
          </p>
        </div>
        <div>
        <b-checkbox class="checkbox m-t-10" name="remember">Remember Me</b>
        </div>
        <button class="button is-primary is-fullwidth is-outlined m-t-20">Log In</button>
        </form>
      </div>
      {{--  end of card --}}
      <h5 class="has-text-centered"><a href="{{route('password.request')}}" class="is-muted"></a>Forgot Your Password?</h5>
    </div>
  </div>
</div>


{{-- <div class="container">
    <div class="row">
      <div class="tile is-ancestor is-outlined">
        <div class="tile is-horisontal is-4">
            <div class="column">
              <div class="column is-one-half">

                    <div><strong>Login</strong></div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6 is-fullwidth">
                                    <input id="email" type="email" class="form-control is-fullwidth" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox m-t-10">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button class="button is-primary is-outlined is-fullwidth m-t-20" type="submit" class="btn btn-primary">
                                        Login
                                    </button>


                                </div>
                            </div>
                            <a class="btn btn-link m-t-20" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </form>

            </div>
        </div>
      </div>
    </div>
</div>
    <div class="tile">
            <article class="tile is-child notification is-info">
              <p class="title">Halaman Login</p>
              <p class="subtitle">Silahkan masukkan password anda !</p>
            </article>
          </div>



      </div>
    </div>

  </div> --}}
  <footer class="footer m-t-30">
  <div class="content has-text-centered">
    <p>
      <strong>Alton</strong> are <a href="https://bhaktisumekar.co.id">Information Technology Company</a>. The source code is licensed
      <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
      is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
    </p>
  </div>
  </footer>
@endsection
