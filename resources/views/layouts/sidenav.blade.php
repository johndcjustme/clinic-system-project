

    <ul class="selectable card card_noformat empty">
        <div>
            <a href="/users">
                <li class="@yield('users')">
                    <i class="fas fa-smile"></i>
                    John@admin
                </li>
            </a>
        </div>
        
        <hr class="my_10">
        
        <div>
            <a href="/dashboard">
                <li class="@yield('dashboard')">
                    <i class="fas fa-chart-line"></i>
                    Dashboard
                </li>
            </a>
            <a href="/patient">
                <li class="@yield('patient')">
                    <i class="fas fa-user-friends"></i>
                    Patient
                </li>
            </a>
            <a href="/inventory">
                <li class="@yield('inventory')">
                    <i class="fas fa-boxes"></i>
                    Inventory
                </li>
            </a>
            <a href="/orders">
                <li class="@yield('orders')">
                    <i class="fas fa-shopping-cart"></i>
                    Orders
                </li>
            </a>
            <a href="/appointments">
                <li class="@yield('appointments')">
                    <i class="fas fa-calendar-check"></i>
                    Appointments
                </li>
            </a>
            <a href="/schedules">
                <li class="@yield('schedules')">
                    <i class="fas fa-calendar-alt"></i>
                    Schedules
                </li>
            </a>
        </div>

        <hr class="my_10">

        <div>
            <a href="/sign-in">
                <li>
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </li>
            </a>
        </div>
    </ul>


