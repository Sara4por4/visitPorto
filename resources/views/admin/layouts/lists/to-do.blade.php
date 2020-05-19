@push('stylesheets')
<link href="{{ url('/')}}/admin/css/icheck/green.css" rel="stylesheet">

@endpush
<div class="x_panel">
    <div class="x_title">
        <h2>To Do List <small>Sample tasks</small></h2>
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

        <div class="">
            <ul class="to_do">
                <li>
                    <p>
                        <input type="checkbox" class="to-do" name="ola"> Schedule meeting with new client </p>
                </li>
                <li>
                    <p>
                        <input type="checkbox" class="to-do" name=""> Create email address for new intern</p>
                </li>
                <li>
                    <p>
                        <input type="checkbox" class="to-do" name=""> Have IT fix the network printer</p>
                </li>
                <li>
                    <p>
                        <input type="checkbox" class="to-do" name=""> Copy backups to offsite location</p>
                </li>
                <li>
                    <p>
                        <input type="checkbox" class="to-do" name=""> Food truck fixie locavors mcsweeney</p>
                </li>
                <li>
                    <p>
                        <input type="checkbox" class="to-do" name=""> Food truck fixie locavors mcsweeney</p>
                </li>
                <li>
                    <p>
                        <input type="checkbox" class="to-do" name=""> Create email address for new intern</p>
                </li>
                <li>
                    <p>
                        <input type="checkbox" class="to-do" name=""> Have IT fix the network printer</p>
                </li>
                <li>
                    <p>
                        <input type="checkbox" class="to-do" name=""> Copy backups to offsite location</p>
                </li>
            </ul>
        </div>
    </div>
</div>

@push('scripts')
<script src="{{url('/')}}/admin/js/icheck/icheck.min.js"></script>
<script>

    $('input[type="checkbox"]').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
    });


</script>
@endpush
