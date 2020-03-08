 <?php
    if (isset($_POST['signup-submit'])) {
        require 'connection.inc.php';
        
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $pass_confirm = mysqli_real_escape_string($conn, $_POST['pass_confirm']);
        $status = mysqli_real_escape_string($conn, 'active');

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/", $name) && !preg_match("/^[a-zA-Z]*$/", $last_name)) {
            header("Location: ../register.php?error=invalidinputs");
            exit();
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../register.php?error=invalidemail&name=".$name."&last_name=".$last_name);
            exit();
        }
        else if (!preg_match("/^[a-zA-Z]*$/", $name)) {
            header("Location: ../register.php?error=invalidname&last_name=".$last_name."&email=".$email);
            exit();
        }
        else if (!preg_match("/^[a-zA-Z]*$/", $last_name)) {
            header("Location: ../register.php?error=invalidlast_name&name=".$name."&email=".$email);
            exit();
        }
        else if ($pass !== $pass_confirm) {
            header("Location: ../register.php?error=passwordcheck&name=".$name."&last_name=".$last_name."&email=".$email);
            exit();
        }
        else {
            $sql = "SELECT email FROM users WHERE email=?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../register.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
                if ($resultCheck > 0) {
                    header("Location: ../register.php?error=emailalreadyregistered&name=".$name."&last_name=".$last_name);
                    exit();
                }
                else {
                    $sql = "INSERT INTO users (name, last_name, email, pass, status) VALUES (?, ?, ?, ?, ?);";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../register.php?error=sqlerror");
                        exit();
                    }
                    else {
                        $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
                        
                        mysqli_stmt_bind_param($stmt, "sssss", $name, $last_name, $email, $hashedPwd, $status);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../login.php");
                        exit();
                    }
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    else {
        header("Location: ../register.php");
        exit();
    }