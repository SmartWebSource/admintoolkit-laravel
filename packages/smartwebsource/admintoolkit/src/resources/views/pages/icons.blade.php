@extends('admin::layout')

@section('title','Icons')

@section('content')
<main class="container flex-grow p-4 sm:p-6">
    <!-- Page Title Starts -->
    <div class="mb-6 flex flex-col justify-between gap-y-1 sm:flex-row sm:gap-y-0">
      <h5>Icons</h5>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="#">Components</a>
        </li>
        <li class="breadcrumb-item">
          <a href="#">Icons</a>
        </li>
      </ol>
    </div>
    <!-- Page Title Ends -->

    <!-- Icons Starts -->
    <div class="space-y-6">
      <!-- Card: Feather Icon Starts -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Feather Icons</h4>

          <p class="card-subtitle">
            Checkout
            <a
              class="text-primary-500 transition-colors duration-150 hover:text-primary-600 hover:underline"
              href="https://feathericons.com"
              target="_blank"
            >
              Feather Icons
            </a>
            to discover more.
          </p>

          <div class="code-viewer mt-4">
            <div class="flex flex-wrap items-center gap-6">
              <i data-feather="home"></i>
              <i data-feather="mail"></i>
              <i data-feather="calendar"></i>
              <i data-feather="users"></i>
              <i data-feather="settings"></i>
              <i data-feather="message-square"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- Card: Feather Icon Ends -->

      <!-- Card: Box Icon Starts -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Box Icons</h4>

          <p class="card-subtitle">
            Checkout
            <a
              class="text-primary-500 transition-colors duration-150 hover:text-primary-600 hover:underline"
              href="https://boxicons.com/"
              target="_blank"
            >
              Box Icons
            </a>
            to discover more.
          </p>

          <div class="code-viewer mt-4">
            <div class="flex flex-col gap-6">
              <div class="flex flex-wrap items-center gap-6 text-2xl">
                <i class="bx bxs-home"></i>
                <i class="bx bxs-envelope"></i>
                <i class="bx bxs-calendar-alt"></i>
                <i class="bx bxs-user"></i>
                <i class="bx bxs-cog"></i>
                <i class="bx bxs-message-dots"></i>
              </div>
              <div class="flex flex-wrap items-center gap-6 text-2xl">
                <i class="bx bx-home"></i>
                <i class="bx bx-envelope"></i>
                <i class="bx bx-calendar-alt"></i>
                <i class="bx bx-user"></i>
                <i class="bx bx-cog"></i>
                <i class="bx bx-message-dots"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card: Box Icon Ends -->

      <!-- Card: Fontawesome Starts -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Fontawesome Icons</h4>

          <p class="card-subtitle">
            Checkout
            <a
              class="text-primary-500 transition-colors duration-150 hover:text-primary-600 hover:underline"
              href="https://fontawesome.com/search"
              target="_blank"
            >
              Fontawesome
            </a>
            to discover more.
          </p>

          <div class="code-viewer mt-4">
            <div class="flex flex-wrap items-center gap-6 text-xl">
              <i class="fa-solid fa-house"></i>
              <i class="fa-solid fa-envelope"></i>
              <i class="fa-solid fa-calendar"></i>
              <i class="fa-solid fa-user"></i>
              <i class="fa-solid fa-gear"></i>
              <i class="fa-solid fa-comment"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- Card: Fontawesome Ends -->

      <!-- Card: Tabler Icons Starts -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tabler Icons</h4>

          <p class="card-subtitle">
            Checkout
            <a
              class="text-primary-500 transition-colors duration-150 hover:text-primary-600 hover:underline"
              href="https://tabler-icons.io/"
              target="_blank"
            >
              Tabler Icons
            </a>
            to discover more.
          </p>

          <div class="code-viewer mt-4">
            <div class="flex flex-wrap items-center gap-6 text-2xl">
              <i class="ti ti-home-2"></i>
              <i class="ti ti-mail"></i>
              <i class="ti ti-calendar-due"></i>
              <i class="ti ti-user"></i>
              <i class="ti ti-settings"></i>
              <i class="ti ti-message-circle-2"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- Card: Tabler Icons Ends -->
    </div>
    <!-- Icons Ends -->
  </main>
@endsection
