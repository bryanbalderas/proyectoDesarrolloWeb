<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html>
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="css/estiloIndex.css" rel="stylesheet">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
        <?php include_once "inclusiones/meta_tags.php"; ?>
        <title>Login</title>
        <?php include_once "inclusiones/css_y_favicon.php"; ?>
  </head>
    <body id="LoginForm">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <?php
                        include_once "inclusiones/menu_horizontal_superior.php";
                    ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="login-form">
                <div class="main-div">
                    <div class="panel">
                <h2>Admin Login</h2>
                <p>Please enter your user and password</p>
                </div>
                    <form id="Login" method="post" action="#" onsubmit="return valida_login()">

                        <div class="form-group">


                            <input type="text" class="form-control" id="f_user" name="f_user" placeholder="User">

                        </div>

                        <div class="form-group">

                            <input type="password" class="form-control" id="f_pwd" name="f_pwd" placeholder="Password">

                        </div>
                        <div class="forgot">
                            <a href="reset.html">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>

                    </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "inclusiones/js_incluidos.php"; ?>
    </body>
</html>
