<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item"><a href="/admin/index"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>
            </li>
            @can('isOperations')
                <li class=" navigation-header">
                    <span data-i18n="nav.category.layouts">Inventory</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                                                                              data-placement="right" data-original-title="Layouts"></i>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-pencil-square"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Manage Inventory</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{url('quotations')}}" data-i18n="nav.page_layouts.1_column">Pending Request Quote</a>
                        </li>
                        <li><a class="menu-item" href="/approved" data-i18n="nav.page_layouts.2_columns">Confirmed Shipment</a>
                        </li>
                        <li><a class="menu-item" href="#" data-i18n="nav.page_layouts.3_columns.main">Shipment Type Table</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="{{url('imports')}}" data-i18n="nav.page_layouts.3_columns.left_sidebar">Import</a>
                                </li>
                                <li><a class="menu-item" href="{{url('exports')}}"
                                       data-i18n="nav.page_layouts.3_columns.left_sticky_sidebar">Export</a>
                                </li>
                                <li><a class="menu-item" href="{{url('domestics')}}" data-i18n="nav.page_layouts.3_columns.right_sidebar">Domestic</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="/duties" data-i18n="nav.page_layouts.2_columns">Tariff Rates</a>
                        </li>
                        <li class="navigation-divider"></li>

                    </ul>
                </li>

                <li class=" navigation-header">
                    <span data-i18n="nav.category.layouts">Fleet Management</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-truck"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Manage Fleet</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#" data-i18n="nav.page_layouts.1_column">Monitor</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="/monitor-export" data-i18n="nav.page_layouts.3_columns.left_sidebar">Export</a>
                                </li>
                                <li><a class="menu-item" href="monitor-import"
                                       data-i18n="nav.page_layouts.3_columns.left_sticky_sidebar">Import</a>
                                </li>
                                <li><a class="menu-item" href="monitor-domestic"
                                       data-i18n="nav.page_layouts.3_columns.left_sticky_sidebar">Domestics</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="" data-i18n="nav.page_layouts.2_columns">Schedule Haulage</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="/haulage-export" data-i18n="nav.page_layouts.3_columns.left_sidebar">Export Haulage</a>
                                </li>
                                <li><a class="menu-item" href="/haulage-import"
                                       data-i18n="nav.page_layouts.3_columns.left_sticky_sidebar">Import Haulage</a>
                                </li>

                            </ul>
                        </li>
                        <li><a class="menu-item" href="#" data-i18n="nav.page_layouts.3_columns.main">Add Here</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="/vehicles/create" data-i18n="nav.page_layouts.3_columns.left_sidebar">Vehicle</a>
                                </li>
                                <li><a class="menu-item" href="/drivers/create"
                                       data-i18n="nav.page_layouts.3_columns.left_sticky_sidebar">Driver</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#" data-i18n="nav.page_layouts.3_columns.main">Tables</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="/vehicles" data-i18n="nav.page_layouts.3_columns.left_sidebar">Vehicle</a>
                                </li>
                                <li><a class="menu-item" href="/drivers"
                                       data-i18n="nav.page_layouts.3_columns.left_sticky_sidebar">Driver</a>
                                </li>
                                <li><a class="menu-item" href="/Maintenance" data-i18n="nav.page_layouts.3_columns.right_sidebar">Maintenance</a>
                                </li>
                                <li><a class="menu-item" href="/fuel" data-i18n="nav.page_layouts.3_columns.right_sidebar">Fuel</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header">
                    <span data-i18n="nav.category.layouts">User Management</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-user-plus"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Manage User</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="/admin/registration" data-i18n="nav.page_layouts.1_column">Add User</a>
                        </li>
                    </ul>
                </li>
            @endcan
            @can('isAccountant')
                <li class=" navigation-header">
                    <span data-i18n="nav.category.layouts">Inventory</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                                                                              data-placement="right" data-original-title="Layouts"></i>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-pencil-square"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Manage Inventory</span></a>

                <li><a class="menu-item" href="#" data-i18n="nav.page_layouts.3_columns.main">Shipment Type Table</a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{url('imports')}}" data-i18n="nav.page_layouts.3_columns.left_sidebar">Import</a>
                        </li>
                        <li><a class="menu-item" href="{{url('exports')}}"
                               data-i18n="nav.page_layouts.3_columns.left_sticky_sidebar">Export</a>
                        </li>
                        <li><a class="menu-item" href="{{url('domestics')}}" data-i18n="nav.page_layouts.3_columns.right_sidebar">Domestic</a>
                        </li>
                    </ul>
                </li>

                </li>
                <li class=" navigation-header">
                    <span data-i18n="nav.category.layouts">Billing  Management</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
                </li>
                <li class=" nav-item"><a href="/client-lists"><i class="la la-book"></i><span class="menu-title" data-i18n="nav.page_layouts.main">Customers</span></a>
                </li>
            @endcan
        </ul>
    </div>
</div>