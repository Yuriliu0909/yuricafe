<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="styles/index.css">
    </head>
<body>
        <!-- Navbar content -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <a class="navbar-brand" href="#">Yuri Cafe</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item" >
                    <a class="nav-link" id="home-tab">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" id="menu-tab" >Menu</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" id="location-tab">Location</a>
                </li>
                <li class="nav-item" >
<!--                    <a class="nav-link" id="cart-tab">Cart</a>-->
                    <div class="nav-link">
                        <i class="bi bi-cart4" id="cart-tab"></i>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>


    <div id="tabcontent" class="container-fluid">
        <div class="tab-content" id="home-content">
            <h3>Home</h3>
            <embed type="text/html" src="layouts/home-tab-contents.php">
        </div>
        <div class="tab-content" id="menu-content">
            <h3>Menu</h3>
            <embed type="text/html" src="layouts/menu.php">
        </div>
        <div class="tab-content" id="location-content">
            <h3>Location</h3>
            <embed type="text/html" src="layouts/location.php">
        </div>
        <div class="tab-content" id="cart-content">
            <h3>Cart</h3>
            <embed type="text/html" src="layouts/shoppingcart.php">

        </div>
    </div>


    <script src="scripts/tabController.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- And here is our main footer that is used across all the pages of our website -->
    <?php require_once "layouts/function.php"?>
    <footer>
        Hours:07:00-15:00 Mon-Sun
        <?php echo make_copyright("Yuri");?>
    </footer>
</body>
</html>
