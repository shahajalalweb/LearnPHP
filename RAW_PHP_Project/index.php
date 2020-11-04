<!--header-->
<?php
    define('PAGE_TITLE', 'Home');
    require_once 'layouts/header.php';
    require_once 'app/check_live_auth.php';
    //check guest user
    guest();
?>
<!--form-->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href=" <?php echo APP_URL;?>">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active ml-1 bg-info">
                        <a class="nav-link border border-drak" href="<?php echo APP_URL;?>">Home</a>
                </li>
                <li class="nav-item active ml-1 bg-info">
                        <a class="nav-link border border-drak" href="<?php echo APP_URL.'/logout.php';?>">Logout</a>
                </li>                                  
            </ul>
        </div>
    </nav>
    <div class="card">
        <div class="card-header">
            <h2>Welcame <?php echo $_SESSION['auth']['name']; ?> </h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>Name</td>
                    <td><?php echo $_SESSION['auth']['name']; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $_SESSION['auth']['email']; ?></td>
                </tr>
                <tr>
                    <td>Created_at</td>
                    <td><?php echo $_SESSION['auth']['created_at']; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><a onclick="return confirm('Are your want to delete your account parmanently ?')" class="btn btn-sm btn-info" href="<?php echo APP_URL.'/app/delete_account.php';?>">Delete account</a></td>
                </tr>
            </table>
        </div>
    </div>

</div>
<!--footer\/-->
<?php
    require_once 'layouts/footer.php';
?>