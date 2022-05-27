<body class="text-center">


    <main class="form-signin w-100 m-auto">
        <form method="POST">
            <a href="index.php"><img class="mb-4" src="../images/logo.png"> </a>
            <h1 class="h3 mb-3 fw-normal">Admin Login</h1>

            <?php if ($alert) { ?>
                <div class="alert alert-danger mx-auto"><?php echo $alert ?></div>
            <?php } ?>

            <div class="form-floating">
                <input name="username" type="text" class="form-control" id="floatingInput">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>

    </main>



</body>

</html>