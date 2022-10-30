<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>iStore</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


</head>

<body>



    <div class="container">

        <form class="well form-horizontal" action=" " method="post" id="form">
            <fieldset>

                <!-- Form Name -->
                <legend>
                    <center>
                        <h2><b>טופס הרשמה</b></h2>
                    </center>
                </legend><br>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Full Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="name" placeholder="Full Name" class="form-control" type="text">
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-4 control-label">Client Type</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="client" class="form-control selectpicker">
                                <option value="">Select your Type</option>
                                <option>private</option>
                                <option>Business</option>
                                <option>student</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Phone</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="phone" placeholder="(052)" class="form-control" type="text">
                        </div>
                    </div>
                </div>





                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">E-Mail</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" placeholder="E-Mail Address" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Address</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-map-marker-alt"></i></span>
                            <input name="address" placeholder="address" class="form-control" type="text">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label">Gender</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-venus-mars"></i></span>
                            <select name="gender" class="form-control selectpicker">
                                <option value="">Select your Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>other</option>
                            </select>
                        </div>
                    </div>
                </div>
              



 <div style="text-align: center;">
 <h4>chose your favorite Products !</h4>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="favCheck" value="iphone" />
                    <label class="form-check-label" for="inlineCheckbox1">iphone</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="favCheck" value="ipad" />
                    <label class="form-check-label" for="inlineCheckbox2">ipad</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="favCheck" value="AppleTV" />
                    <label class="form-check-label" for="inlineCheckbox3">AppleTV</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="favCheck" value="Mac" />
                    <label class="form-check-label" for="inlineCheckbox4">Mac</label>
                </div>
 </div>
            
                <!-- Select Basic -->

                <!-- Success message -->
                <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <button type="submit" name="submit" class="btn btn-warning">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT 
                <span class="glyphicon glyphicon-send"></span>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
    </div><!-- /.container -->

    
	<?php

// API URL
$url = 'https://thatcopy.pw/catapi/rest/';

// Create a new cURL resource
$ch = curl_init($url);

$payload = json_encode($ch);

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result = curl_exec($ch);

// Close cURL resource
curl_close($ch);

if(isset($_POST['submit'])){

    include 'dbcon.php'; 

  $name = $_POST['name'];
  $type = $_POST['client'];
  $gender = $_POST['gender'];
  $email= $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $favCheck = $_POST['favCheck'].'';
  $pic = $result; //api


  $sql = "INSERT INTO client (name,client_type,Phone,email,address,client_gender,client_pic,favorite_products)
  VALUES ('$name','$type','$phone','$email','$address','$gender','$pic','$favCheck')";
  if ($conn->query($sql) === TRUE) {
  echo "<p class='btn btn-info' align='center'>New record created successfully</p>";
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error."";
  }
  $conn->close();
 } 


?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <script src="srcipt.js"></script>
</body>

</html>