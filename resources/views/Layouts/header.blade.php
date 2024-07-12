<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('favicon.ico') }}"/>
  {{-- <link rel="fevicon" type="image/x-icon" href="{{url('/favicon.ico')}}"> --}}

    {{-- Title of this pages comes here --}}
  @stack('title')

    {{-- Style for the Bootstrap Css --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

   {{-- For Font Awesome Icons  like Closing Icon of Sidebar  --}}
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

   {{-- For Important Icons of Sidebar  --}}
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  {{-- For Important CSS Files --}}
  <link id="pagestyle" href="{{url('/assets/css/material-dashboard.css?v=3.1.0')}}" rel="stylesheet" />

  {{-- Internal Style of pages renders here --}}
  @stack('style')

</head>

<body class="g-sidenav-show  bg-gray-200">

    @include('Layouts.sidebar')

 <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <nav class="navbar navbar-main position-sticky blur navbar-expand-lg px-0 mx-4 shadow-none shadow-blur border-radius-xl bg-gradient-light z-index-sticky top-1 mt-4 left-auto" id="navbarBlur" data-scroll="true" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Digital College Management System</a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">@stack('staff')</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">@stack('page')</h6>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          <div class="input-group input-group-outline">
            <label class="form-label">Type here...</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-xl-none px-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </a>
          </li>
          <li class="nav-item d-flex align-items-center">
            <a href="#" class="nav-link text-body font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">Profile</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="container-fluid py-4 mt-5">