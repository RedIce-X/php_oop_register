<?php include "./includes/header.php"; ?>
<link rel="stylesheet" href="./public/css/register.css">
<title>Register</title>
</head>

<body>
    <div class="container">
        <h1 class="mb-4">Register</h1>
        <form action="includes/formsubmit.php" method="POST">

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username">
                <div class="error" id="username-error"></div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id=email">
                <div class="error" id="email-error"></div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
                <div class="error" id="password-error"></div>
            </div>

            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="cpassword" id="cpassword">
                <div class="error" id="cpassword-error"></div>
            </div>

            <button type="submit" class="btn btn-primary" name="register">Register</button>

        </form>
    </div>

    <?php include "./includes/footer.php" ?>