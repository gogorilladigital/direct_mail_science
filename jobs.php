<?php
$apply = 0;
if (isset($_POST['name']))  {
    $fn = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $about = $_POST['about'];

    $message = "<table>
    <tr><th>Applicant Name</th><td>".$fn."</td></tr>
    <tr><th>Phone</th><td>".$phone."</td></tr>
    <tr><th>Email</th><td>".$email."</td></tr>
    <tr><th>Street</th><td>".$street."</td></tr>
    <tr><th>City</th><td>".$city."</td></tr>
    <tr><th>State</th><td>".$state."</td></tr>
    <tr><th>Zip</th><td>".$zip."</td></tr></table>".
    "<h5>About Applicant</h5><p>".$about."</p>";

    //$to = 'crisjerden@gmail.com';
    $to = 'mgurule@gogorilladigital.com';

    $subject = 'New Job Application';

    $headers = "From: " . 'Applications Service' . "\r\n";
    $headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    mail($to, $subject, $message, $headers);
    $apply = 1;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Direct Mail Science | 2018</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-top.css" rel="stylesheet">
    <style type="text/css">
        html::after {
            content: "";
            background: none;
            background-size: cover;
            opacity: 0;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: relative;
            z-index: 0;
        }
        html {
            background: #fff;
        }
        .jumbotron {
            background: url(img/office.jpg);
            background-position: 0 -215px;
            background-size: cover;
            color: #fff;
            text-align: center;
            padding-top: 70px;
            padding-bottom: 20px;
            border-radius: 0px;
        }
        h2.lab {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-bottom: 6px solid black;
            padding-bottom: 5px;
            margin-bottom: 30px;
        }
        h3 {
            margin-bottom: 30px;
        }
        .appText {
            padding: 10px;
            background: #eee;
            border-radius: 4px;
            font-size: 15px;
        }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="/"><img src="img/logo.png" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mission.php">MISSION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="experience.php">EXPERIENCE</a>
          </li>
        </ul>
        <a href="contact.php" class="btn btn-outline-light btn-sm">Contact Us</a>
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">We're Hiring!</h1>
        <p>We're seeking highly-motivated people with an entrepreneurial attitude. No experience needed. Interested in earning extra cash in your spare time while working from the comfort of your own home?</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-9">
          <?php
            if ($apply == 1) {
          ?>
          <div class="alert alert-success mt-2 mb-4" role="alert">
            <strong>Well done!</strong> Your application was sent successfully.
          </div>
          <?php
            }
          ?>

          <h2 class="lab">Description</h2>
          <h2>Make $23.50 + hourly at home</h2>

          <h3>NO EXPERIENCE + FLEXIBLE HOURS</h2>
          <p>Can you write a name and address in less than a minute?</p>
          <p>Direct Mail Science, a multi-million- dollar postal marketing agency headquartered in Los Angeles
          CA, is looking for people across U.S. who are interested in earning extra cash in their spare time
          working from home.</p>
          <p>You set the hours and the earning potential is up to you. Good penmanship is the only skill required
          for this job. Your handwriting does not have to be perfect just good enough so that the post office
          workers can read it and the U.S. postal service can deliver the mail.</p>
          <p>The job involves hand writing people’s names and mailing addresses on envelopes for advertisers.
          You will be paid $5.00 dollars for every 10 envelopes you handwrite. Most people working at their
          own pace can hand address about 47 envelopes per hour, which is an average of up to $23.50 per
          hour.</p>
          <p>You can make even more money if you are quick or have others helping you out. The reason we
          can pay top dollar for this simple job is because handwritten envelopes work 5 to 6 times better for
          advertisers. They pay us more, so we can pay you more. It’s that simple.</p>
          <p>No prior work experience needed. To qualify, you must be age 18 or older, live in the U.S. and
          have legible handwriting. We will consider all candidates in all areas of the country. Please click
          below to apply now while openings are still available in your area.</p>
          <p>Click the APPLY NOW button to get started.</p>
           
          <p>Direct Mail Science, LLC is an equal opportunity employer. </p>
          <br />
          <br />
        </div>
        <div class="col-md-3">
          <h2>Apply Online!</h2>
          <p class="appText">Click the APPLY NOW button below to get started with your online application today. Direct Mail Science, LLC is an equal opportunity employer.</p>
          <p><a class="btn btn-primary btn-block" href="#" role="button" data-toggle="modal" data-target="#exampleModal">Apply Now &raquo;</a></p>
          <br />
          <br />
          <br />
          <br />
        </div>
      </div>
    </div> <!-- /container -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Online Application</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="modal-body">
              <div class="form-group">
                <label for="name">Full Name</label>
                <input required type="text" class="form-control" id="name" name="name" placeholder="Enter your full name">
              </div>
              <div class="form-group">
                <label for="phone">Contact Phone</label>
                <input required type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
              </div>
              <div class="form-group">
                <label for="email">Contact Email</label>
                <input required type="email" class="form-control" id="email" name="email" placeholder="Enter your Email Address">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="street">Street Address</label>
                <input type="text" required class="form-control" id="street" name="street" placeholder="Enter your street address">
              </div>
              <div class="row">
                  <div class="col">
                      <div class="form-group">
                      <label for="city">City</label>
                      <input required type="text" class="form-control" id="city" name="city">
                      </div>
                  </div>
                  <div class="col">
                      <div class="form-group">
                      <label for="state">State</label>
                      <input required type="text" class="form-control" id="state" name="state">
                      </div>
                  </div>
                  <div class="col">
                      <div class="form-group">
                      <label for="zip">Zip</label>
                      <input required type="text" class="form-control" id="zip" name="zip">
                      </div>
                  </div>
              </div>
              <div class="form-group">
                <label for="background">Tell us about yourself</label>
                <textarea required class="form-control" id="background"></textarea>
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" style="display: block" class="btn btn-primary btn-block">Send Application</button>
          </div>
          <p style="padding: 10px 15px;text-align: center;font-size: 11px">By submitting this form, I opt-in to receive advertised offers by postal mail, email or text.</p>

          </form>
        </div>
      </div>
    </div>

  </main>

    <footer class="footer">
      <div class="container-fluid">
        <p style="margin: 0px; padding: 0px; color: #fff">Copyright 2016-2018. All rights reserved. Combinatorial Modeling is a registered trademark of Direct Mail Science, LLC.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
