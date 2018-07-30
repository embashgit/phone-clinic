<nav id="navcover" class="navbar navbar-inverse " ><!--header-->
				<div class="container-fluild">
					<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					

					</div>
					<a class="navbar-brand" href="{{ url('/')}}"><h1 style="margin: 0px; color:white">PhoneClinic</h1></a>
					<div class="nav-collapse collapse navbar-responsive-collapse">
						<ul style=" " class="nav navbar-nav pull-right">
							 <!-- Authentication Links -->
                        @guest
                            <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}"
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

							<li class="nav-item">
						        <a class="nav-link" href="{{ route('phones.index') }}">Phones</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">Models</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">Problems</a>
						      </li>
						      <li class="nav-item">
							<a href="#" style="text-decoration: none;" class="dropdown-toggle" data-toggle="dropdown" class="createbutton nav-link">More Phones <span class="caret"></span></a>
				            <ul class="dropdown-menu">
				                @foreach($phones as $phone)
				                <li>
				                <a href="{{ route('phone.models', ['id' => $phone->id]) }}"><ul>{{ $phone->brand }}</ul></a>

				                </li>
				                @endforeach
				            </ul>
						      </li>
						</ul>
						
					</div><!--close header container-->
					
				</nav><!--close navbar container-->



				 <!-- end dropdown-menu -->