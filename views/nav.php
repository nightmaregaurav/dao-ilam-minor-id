<header class="navbar navbar-expand-md navbar-dark">
    <nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
        <a class="navbar-brand p-0 me-2" href="/" aria-label="Bootstrap">District Administration Office, Ilam <br> <b>Minor ID Form</b></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="bi" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" style="width: 2rem; fill: currentColor;">
                <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
            </svg>
        </button>

        <div class="navbar-collapse collapse" id="bdNavbar" style="">
            <ul class="navbar-nav ms-md-auto">
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" href="/">Home</a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" href="/list_all.php">View All</a>
                </li>
            </ul>
            <div class="d-flex flex-row flex-wrap justify-content-center">
                <?php
                    include $_SERVER["DOCUMENT_ROOT"].'/views/nav_button_menu.php';
                ?>
            </div>
        </div>
    </nav>
</header>