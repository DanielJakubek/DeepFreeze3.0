<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

<html>

<body id="login">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col">
                            <h1>Admin Password Login Page</h1>
                            <div class="mb-3 row">
                                <form action="login_security.php" method="post">
                                    <div class="mb-3 row">
                                        <label for="inputUsername" class="col-sm-2 col-form-label">User</label>
                                        <div class="col-sm-10" id="User">
                                            <input type="string" class="form-control" id="inputUsername"
                                                name="username">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10" id="Pass">
                                            <input type="password" class="form-control" id="inputPassword"
                                                name="password">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <button type="button2" id="submit-button"
                                            class="btn btn-primary">Submit</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col">
                    <img src="chunk.png" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
        <div class="div">

        </div>
    </div>
</body>

</html>