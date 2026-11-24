<?php


if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'db.php';

    $name=$_POST['full_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone']; 
    $pass=password_hash ($_POST['password_hash'],PASSWORD_DEFAULT);


    $sql=$conn->prepare("insert into users(full_name,email,phone,password_hash) values (?,?,?,?)");

    $sql->bind_param("ssss",$name,$email,$phone,$pass);

    if($sql->execute()){
        header('location:login.php');
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
            <!-- place navbar here -->
        </header>
        <main>


        <h1 class="text-center my-3">Register User</h1>

        <div
            class="container col-6 my-5 py-5 border "
        >
            <form action="" method='post'>
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="full_name"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />

                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        id=""
                        aria-describedby="emailHelpId"
                        placeholder="abc@mail.com"
                    />
                   
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Phone</label>
                    <input
                        type="text"
                        class="form-control"
                        name="phone"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                   
                </div>
                
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input
                        type="password"
                        class="form-control"
                        name="password_hash"
                        id=""
                        placeholder=""
                    />
                </div>


                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Submit
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
