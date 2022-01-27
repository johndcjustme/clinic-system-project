

    <ul class="selectable card card_noformat empty">
        <div>
            <a href="/users" title="User">
                <li class="@yield('users')">
                    <i class="fas fa-smile"></i>
                    <span>John@admin</span>
                </li>
            </a>
        </div>
        
        <hr class="my_10">
        
        <div>
            <a href="/dashboard" title="Dashboard">
                <li class="@yield('dashboard')">
                    <i class="fas fa-chart-line"></i>
                    <span>Dashboard</span>
                    
                </li>
            </a>
            <a href="/patient" title="Patient">
                <li class="@yield('patient')">
                    <i class="fas fa-user-friends"></i>
                    <span>Patient</span>
                </li>
            </a>
            <a href="/inventory" title="Inventory">
                <li class="@yield('inventory')">
                    <i class="fas fa-boxes"></i>
                    <span>Inventory</span>
                </li>
            </a>
            <a href="/orders" title="Orders">
                <li class="@yield('orders')">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Orders</span>
                    
                </li>
            </a>
            <a href="/appointments" title="Appointments">
                <li class="@yield('appointments')">
                    <i class="fas fa-calendar-check"></i>
                    <span>Appointments</span>
                </li>
            </a>
            <a href="/schedules" title="Schedules">
                <li class="@yield('schedules')">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Schedules</span>
                </li>
            </a>
        </div>

        <hr class="my_10">

        <div>
            <a href="/sign-in" title="Logout">
                <li>
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </li>
            </a>
        </div>
    </ul>


