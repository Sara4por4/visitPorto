<div class="x_panel tile fixed_height_320 overflow_hidden">
    <div class="x_title">
        <h2>Top sites</h2>
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
        <table class="" style="width:100%">
            <tbody><tr>
                <th style="width:37%;">
                    <p>Top 5</p>
                </th>
                <th>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                        <p class="">Device</p>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <p class="">Progress</p>
                    </div>
                </th>
            </tr>
            <tr>
                <td><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                    <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0px; width: 140px; height: 140px;"></canvas>
                </td>
                <td>
                    <table class="tile_info">
                        <tbody><tr>
                            <td>
                                <p><i class="fa fa-square blue"></i>Booking</p>
                            </td>
                            <td>30%</td>
                        </tr>
                        <tr>
                            <td>
                                <p><i class="fa fa-square green"></i>Windu</p>
                            </td>
                            <td>10%</td>
                        </tr>
                        <tr>
                            <td>
                                <p><i class="fa fa-square purple"></i>TripAdvisor</p>
                            </td>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <td>
                                <p><i class="fa fa-square aero"></i>Lisboa Vacation</p>
                            </td>
                            <td>15%</td>
                        </tr>
                        <tr>
                            <td>
                                <p><i class="fa fa-square red"></i>Outros</p>
                            </td>
                            <td>30%</td>
                        </tr>
                        </tbody></table>
                </td>
            </tr>
            </tbody></table>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function(){
        var options = {
            legend: false,
            responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
            type: 'doughnut',
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: {
                labels: [
                    "Windu",
                    "TripAdvisor",
                    "Outros",
                    "LisboaVacation",
                    "Booking"
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