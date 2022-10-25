<div class="sidebar-wrapper">
    <div class="logo">
        <a href="#" class="simple-text">
        The Hangout 
        </a>
    </div>
        @if(Auth::user()->role == 'manager')
            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="pe-7s-graph"></i>
                        <p>Menu</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-note"></i>
                        <p>Add Food</p>
                    </a>
                </li>
                
                <li>
                    <a href="#">
                        <i class="pe-7s-note"></i>
                        <p>Add Employee</p>
                    </a>
                </li>


                <li>
                    <a href="">
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
            </ul>
        @elseif(Auth::user()->role == 'chef')
            <ul class="nav">
                <li>
                    <a href="{{ route('menuitems.create') }}">

                        <i class="pe-7s-note"></i>
                        <p>Add Food</p>
                    </a>
                </li>
                
                <li>
                    <a href="#">
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