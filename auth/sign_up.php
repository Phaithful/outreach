<?php
session_start();
include "./config/db.php";
$mail = $pass = "";
$errors = array("email" => "", "pass" => "");

if ($_SERVER["REQUEST_METHOD"] === "POST"  &&   isset($_POST["t_submit"]) || isset($_POST["v_submit"]) ){
    // post entries from form
    $mail = htmlspecialchars($_POST["email"]);
    $pass = htmlspecialchars($_POST["pass"]);

    //validations
    if (empty($mail)){
        $errors["email"] = "Enter an email";
    }
    elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $errors["email"] = "Please enter a valid email";
    }
    if (empty($pass)){
        $errors["pass"] = "Enter a password";
    }
    elseif (strlen($pass) < 8 || !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d\W_]+$/", $pass)){
        $errors["pass"] = "Your password must be <br>  ...More than eight characters <br> ...Must Contain bot uppercase and lowercase letters <br> ...Must contain numbers ";
    }

    $check_stmt = $conn->prepare("SELECT email from users WHERE email = ? ");
    $check_stmt -> bind_param("s", $mail);
    $check_stmt -> execute();
    $check_stmt -> store_result();

    if ($check_stmt -> num_rows > 0){
        $errors["email"] = "Sorry the email already exist";
    }
    $check_stmt -> close();

    if (!array_filter($errors)){
        $pass_hash = password_hash($pass, PASSWORD_DEFAULT); //hash password
        if (isset($_POST["t_submit"])){
            $stmt = $conn -> prepare("INSERT INTO users(role_id, name_tag, email, pass) VALUES(?,?,?,?) ");
            $role_id =2;
            $username = "User". random_int(1000,9999);
            $stmt -> bind_param("isss", $role_id, $username, $mail, $pass_hash );
            if ($stmt -> execute()){
                $_SESSION["username"] = $username;
                $_SESSION["email"] = $mail;
                $_SESSION["role"] = $role_id;
                $_SESSION["user_id"] = $conn -> insert_id;
    
                header("location: ./home/therapist.php");
            }
        }
        else {
            $stmt = $conn -> prepare("INSERT INTO users(role_id, name_tag, email, pass) VALUES(?,?,?,?) ");
            $role_id =3;
            $username = "User". random_int(1000, 9999);
            $stmt -> bind_param("isss", $role_id, $username, $mail, $pass_hash );
            if ($stmt -> execute()){
                $_SESSION["username"] = $username;
                $_SESSION["email"] = $mail;
                $_SESSION["role"] = $role_id;
                $_SESSION["user_id"] = $conn -> insert_id;
    
                header("location: ./home/victim.php");
            }
        }
        $stmt -> close();
        $conn -> close();
    }
}
?>