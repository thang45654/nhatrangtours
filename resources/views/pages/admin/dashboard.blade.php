@extends('layouts.app')

@section('content')

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- Medal Card -->
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>Doanh thu trong tuần này 🎉</h5>
                                    <p class="card-text font-small-3">Số tiền bán vé trong tuần</p>
                                    <h3 class="mb-75 mt-2 pt-50">
                                        <a href="#">{{$total_price_week}}</a>
                                    </h3>
                                    <button type="button" class="btn btn-primary">Tạo đơn hàng mới</button>
                                    <img src="/app-assets/images/illustration/badge.svg" class="congratulation-medal"
                                         alt="Medal Pic"/>
                                </div>
                            </div>
                        </div>
                        <!--/ Medal Card -->

                        <!-- Statistics Card -->
                        <div class="col-xl-8 col-md-6 col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">Thống kê trong tháng</h4>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text font-small-2 me-25 mb-0">{{now()->format('m')}}</p>
                                    </div>
                                </div>
                                <div class="card-body statistics-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-success me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="dollar-sign" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">{{$revenue_month}}</h4>
                                                    <p class="card-text font-small-3 mb-0">Doanh thu</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-primary me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0" id="total_ticket"></h4>
                                                    <p class="card-text font-small-3 mb-0">Tổng số vé</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-danger me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="box" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">{{$total_tours}}</h4>
                                                    <p class="card-text font-small-3 mb-0">Tour du lịch</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-info me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="user" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">{{$total_partners}}</h4>
                                                    <p class="card-text font-small-3 mb-0">CTV</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>

                    <div class="row match-height">
                        <div class="col-lg-4 col-12">
                            <div class="row match-height">
                                <!-- Bar Chart - Orders -->
                                <div class="col-lg-6 col-md-3 col-6">
                                    <div class="card">
                                        <div class="card-body pb-50">
                                            <h6>Số vé trong tuần</h6>
                                            <h2 class="fw-bolder mb-1">{{$total_ticket_week}}</h2>
                                            <div id="statistics-order-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Bar Chart - Orders -->

                                <!-- Line Chart - Profit -->
                                <div class="col-lg-6 col-md-3 col-6">
                                    <div class="card card-tiny-line-stats">
                                        <div class="card-body pb-50">
                                            <h6>Doanh thu trong tuần</h6>
                                            <h2 class="fw-bolder mb-1">{{$total_price_week}}</h2>
                                            <div id="statistics-profit-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Line Chart - Profit -->

                                <!-- Earnings Card -->
                                <div class="col-lg-12 col-md-6 col-12 activity-section">
                                    <div class="card earnings-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h4 class="card-title mb-1">Hoạt động CTV</h4>
                                                    <div class="font-small-2">Tháng {{now()->format('m-Y')}}</div>
                                                    <h5 class="mb-1" id="total_ticket_month"></h5>
                                                    <p class="card-text text-muted font-small-2">
                                                        <span class="fw-bolder" id="ticket_percent_month"></span><span> vé bán được tới từ CTV.</span>
                                                    </p>
                                                </div>
                                                <div class="col-6">
                                                    <div id="earnings-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Earnings Card -->
                            </div>
                        </div>

                        <!-- Revenue Report Card -->
                        <div class="col-lg-8 col-12">
                            <div class="card card-revenue-budget">
                                <div class="row mx-0">
                                    <div class="col-md-8 col-12 revenue-report-wrapper">
                                        <div class="d-sm-flex justify-content-between align-items-center mb-3">
                                            <h4 class="card-title mb-50 mb-sm-0">Báo cáo tài chính</h4>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex align-items-center me-2">
                                                    <span class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
                                                    <span>Doanh thu</span>
                                                </div>
                                                <div class="d-flex align-items-center ms-75">
                                                    <span class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
                                                    <span>Hoa hồng CTV</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="revenue-report-chart"></div>
                                    </div>
                                    <div class="col-md-4 col-12 budget-wrapper">
                                        <div class="btn-group">
                                            <button type="button"
                                                    class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                2020
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">2020</a>
                                                <a class="dropdown-item" href="#">2019</a>
                                                <a class="dropdown-item" href="#">2018</a>
                                            </div>
                                        </div>
                                        <h2 class="mb-25">$25,852</h2>
                                        <div class="d-flex justify-content-center">
                                            <span class="fw-bolder me-25">Tiền hoa hồng:</span>
                                            <span>56,800</span>
                                        </div>
                                        <div id="budget-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Revenue Report Card -->
                    </div>


                </section>
            @include('partials.orders.datatable', ['orders' => $orders])
            <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>


@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/charts/chart-apex.css">
@endpush

@push('js')
    <script src="/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    {{--    <script src="/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>--}}
    <script>
        getTicketChart().then(resp => {
            const {data} = resp.data;

            let labels = [];

            let values = [];

            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                values.push(value);
            }
            const $statisticsOrderChart = document.querySelector('#statistics-order-chart');
            var $barColor = '#f3f3f3';
            const statisticsOrderChartOptions = {
                chart: {
                    height: 70,
                    type: 'bar',
                    stacked: true,
                    toolbar: {
                        show: false
                    }
                },
                grid: {
                    show: false,
                    padding: {
                        left: 0,
                        right: 0,
                        top: -15,
                        bottom: -15
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '20%',
                        startingShape: 'rounded',
                        colors: {
                            backgroundBarColors: [$barColor, $barColor, $barColor, $barColor, $barColor, $barColor, $barColor],
                            backgroundBarRadius: 5
                        }
                    }
                },
                legend: {
                    show: false
                },
                dataLabels: {
                    enabled: false
                },
                colors: [window.colors.solid.warning],
                series: [
                    {
                        name: '2020',
                        data: values
                    }
                ],
                xaxis: {
                    labels: {
                        show: false
                    },
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    }
                },
                yaxis: {
                    show: false
                },
                tooltip: {
                    enabled: true
                }
            };
            statisticsOrderChart = new ApexCharts($statisticsOrderChart, statisticsOrderChartOptions);
            statisticsOrderChart.render();
        })

        getRevenueChart().then(resp => {
            const {data} = resp.data,
                $statisticsProfitChart = document.querySelector("#statistics-profit-chart");
            const $trackBgColor = "#EBEBEB";
            let labels = [];

            let values = [];

            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                values.push(value);
            }

            const statisticsProfitChartOptions = {
                chart: {
                    height: 70,
                    type: 'line',
                    toolbar: {
                        show: false
                    },
                    zoom: {
                        enabled: false
                    }
                },
                grid: {
                    borderColor: $trackBgColor,
                    strokeDashArray: 5,
                    xaxis: {
                        lines: {
                            show: true
                        }
                    },
                    yaxis: {
                        lines: {
                            show: false
                        }
                    },
                    padding: {
                        top: -30,
                        bottom: -10
                    }
                },
                stroke: {
                    width: 3
                },
                colors: [window.colors.solid.info],
                series: [
                    {
                        data: values
                    }
                ],
                markers: {
                    size: 2,
                    colors: window.colors.solid.info,
                    strokeColors: window.colors.solid.info,
                    strokeWidth: 2,
                    strokeOpacity: 1,
                    strokeDashArray: 0,
                    fillOpacity: 1,
                    discrete: [
                        {
                            seriesIndex: 0,
                            dataPointIndex: 5,
                            fillColor: '#ffffff',
                            strokeColor: window.colors.solid.info,
                            size: 5
                        }
                    ],
                    shape: 'circle',
                    radius: 2,
                    hover: {
                        size: 3
                    }
                },
                xaxis: {
                    labels: {
                        show: true,
                        style: {
                            fontSize: '0px'
                        }
                    },
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    }
                },
                yaxis: {
                    show: false
                },
                tooltip: {
                    x: {
                        show: false
                    }
                }
            };
            const statisticsProfitChart = new ApexCharts($statisticsProfitChart, statisticsProfitChartOptions);
            statisticsProfitChart.render();
        })

        getActivityChart().then(resp => {
            const activitySection = $(".activity-section"),
                statistic = $('.statistics-body');

            const {data_chart, total_ticket, percent_ticket} = resp?.data?.data;
            activitySection.find('#total_ticket_month').html(`${total_ticket} vé`)
            activitySection.find('#ticket_percent_month').html(`${percent_ticket} %`)
            statistic.find('#total_ticket').html(`${total_ticket}`)
            let labels = [];

            let values = [];

            for (const [key, value] of Object.entries(data_chart)) {
                labels.push(key);
                values.push(value);
            }
            const $earningsStrokeColor3 = '#28c76f33';
            const earningsChartOptions = {
                chart: {
                    type: 'donut',
                    height: 120,
                    toolbar: {
                        show: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                series: values,
                legend: {show: false},
                labels: labels,
                stroke: {width: 0},
                colors: [$earningsStrokeColor3, window.colors.solid.success],
                grid: {
                    padding: {
                        right: -20,
                        bottom: -8,
                        left: -20
                    }
                },
                plotOptions: {
                    pie: {
                        startAngle: -10,
                        donut: {
                            labels: {
                                show: true,
                                name: {
                                    offsetY: 15
                                },
                                value: {
                                    offsetY: -15,
                                    formatter: function (val) {
                                        return parseInt(val);
                                    }
                                },
                                total: {
                                    show: true,
                                    offsetY: 15,
                                    label: 'Đơn',
                                    formatter: function (w) {
                                        return values.reduce((partialSum, a) => partialSum + a, 0);
                                    }
                                }
                            }
                        }
                    }
                },
                responsive: [
                    {
                        breakpoint: 1325,
                        options: {
                            chart: {
                                height: 100
                            }
                        }
                    },
                    {
                        breakpoint: 1200,
                        options: {
                            chart: {
                                height: 120
                            }
                        }
                    },
                    {
                        breakpoint: 1045,
                        options: {
                            chart: {
                                height: 100
                            }
                        }
                    },
                    {
                        breakpoint: 992,
                        options: {
                            chart: {
                                height: 120
                            }
                        }
                    }
                ]
            };
            const $earningsChart = document.querySelector('#earnings-chart');
            const earningsChart = new ApexCharts($earningsChart, earningsChartOptions);
            earningsChart.render();
        })

        getFinanceChart().then(resp => {
            const {axis_label, data_chart, percent_ticket} = resp?.data?.data;
            let revenue = [];

            let discount = [];

            let labels = [];

            for (const[key,value] of Object.entries(axis_label)) {
                labels.push(key);
            }

            data_chart.forEach(month => {
                if (month instanceof  Array) {
                    revenue.push(parseInt(month[0]));
                    discount.push(0 - parseInt(month[1]));
                }else {
                    revenue.push(0);
                    discount.push(0);
                }
            })


            const $revenueReportChart = document.querySelector('#revenue-report-chart'),
                $textMutedColor = '#b9b9c3',
                revenueReportChartOptions = {
                    chart: {
                        height: 230,
                        stacked: true,
                        type: 'bar',
                        toolbar: {show: false}
                    },
                    plotOptions: {
                        bar: {
                            columnWidth: '17%',
                            endingShape: 'rounded'
                        },
                        distributed: true
                    },
                    colors: [window.colors.solid.primary, window.colors.solid.warning],
                    series: [
                        {
                            name: 'Doanh Thu',
                            data: revenue
                        },
                        {
                            name: 'Expense',
                            data: discount
                        }
                    ],
                    dataLabels: {
                        enabled: false
                    },
                    legend: {
                        show: false
                    },
                    grid: {
                        padding: {
                            top: -20,
                            bottom: -10
                        },
                        yaxis: {
                            lines: {show: false}
                        }
                    },
                    xaxis: {
                        categories: labels,
                        labels: {
                            style: {
                                colors: $textMutedColor,
                                fontSize: '0.86rem'
                            }
                        },
                        axisTicks: {
                            show: false
                        },
                        axisBorder: {
                            show: false
                        }
                    },
                    yaxis: {
                        labels: {
                            style: {
                                colors: $textMutedColor,
                                fontSize: '0.86rem'
                            }
                        }
                    }
                },
                revenueReportChart = new ApexCharts($revenueReportChart, revenueReportChartOptions);


            revenueReportChart.render();

        })

        getBucketChart().then(resp => {
            const {data} = resp.data;
            let labels = [];

            let values = [];

            for (const [key, value] of Object.entries(data)) {
                labels.push(key);
                values.push(value);
            }
            const $budgetChart = document.querySelector('#budget-chart');
            const $budgetStrokeColor2 = '#dcdae3';
            const budgetChartOptions = {
                chart: {
                    height: 80,
                    toolbar: { show: false },
                    zoom: { enabled: false },
                    type: 'line',
                    sparkline: { enabled: true }
                },
                stroke: {
                    curve: 'smooth',
                    dashArray: [0, 5],
                    width: [2]
                },
                colors: [window.colors.solid.primary],
                series: [
                    {
                        data:  values,
                    },
                ],
                tooltip: {
                    enabled: false
                }
            };
            const budgetChart = new ApexCharts($budgetChart, budgetChartOptions);
            budgetChart.render();
        })
    </script>
@endpush