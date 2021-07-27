<?php
    session_start();
    session_destroy();

    $ls = "Signup";
    $user_name = "";
    $m = "";
    $url = "views/signup.php";
    require "header.php";

    include_once 'database/queries.php';

    $queries = new Queries();

    $message = "";

    if (isset($_POST['email']) && isset($_POST['pass'])) {
        $message = $queries->readSingle($_POST['email'], $_POST['pass']);
    }


?>

    <div class="container mt-5">

            <h1>UB POST</h1>
            <?php if(!empty($message)): ?>
                <div class="alert alert-danger">
                    <?= $message; ?>
                </div>
            <?php endif; ?>
            <form method="post">
                <div class="form-group mt-4">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Log In</button>
            </form>

    </div>


</body>
</html>