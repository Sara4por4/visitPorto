<div class="x_panel">
    <div class="x_title">
        <h2>Star Rating</h2>
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
        <h4>Star Ratings<small> Hover and click on a star</small></h4>
        <div>
            <div class="starrr stars"><a href="#" class="fa-star fa"></a><a href="#" class="fa-star fa"></a><a href="#" class="fa-star fa"></a><a href="#" class="fa-star fa"></a><a href="#" class="fa-star-o fa"></a></div>
            You gave a rating of <span class="stars-count">4</span> star(s)
        </div>

        <p>Also you can give a default rating by adding attribute data-rating</p>
        <div class="starrr stars-existing" data-rating="4"><a href="#" class="fa-star fa"></a><a href="#" class="fa-star fa"></a><a href="#" class="fa-star-o fa"></a><a href="#" class="fa-star-o fa"></a><a href="#" class="fa-star-o fa"></a></div>
        You gave a rating of <span class="stars-count-existing">2</span> star(s)
    </div>
</div>
@push('stylesheets')
<link href="{{url('/')}}/admin/css/starrr/starrr.css" rel="stylesheet">
@endpush
@push('scripts')
<script src="{{url('/')}}/admin/js/starrr/starrr.js"></script>
<script>
    $(document).ready(function() {
        $(".stars").starrr();

        $('.stars-existing').starrr({
            rating: 4
        });

        $('.stars').on('starrr:change', function (e, value) {
            $('.stars-count').html(value);
        });

        $('.stars-existing').on('starrr:change', function (e, value) {
            $('.stars-count-existing').html(value);
        });
    });
</script>
@endpush
