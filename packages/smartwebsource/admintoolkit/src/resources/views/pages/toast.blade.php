@extends('admin::layout')

@section('title','Toast')

@section('content')
<main class="container flex-grow p-4 sm:p-6">
    <!-- Page Title Starts -->
    <div class="mb-6 flex flex-col justify-between gap-y-1 sm:flex-row sm:gap-y-0">
      <h5>Toast</h5>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="#">Components</a>
        </li>
        <li class="breadcrumb-item">
          <a href="#">Toast</a>
        </li>
      </ol>
    </div>
    <!-- Page Title Ends -->

    <!-- Toast Starts -->
    <div class="space-y-6">
      <!-- Card: Basic Toast Starts -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Basic Toast</h4>

          <p class="card-subtitle">Example of basic toast.</p>

          <div id="toast-basic-code-viewer" class="code-viewer mt-4" data-render-source="false">
            <div class="code-viewer-content">
              <button id="btn-trigger-toast" class="btn btn-primary" type="button">Show Toast</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Card: Basic Toast Ends -->

      <!-- Card: Toast Type Starts -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Toast Type</h4>

          <p class="card-subtitle">Example of different types of toast.</p>

          <div id="toast-type-code-viewer" class="code-viewer mt-4" data-render-source="false">
            <div class="code-viewer-content">
              <div class="flex flex-wrap gap-4">
                <button id="btn-trigger-toast-success" class="btn btn-success" type="button">
                  Toast Success
                </button>
                <button id="btn-trigger-toast-danger" class="btn btn-danger" type="button">Toast Danger</button>
                <button id="btn-trigger-toast-warning" class="btn btn-warning" type="button">
                  Toast Warning
                </button>
                <button id="btn-trigger-toast-info" class="btn btn-info" type="button">Toast Info</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card: Toast Type Ends -->

      <!-- Card: Toast Placement Starts -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Toast Placement</h4>

          <p class="card-subtitle">Example of different placements of toast.</p>

          <div id="toast-placement-code-viewer" class="code-viewer mt-4" data-render-source="false">
            <div class="code-viewer-content">
              <div class="flex flex-wrap gap-4">
                <button id="btn-trigger-toast-tr" class="btn btn-primary" type="button">Top Right</button>
                <button id="btn-trigger-toast-tc" class="btn btn-primary" type="button">Top Center</button>
                <button id="btn-trigger-toast-tl" class="btn btn-primary" type="button">Top Left</button>
                <button id="btn-trigger-toast-br" class="btn btn-primary" type="button">Bottom Right</button>
                <button id="btn-trigger-toast-bc" class="btn btn-primary" type="button">Bottom Center</button>
                <button id="btn-trigger-toast-bl" class="btn btn-primary" type="button">Bottom Left</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card: Toast Placement Ends -->

      <!-- Card: Toast Closeable Starts -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Toast Closeable</h4>

          <p class="card-subtitle">Example of closeable toast.</p>

          <div id="toast-closeable-code-viewer" class="code-viewer mt-4" data-render-source="false">
            <div class="code-viewer-content">
              <button id="btn-trigger-toast-closeable" class="btn btn-primary" type="button">Show Toast</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Card: Toast Closeable Ends -->

      <!-- Card: Custom Toast Starts -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Custom Toast</h4>

          <p class="card-subtitle">
            Example of custom toast.
            <!-- The <code>toast</code> function is a wrapper around the <code>Toastify JS</code>. For more customization, pleact check out the <a class="text-primary-500 transition-colors duration-150 hover:text-primary-600 hover:underline" href="https://apvarun.github.io/toastify-js/" target="_blank">Toastify JS</a> documentation. -->
          </p>

          <div id="toast-custom-code-viewer" class="code-viewer mt-4" data-render-source="false">
            <div class="code-viewer-content">
              <button id="btn-trigger-custom-toast" class="btn btn-primary" type="button">Show Toast</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Card: Custom Toast Ends -->
    </div>
    <!-- Toast Ends -->
  </main>
@endsection

@push('per_page_js')
    <script src="{{ Vite::asset('resources/js/custom/toast.js') }}" type="module"></script>
@endpush
