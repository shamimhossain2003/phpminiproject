<?php
$number3 = null;
if(isset($_POST['submit'])){
  $number1= $_POST['first-number'];
  $number2= $_POST['Second-number'];
  $number3= $number1+$number2;

}else{

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php mini project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-10">
          <!--form-->
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="">          
                <div class="col-md-6 mt-3">
                  <label for="first-number" class="form-label">First Number</label>
                  <input type="number" class="form-control first-number" id="first-number" name="first-number" placeholder="Enter Your 1st Number" required>
                </div>
                
                <div class="col-md-6 mb-2">
                  <label for="Second-number" class="form-label">Second Number</label>
                  <input type="number" class="form-control Secound-number" id="Second-number" name="Second-number" placeholder="Enter Your 2nd Number" required>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
          </form>
          <!--form-->
        </div>
      </div>
    </div>
    <div class="container">
      <h2 class="text-dark">
        <?php echo $number3;?>
      </h2>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>