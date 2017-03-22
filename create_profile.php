<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Create Profile</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet"  />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="jumbotron">
      <div id="headp">
  <h1>Create Your Profile</h1>
  <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
</div>
</div>
<div class="container">

<form class="form-horizontal" form method="post" action="insert_profile.php">
  <fieldset>
    <div class="form-group">
      <label for="name" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" name="u_name" class="form-control" id="u_name" placeholder="Enter your Name..">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="pno" class="col-lg-2 control-label">Phone Number</label>
      <div class="col-lg-10">
        <input type="text" name="pno" class="form-control" id="pno" placeholder="Enter Your Phone Number..">
      </div>
    </div>
    <div class="form-group">
      <label for="bdate" class="col-lg-2 control-label">Birthday</label>
      <div class="col-lg-10">
        <input type="date" name="bdate" class="form-control" id="bdate" placeholder="enter your birthday..">
      </div>
    </div>
  <!--  <div class="checkbox">
      <label>
        <input type="checkbox"> Checkbox
      </label>
    </div>-->
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Gender</label>
      <div class="col-lg-10">
        <select class="form-control" id="select" name="gender">
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>

        </select>
      <!--  <br>
        <select multiple="" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select> -->
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Bio</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="bio" rows="3" id="textArea" placeholder="Enter a Short Bio of Youself.."></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
<!--    <div class="form-group">
      <label class="col-lg-2 control-label">Radios</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
            Option one is this
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something else
          </label>
        </div>
      </div>
    </div>-->

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Save!</button>
      </div>
    </div>
  </fieldset>
</form>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
