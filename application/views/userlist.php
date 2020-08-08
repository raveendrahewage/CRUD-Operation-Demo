<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Users</title>
  </head>
  <body>

    <!--Page Options-->
    <section class="page-section" id="services">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Users</h2><br>
        </div>
        <?php
          foreach($data as $row)
          {
            echo "<div class='row text-center shadow p-4 mb-4 bg-white'>";
              echo "<div class='container'>";
                echo "<div class='row'>";
                     echo "<div class='col-md-6'>";
                      echo "<span class='fa-stack fa-4x'>";
                        echo "<i class='fas fa-circle fa-stack-2x text-primary'></i>";
                        echo "<i class='fas fa-shopping-cart fa-stack-1x fa-inverse'></i>";
                      echo "</span>";
                      echo "<img src='https://img.icons8.com/fluent/100/000000/user-male-circle.png'/>";
                      echo "<h4 class='my-3'>".$row->fName." ".$row->lName."</h4>";
                      echo "<p class='text-muted'>".$row->id."</p>";
                      echo "<p class='text-muted'>".$row->email."</p>";
                      echo "<p class='text-muted'>".$row->phoNumber."</p>";
                    echo "</div>";
                    echo "<div class='col-md-6'>";
                  echo "<a href='updateusers?id=".$row->id."' class='btn btn-info btn-lg' style='height:50px;margin:10px;' role='button'>Update</a>";
                  echo "<a href='deleteusers?id=".$row->id."' class='btn btn-danger btn-lg' style='height:50px;margin:10px;' role='button'>Delete</a>";
                  echo "</div>";
                echo "</div>";
              echo "</div>";
             
            echo "</div>";
          }
        ?>
      </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>