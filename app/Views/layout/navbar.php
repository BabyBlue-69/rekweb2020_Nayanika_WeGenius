<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">📋 NWG E-Center</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="/pages/about">About</a>
                <a class="nav-link" href="/pages/contact">Contact</a>
                <a class="nav-link" href="/handphone">Handphone</a>
            </div>
            <?php if(logged_in()) : ?>
                <a class="nav-link" href="/logout" style="margin-left: 500px">logout</a>
                <?php else : ?>
                <a class="nav-link" href="/login" style="margin-left: 500px">login</a>
                <?php endif; ?>
          </div>
        </div>
    </nav>