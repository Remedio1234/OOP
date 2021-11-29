<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a 
            class="navbar-brand" 
            href="javascript://;">FACENOTE</a>
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarCollapse" 
                aria-controls="navbarCollapse" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div 
            class="collapse navbar-collapse" 
            id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a 
                        class="nav-link <?php echo (isset($data['page']) && $data['page'] == 'home' ? 'active' : '') ?>" 
                        aria-current="page" 
                        href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Post</a>
                </li>
            </ul>
            <form class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a 
                            class="nav-link <?php echo (isset($data['page']) && $data['page'] == 'login' ? 'active' : '') ?>" 
                            aria-current="page" 
                            href="?page=login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a 
                            class="nav-link <?php echo (isset($data['page']) && $data['page'] == 'register' ? 'active' : '') ?>" 
                            href="?page=register">Register</a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</nav>