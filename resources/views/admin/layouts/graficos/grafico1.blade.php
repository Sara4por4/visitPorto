<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="dashboard_graph">

            <div class="row x_title">
                <div class="col-md-6">
                    <h3>Novos Leads Vs <normal class="green">Leads resolvidos</normal></h3>
                </div>
                <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        <span></span> <b class="caret"></b>
                    </div>
                </div>
            </div>

            <div class="col-md-9 col-sm-9 col-xs-12">
                <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
                <div style="width: 99%;">
                    <div id="canvas-holder1" style="width:100%;">
                        <canvas height="75" id="chart1"/>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                <div class="x_title">
                    <h2>Melhores performances</h2>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                        <p>Booking</p>
                        <div class="progress progress_sm" style="width: 76%">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">

                            </div>
                        </div>
                    </div>
                    <div>
                        <p>AirBnb</p>
                        <div class="">
                            <div class="progress progress_sm" style="width: 76%;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                        <p>TripAdvisor</p>
                        <div class="">
                            <div class="progress progress_sm" style="width: 76%;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>LisboaVacation</p>
                        <div class="">
                            <div class="progress progress_sm" style="width: 76%;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="clearfix"></div>
        </div>
    </div>



    @push('scripts')
    <script src="{{url('/')}}/admin/js/Chart.bundle.js"></script>
    <script src="{{url('/')}}/admin/js/date/moment.min.js"></script>
    <script src="{{url('/')}}/admin/js/date/daterangepicker.js"></script>



    <!-- Gráfico -->
    <script>
        window.count = 0;
        Chart.defaults.global.pointHitDetectionRadius = 1;
        var customTooltips = function(tooltip) {

            // Tooltip Element
            var tooltipEl = $('#chartjs-tooltip');

            if (!tooltipEl[0]) {
                $('body').append('<div id="chartjs-tooltip"></div>');
                tooltipEl = $('#chartjs-tooltip');
            }

            // Hide if no tooltip
            if (!tooltip.opacity) {
                tooltipEl.css({
                    opacity: 0
                });
                $('.chartjs-wrap canvas')
                        .each(function(index, el) {
                            $(el).css('cursor', 'default');
                        });
                return;
            }

            $(this._chart.canvas).css('cursor', 'pointer');

            // Set caret Position
            tooltipEl.removeClass('above below no-transform');
            if (tooltip.yAlign) {
                tooltipEl.addClass(tooltip.yAlign);
            } else {
                tooltipEl.addClass('no-transform');
            }

            // Set Text
            if (tooltip.body) {
                var innerHtml = [
                    (tooltip.beforeTitle || []).join('\n'), (tooltip.title || []).join('\n'), (tooltip.afterTitle || []).join('\n'), (tooltip.beforeBody || []).join('\n'), (tooltip.body || []).join('\n'), (tooltip.afterBody || []).join('\n'), (tooltip.beforeFooter || [])
                            .join('\n'), (tooltip.footer || []).join('\n'), (tooltip.afterFooter || []).join('\n')
                ];
                tooltipEl.html(innerHtml.join('\n'));
            }

            // Find Y Location on page
            var top = 0;
            if (tooltip.yAlign) {
                if (tooltip.yAlign == 'above') {
                    top = tooltip.y - tooltip.caretHeight - tooltip.caretPadding;
                } else {
                    top = tooltip.y + tooltip.caretHeight + tooltip.caretPadding;
                }
            }

            var position = $(this._chart.canvas)[0].getBoundingClientRect();

            // Display, position, and set styles for font
            tooltipEl.css({
                opacity: 1,
                width: tooltip.width ? (tooltip.width + 'px') : 'auto',
                left: position.left + tooltip.x + 'px',
                top: position.top + top + 'px',
                fontFamily: tooltip._fontFamily,
                fontSize: tooltip.fontSize,
                fontStyle: tooltip._fontStyle,
                padding: tooltip.yPadding + 'px ' + tooltip.xPadding + 'px',
            });
        };
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };
        var lineChartData = {
            labels: ["Janeiro 01", "Janeiro 02", "Janeiro 03", "Janeiro 04", "Janeiro 05", "Janeiro 06", "Janeiro 07"],
            datasets: [{
                label: "Dados 01",
                backgroundColor: 'rgba(26, 187, 156, 0.5)',
                data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
            }, {
                label: "Dados 02",
                backgroundColor: 'rgba(115, 135, 156, 0.5)',
                data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
            }]
        };

        window.onload = function() {
            var chartEl = document.getElementById("chart1");
            window.myLine = new Chart(chartEl, {
                type: 'line',
                data: lineChartData,
                options: {
                    title:{
                        display:false,
                        text:'Gráfico de linhas'
                    },
                    tooltips: {
                        enabled: false,
                        custom: customTooltips
                    },
                    legend: {
                        display: false
                    },
                    elements: {
                        point: {
                            radius: 0
                        }
                    }
                }
            });
        };
    </script>

    <!-- Datepicker -->
    <script>
        $(document).ready(function() {

            var cb = function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('DD/MM/YYYY')+ ' - ' + end.format('DD/MM/YY'));
            };

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '30/12/2500',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Hoje': [moment(), moment()],
                    'Ontem': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Últimos 7 dias': [moment().subtract(6, 'days'), moment()],
                    'Últimos 30 dias': [moment().subtract(29, 'days'), moment()],
                    'Este mês': [moment().startOf('month'), moment().endOf('month')],
                    'Último mês': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'DD/MM/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submeter',
                    cancelLabel: 'Limpar',
                    fromLabel: 'De',
                    toLabel: 'Até',
                    customRangeLabel: 'Personalizado',
                    daysOfWeek: ['Do', 'Se', 'Te', 'Qu', 'Qu', 'Se', 'Sa'],
                    monthNames: ['Janeiro', 'Fevreiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                    firstDay: 1,
                    locale: 'pt'
                }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('DD/MM/YYYY') + ' - ' + moment().format('DD/MM/YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function() {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function() {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('D MMMM, YYYY') + " to " + picker.endDate.format('D MMMM, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function() {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function() {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function() {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
    </script>
    @endpush
</div>
