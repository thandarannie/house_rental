<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <div class="header-button float-lg-right">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="{{asset(auth()->user()->image)}}" alt="admin" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{auth()->user()->name}}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{asset(auth()->user()->image)}}" alt="John Doe" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{auth()->user()->name}}</a>
                                        </h5>
                                        <span class="email">{{auth()->user()->email}}</span>
                                    </div>
                                </div>
                                
                                <div class="account-dropdown__footer ">
                                                <!-- <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a> -->
                                                    <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none;">
                    @csrf
                </form>
            </header>