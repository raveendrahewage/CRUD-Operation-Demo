<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Add User</title>
  </head>
  <body>
    
    <!--Form-->
    <center><form class="text-center border border-light p-5" action="" method="post">
      <center><img src="https://img.techpowerup.org/200718/circle-cropped.png" width="200" height="200" style="padding: 5px;"class="d-inline-block align-top" alt="" loading="lazy"></a></center>
      <p class="h4 mb-4">Create an Account</p><br>
        <div class="form-row mb-4">
          <div class="col">
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" name="fName" style="height:50px;" placeholder="First name" required>
          </div>
          <div class="col">
            <input type="text" id="defaultRegisterFormLastName" class="form-control" name="lName" style="height:50px;" placeholder="Last name" required>
          </div>
        </div>
        <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" name="email" style="height:50px;" placeholder="E-mail" required>
        <input type="number" id="defaultRegisterFormPhoneNumber" class="form-control mb-4" name="phoNumber" style="height:50px;" placeholder="Phone number" required>
        <input type="password" id="defaultRegisterFormPassword" class="form-control" name="password" style="height:50px;" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
            At least 8 characters and 1 digit
        </small>
        <input type="submit" class="btn btn-info my-4 btn-block" name="createaccount" style="height:50px;" value="Create Account">
        <hr>
        <p>By clicking
            <em>Create Account</em> you agree to our
            <a href="" target="_blank">terms of service</a>
    </form></center>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>