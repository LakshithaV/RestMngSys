<nav class="navbar navbar-default navbar-fixed" style="background: #f3bd01;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar" style="background: #fff;"></span>
                <span class="icon-bar" style="background: #fff;"></span>
                <span class="icon-bar" style="background: #fff;"></span>
            </button>
            @if(Auth::user()->role == 'manager')
                <a class="navbar-brand" href="#" style="color: #fff;">Manager Dashboard</a>
            @elseif(Auth::user()->role == 'chef')
                <a class="navbar-brand" href="#" style="color: #fff;">Chef Dashboard</a>
            @elseif(Auth::user()->role == 'waiter')
                <a class="navbar-brand" href="#" style="color: #fff;">Waiter Dashboard</a>
            @endif
        </div>
        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ url('logout') }}" style="color: #fff;">
                        Log out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>