@extends('layouts.app')

@section('content')
<section class="hero is-fullheight is-primary has-large-background">
  <div class="hero-body">
    <div class="container">
      <div class="columns">
          <div class="column is-4 is-offset-4" style="text-align: center;">
          <div class="box">
            <figure class="avatar">
              <img src="/img/bg_square_logo.png">
            </figure>
            <form method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <input type="hidden" name="email" value="mustapha.hamoui@gmail.com">
              <div class="field">
                <div class="control">
                    <input class="input is-large" id="password" type="password" placeholder="Password" name="password" required>
                    @if ($errors->has('password'))
                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                    @endif
                </div>
              </div>
              <div class="field">
                  <div class="control">
                      <input type="submit" class="button is-block is-primary is-large" style="width:100%">
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

