<aside class="sidebar">
    <!-- Sidebar Header Starts -->
    <a href="/">
        <div class="sidebar-header">
            <div class="sidebar-logo-icon">
                <img src="./images/logo-small.svg" alt="logo" class="h-[45px]" />
            </div>

            <div class="sidebar-logo-text">
                <h1 class="flex text-xl">
                    <span class="font-bold text-slate-800 dark:text-slate-200"> Admin </span>
                    <span class="font-semibold text-primary-500">Toolkit</span>
                </h1>

                <p class="whitespace-nowrap text-xs text-slate-400">Simple &amp; Customizable</p>
            </div>
        </div>
    </a>
    <!-- Sidebar Header Ends -->

    <!-- Sidebar Menu Starts -->
    <ul class="sidebar-content">
        <!-- Dashboard -->
        <li>
            <a href="javascript:void(0);" class="sidebar-menu {{request()->routeIs('dashboard.*')?'active':''}}">
                <span class="sidebar-menu-icon">
                    <i data-feather="home"></i>
                </span>
                <span class="sidebar-menu-text">Dashboard</span>
                <span class="sidebar-menu-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="{{url('/')}}" class="sidebar-submenu-item {{request()->is('/')?'active':''}}">Analytics</a>
                </li>
                <li>
                    <a href="{{url('ecommerce')}}" class="sidebar-submenu-item {{request()->is('ecommerce')?'active':''}}">Ecommerce</a>
                </li>
            </ul>
        </li>

        <div class="sidebar-menu-header">Applications</div>

        <!-- Email -->
        <li>
            <a href="{{url('email')}}" class="sidebar-menu {{request()->is('email')?'active':''}}">
                <span class="sidebar-menu-icon">
                    <i data-feather="mail"></i>
                </span>
                <span class="sidebar-menu-text">Email</span>
            </a>
        </li>
        <!-- Chat -->
        <li>
            <a href="{{url('chat')}}" class="sidebar-menu {{request()->is('chat')?'active':''}}">
                <span class="sidebar-menu-icon">
                    <i data-feather="message-square"></i>
                </span>
                <span class="sidebar-menu-text">Chat</span>
            </a>
        </li>
        <!-- Calendar -->
        <li>
            <a href="{{url('calendar')}}" class="sidebar-menu {{request()->is('calendar')?'active':''}}">
                <span class="sidebar-menu-icon">
                    <i data-feather="calendar"></i>
                </span>
                <span class="sidebar-menu-text">Calendar</span>
            </a>
        </li>
        <!-- Invoice -->
        <li>
            <a href="javascript:void(0);" class="sidebar-menu {{request()->routeIs('invoice.*')?'active':''}}">
                <span class="sidebar-menu-icon">
                    <i data-feather="file-text"></i>
                </span>
                <span class="sidebar-menu-text">Invoice</span>
                <span class="sidebar-menu-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="{{url('invoice-create')}}" class="sidebar-submenu-item {{request()->is('invoice-create')?'active':''}}"> Create </a>
                </li>

                <li>
                    <a href="{{url('invoice-details')}}" class="sidebar-submenu-item {{request()->is('invoice-details')?'active':''}}"> Details </a>
                </li>
            </ul>
        </li>
        <!-- ecommnerce -->
        <li>
            <a href="javascript:void(0);" class="sidebar-menu {{request()->routeIs('ecommerce.*')?'active':''}}">
                <span class="sidebar-menu-icon">
                    <i data-feather="shopping-bag"></i>
                </span>
                <span class="sidebar-menu-text">Ecommerce</span>
                <span class="sidebar-menu-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="{{url('product-list')}}" class="sidebar-submenu-item {{request()->is('product-list')?'active':''}}"> Product List </a>
                </li>

                <li>
                    <a href="{{url('product-edit')}}" class="sidebar-submenu-item {{request()->is('product-edit')?'active':''}}"> Product Edit </a>
                </li>
                <li>
                    <a href="{{url('order-list')}}" class="sidebar-submenu-item {{request()->is('order-list')?'active':''}}"> Order List </a>
                </li>
                <li>
                    <a href="{{url('order-details')}}" class="sidebar-submenu-item {{request()->is('order-details')?'active':''}}"> Order Details </a>
                </li>
                <li>
                    <a href="{{url('customer-list')}}" class="sidebar-submenu-item {{request()->is('customer-list')?'active':''}}"> Customer List </a>
                </li>
            </ul>
        </li>
        <!-- Users -->
        <li>
            <a href="javascript:void(0);" class="sidebar-menu {{request()->routeIs('users.*')?'active':''}}">
                <span class="sidebar-menu-icon">
                    <i data-feather="users"></i>
                </span>
                <span class="sidebar-menu-text">Users</span>
                <span class="sidebar-menu-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="{{url('user-list')}}" class="sidebar-submenu-item {{request()->is('user-list')?'active':''}}">List</a>
                </li>
                <li>
                    <a href="{{url('user-profile')}}" class="sidebar-submenu-item {{request()->is('user-profile')?'active':''}}"> Profile </a>
                </li>
            </ul>
        </li>
        <!--  Commponents  -->
        <div class="sidebar-menu-header">Components</div>
        <!-- Common  -->
        <li>
            <a href="javascript:void(0);" class="sidebar-menu {{request()->routeIs('components.*')?'active':''}}">
                <span class="sidebar-menu-icon">
                    <i data-feather="box"></i>
                </span>
                <span class="sidebar-menu-text">Common</span>
                <span class="sidebar-menu-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="{{url('accordion')}}" class="sidebar-submenu-item {{request()->is('accordion')?'active':''}}"> Accordion </a>
                </li>
                <li>
                    <a href="{{url('alert')}}" class="sidebar-submenu-item {{request()->is('alert')?'active':''}}">Alert</a>
                </li>
                <li>
                    <a href="{{url('avater')}}" class="sidebar-submenu-item {{request()->is('avater')?'active':''}}">Avatar</a>
                </li>
                <li>
                    <a href="{{url('badge')}}" class="sidebar-submenu-item" {{request()->is('badge')?'active':''}}>Badge</a>
                </li>
                <li>
                    <a href="{{url('button')}}" class="sidebar-submenu-item {{request()->is('button')?'active':''}}">Button</a>
                </li>
                <li>
                    <a href="{{url('card')}}" class="sidebar-submenu-item {{request()->is('card')?'active':''}}">Card</a>
                </li>
                <li>
                    <a href="{{url('carousel')}}" class="sidebar-submenu-item {{request()->is('carousel')?'active':''}}"> Carousel </a>
                </li>

                <li>
                    <a href="{{url('drawer')}}" class="sidebar-submenu-item {{request()->is('drawer')?'active':''}}">Drawer</a>
                </li>
                <li>
                    <a href="{{url('dropdown')}}" class="sidebar-submenu-item {{request()->is('dropdown')?'active':''}}"> Dropdown </a>
                </li>
                <li>
                    <a href="{{url('list-group')}}" class="sidebar-submenu-item {{request()->is('list-group')?'active':''}}"> List Group </a>
                </li>
                <li>
                    <a href="{{url('modal')}}" class="sidebar-submenu-item {{request()->is('modal')?'active':''}}">Modal</a>
                </li>
                <li>
                    <a href="{{url('pagination')}}" class="sidebar-submenu-item {{request()->is('pagination')?'active':''}}"> Pagination </a>
                </li>
                <li>
                    <a href="{{url('progress')}}" class="sidebar-submenu-item {{request()->is('progress')?'active':''}}"> Progress </a>
                </li>

                <li>
                    <a href="{{url('skeleton')}}" class="sidebar-submenu-item {{request()->is('skeleton')?'active':''}}"> Skeleton </a>
                </li>
                <li>
                    <a href="{{url('spinner')}}" class="sidebar-submenu-item {{request()->is('spinner')?'active':''}}"> Spinner </a>
                </li>
                <li>
                    <a href="{{url('tab')}}" class="sidebar-submenu-item {{request()->is('tab')?'active':''}}">Tab</a>
                </li>
                <li>
                    <a href="{{url('toast')}}" class="sidebar-submenu-item {{request()->is('toast')?'active':''}}">Toast</a>
                </li>
                <li>
                    <a href="{{url('tooltip')}}" class="sidebar-submenu-item" {{request()->is('login')?'tooltip':''}}> Tooltip </a>
                </li>
            </ul>
        </li>
        <!-- Forms  -->
        <li>
            <a href="javascript:void(0);" class="sidebar-menu {{request()->routeIs('form.*')?'active':''}}">
                <span class="sidebar-menu-icon">
                    <i data-feather="edit"></i>
                </span>
                <span class="sidebar-menu-text">Forms</span>
                <span class="sidebar-menu-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="{{url('input')}}" class="sidebar-submenu-item {{request()->is('input')?'active':''}}">Input</a>
                </li>
                <li>
                    <a href="{{url('input-group')}}" class="sidebar-submenu-item {{request()->is('input-group')?'active':''}}"> Input Group </a>
                </li>
                <li>
                    <a href="{{url('textarea')}}" class="sidebar-submenu-item {{request()->is('textarea')?'active':''}}"> Textarea </a>
                </li>
                <li>
                    <a href="{{url('checkbox')}}" class="sidebar-submenu-item {{request()->is('checkbox')?'active':''}}"> Checkbox </a>
                </li>
                <li>
                    <a href="{{url('radio')}}" class="sidebar-submenu-item {{request()->is('radio')?'active':''}}">Radio</a>
                </li>
                <li>
                    <a href="{{url('toggle')}}" class="sidebar-submenu-item {{request()->is('toggle')?'active':''}}">Toggle</a>
                </li>
                <li>
                    <a href="{{url('select')}}" class="sidebar-submenu-item {{request()->is('select')?'active':''}}">Select</a>
                </li>

                <li>
                    <a href="{{url('datepicker')}}" class="sidebar-submenu-item {{request()->is('datepicker')?'active':''}}"> Datepicker </a>
                </li>
                <li>
                    <a href="{{url('editor')}}" class="sidebar-submenu-item {{request()->is('editor')?'active':''}}">Editor</a>
                </li>
                <li>
                    <a href="{{url('uploader')}}" class="sidebar-submenu-item {{request()->is('uploader')?'active':''}}"> Uploader </a>
                </li>
                <li>
                    <a href="{{url('layout')}}" class="sidebar-submenu-item {{request()->is('layout')?'active':''}}">Layout</a>
                </li>
                <li>
                    <a href="{{url('validation')}}" class="sidebar-submenu-item {{request()->is('validation')?'active':''}}"> Validation </a>
                </li>
            </ul>
        </li>
        <!-- Tables  -->
        <li>
            <a href="javascript:void(0);" class="sidebar-menu {{request()->routeIs('table.*')?'active':''}}">
                <span class="sidebar-menu-icon">
                    <i data-feather="list"></i>
                </span>
                <span class="sidebar-menu-text">Tables</span>
                <span class="sidebar-menu-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="{{url('basic-table')}}" class="sidebar-submenu-item {{request()->is('basic-table')?'active':''}}"> Basic Table </a>
                </li>
                <li>
                    <a href="{{url('data-table')}}" class="sidebar-submenu-item {{request()->is('data-table')?'active':''}}"> Data Table </a>
                </li>
            </ul>
        </li>
        <!-- Charts  -->
        <li>
            <a href="{{url('charts')}}" class="sidebar-menu {{request()->is('charts')?'active':''}}">
                <span class="sidebar-menu-icon">
                    <i data-feather="pie-chart"></i>
                </span>
                <span class="sidebar-menu-text">Charts</span>
            </a>
        </li>
        <!-- Icons-->
        <li>
            <a href="{{url('icons')}}" class="sidebar-menu {{request()->is('icons')?'active':''}}">
                <span class="sidebar-menu-icon">
                    <i data-feather="italic"></i>
                </span>
                <span class="sidebar-menu-text">Icons</span>
            </a>
        </li>
        <!-- Typography-->
        <li>
            <a href="{{url('typography')}}" class="sidebar-menu {{request()->is('typography')?'active':''}}">
                <span class="sidebar-menu-icon">
                    <i data-feather="type"></i>
                </span>
                <span class="sidebar-menu-text">Typography</span>
            </a>
        </li>
        <!--  Pages  -->
        <div class="sidebar-menu-header">Pages</div>
        <!-- Authentication  -->
        <li>
            <a href="javascript:void(0);" class="sidebar-menu {{request()->routeIs('auth.*')?'active':''}}">
                <span class="sidebar-menu-icon">
                    <i data-feather="lock"></i>
                </span>
                <span class="sidebar-menu-text">Authentication</span>
                <span class="sidebar-menu-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="{{url('login')}}" class="sidebar-submenu-item {{request()->is('login')?'active':''}}">Login</a>
                </li>
                <li>
                    <a href="{{url('register')}}" class="sidebar-submenu-item {{request()->is('register')?'active':''}}"> Register </a>
                </li>
                <li>
                    <a href="{{url('forget-password')}}" class="sidebar-submenu-item" {{request()->is('forget-password')?'active':''}}> Forgot Password </a>
                </li>
                <li>
                    <a href="{{url('reset-password')}}" class="sidebar-submenu-item {{request()->is('reset-password')?'active':''}}"> Reset Password </a>
                </li>
            </ul>
        </li>
        <!-- Miscellaneous  -->
        <li>
            <a href="javascript:void(0);" class="sidebar-menu">
                <span class="sidebar-menu-icon">
                    <i data-feather="grid"></i>
                </span>
                <span class="sidebar-menu-text">Miscellaneous</span>
                <span class="sidebar-menu-arrow">
                    <i data-feather="chevron-right"></i>
                </span>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="./starter.html" class="sidebar-submenu-item"> Starter Page </a>
                </li>
                <li>
                    <a href="./comming-soon.html" class="sidebar-submenu-item"> Coming Soon </a>
                </li>
                <li>
                    <a href="./maintenance.html" class="sidebar-submenu-item"> Maintenance </a>
                </li>
                <li>
                    <a href="./404-error.html" class="sidebar-submenu-item"> Error 404 </a>
                </li>
                <li>
                    <a href="./500-error.html" class="sidebar-submenu-item"> Error 500 </a>
                </li>
                <li>
                    <a href="./not-authorized.html" class="sidebar-submenu-item"> Not Authorized </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Ends -->
</aside>
