 <?php
    if (isset($_POST['login-submit'])) {
        require 'connection.inc.php';
        
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        if (empty($email) || empty($pass)) {
            header("Location: ../login.php?error=emptyfields");
            exit();
        }
        else {
            $sql = "SELECT * FROM users WHERE email=?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../login.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)) {
                    $pwdCheck = password_verify($pass, $row['pass']);
                    if ($pwdCheck == false) {
                        header("Location: ../login.php?error=wrongpassword");
                        exit();
                    }
                    else if ($row['status'] == "suspended") {
                        header("Location: ../login.php?error=accountsuspended");
                        exit();
                    }
                    else if ($pwdCheck == true) {
                        session_start();
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['last_name'] = $row['last_name'];
                        
                        header("Location: ../index.php");
                        exit();
                    }
                }
                else {
                    header("Location: ../login.php?error=adminnotfound");
                    exit();
                }
            }
        }
    }
    else {
        header("Location: ../login.php");
        exit();
    }