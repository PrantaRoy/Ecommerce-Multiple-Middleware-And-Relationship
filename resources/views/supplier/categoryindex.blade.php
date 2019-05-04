<!DOCTYPE html><html><head>    <meta charset="UTF-8">    <meta http-equiv="X-UA-Compatible" content="IE=Edge">    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">    <title>Welcome To |Add Category</title>    <!-- Favicon-->    <link rel="icon" href="favicon.ico" type="image/x-icon">    <!-- Google Fonts -->    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">    <!-- Bootstrap Core Css -->    <link href="{{ asset('assets/backend/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">    <!-- Waves Effect Css -->    <link href=" {{asset('assets/backend/plugins/node-waves/waves.css')}}" rel="stylesheet" />    <!-- Animation Css -->    <link href="{{asset('assets/backend/plugins/animate-css/animate.css')}} " rel="stylesheet" />    <!-- Morris Chart Css-->    <link href="{{asset('assets/backend/plugins/morrisjs/morris.css')}} " rel="stylesheet" />    <!-- Custom Css -->    <link href="{{asset('assets/backend/css/style.css')}}" rel="stylesheet">    <!-- Datatables Css -->    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css" rel="stylesheet">    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->    <link href="{{asset('assets/backend/')}}css/themes/all-themes.css" rel="stylesheet" /></head><body class="theme-red"><div class="page-loader-wrapper">    <div class="loader">        <div class="preloader">            <div class="spinner-layer pl-red">                <div class="circle-clipper left">                    <div class="circle"></div>                </div>                <div class="circle-clipper right">                    <div class="circle"></div>                </div>            </div>        </div>        <p>Please wait...</p>    </div></div><div class="overlay"></div><!-- Top Bar --><nav class="navbar">    <div class="container-fluid">        <div class="navbar-header">            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>            <a href="javascript:void(0);" class="bars"></a>            <a class="navbar-brand" href="index.html">Supplier </a>        </div>    </div></nav><!-- #Top Bar --><section>    <!-- Left Sidebar -->    <aside id="leftsidebar" class="sidebar">        <!-- User Info -->        <div class="user-info">            <div class="info-container">                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>                <div class="email">john.doe@example.com</div>                <div class="btn-group user-helper-dropdown">                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>                    <ul class="dropdown-menu pull-right">                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>                        <li role="separator" class="divider"></li>                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>                        <li role="separator" class="divider"></li>                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>                    </ul>                </div>            </div>        </div>        <!-- #User Info -->        <!-- Menu -->        <div class="menu">            <ul class="list">                <li class="header">MAIN NAVIGATION</li>                <li class="active">                    <a href="{{route('supplier.category.create')}}">                        <i class="material-icons">add_circle</i>                        <span>Add Product Category</span>                    </a>                <li class="active">                    <a href="{{route('supplier.product.create')}}">                        <i class="material-icons">add</i>                        <span>Add Product</span>                    </a>                <li class="active">                    <a href="{{route('supplier.product.index')}}">                        <i class="material-icons">view_list</i>                        <span>MY Product</span>                    </a>            </ul>        </div>        <!-- #Menu -->        <!-- Footer -->        <div class="legal">            <div class="copyright">                &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.            </div>            <div class="version">                <b>Version: </b> 1.0.5            </div>        </div>        <!-- #Footer -->    </aside>    <!-- #END# Left Sidebar --></section><section class="content">    <div class="card-body">       <div class="card-header">           <h3> All Product Category</h3>       </div>        <table id="example" class="table table-striped table-bordered" style="width:100%">            <thead>            <tr>                <th>ID</th>                <th>Name</th>                <th>Create At</th>                <th>Action</th>            </tr>            </thead>            <tbody>            <tr>                @foreach($categories as $key=>$category)                <td>{{ $key+10 }}</td>                <td>{{$category->name}}</td>                <td>{{$category->created_at}}</td>                <td class="text-center">                   <a href=" {{ route('supplier.category.edit',$category->id) }}"                    class="btn btn-info  waves-effect">                       <i class="material-icons"> edit</i> </a>                    <button  type="button" class="btn btn-danger  waves-effect">                         <i class="material-icons">delete</i> </button>                    <form action="{{route('supplier.category.destroy',$category->id)}}" method="POST" style="display: none">                        @csrf                        @method('DELETE')                    </form>                </td>            </tr>            @endforeach            </tbody>            <tfoot>            <tr>                <th>ID</th>                <th>Name</th>                <th>Create At</th>                <th>Action</th>            </tr>            </tfoot>        </table>    </div></section><!-- Jquery Core Js --><script src="{{asset('assets/backend/plugins/jquery/jquery.min.js')}}"></script><!-- Bootstrap Core Js --><script src="{{asset('assets/backend/plugins/bootstrap/js/bootstrap.js')}}"></script><!-- Select Plugin Js --><script src="{{asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script><!-- Slimscroll Plugin Js --><script src="{{asset('assets/backend/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script><!-- Waves Effect Plugin Js --><script src="{{asset('assets/backend/plugins/node-waves/waves.js')}}"></script><!-- Jquery CountTo Plugin Js --><script src="{{asset('assets/backend/plugins/jquery-countto/jquery.countTo.js')}}"></script><!-- Morris Plugin Js --><script src="{{asset('assets/backend/plugins/raphael/raphael.min.js')}}"></script><script src="{{asset('assets/backend/plugins/morrisjs/morris.js')}}"></script><!-- ChartJs --><script src="{{asset('assets/backend/plugins/chartjs/Chart.bundle.js')}}"></script><!-- Flot Charts Plugin Js --><script src="{{asset('assets/backend/plugins/flot-charts/jquery.flot.js')}}"></script><script src="{{asset('assets/backend/plugins/flot-charts/jquery.flot.resize.js')}}"></script><script src="{{asset('assets/backend/plugins/flot-charts/jquery.flot.pie.js')}}"></script><script src="{{asset('assets/backend/plugins/flot-charts/jquery.flot.categories.js')}}"></script><script src="{{asset('assets/backend/plugins/flot-charts/jquery.flot.time.js')}}"></script><!-- Sparkline Chart Plugin Js --><script src="{{asset('assets/backend/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script><!-- Custom Js --><script src="{{asset('assets/backend/js/admin.js')}}"></script><script src="{{asset('assets/backend/js/pages/index.js')}}"></script><!-- Demo Js --><script src="{{asset('assets/backend/js/demo.js')}}"></script><script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script><script>    $(document).ready(function() {        $('#example').DataTable();    } );</script></body></html>