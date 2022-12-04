<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('/') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('orders') }}" aria-expanded="false" aria-controls="orders">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Orders</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('feedback') }}">
                <i class="menu-icon">
                    <i class="fas fa-comment-alt"></i>
                </i>
                <span class="menu-title">Feedback</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('discount') }}">
                <i class="menu-icon">
                    <i class="fas fa-tags"></i>
                </i>
                <span class="menu-title">Discount</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('customers') }}">
                <i class="menu-icon">
                    <i class="fas fa-users"></i>
                </i>
                <span class="menu-title">Customers</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('payments') }}">
                <i class="menu-icon">
                    <span class="fas fa-money-check-alt"></span>
                </i>
                <span class="menu-title"> Payment</span></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('products') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Products</span>
            </a>
        </li>
        @if (auth()->user()->role === 'admin')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('category') }}" aria-expanded="false" aria-controls="error">
                    <i class="icon-ban menu-icon"></i>
                    <span class="menu-title">Catagory</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('sellers') }}" aria-expanded="false" aria-controls="vendors">
                    <i class="icon-layout menu-icon"></i>
                    <span class="menu-title">Sellers</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('reports') }}">
                    <i class="icon-paper menu-icon"></i>
                    <span class="menu-title">Reports</span>
                </a>
            </li>
        @endif
        @if (!auth()->user())
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login.show') }}">
                    <i class="icon-paper menu-icon"></i>
                    <span class="menu-title">Login</span>
                </a>
            </li>
        @endif
    </ul>
</nav>
