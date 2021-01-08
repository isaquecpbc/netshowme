        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><h2 class="title_adm">SMS USA</h2></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                        @if ($active == 'pages')
                            <li class="active">
                        @else
                            <li>
                        @endif
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layers-alt"></i><span>Landing Pages</span></a>
                                <ul class="collapse">
                                @if ($active == 'pages' && $activeList == 'List')
                                    <li class="active">
                                @else
                                    <li>
                                @endif
                                        <a href="{{route('pages.index')}}">List</a></li>
                                @if ($active == 'pages' && $activeList == 'Create')
                                    <li class="active">
                                @else
                                    <li>
                                @endif
                                        <a href="{{route('pages.create')}}">Create</a></li>
                                </ul>
                            </li>
                        @if ($active == 'brands')
                            <li class="active">
                        @else
                            <li>
                        @endif
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-bookmark"></i><span>Brands</span></a>
                                <ul class="collapse">
                                @if ($active == 'brands' && $activeList == 'List')
                                    <li class="active">
                                @else
                                    <li>
                                @endif
                                        <a href="{{route('brands.index')}}">List</a></li>
                                @if ($active == 'brands' && $activeList == 'Create')
                                    <li class="active">
                                @else
                                    <li>
                                @endif
                                        <a href="{{route('brands.create')}}">Create</a></li>
                                </ul>
                            </li>
                        @if ($active == 'states')
                            <li class="active">
                        @else
                            <li>
                        @endif
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-location-pin"></i><span>States</span></a>
                                <ul class="collapse">
                                @if ($active == 'states' && $activeList == 'List')
                                    <li class="active">
                                @else
                                    <li>
                                @endif
                                        <a href="{{route('states.index')}}">List</a></li>
                                @if ($active == 'states' && $activeList == 'Create')
                                    <li class="active">
                                @else
                                    <li>
                                @endif
                                        <a href="{{route('states.create')}}">Create</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->