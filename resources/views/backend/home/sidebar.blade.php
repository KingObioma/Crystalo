<!-- partial:partials/_sidebar.html -->
<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('home') }}" class="sidebar-brand">
            CRYSTA<span>LO</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" id="dashboard" style="display: none" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ Request::path() == 'admin/dashboard' ? 'active' : '' }}">
                <a href="#" onclick="document.getElementById('dashboard').click()" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Crystalo</li>
            <li class="nav-item" style="display: none">
                <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false"
                    aria-controls="emails" id="project">
                    <i class="link-icon" data-feather="paperclip"></i>
                    <span class="link-title">Project Management</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('all.project') }}" id="allProject" class="nav-link"
                                style="display: none">All Project</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add.project') }}" id="addProject" style="display: none"
                                class="nav-link">Add Project</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ Request::segment(2) == 'project' ? 'active' : '' }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button"
                    aria-expanded="{{ Request::segment(2) == 'project' ? 'true' : 'false' }}" aria-controls="emails"
                    id="project">
                    <i class="link-icon" data-feather="paperclip"></i>
                    <span class="link-title">Project Management</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ Request::segment(2) == 'project' ? 'show' : '' }}" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::path() == 'all/project' ? 'active' : '' }}"
                                onclick="document.getElementById('allProject').click()">All
                                Project</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::path() == 'add/project' ? 'active' : '' }}"
                                onclick="document.getElementById('addProject').click()">Add
                                Project</a>
                        </li>
                        @if (Request::is('edit/project/*'))
                            <li class="nav-item">
                                <a href="#" class="nav-link active">Edit
                                    Project</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>
            <li class="nav-item" style="display: none">
                <a class="nav-link" data-bs-toggle="collapse" href="#blog" role="button" aria-expanded="false"
                    aria-controls="blog">
                    <i class="link-icon" data-feather="aperture"></i>
                    <span class="link-title">Blog Management</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="test">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('all.blog') }}" id="AllBlogs" class="nav-link" style="display: none">All
                                Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add.blog') }}" id="AddBlog" style="display: none"
                                class="nav-link">Add Blog</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ Request::segment(2) == 'blog' ? 'active' : '' }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#blog" role="button"
                    aria-expanded="{{ Request::segment(2) == 'blog' ? 'true' : 'false' }}" aria-controls="blog">
                    <i class="link-icon" data-feather="globe"></i>
                    <span class="link-title">Blog Management</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ Request::segment(2) == 'blog' ? 'show' : '' }}" id="blog">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::path() == 'all/blog' ? 'active' : '' }}"
                                onclick="document.getElementById('AllBlogs').click()">All
                                Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::path() == 'add/blog' ? 'active' : '' }}"
                                onclick="document.getElementById('AddBlog').click()">Add
                                Blog</a>
                        </li>
                        @if (Request::is('edit/blog/*'))
                            <li class="nav-item">
                                <a href="#" class="nav-link active">Edit
                                    Blog</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>
            <li class="nav-item" style="display: none">
                <a class="nav-link" data-bs-toggle="collapse" href="#product" role="button" aria-expanded="false"
                    aria-controls="product">
                    <i class="link-icon" data-feather="package"></i>
                    <span class="link-title">Product Management</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="check">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('all.product') }}" id="allProducts" class="nav-link"
                                style="display: none">All Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add.product') }}" id="addProduct" style="display: none"
                                class="nav-link">Add Product</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ Request::segment(2) == 'product' ? 'active' : '' }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#product" role="button"
                    aria-expanded="{{ Request::segment(2) == 'product' ? 'true' : 'false' }}" aria-controls="product">
                    <i class="link-icon" data-feather="package"></i>
                    <span class="link-title">Product Management</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ Request::segment(2) == 'product' ? 'show' : '' }}" id="product">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::path() == 'all/product' ? 'active' : '' }}"
                                onclick="document.getElementById('allProducts').click()">All
                                Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::path() == 'add/product' ? 'active' : '' }}"
                                onclick="document.getElementById('addProduct').click()">Add
                                Product</a>
                        </li>
                        @if (Request::is('edit/product/*'))
                            <li class="nav-item">
                                <a href="#" class="nav-link active">Edit
                                    Product</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Components</li>
            <li class="nav-item" style="display: none">
                <a class="nav-link" data-bs-toggle="collapse" href="#test" role="button" aria-expanded="false"
                    aria-controls="test">
                    <i class="link-icon" data-feather="plus-circle"></i>
                    <span class="link-title">Manage Testimonials</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="test">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('all.testimonials') }}" id="AllTestimonials" class="nav-link"
                                style="display: none">All Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add.testimonial') }}" id="AddTestimonial" style="display: none"
                                class="nav-link">Add Testimonial</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item {{ Request::segment(2) == 'testimonial' ? 'active' : '' }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#test" role="button"
                    aria-expanded="{{ Request::segment(2) == 'testimonial' ? 'true' : 'false' }}"
                    aria-controls="test">
                    <i class="link-icon" data-feather="plus-circle"></i>
                    <span class="link-title">Manage Testimonials</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ Request::segment(2) == 'testimonial' ? 'show' : '' }}" id="test">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#"
                                class="nav-link {{ Request::path() == 'all/testimonial' ? 'active' : '' }}"
                                onclick="document.getElementById('AllTestimonials').click()">All
                                Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                                class="nav-link {{ Request::path() == 'add/testimonial' ? 'active' : '' }}"
                                onclick="document.getElementById('AddTestimonial').click()">Add
                                Testimonial</a>
                        </li>
                        @if (Request::is('edit/testimonial/*'))
                            <li class="nav-item">
                                <a href="#" class="nav-link active">Edit
                                    Testimonial</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="{{ route('site.settings') }}" id="siteSettings" style="display: none" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Site Settings</span>
                </a>
            </li>
            <li class="nav-item {{ Request::path() == 'site/settings' ? 'active' : '' }}">
                <a href="#" onclick="document.getElementById('siteSettings').click()" class="nav-link">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Site Settings</span>
                </a>
            </li>
            <li class="nav-item nav-category">Admin Account</li>
            <li class="nav-item">
            <li class="nav-item">
                <a href="{{ route('admin.profile') }}" id="profile" style="display: none" class="nav-link"> <i
                        class="link-icon" data-feather="user-check"></i>
                    <span class="link-title">Admin</span></a>
            </li>
            <li class="nav-item {{ Request::path() == 'admin/profile' ? 'active' : '' }}">
                <a href="#" class="nav-link" onclick="document.getElementById('profile').click()"> <i
                        class="link-icon" data-feather="user-check"></i>
                    <span class="link-title">Admin</span></a>
            </li>
            </li>
        </ul>

    </div>
</nav>
<!-- partial -->
