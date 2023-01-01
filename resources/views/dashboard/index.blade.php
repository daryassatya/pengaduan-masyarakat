@extends('dashboard.layouts.app')

@push('styles')
    <style>
        .card {
            cursor: pointer;
            transition: all 0.7s;
        }

        .card:hover {
            transform: scale(1.07) !important;
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 5px 8px rgba(0, 0, 0, .06);
        }
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col-xl-4">
            <a href="#" class="box">
                <div class="box-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-dark fw-700 h2 mb-2 mt-5">{{ $user }}</div>
                            <div class="fs-16">User</div>
                        </div>
                        <div class="bg-secondary rounded-circle h-80 w-80 text-center l-h-100">
                            <span class="text-success fs-40 icon-User"><span class="path1"></span><span
                                    class="path2"></span></span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4">
            <a href="#" class="box">
                <div class="box-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-dark fw-700 h2 mb-2 mt-5">{{ $post }}</div>
                            <div class="fs-16">Post</div>
                        </div>
                        <div class="bg-success-light rounded-circle h-80 w-80 text-center l-h-100">
                            <span class="text-dark fs-40 icon-Article"><span class="path1"></span><span
                                    class="path2"></span></span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4">
            <a href="#" class="box">
                <div class="box-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-dark fw-700 h2 mb-2 mt-5">{{ $complaints->count() }}</div>
                            <div class="fs-16">Aduan Masuk</div>
                        </div>
                        <div class="bg-danger-light rounded-circle h-80 w-80 text-center l-h-100">
                            <span class="icon-Mail text-warning fs-40"></span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8 col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">
                        Grafik Jumlah Pengaduan Perbulan
                    </h4>
                </div>
                <div class="box-body">
                    <div id="charts_widget_43_chart"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">
                        Kategori Pengaduan Yang Masuk
                    </h4>
                </div>
                <div class="box-body pb-0">
                    <div id="earning-chart" class="min-h-250"></div>
                    <div>
                        <hr>
                        @foreach ($complaintCategories as $cp)
                            <p class="d-flex justify-content-between fw-700"><span class="text-fade">{{ $cp->name }}
                                    :</span>{{ $cp->complaints->count() }}</p>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title align-items-start flex-column">
                        New Arrivals
                        <small class="subtitle">More than 400+ new members</small>
                    </h4>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-border">
                            <thead>
                                <tr class="text-uppercase bg-lightest">
                                    <th style="min-width: 250px" class="text-center"><span
                                            class="text-dark">Title&Slug</span>
                                    </th>
                                    <th style="min-width: 100px" class="text-center"><span class="text-fade">Excerpt</span>
                                    </th>
                                    <th style="min-width: 100px" class="text-center"><span class="text-fade">Complaint
                                            Category</span></th>
                                    <th style="min-width: 130px" class="text-center"><span class="text-fade">status</span>
                                    </th>
                                    <th style="min-width: 120px" class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($complaints as $complaint)
                                    <tr>
                                        <td class="ps-0 py-8 text-center">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-20">
                                                    <div class="bg-img h-50 w-50" style="background-image: url(#)">
                                                    </div>
                                                </div>

                                                <div>
                                                    <a href="#"
                                                        class="text-dark fw-600 hover-primary mb-1 fs-16">{{ $complaint->title }}</a>
                                                    <span class="text-fade d-block"></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-dark fw-600 d-block fs-16">
                                                {{ Str::limit(strip_tags($complaint->body), 20, '...') }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-dark fw-600 d-block fs-16">
                                                {{ $complaint->complaintCategory->name }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            @if ($complaint->status === 2)
                                                <span class="badge badge-success-light badge-lg">Approved</span>
                                            @elseif($complaint->status === 3)
                                                <span class="badge badge-danger-light badge-lg">Rejected</span>
                                            @else
                                                <span class="badge badge-warning-light badge-lg">In Progress</span>
                                            @endif
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                                class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                    class="icon-Bookmark"></span></a>
                                            <a href="#"
                                                class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span
                                                    class="icon-Arrow-right"><span class="path1"></span><span
                                                        class="path2"></span></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
    <script>
        $('body').addClass('sidebar-collapse');

        function getRandomColor() {
            return '#' + Math.random().toString(16).slice(-6);
        }

        let donutColors = [];
        for (let index = 0; index < {{ $complaintCategories->count() }}; index++) {
            donutColors.push(getRandomColor());
        }

        $(function() {
            var options = {
                series: [{
                    name: "Aduan",
                    data: {!! json_encode($countsComplaintMonth) !!}
                }],
                chart: {
                    foreColor: "#bac0c7",
                    height: 363,
                    type: 'area',
                    zoom: {
                        enabled: false
                    }
                },
                colors: ['#f9c20f', '#f1376e'],
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    show: true,
                    curve: 'smooth',
                    lineCap: 'butt',
                    colors: undefined,
                    width: 2,
                    dashArray: 0,
                },
                fill: {
                    gradient: {
                        shade: 'dark',
                        type: "vertical",
                        shadeIntensity: 0.5,
                        gradientToColors: undefined,
                        inverseColors: true,
                        opacityFrom: 0.5,
                        opacityTo: 0.2,
                        stops: [0, 50, 100],
                        colorStops: []
                    },
                },
                grid: {
                    borderColor: '#f7f7f7',
                    row: {
                        colors: ['transparent'], // takes an array which will be repeated on columns
                        opacity: 0
                    },
                    yaxis: {
                        lines: {
                            show: true,
                        },
                    },
                },
                legend: {
                    show: false,
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                        'Dec'
                    ],
                    labels: {
                        show: true,
                    },
                    axisBorder: {
                        show: true
                    },
                    axisTicks: {
                        show: true
                    },
                    tooltip: {
                        enabled: true,
                    },
                },
                yaxis: {
                    labels: {
                        show: true,
                        formatter: function(val) {
                            return val;
                        }
                    }

                },
            };
            var chart = new ApexCharts(document.querySelector("#charts_widget_43_chart"), options);
            chart.render();

            var options = {
                series: {!! json_encode($complaintCategoryCounts) !!},
                labels: {!! json_encode($complaintCategoryNames) !!},
                chart: {
                    type: 'donut',
                    width: '100%',
                    height: 240
                },
                colors: donutColors,
                legend: {
                    show: false,
                },
                dataLabels: {
                    enabled: false,
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '90%'
                        }
                    }
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#earning-chart"), options);
            chart.render();
        });
    </script>
@endpush
