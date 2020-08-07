<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">


    <title>Index</title>

</head>
<body class="mainBody" style="background-color:white;">
  <h1 class="display-4 text-center text-dark">SignUp Here</h1>

      <div class="card formContainer bg-dark text-white">
            <form id="form" class="myform"  method="post" action ="formValid.php">
                <div class="form-group mt-3">
                    <label for="" style="margin-left: 60px;">First Name</label>
                    <input class="form-control w-75 name" name="firstname" type="text" placeholder="Enter Your First Name">
                    <div class="errName text-danger">
                      <!-- <?php echo $nameErr;?> -->
                    </div>
                </div>

                <div class="form-group ">
                    <label for="" style="margin-left: 60px;">Second Name</label>
                    <input class="form-control w-75 name" name="secondname" type="text" placeholder="Enter Your Second Name">
                    <div class="errName text-danger">
                      <!-- <?php echo $nameErr;?> -->
                    </div>
                </div>

                <div class="form-group ">
                    <label for="" style="margin-left: 60px;">Email</label>
                    <input class="form-control w-75 name" name="email" type="text" placeholder="Enter Your Email">
                    <div class="errName text-danger">
                      <!-- <?php echo $nameErr;?> -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Date Of Birth</label>
                    <input class="form-control user w-75" type="date" name="PhoneNumber" placeholder="Enter Date of Birth">

                </div>
                <!-- <div class="form-group">
                    <label for="" style="margin-left: 60px;">Select Gender</label><br>
                    <input type="radio" name="mgender" value="male"> Male<br>
                    <input type="radio" name="fgender" value="female"> Female<br>
                </div> -->
                <div class="form-group gender">
                  <label for="" style="margin-left: 60px;">Select Gender</label><br>
                    <input style="margin-left: 60px;" type="checkbox" name="" value="Male"><label for="">Male</label><br>
                    <input style="margin-left: 60px;" type="checkbox" name="" value="Female"><label for="">Female</label>
                </div>

                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Favourite Color</label>
                    <input class="form-control user w-75" type="color" required name="color" placeholder="Favourite Color">
                    <div class="errName text-danger">
                      <!-- <?php echo $colorErr;?> -->
                    </div>
                </div>

                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Department</label>
                    <select class="" name="">
                      <option value="">IT</option>
                      <option value="">HR</option>
                      <option value="">Stuff</option>

                    </select>

                    <div class="errName text-danger">
                      <!-- <?php echo $colorErr;?> -->
                    </div>
                </div>

                <div class="form-group">
                    <label for="" style="margin-left: 60px;">Password</label>
                    <input id="password" class="form-control user w-75" type="password" required name="password" placeholder="Password">
                    <div id="error" class="errName text-danger">

                    </div>
                </div>

                    <button class="submit btn btn-outline-success mb-4 mt-3" onclick="validate()" name="myForm">Register Now</button>
            </form>
        </div>
        

</body>
</html>
