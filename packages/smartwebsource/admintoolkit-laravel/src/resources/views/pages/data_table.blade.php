@extends('admin::layout')

@section('title','Data-Table')

@section('content')
<main class="container flex-grow p-4 sm:p-6">
    <!-- Page Title Starts -->
    <div class="mb-6 flex flex-col justify-between gap-y-1 sm:flex-row sm:gap-y-0">
      <h5>Data Table</h5>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="#">Components</a>
        </li>
        <li class="breadcrumb-item">
          <a href="#">Data Table</a>
        </li>
      </ol>
    </div>
    <!-- Page Title Ends -->

    <!-- Data Table Starts -->
    <div class="space-y-6">
      <!-- Card: Basic Data Table Starts -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Basic Data Table</h4>

          <p class="card-subtitle">Example of basic data table.</p>

          <div id="datatable-simple-code-viewer" class="code-viewer mt-4" data-render-source="false">
            <div class="code-viewer-content">
              <table id="datatable-simple" class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Joining Date</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Card: Basic Data Table Ends -->

      <!-- Card: Data Table Columns Filter Starts -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Data Table With Column Filter</h4>

          <p class="card-subtitle">Example of data table with column filter.</p>

          <div id="datatable-filter-code-viewer" class="code-viewer mt-4" data-render-source="false">
            <div class="code-viewer-content">
              <table id="datatable-filter" class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Joining Date</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Card: Data Table Columns Filter Ends -->
    </div>
    <!-- Data Table Ends -->
  </main>
@endsection


@push('per_page_js')
    <script src="{{ Vite::asset('resources/js/custom/data-table.js') }}" type="module"></script>
@endpush
