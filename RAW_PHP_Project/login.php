<?php
    $title = 'LOGIN';
    require_once 'layouts/header.php';
?>

<!--form-->
<div class="container">
    <div class="card">
        <div class="card-header"><h2>Login</h2></div>
        <div class="card-body">
            <form action="app/login-confirm.php" method="POST">
                <div class="form-group">  
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" >
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <button type="submit" class="btn btn-primary" name= "login">Login</button>
            </form>
        </div>
        <div class="card-footer"><a href="">Create a new account</a></div>
    </div>
</div>

<?php
    require_once 'layouts/footer.php';
?>