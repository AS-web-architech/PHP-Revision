<?php
// include 'config.php';
include 'validate.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  <style>
    .main{
      margin-top: 20px;
      padding-top: 20px;
    }
  </style>
</head>
<body>
    <section>
        
        <div class="container main">
            <h2>PHP Form With Validation</h2>
            <div class="row">
                
                <div class="col-12">
                    
                     <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name:</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter Your Name">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Age</label>
                            <input type="number" name="age" class="form-control" placeholder="Enter your age">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Male
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
                            <label class="form-check-label" for="gridRadios2">
                                Female
                            </label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form> 

                
                </div>
            </div>
        </div>
        <div class="container">
            <h3>Output:</h3>
            <?php
            if(isset($_POST['submit'])){

                echo $name;
                echo '<br>';
                 echo $email;
                echo '<br>';
                 echo $age;
                echo '<br>';
                 echo $gender;
                echo '<br>';
            }else{
               echo  'put values in input field to print output';
            }
             

            
            
            ?>
        </div>
    </section>

    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>