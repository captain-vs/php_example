<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST["product_name"];

    $sql = $conn->prepare("Delete from products where product_name = ?");

    $sql->bind_param('i', $product);

    if ($sql->execute()) {
        echo "Product deleted ";
    } else {
        echo "not deleted ";
    }
}
?>




<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                    <button
                        class="navbar-toggler d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " href="dashboard.php" aria-current="page"
                                    >Home
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="insert.php">Insert</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="update.php">Update</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="delete.php">Delete</a>
                            </li>
                            
                        </ul>
                        <form class="d-flex my-2 my-lg-0">
                        
                            <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                            >
                                log Out
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            
            
        </header>

        
       <main>
    
 <div
    class="container col-4 my-5 py-5 border"
 >
    <form action="" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Prodcut Name</label>
            <input
                type="text"
                class="form-control"
                name="product_name"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>
        


        <button
            type="submit"
            class="btn btn-primary"
        >
            Delete
        </button>
        

        
    </form>
 </div>
 


        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>