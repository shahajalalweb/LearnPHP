<?php
    define('PAGE_TITLE', 'Register');
    require_once 'layouts/header.php';
    //check authenticate user
    auth();
?>

<!--form-->
<div class="container">
    <div class="card">
        <div class="card-header"><h2>Register</h2></div>
        <div class="card-body">
            <form action="<?php echo APP_URL ."/app/register_confirm.php"; ?>" method="POST">
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
                <div class="form-group">  
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" >
                </div>
                <div class="form-group">  
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" >
                </div>
                <div class="form-group">
                    <label for="confirm_password">Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                </div>
                <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <button type="submit" class="btn btn-primary" name= "register">register</button>
            </form>
        </div>
        <div class="card-footer"><a href="<?php echo APP_URL ."/login.php"; ?>">Go to login</a></div>
    </div>
</div>

<?php
    require_once 'layouts/footer.php';
?>