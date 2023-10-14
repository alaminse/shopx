<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('backend/shopix.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend/shopix.png') }}" alt="" height="22">
            </span>
        </a>
        <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('backend/shopix.png') }}" alt="" height="60">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend/shopix.png') }}" alt="" height="60">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link menu-link"> <i class="ph-calendar"></i> <span
                            data-key="t-calendar">Dashboard</span> </a>
                </li>



                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-apps">Apps</span></li>


                <li class="nav-item">
                    <a href="#sidebarEcommerce" class="nav-link menu-link collapsed" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarEcommerce">
                        <i class="ph-storefront"></i> <span data-key="t-ecommerce">Manage Order</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarEcommerce">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.orders.index', 'all') }}" class="nav-link" data-key="t-products">Order Placed</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.orders.index', 'reject') }}" class="nav-link" data-key="t-products-grid">Order Reject</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.orders.index', 'confirm') }}" class="nav-link" data-key="t-product-Details">Confirm
                                    Order</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.products.index')}}" class="nav-link menu-link"> <i class="ph-folder-open"></i> <span
                            data-key="t-file-manager">Product</span> </a>
                </li>

                <li class="nav-item">
                    <a href="#sidebarLearning" class="nav-link menu-link  collapsed"
                        data-bs-toggle="collapse" role="button" aria-expanded="false"
                        aria-controls="sidebarLearning">
                        <i class="ph-graduation-cap"></i> <span data-key="t-learning">Web Site</span>
                    </a>

                    <div class="collapse menu-dropdown" id="sidebarLearning">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-student-subscriptions.html" class="nav-link"
                                    data-key="t-my-subscriptions">Manage Header </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarCourses" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarCourses"
                                    data-key="t-courses">Shop Setting</a>
                                <div class="collapse menu-dropdown" id="sidebarCourses">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-list-view">Notice
                                                Manage</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"
                                                data-key="t-grid-view">Information Section</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-category">About
                                                Section</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-overview">Manage
                                                Benner</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"
                                                data-key="t-create-course">Overview Gallery</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="apps-student-subscriptions.html" class="nav-link"
                                    data-key="t-my-subscriptions">Website Footer</a>
                            </li>

                            <li class="nav-item">
                                <a href="apps-student-subscriptions.html" class="nav-link"
                                    data-key="t-my-subscriptions">Ratings & Reviews</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#sidebarInvoices" class="nav-link menu-link collapsed" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarInvoices">
                        <i class="ph-file-text"></i> <span data-key="t-invoices">Settings</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarInvoices">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-invoices-list.html" class="nav-link"
                                    data-key="t-list-view">Shipping Form</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-invoices-overview.html" class="nav-link"
                                    data-key="t-overview">SMS Manager</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-invoices-create.html" class="nav-link"
                                    data-key="t-create-invoice">General Setting</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
