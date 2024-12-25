
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <title> integrate stripe payment gateway in php</title>
    <style> .required { color: red; font-weight: bold }</style> 
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                   
                
                    <form action="checkout.php" method="post">
                   
  
                        <div class="form-group">
                            <label for="userId">UserID <span class="required">*</span></label>
                            <input type="userId" name="userId" id="userId" class="form-control" placeholder="UserID" required/>
                        </div>
                        <div class="form-group">
                            <label for="password">Password <span class="required">*</span></label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required/>
                        </div>
                        <div class="form-group">
                            <label for="amount">Fee Amount <span class="required">*</span></label>
                            <input type="text" name="amount" id="amount" class="form-control" placeholder="Amount" value="100" readonly required/>
                        </div>
                        <button type="submit" name="payNowBtn" class="btn btn-lg btn-primary btn-block">Pay Now <span class="fa fa-angle-right"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
