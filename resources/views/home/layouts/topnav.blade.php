<nav class="navbar navbar-default navbar-inverse" role="navigation">
	<div class="container-fluid">

		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
			</button>

			<a class="navbar-brand" href="{{ url('/index') }}"><img src="{{ asset('img/logo.png' )}}"></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">

				<li><a href="{{ url('/livegames') }}">Live Games</a></li>
				<li><a href="{{ url('/top') }}">Top Players</a></li>
				<li><a href="{{ url('/history') }}">Bet History</a></li>
				<li><a href="{{ url('/results') }}">Draw Results</a></li>
				<li><a href="{{ url('/dealers') }}">Our Dealers</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">How to Play?<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/lucky7') }}">Lucky 7</a></li>
								<li><a href="{{ url('/lucky6') }}">Lucky 6</a></li>
								<li><a href="{{ url('/lucky5') }}">Lucky 5</a></li>
								<li class="divider"></li>
								<li><a href="{{ url('/dice') }}">Dice</a></li>
								<li><a href="{{ url('/diceduel') }}">Dice Duel</a></li>
								<li><a href="{{ url('/wheel') }}">Wheel of Fortune</a></li>
								<li class="divider"></li>
								<li><a href="{{ url('/poker') }}">Bet-on-Poker</a></li>
								<li><a href="{{ url('/baccarat') }}">Baccarat</a></li>
								<li><a href="{{ url('/stream_get_wrappers') }}">War of Bets</a></li>
							</ul>
				  </li>
			</ul>

			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->
              @guest
                  <li><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
              @else
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu">
                          <li>
                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                  </li>
              @endguest
          </ul>
					
				{{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b><span class="caret"></span></a>
					<ul id="login-dp" class="dropdown-menu">
						<li>
							<div class="row">
								<div class="col-md-12">
									Login

									<form class="form" role="form" method="post" action="{{ route('login') }}" accept-charset="UTF-8" id="login-nav">
										{{ csrf_field() }}
										<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
											<label class="sr-only" for="email">Email address</label>
											<input type="email" name="email" class="form-control" id="email" placeholder="Email address" value="{{ old('email') }}" required autofocus>

											@if ($errors->has('email'))
                          <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                          </span>
                        @endif
										</div>

										<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
											<label class="sr-only" for="password">Password</label>
											<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
											@if ($errors->has('password'))
                        <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                        </span>
                      @endif
											<div class="help-block text-right"><a href="{{ url('/reset') }}">Forget the password ?</a></div>
										</div>

										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>

										<div class="checkbox">
											<label>
												<input type="checkbox"{{ old('remember') ? 'checked' : '' }} name="remember"> Keep me logged-in
											</label>
										</div>
									</form>

								</div>

								<div class="bottom text-center">
									New here ? <a href="{{ url('/register') }}"><b>Free registration</b></a>
								</div>

							</div>
						</li>
					</ul> --}}
				</li>
			</ul>

		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
