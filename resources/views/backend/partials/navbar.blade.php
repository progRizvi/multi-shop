<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/sellers') }}" aria-expanded="false" aria-controls="vendors">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Sellers</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/orders') }}" aria-expanded="false" aria-controls="orders">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Orders</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/category') }}" aria-expanded="false" aria-controls="error">
                <i class="icon-ban menu-icon"></i>
                <span class="menu-title">Catagory</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/feedback') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Feedback</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/discount') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Discount</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/customers') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Customers</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/payments') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Payment</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/reports') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Reports</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/products') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Products</span>
            </a>
        </li>
    </ul>
</nav>
