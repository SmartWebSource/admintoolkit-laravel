@extends('admin::layout')

@section('title', 'Charts')

@section('content')
    <main class="container flex-grow p-4 sm:p-6">
        <!-- Page Title Starts -->
        <div class="mb-6 flex flex-col justify-between gap-y-1 sm:flex-row sm:gap-y-0">
            <h5>Charts</h5>

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Components</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Charts</a>
                </li>
            </ol>
        </div>
        <!-- Page Title Ends -->

        <!-- Chart Starts -->
        <div class="space-y-6">
            <!-- Card: Line Chart Starts -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Line Chart</h4>

                    <p class="card-subtitle">Example of a line chart.</p>

                    <div id="line-chart-code-viewer" data-render-source="false" class="code-viewer relative mt-4">
                        <div class="code-viewer-content">
                            <div id="line-chart" class="-ml-4 -mr-2 sm:-mx-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card: Line Chart Ends -->
            <!-- Card: Area Chart Starts -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Area Chart</h4>

                    <p class="card-subtitle">Example of a area chart.</p>

                    <div id="area-chart-code-viewer" data-render-source="false" class="code-viewer mt-4">
                        <div class="code-viewer-content">
                            <div id="area-chart" class="-ml-4 -mr-2 sm:-mx-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card: Area Chart Ends -->
            <!-- Card: Column Chart Starts -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Column Chart</h4>

                    <p class="card-subtitle">Example of a column chart.</p>
                    <div id="column-chart-code-viewer" data-render-source="false" class="code-viewer mt-4">
                        <div class="code-viewer-content">
                            <div id="column-chart" class="-ml-4 -mr-2 sm:-mx-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card: Column Chart Ends -->
            <!-- Card: Bar Chart Starts -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Bar Chart</h4>

                    <p class="card-subtitle">Example of a bar chart.</p>
                    <div id="bar-chart-code-viewer" data-render-source="false" class="code-viewer mt-4">
                        <div class="code-viewer-content">
                            <div id="bar-chart" class="-ml-4 -mr-2 sm:-mx-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card: Bar Chart Ends -->
            <!-- Card: Scatter Chart Starts -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Scatter Chart</h4>

                    <p class="card-subtitle">Example of a scatter chart.</p>
                    <div id="scatter-chart-code-viewer" data-render-source="false" class="code-viewer mt-4">
                        <div class="code-viewer-content">
                            <div id="scatter-chart" class="-ml-4 -mr-2 sm:-mx-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card: Scatter Chart Ends -->
            <!-- Card: Pie Chart Starts -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pie Chart</h4>

                    <p class="card-subtitle">Example of a pie chart.</p>
                    <div id="pie-chart-code-viewer" data-render-source="false" class="code-viewer mt-4">
                        <div class="code-viewer-content">
                            <div class="flex items-center justify-center">
                                <div id="pie-chart" class="-ml-4 -mr-2 sm:-mx-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card: Pie Chart Ends -->
            <!-- Card: Donut Chart Starts -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Donut Chart</h4>

                    <p class="card-subtitle">Example of a donut chart.</p>
                    <div id="donut-chart-code-viewer" data-render-source="false" class="code-viewer mt-4">
                        <div class="code-viewer-content">
                            <div class="flex items-center justify-center">
                                <div id="donut-chart" class="-ml-4 -mr-2 sm:-mx-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card: Donut Chart Ends -->
        </div>
        <!-- Chart Ends -->
    </main>
@endsection

@push('per_page_js')
    <script src="{{ Vite::asset('resources/js/custom/apex-charts.js') }}" type="module"></script>
@endpush
