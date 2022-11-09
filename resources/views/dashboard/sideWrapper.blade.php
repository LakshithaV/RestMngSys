<div class="sidebar-wrapper">
    <div class="logo">
        <a href="#" class="simple-text">
        The Hangout 
        </a>
    </div>
        @if(Auth::user()->role == 'manager')
            <ul class="nav">
                <li>
                    <a href="{{ route('menu_items.index') }}">
                        <i class="pe-7s-note"></i>
                        <p>Food Items</p>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('users.index') }}">
                        <i class="pe-7s-note"></i>
                        <p>Employees</p>
                    </a>
                </li>


                <li>
                    <a href="{{ route('orders.index') }}">
                        <i class="pe-7s-note2"></i>
                        <p>Orders</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('showAllBookTable') }}">
                        <i class="pe-7s-note2"></i>
                        <p>Table reservations</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-note"></i>
                        <p>Tables</p>
                    </a>
                </li>
            </ul>
        @elseif(Auth::user()->role == 'chef')
            <ul class="nav">
                <li>
                    <a href="{{ route('menu_items.index') }}">

                        <i class="pe-7s-note"></i>
                        <p>Food Items</p>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('orders.index') }}">
                        <i class="pe-7s-note2"></i>
                        <p>Orders</p>
                    </a>
                </li>
            </ul>
        @elseif(Auth::user()->role == 'waiter')
            <ul class="nav">
                
                <li>
                    <a href="#">
                        <i class="pe-7s-note2"></i>
                        <p>Orders</p>
                    </a>
                </li>
                <li>
                    <a href="#rest">
                        <i class="pe-7s-note2"></i>
                        <p>Table reservations</p>
                    </a>
                </li>
            </ul>
        @endif
    
    </div>
</div>