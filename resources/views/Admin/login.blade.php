<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BUGCINEMA Admin Page</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <!-- VENDOR CSS -->
        <base href="{{asset('')}}">
        <link rel="stylesheet" href="home_asset/vendor/bootstrap/css/bootstrap.min.css">
        <!-- MAIN CSS -->
        <link rel="stylesheet" href="home_asset/css/main1.css">
    
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
        <!-- ICONS -->
        <link rel="icon" type="image/png" sizes="96x96" href="img/LOGO.png">
    </head>
    
    <body>
        <!-- WRAPPER -->
        <div id="wrapper">
            <div class="vertical-align-wrap">
                <div class="vertical-align-middle">
                    <div class="auth-box">
                        <div class="content">
                            <div class="header">
                                <div class="logo text-center"><img src="img/LOGO.png" alt="DiffDash"></div>
                                <p class="lead">Đăng nhập</p>
                            </div>
                            <form class="form-auth-small" action="{{ route('DangNhap') }}" method = "post">
                                
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="text" name="Email" class="form-control" id="signin-email"  placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" name="Password" class="form-control" id="signin-password" placeholder="Password">
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END WRAPPER -->
    </body>
</html>