<?php 

    if(isset($_SESSION['admin_login_id']))
        {
            header(base_url());
        } 

?>

<!DOCTYPE html>

<html>

<head>

   <title>Admin Login</title>

   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 



<style type="text/css">

   body {

    font-family: "Lato", sans-serif;
}

.main-head{

    height: 150px;

    background: #FFF;
}

.sidenav {

    height: 100%;

    background: #fff;

    background-size: contain;

    overflow-x: hidden;

    padding-top: 20px;

    background-repeat: no-repeat;
}



.main {

    padding: 0px 10px;
}



@media screen and (max-height: 450px) {

    .sidenav {padding-top: 15px;}
}



@media screen and (max-width: 450px) {

    .login-form{

        margin-top: 10%;
    }



    .register-form{

        margin-top: 10%;
    }

}



@media screen and (min-width: 768px){

    .main{

        margin-left: 40%; 
    }



    .sidenav{

        width: 40%;

        position: fixed;

        z-index: 1;

        top: 0;

        left: 0;
    }



    .login-form{

           margin-top: 30%;

    margin-left: 10%;
    }



    .register-form{

        margin-top: 20%;
    }

}

.login-main-text{

    margin-top: 50%;

    padding: 60px;

    color: #212121;
}



.login-main-text h2{

    font-weight: 300;
}



.btn-black{

    background-color: #000 !important;

    color: #fff;
}

</style>

</head>

<body>



<div class="sidenav">

         <div class="login-main-text">      

         </div>

      </div>

      <div class="main">

         <div class="col-md-6 col-sm-12">



            <div class="login-form">
               <br>

               <form name="doLogin" method="POST">

                  <div class="form-group">

                     <label>User Name</label>

                     <input type="text" class="form-control" placeholder="User Name" name="email">

                  </div>

                  <div class="form-group">

                     <label>Password</label>

                     <input type="password" name="password" class="form-control" placeholder="Password">

                  </div>

                  <button type="submit" class="btn btn-primary">Login</button>

               </form>

            </div>

         </div>

      </div>

</body>

</html>

<input type="hidden" name="base_url" id="base_url" value="http://localhost/new-dashboard/">

<script type="text/javascript" src="http://localhost/new-dashboard/js/admin.js"></script>