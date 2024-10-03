<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - LSO</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Nunito.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/File-Manager.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Filter.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Form-Select---Full-Date---Month-Day-Year-1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Form-Select---Full-Date---Month-Day-Year.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Forum---Thread-listing-forum.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Forum---Thread-listing.css') }}">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark" style="background: rgb(141,0,0);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><img src="{{ asset('assets/img/dogs/clipart708931%20(1).png') }}" style="width: 50px;"></div>
                    <div class="sidebar-brand-text mx-3"><span>lso&nbsp;</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-start text-light" id="accordionSidebar">
                    <li class="nav-item" style="margin-top: 20px;">
                        <a class="nav-link" href="{{ asset('CROS_Dashboard.html') }}" style="font-family: Nunito, sans-serif;font-size: 25px;padding-top: 5px;padding-bottom: 5px;letter-spacing: -1px;">
                            <i class="fas fa-hands-helping" style="padding-right: 5px;font-size: 20px;"></i>CROS
                        </a>
                        <a class="nav-link" href="{{ asset('CROS_Upload_Project_proposal.html') }}" style="padding-bottom: 5px;padding-left: 55px;padding-top: 5px;font-weight: bold;font-size: 18px;">
                            <span style="font-weight: normal !important;">Upload</span>
                        </a>
                        <a class="nav-link" href="{{ asset('CROS_LIST_Projects_Proposals.html') }}" style="padding-bottom: 5px;padding-left: 55px;padding-top: 5px;font-weight: bold;font-size: 18px;--bs-primary: #8d0000;--bs-primary-rgb: 141,0,0;">
                            <span style="font-weight: normal !important;">Proposals</span>
                        </a>
                        <a class="nav-link" href="{{ asset('CROS_LIST_Projects.html') }}" style="padding-bottom: 5px;padding-left: 55px;padding-top: 5px;font-weight: bold;font-size: 18px;">
                            <span style="font-weight: normal !important;">Projects</span>
                        </a>
                        <a class="nav-link" href="{{ asset('CROS_LIST_Enrolled_DayCare.html') }}" style="padding-bottom: 5px;padding-left: 55px;padding-top: 5px;font-size: 18px;">Daycare</a>
                        <a class="nav-link" href="{{ asset('Manage_User.html') }}" style="padding-bottom: 5px;padding-left: 55px;padding-top: 5px;font-weight: bold;font-size: 18px;">
                            <span style="font-weight: normal !important;">Manage Users</span>
                        </a>
                    </li>
                    <li class="nav-item" style="margin-top: 20px;">
                        <a class="nav-link" href="{{ asset('ECLC_Dashboard.html') }}" style="font-family: Nunito, sans-serif;padding-top: 5px;padding-bottom: 5px;font-size: 25px;font-weight: bold;" data-bs-target="CROS_Dashboard.html">
                            <i class="fas fa-link" style="padding-right: 5px;font-size: 20px;"></i>ECLC
                        </a>
                        <a class="nav-link" href="{{ asset('ECLC_Upload_MOA.html') }}" style="padding-bottom: 5px;padding-left: 55px;padding-top: 5px;font-weight: bold;font-size: 18px;">
                            <span style="font-weight: normal !important;">Upload</span>
                        </a>
                        <a class="nav-link" href="{{ asset('ECLC_LIST_MOA.html') }}" style="padding-bottom: 5px;padding-left: 55px;padding-top: 5px;font-weight: bold;font-size: 18px;">
                            <span style="font-weight: normal !important;">Manage</span>
                        </a>
                    </li>
                    <li class="nav-item" style="margin-top: 20px;">
                        <a class="nav-link" href="{{ asset('#index.html') }}" style="font-family: Nunito, sans-serif;padding-top: 5px;padding-bottom: 5px;font-size: 25px;font-weight: bold;" data-bs-target="CROS_Dashboard.html">
                            <i class="fas fa-link" style="padding-right: 5px;font-size: 20px;"></i>ESC
                        </a>
                        <a class="nav-link" href="{{ asset('ESC_Upload.html') }}" style="padding-bottom: 5px;padding-left: 55px;padding-top: 5px;font-weight: bold;font-size: 18px;">
                            <span style="font-weight: normal !important;">Files</span>
                        </a>
                    </li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>                
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-expand bg-white shadow mb-4 topbar static-top navbar-light">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="{{ asset('assets/img/avatars/avatar4.jpeg') }}">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="{{ asset('assets/img/avatars/avatar2.jpeg') }}">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="{{ asset('assets/img/avatars/avatar3.jpeg') }}">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="{{ asset('assets/img/avatars/avatar5.jpeg') }}">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Airavie</span><img class="border rounded-circle img-profile" src="{{ asset('assets/img/avatars/avatar1.jpeg') }}" width="32" height="32"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4"><strong>MOA/MOU</strong></h3>
                    <div class="col">
                        <div class="card shadow mb-5">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-primary m-0 fw-bold" style="--bs-primary: rgb(141,0,0);--bs-primary-rgb: 141,0,0;">Optional</p>
                                    </div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                    <div class="col"><a class="btn btn-primary" role="button" style="margin: 0px;margin-top: 0px;background: rgb(141,0,0);border-color: rgb(141,0,0);margin-left: 175px;width: 130px;padding-right: 0px;padding-left: 0px;" href="{{ asset('ECLC_LIST_MOA.html') }}"><i class="far fa-arrow-alt-circle-left" style="margin-left: 0px;margin-right: 10px;"></i>Return</a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-xxl-11" style="width: 100%;">
                                        <form style="margin-top: 20px;">
                                            <div class="mb-3"><label class="form-label" for="signature"><strong>Extension Partner Project Remarks</strong></label><textarea class="form-control" id="signature" rows="4" name="signature"></textarea></div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col" style="height: 700px;"></div>
                                <div class="col" style="height: 100px;margin-top: 20px;"><button class="btn btn-primary" type="button" style="margin-top: 5px;background: rgb(141,0,0);border-color: rgb(141,0,0);">Download</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © LSO 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets/js/Input-Image-With-Preview-input_image_preview.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>