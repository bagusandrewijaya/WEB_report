<?php   
    $mysqli = require __DIR__ . "/connectionDb.php";   
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $_POST["email"]);
    $stmt->execute();
    $result = $stmt->get_result();
    $len = mysqli_num_rows($result);
    if ($len > 0) {
        $user = $result->fetch_assoc();
        if ($user) {
            if (password_verify($_POST["password"], $user["password"])) {
                session_start();
                $_SESSION["usernames"] = $user["username"];
                $_SESSION['logged_in'] = 'YES';
                header("location:./views/v_home.php");
            } else {
                echo "<script>
                    alert('password anda salah');
                    document.location='./index.php';
                </script>";
            }
        }
    } else {
        echo "<script>
            alert('akun anda tidak ditemukan');
            document.location='./index.php';
        </script>";
    }

    exit;
?>
