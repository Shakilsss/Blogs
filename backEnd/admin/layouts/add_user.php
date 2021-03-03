<?php
include '../functions/reg.php';
include '../functions/connection.php';  


if(isset($_POST['btn']))
{
    $registration= new Registration();
    $message = $registration->userRegistration();
   
   if($message){
     echo "<script>alert('$message')</script>";
   }
    
}

?>



<body>
<style type="text/css">
    
    .login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    color: #333;
}

.login-form-2{
    padding: 5%;
    background: #0062cc;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
    text-align: center;
    color: #fff;
}
.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #0062cc;
}
.login-form-2 .btnSubmit{
    font-weight: 600;
    color: #0062cc;
    background-color: #fff;
}
.login-form-2 .ForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.login-form-1 .ForgetPwd{
    color: #0062cc;
    font-weight: 600;
    text-decoration: none;
}

</style>




<div class="container login-container" style="margin-top: -25px">
            <div class="row">
              

                <div class="col-md-6 login-form-2">
                    <h3>Add Blogger</h3>
                    <form style="margin-bottom: -53px;" action="" method="POST">
                        <div class="form-group">
                            <input type="text" id="name" class="form-control" placeholder="Enter Your Full Name" name="name" />
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email Address" />
                        </div>
                          <div class="form-group">
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Your Phone Number" />
                        </div>
                          <div class="form-group">
                            <input type="radio" name="gender" id="gender" value="0" /> <span style="color: white">Male</span>
                            <input type="radio" name="gender" id="gender" value="1"> <span style="color: white"> Female</span>
                        </div>
                         <div class="form-group">
                            <input type="text" id="country_id" name="country_id" class="form-control" placeholder="Enter Country"  />
                        </div>

                         <div class="form-group">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password"  />
                        </div>
                         <div class="form-group">
                            <input type="radio" id="status" name="status"  value="1" /><span style="color: white"> Active</span>
                             <input type="radio" id="status" name="status" value="0" /><span style="color: white"> Inactive</span>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btnSubmit" name="btn" value="Register"  />
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>

    </body>