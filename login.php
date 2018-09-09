<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Story Time</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- custom font -->
    <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">
    <!-- images used in navigation -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/css/mdb.min.css" />
    <link rel="stylesheet" href="css/wickedcss.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="javascript/main.js"></script>
</head>
<body>
    <header>
        <h1>Login using...</h1>
    </header>
    
    <form action="/" method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
    <br>
    
    <button type="button" class="google btn btn-primary btn-sm" href="/auth/google">
        Login with Google
    </button>
    
    <br>
    <br>
    
    <button type="button" class="google btn btn-primary btn-sm" href="/auth/facebook">
        Login with Facebook
    </button>
    
    <br>
    
    <p>Need an account? <a href="/signup">Signup</a></p>

</body>
</html>