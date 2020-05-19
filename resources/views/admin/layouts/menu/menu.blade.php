@inject('content', 'App\Page')
@inject('categories', 'App\Category')

<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('/')}}/sgc" class="site_title" style="text-align: center"><img
                        src="{{url('/')}}/admin/img/sgc_logo.png"></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="row profile">
            <div class="profile_pic">
                <img src="{{url('/')}}/admin/img/4por4-logo.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Bem vindo!</span>
                <h2>{{Auth::user()->name}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    @if(Auth::user()->hasRole('sudo'))
                        <li>
                            <a><i class="fa fa-superpowers" aria-hidden="true"></i>Super User <span class="fa fa-chevron-down"></span></a>

                            <ul class="nav child_menu">
                                <li>
                                    <a>Permissões <span class="fa fa-chevron-down"></span></a>

                                    <ul class="nav child_menu">
                                        <li><a href="{{ action('admin\PermissionGroupController@index') }}">Grupos</a></li>
                                        <li><a href="{{ action('admin\PermissionController@index') }}">Permissões</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/sgc/menu') }}">Menu</a></li>
                                <li><a href="{{ url('/sgc/sudo/languages') }}">Idiomas</a></li>
                            </ul>
                        </li>
                    @endif

                    @if(Gate::check('index_translations'))
                        <li>
                            <a><i class="fa fa-flag-o"></i>Idiomas <span class="fa fa-chevron-down"></span></a>

                            <ul class="nav child_menu">
                                @can('index_translations')
                                    <li><a href="{{ url('/sgc/languages/translations') }}">Traduções</a></li>
                                @endcan
                            </ul>
                        </li>
                    @endcan

                    @if(Gate::check('index_users') || Gate::check('index_roles'))
                        <li>
                            <a><i class="fa fa-user"></i>Administração <span class="fa fa-chevron-down"></span></a>

                            <ul class="nav child_menu">
                                @can('index_users')
                                    <li><a href="{{url('/')}}/sgc/users">Utilizadores</a></li>
                                @endcan

                                @can('index_roles')
                                    <li><a href="{{url('/')}}/sgc/type_users">Tipos de utilizadores</a></li>
                                @endcan
                            </ul>
                        </li>
                    @endcan

                    @if(Gate::check('index_seo') || Gate::check('index_articles'))
                        <li>
                            <a><i class="fa fa-table"></i>Estrutura<span class="fa fa-chevron-down"></span></a>

                            <ul class="nav child_menu">
                                @can('index_seo')
                                    <li><a href="{{url('/')}}/sgc/seo">Páginas / SEO</a></li>
                                @endcan
                                @can('index_articles')
                                    <li><a href="{{url('/')}}/sgc/artigos">Artigos</a></li>
                                @endcan
                            </ul>
                        </li>
                    @endif

                        @if(Gate::check('index_email'))
                    <li>
                        <a><i class="fa fa-envelope-o"></i>Email<span class="fa fa-chevron-down"></span></a>

                        <ul class="nav child_menu">
                            <li class="sub_menu"><a href="{{url('/')}}/sgc/email_config/mail/edit">Configurações</a></li>
                            <li class="sub_menu"><a href="{{url('/')}}/sgc/emails_receiver">Endereços</a></li>
                            <li class="sub_menu"><a href="{{url('/')}}/sgc/emails_message">Mensagens</a></li>
                        </ul>
                    </li>
                        @endif

                        @if(Gate::check('index_content'))
                    <li>
                        <a><i class="fa fa-edit"></i> Conteúdos <span class="fa fa-chevron-down"></span></a>

                        <ul class="nav child_menu">
                            @if(auth()->user()->hasRole('sudo'))
                                <li><a href="{{url('/')}}/sgc/category/article">Categorias</a></li>
                            @endif
                            @foreach($categories->where('categorable', 'article')->where('parent_id', 0)->get() as $value)
                                @if(!auth()->user()->author)
                                <li>
                                    <a href="{{url('/')}}/sgc/content/{{$value->slug}}">{{$value->name}}</a>
                                </li>
                                @elseif($value->form != '_home_page_banner' && $value->form !== '_last_hour' && $value->form !== '_faqs' && $value->form != '_podcasts' && $value->form != '_media')
                                <li>
                                <a href="{{url('/')}}/sgc/content/{{$value->slug}}">{{$value->name}}</a>
                                </li>
                                @endif

                            @endforeach
                        </ul>
                    </li>
                        @endif

                        @if(Gate::check('index_reporter') || Gate::check('index_roles'))
                    <li>
                        <a><i class="fa fa-newspaper-o"></i> Reporter <span class="fa fa-chevron-down"></span></a>

                        <ul class="nav child_menu">
                            <li><a href="{{url('/')}}/sgc/authors">Autores</a></li>
                            <li><a href="{{url('/')}}/sgc/publicities">Publicidades</a></li>
                        </ul>
                    </li>
                    @endif
                        <!-- <li>
                            <a><i class="fa fa-product-hunt"></i> Produtos <span class="fa fa-chevron-down"></span></a>

                            <ul class="nav child_menu">
                                <li><a href="{{url('/')}}/sgc/attributes">Atributos</a></li>
                                <li><a href="{{route('category_products.index')}}">Categorias</a></li>

                                <li>
                                    <a href="{{url('/')}}/sgc/products">Listagem</a>
                                </li>

                            </ul>
                        </li> -->

                        <!-- <li>
                            <a><i class="fa fa-lock"></i> Área reservada <span class="fa fa-chevron-down"></span></a>

                            <ul class="nav child_menu">
                                <li>
                                    <a href="{{url('/')}}/sgc/customers">Clientes</a>
                                </li>
                                <li>
                                    <a href="{{url('/')}}/sgc/vouchers">Vouchers</a>
                                </li>
                                <li>
                                    <a href="{{url('/')}}/sgc/shipping_methods">Metódos de envio</a>
                                </li>
                                <li>
                                    <a href="{{route('order.index')}}">Encomendas</a>
                                </li>
                            </ul>
                        </li> -->

                    @if(Gate::check('index_address'))
                        <li>
                            <a><i class="fa fa-map-marker"></i> Contactos <span class="fa fa-chevron-down"></span></a>

                            <ul class="nav child_menu">
                                <li><a href="{{ action('admin\ContactsController@index') }}">Moradas</a></li>
                            </ul>
                        </li>
                    @endif

                    @if(Gate::check('index_social_networks') || Gate::check('index_newsletter_subscribers'))
                        <li>
                            <a><i class="fa fa-share-alt"></i> Social <span class="fa fa-chevron-down"></span></a>

                            <ul class="nav child_menu">
                                @can('index_social_networks')
                                    <li><a href="{{url('/')}}/sgc/social">Links redes</a></li>
                                @endcan
                                @can('index_newsletter_subscribers')
                                    <li><a href="{{url('/')}}/sgc/subscribers">Subscritores</a></li>
                                @endcan
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <div class="row">
                <div class="col-xs-12">
                    <p style="color:white; margin-left: 5px">© {{date('Y')}} 4por4 All Rights Reserved</p>
                </div>
            </div>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                       aria-expanded="false">
                        <img src="{{url('/')}}/admin/img/4por4-logo.png" alt="">{{Auth::user()->name}}
                        <span class=" fa fa-angle-down"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <!--
                        <li><a href="javascript:;"> Profile</a></li>
                        <li>
                            <a href="javascript:;">
                                <span class="badge bg-red pull-right">50%</span>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li><a href="javascript:;">Help</a></li>
                        -->
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>

                </li>
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                       aria-expanded="false">
                        {{config('app.locales')[app()->getLocale()]}}
                        <span class=" fa fa-angle-down"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-usermenu">
                        @foreach(config('app.locales') as $key=>$locale)
                            <li><a href="{{ url('/')}}/sgc/setlocale/{{$key}}">{{$locale}}</a></li>
                        @endforeach
                    </ul>

                </li>
                <!--
                <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">6</span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                        <li>
                            <a>
                                <span class="image"><img src="images/image.jpg" alt="Profile Image" /></span>
                                <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image"><img src="images/image.jpg" alt="Profile Image" /></span>
                                <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image"><img src="images/image.jpg" alt="Profile Image" /></span>
                                <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image"><img src="images/image.jpg" alt="Profile Image" /></span>
                                <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <div class="text-center">
                                <a>
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                -->
            </ul>

        </nav>
    </div>
</div>
<!-- /top navigation -->