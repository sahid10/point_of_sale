<head>
   <style type="text/css">
        .login-container{
                            margin-top: 5%;
                            margin-bottom: 5%;
                        }
             
                        .login-form-1{
                            padding: 9%;
                            background:#282726;
                            box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
                        }
                        .login-form-2{
                            padding: 9%;
                            background: #f05837;
                            box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
                        }
                        .login-form-2 h2{
                            text-align: center;
                            margin-bottom:12%;
                            color: #fff;
                        }
                        .btnSubmit{
                            font-weight: 600;
                            width: 50%;
                            color: #282726;
                            background-color: #fff;
                            border: none;
                            border-radius: 1.5rem;
                            padding:2%;
                        }
                        .btnForgetPwd{
                            color: #fff;
                            font-weight: 600;
                            text-decoration: none;
                        }
                        .btnForgetPwd:hover{
                            text-decoration:none;
                            color:#fff;
                        }

    </style>
</head>

<body>
    <div class="container login-container">
        <div class="row">
            <img style="max-width: 540px;" src="<?php echo base_url() ?>assets/dist/assets/images/others/logo_pos.jpg" >
                <div class="col-md-6 login-form-2">
                    <?php echo form_open('Auth/login') ?>
                  
                    <h2>Login</h2>
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="User name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" name="submit" value="Login" />
                        </div>
                        <div class="form-group">

                           <!--  <a href="#" class="btnForgetPwd" value="Login">Forget Password?</a> -->
                        </div>
                        <?php form_close() ?>
                    </form>
                </div>
            </div>
        </div>


    <!-- page js -->
</body>
</html>