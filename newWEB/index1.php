<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kerker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="base">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <h3><img src="list.png" style="width:25%;" class="rounded float-left" alt="..."></h3>
                    <div class="container">
  <div class="row">
    <div class="col-lg-6">
        <br><br><br><br>
    <p class="text-muted" >All information is are dummies, these are not real time users!</p>
    <hr style="border:1px solid indigo;opacity:0.4;">
    </div>
    <div class="col-lg-6">

    </div>
  </div>
</div>
                    <br>
    
                    <?php

                    require_once "config.php";

                    $sql = "SELECT * FROM accounts";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){


echo "<div class'jumbotron text-center'>";
echo "<div class='text-center'>


</div>";
echo "<button type='button' class='btn secondary' style='float:right;margin-right:20px;'><a href='index.php'><img src='https://www.iconninja.com/files/239/441/194/arrows-direction-left-arrow-icon.svg' style='width:37px;' class='rounded'></a</button>";

echo "</div>";

echo "<div class='jumnotron text-center'>";
echo"<div class='container table-responsive py-5'>";
echo "<table class='table table-bordered table-hover'>";
  echo "<thead class='thead-light'>";
    echo "<tr>";
      echo "<th scope='col'>User Id</th>";
      echo "<th scope='col'>Username</th>";
      echo "<th scope='col'>Email</th>";
      echo "<th scope='col'>Password</th>";
      echo "<th scope='col'>Customize</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";     
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td class='text-left'>" . $row['id'] . "</td>";
                                        echo "<td class='text-left'>" . $row['username'] . "</td>";
                                        echo "<td class='text-left'>" . $row['email'] . "</td>";
                                        echo "<td class='text-left'>" . $row['password'] . "</td>";
                                        echo "<td class='text-left'>";
                                        echo "<a class='text-left' href='update.php?id=". $row['id'] ."' title='Modify Record' data-toggle='tooltip'><span class='glyphicon glyphicon-edit'></span></a>&nbsp;&nbsp;";
                                        echo "<a class='text-left' href='delete.php?id=". $row['id'] ."' title='Drop Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            echo "</div>";
                            mysqli_free_result($result);
                        } else{
                            
                            echo "<p class='lead'><em>No records were found.</em></p>";
                            echo "<button type='button' class='btn secondary' style='float:right;margin-right:20px;'><a href='index.php'><img src='https://www.iconninja.com/files/239/441/194/arrows-direction-left-arrow-icon.svg' style='width:37px;' class='rounded'></a</button>";
                            echo "<br><br><br>";
                            echo "<div class='text-center'>";
  echo"<img src='empty.png' style='width:40%;' class='rounded'>";
echo "</div>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
    </div>
</body>
</html>