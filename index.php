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
  <script src="js/jquery.validate.js"></script>
</head>
<body>
<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="masthead clearfix">
                <div class="inner">
                    <ul class="nav masthead-nav">
                        <li class="active"><a data-toggle="modal" href="#" data-target="#addContact">Add contact</a></li>
                        <li id="clear_storage"><a href="#">Clear Storage</a></li>

                    </ul>
<!--                  search form-->
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                    <div class="input-group-btn">
                      <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                  </div>
                </div>
              <div class="check">
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox1" value="option1"><span class = "filter">Personal group</span>
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"><span class = "filter">Business group</span>
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox3" value="option3"> <span class = "filter">Others group</span>
                </label>
              </div>
            </div>
            <div class="inner cover">
                    <div id="add_empty">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addContact">
                            No contact found, add a contact
                        </button>
                    </div>

              <div class="table-responsive">

              <table class="table" id="table">
                <tbody>
                <tr class="tr">
                </tr>
                </tbody>
              </table>
                </div>

            </div>
          <div class="search_result"></div>
            <div class="mastfoot">
                <div class="inner">
                    <p>Created by <a href="http://www.rdobrynin.net">R_Dobrynin.net</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="addContact" tabindex="-1" role="dialog" aria-labelledby="addContactLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="addContactLabel">Add contact</h4>
            </div>
            <div class="modal-body">
                <div class="inner cover">
                    <form id="form_add_contact" role="form" method="POST">
                        <div class="row">
                            <div class="span6">
                                <label class="col-xs-2" for="input_first_name">First Name</label>
                                <div class="form-group col-xs-10 space">
                                    <input type="text" class="form-control" id="input_first_name" placeholder="First Name">
                                </div>
                              <div class="error-block"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span6">
                                <label class="col-xs-2" for="input_last_name">Last Name</label>
                                <div class="form-group col-xs-10 space">
                                    <input type="text" class="form-control" id="input_last_name" placeholder="Last Name">
                                </div>
                              <div class="error-block"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span6">
                                <label class="col-xs-3" for="number">Phone number</label>
                                <div class="form-group col-xs-9 space">
                                    <input type="tel" class="form-control" id="input_phone" placeholder="Phone">
                                </div>
                              <div class="error-block"></div>
                                <label class="col-xs-3  space" for="select">Group</label>
                                <div class="col-xs-6 pull-right space">
                                    <select class="form-control" id="select">
                                        <option value="first group">Personal</option>
                                        <option value="secondary group">Business</option>
                                        <option value="third group">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-lg" id="submit" data-toggle="modal" data-target="#addContact">
                                    Add contact
                                </button>
                            </div>
                    </form>

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
