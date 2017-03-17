<!doctype>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>DailyTube</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets/css/dailytube.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url ();?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url ();?>assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url ();?>assets/jquery/jquery-ui.css">
    </head>
    <body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
		<!-- menu horizontal haut-->
		<nav class="navbar navbar-fixed-top">
			<div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><i class="fa fa-home fa" aria-hidden="true"> DailyTube</i></a>
                </div>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                <button type="submit" class="btn btn-success">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" id="signUp" data-toggle="modal" data-target="#modalSignUp"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#" id="login" data-toggle="modal" data-target="#modalLogin"><span class="glyphicon glyphicon-log-in" id="login"></span> Login</a></li>
                </ul>
			</div>
		</nav>

<!-- Modal -->
<div class="modal fade" id="modalSignUp" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header btn-info">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalLogin" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header btn-info">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
