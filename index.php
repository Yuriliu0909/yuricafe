<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>yuri cafe</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/dist/css/styles.css">
    </head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" >Yuri Cafe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" id="home-tab">Home <span class="sr-only"></span></a></li>
                    <li class="nav-item"><a class="nav-link" id="location-tab">Location</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown"role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" id="menu-tab" >Menu</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" id="coffee-tab">Coffee</a></li>
                            <li><a class="dropdown-item" id="pastry-tab">Pastry</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-light" type="submit" id="cart-tab">
                        <i class="bi-cart-fill me-1" ></i>
                        Cart
                        <span class="badge bg-white text-dark ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- tab content-->
        <div  class="tab-content" id="home-content">
            <embed style="position:fixed; width:100%; height:85%; overflow:hidden;" type="text/html" src="layouts/home.php">
        </div>
        <div class="tab-content" id="menu-content">
            <embed style="position:fixed; width:100%; height:85%; overflow:hidden;" type="text/html" src="layouts/menu.php">
        </div>
        <div class="tab-content" id="location-content">
            <h5 style="align-self: auto;margin-top: 10px">No.999 Yuri Street,Te Aro,Wellington</h5>
            <embed style="position:fixed; width:100%; height:85%; overflow:hidden;" type="text/html" src="layouts/location.php">
        </div>
        <div class="tab-content" id="cart-content">
            <embed style="position:fixed; width:100%; height:85%; overflow:hidden;" type="text/html" src="layouts/shoppingcart.php">
        </div>
        <div class="tab-content" id="coffee-content">
            <embed style="position:fixed; width:100%; height:85%; overflow:hidden;" type="text/html" src="layouts/coffee.html">
        </div>
        <div class="tab-content" id="pastry-content">
            <embed style="position:fixed; width:100%; height:85%; overflow:hidden;" type="text/html" src="layouts/pastry.html">
        </div>


    <script src="scripts/tabController.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- And here is our main footer that is used across all the pages of our website -->
    <?php require_once "layouts/function.php"?>

    <footer style="position: fixed; bottom:0;margin-top: 0">
        <?php echo make_copyright("Yuri");?>
    </footer>
</body>
</html>
