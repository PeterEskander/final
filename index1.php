<?php
    $result = filter_input(INPUT_GET, "r");

    if (isset($result)) {
        $boot = '<div class="alert alert-success">' . 'Account created successfully' . '</div>';
    }

?>
<!doctype html>
<html>
<head>
<title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="view/signin.css" rel="stylesheet">
</head>
<body>
<div>
    <h2>Already have an accuont? Sign In</h2>
    <form class="form-signin" action="todo/index.php" method="post">
        <input type="hidden" name="action" value="auth">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="signInEmail" id="signInEmail" class="form-control" placeholder="Email address" required >
        <label for="signInPassword" class="sr-only">Password</label>
        <input type="password" name="signInPassword" id="signInPassword" class="form-control" placeholder="Password" required >

        <div class="form-group">
            <button class="btn btn-lg btn-dark btn-block" type="submit">Sign in</button>
        </div>
    </form>

</div>
<div class="container gold padding">


    <form class="form-signin" action="todo/index.php" method="post">
        <div class="form-group"> <!-- -user alert -->

                <?php echo $boot; ?>
        </div>
        <input type="hidden" name="action" value="new_user">
        <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>

        <label for="inputFirst" class="sr-only">First Name</label>
        <input type="text" name="firstname" id="inputFirst" class="form-control" placeholder="First Name" required autofocus>


        <label for="inputLast" class="sr-only">Last Name</label>
        <input type="text" name="lastname" id="inputLast" class="form-control" placeholder="Last Name" required >


        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required >



        <label for="inputPhone" class="sr-only">Phone Number</label>
        <input type="text" name="phone" id="inputPhone" class="form-control" placeholder="Phone Number" required >

        <br>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required >

        <br>


        <div class="form-group">
            <label for="bday" class="text-left">Birthday:</label>
            <input type="date" name="bday" id="bday" >

        </div>

        <br>

        <div class="form-group">
            <label for="gender" class="text-left">Gender:</label>
            <select name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="not">Prefer not to say</option>
            </select>
        </div>



        <div class="form-group">
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-dark btn-block" type="submit">Sign in</button>
        </div>


    </form>

</div>

</body>
</html>