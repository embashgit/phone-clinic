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
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
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
						        <a class="nav-link" href="#">Samsung</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">Iphones</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">Infinix</a>
						      </li>
						     
						</ul>
						
					</div><!--close header container-->
					
				</nav><!--close navbar container-->



				 <!-- end dropdown-menu -->