<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login to the system</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<style type="text/css">
			body {
			    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			    font-size: 14px;
			    line-height: 1.42857143;
			    color: #333;
			    background-color: #fff;
			    padding-top: 10%;
			}
			    
		</style>
	</head>
		<body class="body-Login-back" style="text-align: center;background: #84B899">

	    <div class="container">
	       
	        <div class="row">
	            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
	              <!--<img src="public/assets/img/logo.png" alt=""/>-->
	                </div>
	            <div class="col-md-4 col-md-offset-4">
	                <div class="login-panel panel panel-default">                  
	                    <div class="panel-heading">
	                        <h3 class="panel-title">Vui Lòng Đăng Nhập</h3>
	                    </div>
	                    <div class="panel-body">
	                        <form role="form" method="post" action="">
	                        	<legend style="color: green">Chỉ dành cho người quản lý hệ thống!!!</legend>
	                            <fieldset>
	                                <div class="form-group">
	                                   <input type="text" name = "cmnd" class="form-control" id="cmnd" placeholder="Nhập số CMND">
	                                </div>
	                                <div class="form-group">
	                                  	<input type="password" name = "pass" class="form-control" id="pass" placeholder="Mật khẩu">
	                                </div>
	                                <input type="hidden" name="action" value="check_login">
		
								<button type="submit" style="width:40%;float: left;margin-right: 50px" class="btn btn-lg btn-success btn-block">Đăng nhập</button>
								<button type="submit" style="width:40%" name="action" value="cancel" class="btn btn-lg btn-success btn-block">Cancel</button>                              
	                               
	                                <!-- Change this to a button or input when using this as a form -->
	                                
	                            </fieldset>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

	     <!-- Core Scripts - Include with every page -->
	    <script src="public/assets/plugins/jquery-1.10.2.js"></script>
	    <script src="public/assets/plugins/bootstrap/bootstrap.min.js"></script>
	    <script src="public/assets/plugins/metisMenu/jquery.metisMenu.js"></script>




	</body>
</html>