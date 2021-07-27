<?php

    session_start();

    $ls = "Login";
    $url = "/ubinfo";
    $m = "";
    $user_name = "";
    require "header.php";

    include_once '../database/queries.php';

    $queries = new Queries();

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass'])) {
        $queries->create($_POST['name'], $_POST['email'], $_POST['pass']);
    }
?>


    <div class="container mt-5">

        <h1>Signup</h1>

            <form method="post">
                <div class="form-group mt-3">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Create Account</button>
            </form>

    </div>


    
</body>
</html>