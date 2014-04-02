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
                        <div class="col-xs-9">
                            <input type="tel" class="form-control" id="input_phone" placeholder="Phone">
                        </div>
                            </div>
                        <div class="col-xs-3 pull-right">
                        <label class="label_check" for="group">Group?</label>
                        <input type="checkbox"  name="group" id="group">

                            </div>

                    </div>
                    <div>
                        <input type="submit" class="btn btn-lg btn-default"  id="submit" value="Add contact" />
                    </div>
                </form>
                <ul id="numbers"></ul>
<!--                <p class="lead">-->
<!--                    <a href="#" class="btn btn-lg btn-default">Learn more</a>-->
<!--                </p>-->
            </div>
            <div class="mastfoot">
                <div class="inner">
                    <p>Created by <a href="http://www.rdobrynin.net">RDobrynin.net</a></p>
                </div>
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
