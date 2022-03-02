<div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border container-xxl"
     role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand"
                                            href="/html/ltr/horizontal-menu-template/index.html"><span
                            class="brand-logo">
                                <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                    <defs>
                                        <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                                        y2="89.4879456%">
                                            <stop stop-color="#000000" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                        </lineargradient>
                                        <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                                        x2="37.373316%" y2="100%">
                                            <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                        </lineargradient>
                                    </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                            <g id="Group" transform="translate(400.000000, 178.000000)">
                                                <path class="text-primary" id="Path"
                                                      d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                      style="fill:currentColor"></path>
                                                <path id="Path1"
                                                      d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                      fill="url(#linearGradient-1)" opacity="0.2"></path>
                                                <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                         points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                                <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                         points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                                <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                                         points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                            </g>
                                        </g>
                                    </g>
                                </svg></span>
                    <h2 class="brand-text mb-0">Vuexy</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <!-- Horizontal menu content-->
    <div class="navbar-container main-menu-content" data-menu="menu-container">
        <!-- include /includes/mixins-->
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item"><a class="nav-link d-flex align-items-center"><i data-feather="home"></i><span
                            data-i18n="Dashboards">Dashboards</span></a>
                {{--                <ul class="dropdown-menu" data-bs-popper="none">--}}
                {{--                    <li class="active" data-menu=""><a class="dropdown-item d-flex align-items-center" href="dashboard-analytics.html" data-bs-toggle="" data-i18n="Analytics"><i data-feather="activity"></i><span data-i18n="Analytics">Analytics</span></a>--}}
                {{--                    </li>--}}
                {{--                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="dashboard-ecommerce.html" data-bs-toggle="" data-i18n="eCommerce"><i data-feather="shopping-cart"></i><span data-i18n="eCommerce">eCommerce</span></a>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
            </li>
            <li class="nav-item"><a class="nav-link d-flex align-items-center" href="{{route("admin.orders.index")}}"><i
                            data-feather="package"></i><span data-i18n="Apps">Quản lý bán hàng</span></a>
            </li>

            <li class="nav-item">
                <a class="d-flex align-items-center" href="{{ route('admin.toursale.index')}}" data-bs-toggle="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-layers">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                        <polyline points="2 17 12 22 22 17"></polyline>
                        <polyline points="2 12 12 17 22 12"></polyline>
                    </svg>
                    <span data-i18n="User Interface">Quản lý tours sale</span>
                </a>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a
                        class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown"><i
                            data-feather="edit"></i><span data-i18n="Forms &amp; Tables">Forms &amp; Tables</span></a>
                <ul class="dropdown-menu" data-bs-popper="none">
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                data-bs-toggle="dropdown" data-i18n="Form Elements"><i data-feather="copy"></i><span
                                    data-i18n="Form Elements">Form Elements</span></a>
                        <ul class="dropdown-menu" data-bs-popper="none">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-input.html"
                                                data-bs-toggle="" data-i18n="Input"><i data-feather="circle"></i><span
                                            data-i18n="Input">Input</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="form-input-groups.html" data-bs-toggle=""
                                                data-i18n="Input Groups"><i data-feather="circle"></i><span
                                            data-i18n="Input Groups">Input Groups</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="form-input-mask.html" data-bs-toggle="" data-i18n="Input Mask"><i
                                            data-feather="circle"></i><span data-i18n="Input Mask">Input Mask</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="form-textarea.html" data-bs-toggle="" data-i18n="Textarea"><i
                                            data-feather="circle"></i><span data-i18n="Textarea">Textarea</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="form-checkbox.html" data-bs-toggle="" data-i18n="Checkbox"><i
                                            data-feather="circle"></i><span data-i18n="Checkbox">Checkbox</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-radio.html"
                                                data-bs-toggle="" data-i18n="Radio"><i data-feather="circle"></i><span
                                            data-i18n="Radio">Radio</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="form-custom-options.html" data-bs-toggle=""
                                                data-i18n="Custom Options"><i data-feather="circle"></i><span
                                            data-i18n="Custom Options">Custom Options</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-switch.html"
                                                data-bs-toggle="" data-i18n="Switch"><i data-feather="circle"></i><span
                                            data-i18n="Switch">Switch</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-select.html"
                                                data-bs-toggle="" data-i18n="Select"><i data-feather="circle"></i><span
                                            data-i18n="Select">Select</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="form-number-input.html" data-bs-toggle=""
                                                data-i18n="Number Input"><i data-feather="circle"></i><span
                                            data-i18n="Number Input">Number Input</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="form-file-uploader.html" data-bs-toggle=""
                                                data-i18n="File Uploader"><i data-feather="circle"></i><span
                                            data-i18n="File Uploader">File Uploader</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="form-quill-editor.html" data-bs-toggle=""
                                                data-i18n="Quill Editor"><i data-feather="circle"></i><span
                                            data-i18n="Quill Editor">Quill Editor</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="form-date-time-picker.html" data-bs-toggle=""
                                                data-i18n="Date &amp; Time Picker"><i data-feather="circle"></i><span
                                            data-i18n="Date &amp; Time Picker">Date &amp; Time Picker</span></a>
                            </li>
                        </ul>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-layout.html"
                                        data-bs-toggle="" data-i18n="Form Layout"><i data-feather="box"></i><span
                                    data-i18n="Form Layout">Form Layout</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-wizard.html"
                                        data-bs-toggle="" data-i18n="Form Wizard"><i data-feather="package"></i><span
                                    data-i18n="Form Wizard">Form Wizard</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-validation.html"
                                        data-bs-toggle="" data-i18n="Form Validation"><i
                                    data-feather="check-circle"></i><span
                                    data-i18n="Form Validation">Form Validation</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-repeater.html"
                                        data-bs-toggle="" data-i18n="Form Repeater"><i
                                    data-feather="rotate-cw"></i><span
                                    data-i18n="Form Repeater">Form Repeater</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="table-bootstrap.html"
                                        data-bs-toggle="" data-i18n="Table"><i data-feather="server"></i><span
                                    data-i18n="Table">Table</span></a>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                data-bs-toggle="dropdown" data-i18n="Datatable"><i data-feather="grid"></i><span
                                    data-i18n="Datatable">Datatable</span></a>
                        <ul class="dropdown-menu" data-bs-popper="none">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="table-datatable-basic.html" data-bs-toggle="" data-i18n="Basic"><i
                                            data-feather="circle"></i><span data-i18n="Basic">Basic</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="table-datatable-advanced.html" data-bs-toggle=""
                                                data-i18n="Advanced"><i data-feather="circle"></i><span
                                            data-i18n="Advanced">Advanced</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a
                        class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown"><i
                            data-feather="file-text"></i><span data-i18n="Pages">Pages</span></a>
                <ul class="dropdown-menu" data-bs-popper="none">
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                data-bs-toggle="dropdown" data-i18n="Authentication"><i data-feather="unlock"></i><span
                                    data-i18n="Authentication">Authentication</span></a>
                        <ul class="dropdown-menu" data-bs-popper="none">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                        class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" data-i18n="Login"><i data-feather="circle"></i><span
                                            data-i18n="Login">Login</span></a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                        href="auth-login-basic.html" data-bs-toggle="" data-i18n="Basic"
                                                        target="_blank"><i data-feather="circle"></i><span
                                                    data-i18n="Basic">Basic</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                        href="auth-login-cover.html" data-bs-toggle="" data-i18n="Cover"
                                                        target="_blank"><i data-feather="circle"></i><span
                                                    data-i18n="Cover">Cover</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                        class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" data-i18n="Register"><i
                                            data-feather="circle"></i><span data-i18n="Register">Register</span></a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                        href="auth-register-basic.html" data-bs-toggle=""
                                                        data-i18n="Basic" target="_blank"><i
                                                    data-feather="circle"></i><span data-i18n="Basic">Basic</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                        href="auth-register-cover.html" data-bs-toggle=""
                                                        data-i18n="Cover" target="_blank"><i
                                                    data-feather="circle"></i><span data-i18n="Cover">Cover</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                        href="auth-register-multisteps.html" data-bs-toggle=""
                                                        data-i18n="Multi-Steps" target="_blank"><i
                                                    data-feather="circle"></i><span
                                                    data-i18n="Multi-Steps">Multi-Steps</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                        class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" data-i18n="Forgot Password"><i
                                            data-feather="circle"></i><span
                                            data-i18n="Forgot Password">Forgot Password</span></a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                        href="auth-forgot-password-basic.html" data-bs-toggle=""
                                                        data-i18n="Basic" target="_blank"><i
                                                    data-feather="circle"></i><span data-i18n="Basic">Basic</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                        href="auth-forgot-password-cover.html" data-bs-toggle=""
                                                        data-i18n="Cover" target="_blank"><i
                                                    data-feather="circle"></i><span data-i18n="Cover">Cover</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                        class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" data-i18n="Reset Password"><i
                                            data-feather="circle"></i><span
                                            data-i18n="Reset Password">Reset Password</span></a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                        href="auth-reset-password-basic.html" data-bs-toggle=""
                                                        data-i18n="Basic" target="_blank"><i
                                                    data-feather="circle"></i><span data-i18n="Basic">Basic</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                        href="auth-reset-password-cover.html" data-bs-toggle=""
                                                        data-i18n="Cover" target="_blank"><i
                                                    data-feather="circle"></i><span data-i18n="Cover">Cover</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                        class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" data-i18n="Verify Email"><i data-feather="circle"></i><span
                                            data-i18n="Verify Email">Verify Email</span></a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                        href="auth-verify-email-basic.html" data-bs-toggle=""
                                                        data-i18n="Basic" target="_blank"><i
                                                    data-feather="circle"></i><span data-i18n="Basic">Basic</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                        href="auth-verify-email-cover.html" data-bs-toggle=""
                                                        data-i18n="Cover" target="_blank"><i
                                                    data-feather="circle"></i><span data-i18n="Cover">Cover</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                        class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" data-i18n="Two Steps"><i
                                            data-feather="circle"></i><span data-i18n="Two Steps">Two Steps</span></a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                        href="auth-two-steps-basic.html" data-bs-toggle=""
                                                        data-i18n="Basic" target="_blank"><i
                                                    data-feather="circle"></i><span data-i18n="Basic">Basic</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                        href="auth-two-steps-cover.html" data-bs-toggle=""
                                                        data-i18n="Cover" target="_blank"><i
                                                    data-feather="circle"></i><span data-i18n="Cover">Cover</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                data-bs-toggle="dropdown" data-i18n="Account Settings"><i
                                    data-feather="settings"></i><span
                                    data-i18n="Account Settings">Account Settings</span></a>
                        <ul class="dropdown-menu" data-bs-popper="none">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="page-account-settings-account.html" data-bs-toggle=""
                                                data-i18n="Account"><i data-feather="circle"></i><span
                                            data-i18n="Account">Account</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="page-account-settings-security.html" data-bs-toggle=""
                                                data-i18n="Security"><i data-feather="circle"></i><span
                                            data-i18n="Security">Security</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="page-account-settings-billing.html" data-bs-toggle=""
                                                data-i18n="Billings &amp; Plans"><i data-feather="circle"></i><span
                                            data-i18n="Billings &amp; Plans">Billings &amp; Plans</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="page-account-settings-notifications.html" data-bs-toggle=""
                                                data-i18n="Notifications"><i data-feather="circle"></i><span
                                            data-i18n="Notifications">Notifications</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="page-account-settings-connections.html" data-bs-toggle=""
                                                data-i18n="Connections"><i data-feather="circle"></i><span
                                            data-i18n="Connections">Connections</span></a>
                            </li>
                        </ul>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-profile.html"
                                        data-bs-toggle="" data-i18n="Profile"><i data-feather="user"></i><span
                                    data-i18n="Profile">Profile</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-faq.html"
                                        data-bs-toggle="" data-i18n="FAQ"><i data-feather="help-circle"></i><span
                                    data-i18n="FAQ">FAQ</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-knowledge-base.html"
                                        data-bs-toggle="" data-i18n="Knowledge Base"><i data-feather="info"></i><span
                                    data-i18n="Knowledge Base">Knowledge Base</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-pricing.html"
                                        data-bs-toggle="" data-i18n="Pricing"><i data-feather="dollar-sign"></i><span
                                    data-i18n="Pricing">Pricing</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-license.html"
                                        data-bs-toggle="" data-i18n="License"><i data-feather="credit-card"></i><span
                                    data-i18n="License">License</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-api-key.html"
                                        data-bs-toggle="" data-i18n="API Key"><i data-feather="key"></i><span
                                    data-i18n="API Key">API Key</span></a>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                data-bs-toggle="dropdown" data-i18n="Blog"><i data-feather="clipboard"></i><span
                                    data-i18n="Blog">Blog</span></a>
                        <ul class="dropdown-menu" data-bs-popper="none">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="page-blog-list.html" data-bs-toggle="" data-i18n="List"><i
                                            data-feather="circle"></i><span data-i18n="List">List</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="page-blog-detail.html" data-bs-toggle="" data-i18n="Detail"><i
                                            data-feather="circle"></i><span data-i18n="Detail">Detail</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="page-blog-edit.html" data-bs-toggle="" data-i18n="Edit"><i
                                            data-feather="circle"></i><span data-i18n="Edit">Edit</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                data-bs-toggle="dropdown" data-i18n="Mail Template"><i data-feather="mail"></i><span
                                    data-i18n="Mail Template">Mail Template</span></a>
                        <ul class="dropdown-menu" data-bs-popper="none">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="https://pixinvent.com/demo/vuexy-mail-template/mail-welcome.html"
                                                data-bs-toggle="" data-i18n="Welcome" target="_blank"><i
                                            data-feather="circle"></i><span data-i18n="Welcome">Welcome</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="https://pixinvent.com/demo/vuexy-mail-template/mail-reset-password.html"
                                                data-bs-toggle="" data-i18n="Reset Password" target="_blank"><i
                                            data-feather="circle"></i><span
                                            data-i18n="Reset Password">Reset Password</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="https://pixinvent.com/demo/vuexy-mail-template/mail-verify-email.html"
                                                data-bs-toggle="" data-i18n="Verify Email" target="_blank"><i
                                            data-feather="circle"></i><span data-i18n="Verify Email">Verify Email</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="https://pixinvent.com/demo/vuexy-mail-template/mail-deactivate-account.html"
                                                data-bs-toggle="" data-i18n="Deactivate Account" target="_blank"><i
                                            data-feather="circle"></i><span data-i18n="Deactivate Account">Deactivate Account</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="https://pixinvent.com/demo/vuexy-mail-template/mail-invoice.html"
                                                data-bs-toggle="" data-i18n="Invoice" target="_blank"><i
                                            data-feather="circle"></i><span data-i18n="Invoice">Invoice</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="https://pixinvent.com/demo/vuexy-mail-template/mail-promotional.html"
                                                data-bs-toggle="" data-i18n="Promotional" target="_blank"><i
                                            data-feather="circle"></i><span
                                            data-i18n="Promotional">Promotional</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                data-bs-toggle="dropdown" data-i18n="Miscellaneous"><i data-feather="file"></i><span
                                    data-i18n="Miscellaneous">Miscellaneous</span></a>
                        <ul class="dropdown-menu" data-bs-popper="none">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="page-misc-coming-soon.html" data-bs-toggle=""
                                                data-i18n="Coming Soon" target="_blank"><i
                                            data-feather="circle"></i><span
                                            data-i18n="Coming Soon">Coming Soon</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="page-misc-not-authorized.html" data-bs-toggle=""
                                                data-i18n="Not Authorized" target="_blank"><i data-feather="circle"></i><span
                                            data-i18n="Not Authorized">Not Authorized</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="page-misc-under-maintenance.html" data-bs-toggle=""
                                                data-i18n="Maintenance" target="_blank"><i
                                            data-feather="circle"></i><span
                                            data-i18n="Maintenance">Maintenance</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="page-misc-error.html" data-bs-toggle="" data-i18n="Error"
                                                target="_blank"><i data-feather="circle"></i><span data-i18n="Error">Error</span></a>
                            </li>
                        </ul>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="modal-examples.html"
                                        data-bs-toggle="" data-i18n="Modal Examples"><i data-feather="square"></i><span
                                    data-i18n="Modal Examples">Modal Examples</span></a>
                    </li>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a
                        class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown"><i
                            data-feather="bar-chart-2"></i><span data-i18n="Charts &amp; Maps">Charts &amp; Maps</span></a>
                <ul class="dropdown-menu" data-bs-popper="none">
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                data-bs-toggle="dropdown" data-i18n="Charts"><i data-feather="pie-chart"></i><span
                                    data-i18n="Charts">Charts</span></a>
                        <ul class="dropdown-menu" data-bs-popper="none">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="chart-apex.html"
                                                data-bs-toggle="" data-i18n="Apex"><i data-feather="circle"></i><span
                                            data-i18n="Apex">Apex</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                                href="chart-chartjs.html" data-bs-toggle="" data-i18n="Chartjs"><i
                                            data-feather="circle"></i><span data-i18n="Chartjs">Chartjs</span></a>
                            </li>
                        </ul>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="maps-leaflet.html"
                                        data-bs-toggle="" data-i18n="Leaflet Maps"><i data-feather="map"></i><span
                                    data-i18n="Leaflet Maps">Leaflet Maps</span></a>
                    </li>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a
                        class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown"><i
                            data-feather="box"></i><span data-i18n="Misc">Misc</span></a>
                <ul class="dropdown-menu" data-bs-popper="none">
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                data-bs-toggle="dropdown" data-i18n="Menu Levels"><i data-feather="menu"></i><span
                                    data-i18n="Menu Levels">Menu Levels</span></a>
                        <ul class="dropdown-menu" data-bs-popper="none">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="#"
                                                data-bs-toggle="" data-i18n="Second Level"><i data-feather="circle"></i><span
                                            data-i18n="Second Level">Second Level 2.1</span></a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                        class="dropdown-item d-flex align-items-center dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" data-i18n="Second Level"><i data-feather="circle"></i><span
                                            data-i18n="Second Level">Second Level 2.2</span></a>
                                <ul class="dropdown-menu" data-bs-popper="none">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="#"
                                                        data-bs-toggle="" data-i18n="Third Level"><i
                                                    data-feather="circle"></i><span data-i18n="Third Level">Third Level 3.1</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="#"
                                                        data-bs-toggle="" data-i18n="Third Level"><i
                                                    data-feather="circle"></i><span data-i18n="Third Level">Third Level 3.2</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="disabled" data-menu=""><a class="dropdown-item d-flex align-items-center" href=""
                                                         data-bs-toggle="" data-i18n="Disabled Menu"><i
                                    data-feather="eye-off"></i><span data-i18n="Disabled Menu">Disabled Menu</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation"
                                        data-bs-toggle="" data-i18n="Documentation" target="_blank"><i
                                    data-feather="folder"></i><span data-i18n="Documentation">Documentation</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                                        href="https://pixinvent.ticksy.com/" data-bs-toggle="" data-i18n="Raise Support"
                                        target="_blank"><i data-feather="life-buoy"></i><span data-i18n="Raise Support">Raise Support</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
