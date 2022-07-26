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
    <title>list student</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        .outer {
            height: 200px;
            padding: 5px;
            width: 600px;
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

    <div class="container" style="padding-top:10px;">
        <div class="row">
            <div class="col-12">
                <?php
                $success = $this->session->userdata('success');
                if ($success != "") {
                ?>
                    <div class="alert alert-success"><?php echo $success; ?></div>
                <?php
                }
                ?>
                <?php
                $success = $this->session->userdata('failure');
                if ($success != "") {
                ?>
                    <div class="alert alert-success"><?php echo $success; ?></div>
                <?php
                }
                ?>
            </div>
        </div>

    </div>

    <form name="createuser" method="POST" action="<?php echo base_url() . 'index.php/user/create/'; ?>">

        <!--<div class="">-->
        <div class="row">
            <div class="form-group col-12">
                <h1>Student Details list</h1>
                <a href="<?php echo base_url().'index.php/user/create'; ?>" class="btn btn-primary">create</a>
            </div>
        </div>

        <hr>
        <div class="form-group col-md-12">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>delete</th>

                </tr>
                <?php if (!empty($student)) {
                    foreach ($student as $data) { ?>
                        <tr>

                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td>
                                <a href="<?php echo base_url() ?>index.php/user/edit/<?php echo $data['id']; ?>" class="btn btn-primary">Edit</a>
                            </td>


                            <td>
                                <a href="<?php echo base_url() ?>index.php/user/delete/<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                    <?php }
                } else { ?>

                    <tr>
                        <td colspan="5"> Record Not found!!</td>
                    </tr>

                <?php } ?>

            </table>


        </div>


        </div>
    </form>

</body>


</html>