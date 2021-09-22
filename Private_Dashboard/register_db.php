<?php 
    session_start();
    include('server.php');
    
    $errors = array();

    if (isset($_POST['reg_user'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);

        if (empty($username)) {
            array_push($errors, "Username is required");
            $_SESSION['error'] = "Username is required";
        }
        if (empty($email)) {
            array_push($errors, "Email is required");
            $_SESSION['error'] = "Email is required";
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required");
            $_SESSION['error'] = "Password is required";
        }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
            $_SESSION['error'] = "The two passwords do not match";
        }

        $user_check_query = "SELECT * FROM admin_login WHERE name = '$name' OR admin_user = '$email' LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // if user exists
            if ($result['name'] === $name) {
                array_push($errors, "Name already exists");
            }
            if ($result['email'] === $email) {
                array_push($errors, "Email already exists");
            }
        }

        if (count($errors) == 0) {
			$hash = password_hash("$password_1",PASSWORD_BCRYPT);

		

			$sql = "INSERT INTO admin_login (id , name , admin_user , admin_password , admin_status) VALUES (NULL,'$name','$email','$hash','Admin')";
			


            mysqli_query($conn, $sql);
            
            header('location: success.php');
        } else {
            header("location: ./?app=index.html");
        }
    }

?>
