<?php require_once(VIEWS . "/layouts/header.php"); ?>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                LOGO
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="container text-center">
        <div class="bg-light p-5 rounded">
            <img class="img-fluid rounded" src="<?= ASSETS ?>/img/nem.png" alt="" style="width:100px; height:100px">
            <h1><b>NEM</b>miniframework</h1>
            <p class="lead">Hello this is my miniframework.</p>
            <a class="btn btn-lg btn-primary" href="<?= HOSTNAME ?>/home/saludar">saludar</a>
        </div>
    </main>
</body>
<?php require_once(VIEWS . "/layouts/footer.php"); ?>