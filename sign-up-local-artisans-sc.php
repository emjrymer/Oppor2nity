
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Oppor2nity | Local Artisans South Carolina</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="img/purple-logo-transparent.png" />
        <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
        <link href='https://fonts.googleapis.com/css?family=Dancing+Script|Bree+Serif' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="background">
            <?php include 'inc/header.php'; ?>
            <div class="row">
                <div class="joinUs">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <p style="margin-bottom:30px;">
                                You shop. Oppor2nity gives.
                                When you purchase an item in this creative makers marketplace, Oppor2nity donates 20% of all net profits to charitable organizations around the globe. In turn, giving others around the world an Oppor2nity they might not otherwise have!
                            </p>
                        </div>
                    </div>
                    <h2>Creative Makers. Creating Oppor2nity.</h2>
                </div>
                <div class="signUp">
                    <h1><span style="color: #91cdb4;">MAKE</span> a Difference</h1>
                </div>
                <div class="signUpSection">
                    <form class="signUpForm" action="signup.php" method="post">
                        <input style="color:#ddd;" id="artisanName" type="text" name="artisanName" placeholder="Your Company Name">
                        <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal">Go</button>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Tell Us About Yourself</h4>
                              </div>
                              <div class="modal-body">
                                  <input type="text" id="name" name="name" placeholder="your name">
                                  <input type="text" id="phone" name="phone" placeholder="phone">
                                  <input type="email" id="email" name="email" placeholder="email">
                              </div>
                              <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                <input type="submit" name="submit" value="join">
                              </div>
                            </div>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php include 'inc/footer.php'; ?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
    </body>
</html>
