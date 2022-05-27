<body class="d-flex <?php if ($pageName == "Home") { ?> h-100<?php } ?> text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-4"><a href="index.php">NCTU</a></h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <?php session_start();
                    if (isset($_SESSION['isLogined'])) { ?>
                        <a href="controlPanel.php" class="btn btn-outline-warning btn-sm mt-1 me-2">Control Panel</a>
                        <a href="logout.php" class="btn btn-outline-danger btn-sm mt-1">Logout</a>
                    <?php } else { ?>
                        <a href=" login.php" class="btn btn-outline-success btn-sm mt-1">Login</a>
                    <?php } ?>
                </nav>
            </div>
        </header>