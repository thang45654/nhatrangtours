@extends('layouts.app')

@section('page_name')
    {{$page_name}}
@endsection
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
                        <div class="col-xl-4 col-md-6 col-12 row">
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="card card-congratulation-medal">
                                    <div class="card-body">
                                        <h5>Doanh thu trong tuần này 🎉</h5>
                                        <p class="card-text font-small-3">Số tiền bán vé trong tuần</p>
                                        <h3 class="mb-75 mt-2 pt-50">
                                            <a href="#">{{$total_price_week}}</a>
                                        </h3>
                                        <button type="button" class="btn btn-primary">Tạo đơn hàng mới</button>
                                        <img src="/app-assets/images/illustration/badge.svg"
                                             class="congratulation-medal"
                                             alt="Medal Pic"/>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-lg-6 col-md-3 col-6 pr-1">
                                    <div class="card">
                                        <div class="card-body pb-50">
                                            <h6>Số vé trong tuần</h6>
                                            <h2 class="fw-bolder mb-1">{{$total_ticket_week}}</h2>
                                            <div id="statistics-order-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-3 col-6">
                                    <div class="card card-tiny-line-stats">
                                        <div class="card-body pb-50">
                                            <h6>Doanh thu trong tuần</h6>
                                            <h2 class="fw-bolder mb-1">{{$total_price_week}}</h2>
                                            <div id="statistics-profit-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        </div>

                        <div class="col-lg-8 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-sm-row flex-column justify-content-md-between align-items-start justify-content-start">
                                    <div>
                                        <h4 class="card-title">Doanh thu theo từng tháng</h4>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="font-medium-2" data-feather="calendar"></i>
                                        <input type="text"
                                               class="form-control flat-picker bg-transparent border-0 shadow-none"
                                               placeholder="YYYY-MM-DD"/>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="line-area-chart"></div>
                                </div>
                            </div>
                        </div>
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
    <style>
        .pr-1 {
            padding-right: 1rem;
        }
    </style>
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

            for (const [key, value] of Object.entries(axis_label)) {
                labels.push(key);
            }

            data_chart.forEach(month => {
                if (month instanceof Array) {
                    revenue.push(parseInt(month[0]));
                    discount.push(0 - parseInt(month[1]));
                } else {
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

        getRevenuePerMonth().then(resp => {
            const chartColors = {
                column: {
                    series1: '#826af9',
                    series2: '#d2b0ff',
                    bg: '#f8d3ff'
                },
                success: {
                    shade_100: '#7eefc7',
                    shade_200: '#06774f'
                },
                donut: {
                    series1: '#ffe700',
                    series2: '#00d4bd',
                    series3: '#826bf8',
                    series4: '#2b9bf4',
                    series5: '#FFA1A1'
                },
                area: {
                    series3: '#a4f8cd',
                    series2: '#60f2ca',
                    series1: '#2bdac7'
                }
            };
            const areaChartEl = document.querySelector('#line-area-chart'),
                areaChartConfig = {
                    chart: {
                        height: 400,
                        type: 'area',
                        parentHeightOffset: 0,
                        toolbar: {
                            show: false
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        show: false,
                        curve: 'straight'
                    },
                    legend: {
                        show: true,
                        position: 'top',
                        horizontalAlign: 'start'
                    },

                    colors: [chartColors.area.series3, chartColors.area.series2, chartColors.area.series1],
                    series: [
                        {
                            name: 'Visits',
                            data: [100, 120, 90, 170, 130, 160, 140, 240, 220, 180, 270, 280, 375]
                        },
                        {
                            name: 'Clicks',
                            data: [60, 80, 70, 110, 80, 100, 90, 180, 160, 140, 200, 220, 275]
                        },
                        {
                            name: 'Sales',
                            data: [20, 40, 30, 70, 40, 60, 50, 140, 120, 100, 140, 180, 220]
                        }
                    ],
                    xaxis: {
                        categories: [
                            '7/12',
                            '8/12',
                            '9/12',
                            '10/12',
                            '11/12',
                            '12/12',
                            '13/12',
                            '14/12',
                            '15/12',
                            '16/12',
                            '17/12',
                            '18/12',
                            '19/12',
                            '20/12'
                        ]
                    },
                    fill: {
                        opacity: 1,
                        type: 'solid'
                    },
                    tooltip: {
                        shared: false
                    },
                };
            var areaChart = new ApexCharts(areaChartEl, areaChartConfig);
            areaChart.render();
        })

    </script>
@endpush
