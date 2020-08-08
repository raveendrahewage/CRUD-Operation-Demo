<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Update Details</title>
  </head>
  <body>

    <!--Form-->
    <?php
      foreach ($data as $row) 
      {
        echo "<form class='text-center border border-light p-5' action='' method='post'>";
          echo "<center><img src='https://img.icons8.com/fluent/100/000000/user-male-circle.png' width='200' height='200' style='padding: 5px;' class='d-inline-block align-top' alt='' loading='lazy'></a></center>";
          echo "<p class='h4 mb-4'>$row->fName $row->lName</p><br>";
            echo "<div class='form-row mb-4'>";
              echo "<div class='col'>";
                echo "<input type='text' id='defaultRegisterFormFirstName' class='form-control' value='$row->fName' name='fName' style='height:50px;' required>";
              echo "</div>";
              echo "<div class='col'>";
                echo "<input type='text' id='defaultRegisterFormLastName' class='form-control' value='$row->lName' name='lName' style='height:50px;'required>";
              echo "</div>";
            echo "</div>";
            echo "<input type='email' id='defaultRegisterFormEmail' class='form-control mb-4' value='$row->email' name='email' style='height:50px;' required>";
            echo "<input type='number' id='defaultRegisterFormPhoneNumber' class='form-control mb-4' value='$row->phoNumber' name='phoNumber' style='height:50px;' required>";
            echo "<input type='password' id='defaultRegisterFormPassword' class='form-control' value='$row->password' name='password' style='height:50px;' placeholder='Password' aria-describedby='defaultRegisterFormPasswordHelpBlock' required>";
            echo "<small id='defaultRegisterFormPasswordHelpBlock' class='form-text text-muted mb-4'>";
                echo "At least 8 characters and 1 digit";
            echo "</small>";
            echo "<input type='submit' class='btn btn-info my-4 btn-block' name='update' style='height:50px;' value='Update'>";
            echo "<hr>";
        echo "</form>";
      }
     ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>