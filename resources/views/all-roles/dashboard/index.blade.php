@extends('layout.main-layout')

@section('main')
    <div class="row">
        <div class="col-lg-3">
            <!-- Monthly Earnings -->
            <div class="card">
                <div class="card-body">
                    <div class="row alig n-items-start">
                        <div class="col-8">
                            <h5 class="card-title mb-9 fw-semibold"> Barang </h5>
                            <h4 class="fw-semibold mb-3">17</h4>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-end">
                                <div
                                    class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-device-desktop fs-6"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <!-- Monthly Earnings -->
            <div class="card">
                <div class="card-body">
                    <div class="row alig n-items-start">
                        <div class="col-8">
                            <h5 class="card-title mb-9 fw-semibold"> Zero Stock</h5>
                            <h4 class="fw-semibold mb-3">10</h4>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-end">
                                <div
                                    class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-alert-triangle fs-6"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <!-- Monthly Earnings -->
            <div class="card">
                <div class="card-body">
                    <div class="row alig n-items-start">
                        <div class="col-8">
                            <h5 class="card-title mb-9 fw-semibold"> Max Stock </h5>
                            <h4 class="fw-semibold mb-3">0</h4>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-end">
                                <div
                                    class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-alert-triangle fs-6"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <!-- Monthly Earnings -->
            <div class="card">
                <div class="card-body">
                    <div class="row alig n-items-start">
                        <div class="col-8">
                            <h5 class="card-title mb-9 fw-semibold"> New Item </h5>
                            <h4 class="fw-semibold mb-3">2</h4>
                        </div>
                        <div class="col-4">
                            <div class="d-flex justify-content-end">
                                <div
                                    class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-box-seam fs-6"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Brand</h5>
                        </div>
                        <div>
                            <select class="form-select">
                                <option value="1">March 2023</option>
                                <option value="2">April 2023</option>
                                <option value="3">May 2023</option>
                                <option value="4">June 2023</option>
                            </select>
                        </div>
                    </div>
                    <div id="chart"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var chart = {
            series: [{
                name: "dji sam soe",
                data: [20]
            }, {
                name: "dji sam soe",
                data: [100]
            }, {
                name: "de",
                data: [444]
            }, ],

            chart: {
                type: "bar",
                height: 345,
                offsetX: -15,
                toolbar: {
                    show: true
                },
                foreColor: "#adb0bb",
                fontFamily: 'inherit',
                sparkline: {
                    enabled: false
                },
            },

            yaxis: {
                show: true,
                tickAmount: 4,
                labels: {
                    style: {
                        cssClass: "grey--text lighten-2--text fill-color",
                    },
                },
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: "35%",
                    borderRadius: [6],
                    borderRadiusApplication: 'end',
                    borderRadiusWhenStacked: 'all'
                },
            },
            markers: {
                size: 0
            },

            dataLabels: {
                enabled: false,
            },


            legend: {
                show: false,
            },


            grid: {
                borderColor: "rgba(0,0,0,0.1)",
                strokeDashArray: 3,
                xaxis: {
                    lines: {
                        show: false,
                    },
                },
            },

            xaxis: {
                categories: ["Brand"],
                labels: {
                    style: {
                        cssClass: "grey--text lighten-2--text fill-color"
                    },
                },
            },
            responsive: [{
                breakpoint: 600,
                options: {
                    plotOptions: {
                        bar: {
                            borderRadius: 3,
                        }
                    },
                }
            }]


        };

        var chart = new ApexCharts(document.querySelector("#chart"), chart);
        chart.render();
    </script>
@endsection
