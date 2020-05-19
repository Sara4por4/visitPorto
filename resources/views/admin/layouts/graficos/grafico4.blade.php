<div class="x_panel">
    <div class="x_title">
        <h2>Sumário da Semana<small>Actividade</small></h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">

        <div class="row" style="border-bottom: 1px solid #E0E0E0; padding-bottom: 5px; margin-bottom: 5px;">
            <div class="col-md-7" style="overflow:hidden;">
                        <span class="sparkline_one" style="height: 160px; padding: 10px 25px;">
                            <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                        </span>
                <h4 style="margin:18px">Progresso das vendas semanais</h4>
            </div>

            <div class="col-md-5">
                <div class="row" style="text-align: center;">
                    <div class="col-md-4" class="text-center">
                        <canvas id="canvas1i" height="110" width="110" style="margin: 5px 10px 10px 0; margin-left:auto; margin-right:auto"></canvas>
                        <h4 class="text-center" style="margin:0">Vendedores</h4>
                    </div>
                    <div class="col-md-4">
                        <canvas id="canvas1i2" height="110" width="110" style="margin: 5px 10px 10px 0; margin-left:auto; margin-right:auto"></canvas>
                        <h4 class="text-center" style="margin:0">Vendas</h4>
                    </div>
                    <div class="col-md-4">
                        <canvas id="canvas1i3" height="110" width="110" style="margin: 5px 10px 10px 0; margin-left:auto; margin-right:auto"></canvas>
                        <h4 class="text-center" style="margin:0">Faturação</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<!-- Sparkline -->

<script src="{{url('/')}}/admin/js/sparkline/jquery.sparkline.js"></script>
<script src="{{url('/')}}/admin/js/Chart.bundle.js"></script>

<script>
    $(document).ready(function() {
        $(".sparkline_one").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
            type: 'bar',
            height: '125',
            barWidth: 13,
            colorMap: {
                '7': '#a1a1a1'
            },
            barSpacing: 2,
            barColor: '#26B99A'
        });
    });
</script>

<script>
    $(document).ready(function() {
        var canvasDoughnut,
                options = {
                    legend: false,
                    responsive: false
                };

        new Chart(document.getElementById("canvas1i"), {
            type: 'doughnut',
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: {
                labels: [
                    "Symbian",
                    "Blackberry",
                    "Other",
                    "Android",
                    "IOS"
                ],
                datasets: [{
                    data: [15, 20, 30, 10, 30],
                    backgroundColor: [
                        "#BDC3C7",
                        "#9B59B6",
                        "#E74C3C",
                        "#26B99A",
                        "#3498DB"
                    ],
                    hoverBackgroundColor: [
                        "#CFD4D8",
                        "#B370CF",
                        "#E95E4F",
                        "#36CAAB",
                        "#49A9EA"
                    ]

                }]
            },
            options: options
        });

        new Chart(document.getElementById("canvas1i2"), {
            type: 'doughnut',
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: {
                labels: [
                    "Symbian",
                    "Blackberry",
                    "Other",
                    "Android",
                    "IOS"
                ],
                datasets: [{
                    data: [15, 20, 30, 10, 30],
                    backgroundColor: [
                        "#BDC3C7",
                        "#9B59B6",
                        "#E74C3C",
                        "#26B99A",
                        "#3498DB"
                    ],
                    hoverBackgroundColor: [
                        "#CFD4D8",
                        "#B370CF",
                        "#E95E4F",
                        "#36CAAB",
                        "#49A9EA"
                    ]

                }]
            },
            options: options
        });

        new Chart(document.getElementById("canvas1i3"), {
            type: 'doughnut',
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: {
                labels: [
                    "Symbian",
                    "Blackberry",
                    "Other",
                    "Android",
                    "IOS"
                ],
                datasets: [{
                    data: [15, 20, 30, 10, 30],
                    backgroundColor: [
                        "#BDC3C7",
                        "#9B59B6",
                        "#E74C3C",
                        "#26B99A",
                        "#3498DB"
                    ],
                    hoverBackgroundColor: [
                        "#CFD4D8",
                        "#B370CF",
                        "#E95E4F",
                        "#36CAAB",
                        "#49A9EA"
                    ]

                }]
            },
            options: options
        });
    });
</script>
<!-- /Doughnut Chart -->

@endpush