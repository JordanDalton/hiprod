@section('page_title', 'Vendor Search');

@section('content')

<!-- .container -->
<div class="container">
    <!-- .row-fluid -->
    <div class="row-fluid">
        <ul class="breadcrumb">
        <li><a href="{{ URL::to_route('admin-dashboard')}}">Admin Dashboard</a> <span class="divider">/</span></li>
        <li><a href="{{ URL::to_route('admin-products') }}">Products</a> <span class="divider">/</span></li>
        <li class="active">Add</li>
        </ul>
    </div>
    <!-- /.row-fluid -->
    
    <!-- .row-fluid -->
    <div id="importingIndicator" class="row-fluid">
        <!-- .span6 -->
        <div class="span6">
            <p><i class="loadingIndicator"></i> Importing product(s) from ASI.</p>
            <div style="clear:both"></div>
        </div>
        <!-- /.span6 -->
    </div>
    <!-- /.row-fluid -->
    
    <!-- .row-fluid -->
    <div id="importAlert" class="row-fluid">
        <div class="alert alert-success">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <strong>Product import is complete!</strong> 
        </div>
    </div>
    <!-- /.row-fluid -->
    
    <!-- .row-fluid -->
    <div class="row-fluid">
        <!-- .page_header -->
        <div class="page_header">
            <h1>Add <small>New Product</small></h1>
            <p>Import product(s) from ASI Central.</p>
        </div>
        <!-- /.page_header -->        
    </div>
    <!-- /.row-fluid -->
    <hr/>
    <!-- .row-fluid -->
    <div class="row-fluid">
        <!-- .span4 -->
        <div class="span4">
            {{ $search_form }}
        </div>
        <!-- /.span4 -->
        <!-- .span4 -->
        <div class="span4">
            <div class="btn-group">
                <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" style="opacity: 1;">
                    <strong class="selectedCount">0</strong> record(s) selected <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#myModal" data-toggle="modal" class="viewSelected"><i class="icon-eye-open"></i> View</a></li>
                    <li class="divider"></li>
                    <li><a href="#" class="importSelected"><i class="icon-download"></i> Run Import</a></li>
                </ul>
            </div>
        </div>
        <!-- /.span4 -->
    </div>
    <!-- /.row-fluid -->
    <hr/>   
    <!-- .row-fluid -->
    <div id="loadingIndicator" class="row-fluid">
        <!-- .span6 -->
        <div class="span6">
            <p><i class="loadingIndicator"></i> Searching for records.</p>
            <div style="clear:both"></div>
        </div>
        <!-- /.span6 -->
    </div>
    <!-- /.row-fluid -->
    <!-- .row-fluid -->
    <div id="resultsContainer" class="row-fluid"></div>
    <!-- /.row-fluid -->
</div>
<!-- /.container -->

<!-- .navbar.navbar-fixed-top -->
<div class="navbar navbar-fixed-bottom">
    <!-- .navbar-inner -->
    <div class="navbar-inner">
        <!-- .container -->
        <div class="container">
            <ul class="nav">
                <!-- .dropdown -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-share-alt"></i> <strong class="selectedCount">0</strong> record(s) selected <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#myModal" data-toggle="modal" class="viewSelected"><i class="icon-eye-open"></i> View Selected</a></li>
                            <li class="divider"></li>
                            <li><a href="#" class="importSelected"><i class="icon-download"></i> Run Import</a></li>
                        </ul>
                </li>
                <!-- /.dropdown -->
            </ul>
        </div>
        <!-- .container -->
    </div>
    <!-- .navbar-inner -->
</div>
<!-- .navbar.navbar-fixed-top -->


<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Vendor Import</h3>
    </div>
    <div class="modal-body">
        <p>The following vendors have been selected to be imported into HiProd.</p>
        <table id="previewTable" class="table">
            <thead>
                <tr>
                    <th>Vendor Details</th>
                    <th style="width:135px">Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save changes</button>
    </div>
</div>

@endsection

@section('footer_scripts')
    {{ HTML::buildScript('bundles/admin/js/product/add.js') }}
@endsection