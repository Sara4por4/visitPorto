<div class="x_panel">
    <div class="x_title">
        <h2>{{$title ?? '$title'}}</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="dashboard-widget-content">
            <div class="hidden-small">
                <h2 class="line_30"></h2>
                <div class="x_content">
                    <div class="dashboard-widget-content">
                        <div class="col-md-12 hidden-small">
                            {!! $content !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
