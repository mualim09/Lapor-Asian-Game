<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo base_url(); ?>assets/Asset 6.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Log In</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 form">
                <h2 class="tittle">LOG IN</h2>
                    <div class="konten">
                        <form method="post" action="<?php echo base_url(); ?>AsianGames/login">
                            <div class="uname">
                                <p>Username</p>
                                <?php echo form_error('username', '<small><font color="red">', '</font></small>'); ?>
                                <input type="text" name="" id="username"value="<?php echo set_value('username') ?>" placeholder="username" required>
                            </div>
                            <div class="pass">
                                <p>Password</p>
                                <?php echo form_error('password', '<small><font color="red">', '</font></small>'); ?>
                                <input type="password" name="" id="password" placeholder="password" required> 
                            </div>
                            <a href="">Forget Password</a>
                            <div class="button">
                                <button type="submit"class="btn btn-primary" style="background-color: #00C853;">Login</button>
                            </div>
                        </form>
                    </div>      
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>