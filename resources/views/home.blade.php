<p?php
 index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MS-PEDIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #343a40;
            margin-bottom: 30px;
        }
        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            border: none;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            height: 200px;
            object-fit: cover;
        }
        footer {
            background-color: #343a40;
            color: white;
        }
        footer p {
            margin: 0;
        }
        .logo1 {
        width: 50px;
        height: auto;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../img/logo prodauk.png" alt="logo" class="logo1">
                MS-PEDIA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Nike</a></li>
                            <li><a class="dropdown-item" href="#">Adidas</a></li>
                            <li><a class="dropdown-item" href="#">Puma</a></li>
                            <li><a class="dropdown-item" href="#">Converses</a></li>
                            <li><a class="dropdown-item" href="#">yeazy</a></li>
                            <li><a class="dropdown-item" href="#">pantofel</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Best Sellers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="/registrasi" class="btn btn-outline-primary me-2">Register</a>
                    <a href="/login" class="btn btn-primary">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col-12">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search for products..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <h1 class="text-center">Welcome to MS-PEDIA</h1>
        <p class="text-center">Kami Menyediakan Sepatu Branded Yang Terpercaya</p>
        <div class="row">
        <div class="col-md-4">
                <div class="card">
                    <img src="../img/sneakers.jpeg" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">NIKE</h5>
                        <p class="card-text">1.000.000,-</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../img/running.jpeg" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Adidas</h5>
                        <p class="card-text">1.000.000,-</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../img/flat.jpeg" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Converse</h5>
                        <p class="card-text">1.000.000,-</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-4">
                <div class="card">
                    <img src="../img/pantofel.jpeg" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">NIKE</h5>
                        <p class="card-text">1.000.000,-</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../img/sepatu boots.jpeg" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Adidas</h5>
                        <p class="card-text">1.000.000,-</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../img/converserun.webp" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Converse</h5>
                        <p class="card-text">1.000.000,-</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-4">
                <div class="card">
                    <img src="../img/yeazy.jpg" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">NIKE</h5>
                        <p class="card-text">1.000.000,-</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../img/New Balance 550.jpeg" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Adidas</h5>
                        <p class="card-text">1.000.000,-</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../img/puma.jpeg" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Converse</h5>
                        <p class="card-text">1.000.000,-</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center text-lg-start mt-5">
        <div class="container p-4">
            <p>&copy; 2024 MS-PEDIA. All rights reserved.</p>
        </div>
    </footer>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
