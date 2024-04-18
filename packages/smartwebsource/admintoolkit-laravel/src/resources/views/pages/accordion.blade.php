@extends('admin::layout')

@section('title','Accordion')

@section('content')
<main class="container flex-grow p-4 sm:p-6">
    <!-- Page Title Starts -->
    <div class="mb-6 flex flex-col justify-between gap-y-1 sm:flex-row sm:gap-y-0">
      <h5>Accordion</h5>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="#">Components</a>
        </li>
        <li class="breadcrumb-item">
          <a href="#">Accordion</a>
        </li>
      </ol>
    </div>
    <!-- Page Title Ends -->

    <!-- Accordion Starts -->
    <div class="space-y-6">
      <!-- Card: Basic Accordion Starts -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Basic Accordion</h4>

          <p class="card-subtitle">Example of basic accordion.</p>

          <div class="code-viewer mt-4">
            <div class="accordion">
              <div class="accordion-item">
                <button type="button" class="accordion-header">
                  <span>Accordion Item 1</span>
                  <span class="accordion-icon">
                    <i class="ti ti-chevron-right"></i>
                  </span>
                </button>
                <div class="accordion-body">
                  <div class="accordion-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia rem fugit doloribus in
                    placeat voluptatem quisquam blanditiis, repellat obcaecati suscipit laborum velit numquam
                    delectus dolores dolore accusamus ab, corrupti nam.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <button type="button" class="accordion-header">
                  <span>Accordion Item 2</span>
                  <span class="accordion-icon">
                    <i class="ti ti-chevron-right"></i>
                  </span>
                </button>
                <div class="accordion-body">
                  <div class="accordion-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia rem fugit doloribus in
                    placeat voluptatem quisquam blanditiis, repellat obcaecati suscipit laborum velit numquam
                    delectus dolores dolore accusamus ab, corrupti nam.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <button type="button" class="accordion-header">
                  <span>Accordion Item 3</span>
                  <span class="accordion-icon">
                    <i class="ti ti-chevron-right"></i>
                  </span>
                </button>
                <div class="accordion-body">
                  <div class="accordion-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia rem fugit doloribus in
                    placeat voluptatem quisquam blanditiis, repellat obcaecati suscipit laborum velit numquam
                    delectus dolores dolore accusamus ab, corrupti nam.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card: Basic Accordion Ends -->

      <!-- Card: Flush Accordion Starts -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Flush Accordion</h4>

          <p class="card-subtitle">Example of flush accordion.</p>

          <div class="code-viewer mt-4">
            <div class="accordion">
              <div class="accordion-item active">
                <button type="button" class="accordion-header">
                  <span>Accordion Item 1</span>
                  <span class="accordion-icon">
                    <i class="ti ti-chevron-right"></i>
                  </span>
                </button>
                <div class="accordion-body">
                  <div class="accordion-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia rem fugit doloribus in
                    placeat voluptatem quisquam blanditiis, repellat obcaecati suscipit laborum velit numquam
                    delectus dolores dolore accusamus ab, corrupti nam.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <button type="button" class="accordion-header">
                  <span>Accordion Item 2</span>
                  <span class="accordion-icon">
                    <i class="ti ti-chevron-right"></i>
                  </span>
                </button>
                <div class="accordion-body">
                  <div class="accordion-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia rem fugit doloribus in
                    placeat voluptatem quisquam blanditiis, repellat obcaecati suscipit laborum velit numquam
                    delectus dolores dolore accusamus ab, corrupti nam.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <button type="button" class="accordion-header">
                  <span>Accordion Item 3</span>
                  <span class="accordion-icon">
                    <i class="ti ti-chevron-right"></i>
                  </span>
                </button>
                <div class="accordion-body">
                  <div class="accordion-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia rem fugit doloribus in
                    placeat voluptatem quisquam blanditiis, repellat obcaecati suscipit laborum velit numquam
                    delectus dolores dolore accusamus ab, corrupti nam.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card: Flush Accordion Ends -->
    </div>
    <!-- Accordion Ends -->
  </main>
@endsection
