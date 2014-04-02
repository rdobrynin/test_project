<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">-->
    <title>Test project</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="masthead clearfix">
                <div class="inner">
                    <ul class="nav masthead-nav">
                        <li class="active"><a href="#">Address Book</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
            </div>
            <div class="inner cover">

                    <div>
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                            No contact found, add a contact
                        </button>
                    </div>

                <ul id="numbers"></ul>
<!--                <p class="lead">-->
<!--                    <a href="#" class="btn btn-lg btn-default">Learn more</a>-->
<!--                </p>-->
            </div>
            <div class="mastfoot">
                <div class="inner">
                    <p>Created by <a href="http://www.rdobrynin.net">R_Dobrynin.net</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add contact</h4>
            </div>
            <div class="modal-body">
                <div class="inner cover">
                    <form role="form">
                        <div class="row">
                            <div class="span6">
                                <label class="col-xs-2" for="input_first_name">First Name</label>
                                <div class="col-xs-10 space">
                                    <input type="text" class="form-control" id="input_first_name" placeholder="First Name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="span6">
                                <label class="col-xs-2" for="input_last_name">Last Name</label>
                                <div class="col-xs-10 space">
                                    <input type="text" class="form-control" id="input_last_name" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span6">
                                <label class="col-xs-3" for="number">Phone number</label>
                                <div class="col-xs-9 space">
                                    <input type="tel" class="form-control" id="input_phone" placeholder="Phone">
                                </div>

                                <label class="col-xs-3  space" for="select">Group</label>
                                <div class="col-xs-6 pull-right space">
                                    <select class="form-control" id="select">
                                        <option value="one">Personal</option>
                                        <option value="two">Business</option>
                                        <option value="three">Others</option>
                                    </select>
                                </div>

                            </div>
                            <div>
                                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                    Add contact
                                </button>
                            </div>
                    </form>
                    <ul id="numbers"></ul>
                    <!--                <p class="lead">-->
                    <!--                    <a href="#" class="btn btn-lg btn-default">Learn more</a>-->
                    <!--                </p>-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-inverse" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
