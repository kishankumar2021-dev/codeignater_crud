<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <title>Documentfvifo</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        .outer {
            height: 400px;
            padding: 5px;
            width: 400px;
            border: 5px solid orange;
            border-radius: 10px;
            margin: 30px auto;
            box-shadow: 0px 0px 4px 3px red;
        }

        h1 {
            text-align: center;
        }

        span {
            color: red;
        }

        #btn {
            margin-left: 150px;
        }

        #navbar {
            height: 200px;
            margin-bottom: 10px;
        }

        #footer {
            text-align: center;
        }
    </style>
</head>

<body>

    <h1>Contact Us</h1>
    
    <form name="createuser" method="POST" action="<?php echo base_url() . 'index.php/user/create'; ?>">
        <div class="outer">
            <h1>Student Details</h1>
            <hr>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputfname"><span>*</span>Name</label>
                    <input type="text" name="name" value="<?php echo set_value("name"); ?>" class="form-control" placeholder="Enter Name" id="inputEmail4">
                    <?php echo form_error('name'); ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputlname"><span>*</span>Email</label>
                    <input type="text" name="email" value="<?php echo set_value("email"); ?>" placeholder="Email" class="form-control" id="inputPassword4">
                    <?php echo form_error('email'); ?>
                </div>
                <button type="submit" id="btn" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
   
</body>


</html>