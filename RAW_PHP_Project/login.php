<?php
    define('PAGE_TITLE', 'Login');
    require_once 'layouts/header.php';
    //check authenticate user
    auth();
?>

<!--form-->
<div class="container">
    <div class="card">
        <div class="card-header"><h2>Login</h2></div>
        <div class="card-body">
            <form action="<?php echo APP_URL ."/app/login-confirm.php"; ?>" method="POST">
                <!--Alert start-->
                <?php
                    if (isset($_SESSION['message'])) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php
                                echo $_SESSION['message'];
                                unset ($_SESSION['message']);
                            ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                 <?php }?>
                 <?php
                    if (isset($_SESSION['success'])) { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php
                                echo $_SESSION['success'];
                                unset ($_SESSION['success']);
                            ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                 <?php }?>
                <!--alert end-->
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
        <div class="card-footer"><a href="<?php echo APP_URL ."/register.php"; ?>">Create a new account</a></div>
    </div>
</div>

<?php
    require_once 'layouts/footer.php';
?>