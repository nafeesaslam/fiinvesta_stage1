@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <h3>Balance Info</h3>
            <div class="panel panel-default">
                <div class="panel-heading panel-content"><h3>Hi ! Mr. John Doe</h3></div>

                <div class="panel-body home">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                        <h2><i class="fa fa-rupee"></i> 10,786</h3>
                        <h1>Last Return</h1>
                        <h5>1st May, 2018</h5>              
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <h3>Recent Activities</h3>
            <div class="overflow-control">
                <div class="panel panel-default">
                <div class="panel-heading head-info"><p style="float: left;">Amount Transferred  &nbsp;&nbsp;  </p> <span style="float: right;"> <i class="fa fa-calendar"></i> 1st June, 2018</span></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                        <h5><i class="fa fa-inr"></i> 5800 has been transferred to your account <a href="#">See Details..</a></h5>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading head-info"><p style="float: left;">Amount Transferred  &nbsp;&nbsp;  </p> <span style="float: right;"> <i class="fa fa-calendar"></i> 1st May, 2018</span></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                        <h5><i class="fa fa-inr"></i> 5300 has been transferred to your account <a href="#">See Details..</a></h5>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading head-info"><p style="float: left;">Amount Transferred  &nbsp;&nbsp;  </p> <span style="float: right;"> <i class="fa fa-calendar"></i> 1st April, 2018</span></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                        <h5><i class="fa fa-inr"></i> 4800 has been transferred to your account <a href="#">See Details..</a></h5>
                </div>
            </div>
            </div>
            
        </div>


    </div>
</div>
<script type="text/javascript">
    
</script>
@endsection
