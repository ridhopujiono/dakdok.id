<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf_token" content="{{csrf_token()}}">
    <title>{{$title}}</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.svg')}}" type="image/x-icon">
</head>
<style>
    .dataTable-info{
        display: none;
    }

</style>
<body>
    <audio id="myAudio">
        <source src="{{asset('admin/message_notify.mp3')}}" type="audio/mpeg">
    </audio>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header" style="padding-bottom: 0">
                    <div class="d-flex justify-content-center">
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('admin/img/logo.svg')}}" alt="Logo" srcset="" style="height: 80px;"></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu" style="margin-top: -20px;" >
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item {{ ($active === 'utama') ? 'active' : '' }} ">
                            <a href="{{url('utama')}}" class='sidebar-link link_dashboard'>
                                <i class="bi bi-grid-fill"></i>
                                
                                <span>Dashboard </span>
                                
                            </a>
                        </li>
                        <li class="sidebar-item {{ ($active === 'proyek') ? 'active' : '' }} ">
                            <a href="{{url('proyek')}}" class='sidebar-link link_proyek'>
                                <i class="bi bi-building"></i>
                                
                                <span>Proyek</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ ($active === 'iklan') ? 'active' : '' }} ">
                            <a href="{{url('iklan')}}" class='sidebar-link'>
                                <i class="bi bi-image-fill"></i>
                                
                                <span>Iklan</span>
                            </a>
                        </li>
                        @if(auth()->user()->role == "2")
                        <li class="sidebar-item {{ ($active === 'manajemen_admin') ? 'active' : '' }} ">
                            <a href="{{url('manajemen_admin')}}" class='sidebar-link link_manajemen_admin'>
                                <i class="bi bi-people-fill"></i>
                                
                                <span>Manajemen Admin</span>
                            </a>
                        </li>
                        @endif
                        <li class="sidebar-item {{ ($active === 'ubah_password') ? 'active' : '' }} ">
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#modal_edit_password" class='sidebar-link link_ubah_password'>
                                <i class="bi bi-lock-fill"></i>
                                
                                <span>Ubah Password</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ ($active === 'logout') ? 'active' : '' }} ">
                            <a href="{{url('logout')}}" class='sidebar-link'>
                                <i class="bi bi-arrow-bar-left"></i>
                                
                                <span>Keluar</span>
                            </a>
                        </li>

                        <!-- <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Components</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="component-alert.html">Alert</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-badge.html">Badge</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-breadcrumb.html">Breadcrumb</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-button.html">Button</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-card.html">Card</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-carousel.html">Carousel</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-dropdown.html">Dropdown</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-list-group.html">List Group</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-modal.html">Modal</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-navs.html">Navs</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-pagination.html">Pagination</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-progress.html">Progress</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-spinner.html">Spinner</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-tooltip.html">Tooltip</a>
                                </li>
                            </ul>
                        </li> -->

                        

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            @yield('container')
            
            <!-- Modal -->
            <div class="modal fade" id="modal_edit_password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('ubah_password')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="password">Masukan Password Baru</label>
                                <input type="text" id="password" class="form-control" name="password" autofocus="true" placeholder="Password baru">
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    @if(session('berhasil_update_password'))
        <script>
            let msg = "{{session('berhasil_update_password')}}";
            Toastify({
                text: msg,
                duration: 3000,
                close:true,
                gravity:"top",
                position: "right",
                backgroundColor: "#4fbe87",
            }).showToast();
        </script>
    @elseif(session('gagal_update_password'))
        <script>
            let msg = "{{session('gagal_update_password')}}";
            Toastify({
                text: msg,
                duration: 3000,
                close:true,
                gravity:"top",
                position: "right",
                backgroundColor: "#a20505",
            }).showToast();
        </script>
    @endif
    <script src="{{asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('admin/assets/js/main.js')}}"></script>
    

    
</body>

</html>