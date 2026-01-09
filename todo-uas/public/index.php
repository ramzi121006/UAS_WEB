<?php
session_start();
require '../config/database.php';

// ================= ROUTING =================
$url = $_GET['url'] ?? 'home';
$url = explode('/', $url);
$page = $url[0];

switch ($page) {

    // ================= HOME =================
    case 'home':
        require '../app/views/home.php';
        break;

    // ================= LOGIN =================
    case 'login':

        // PROSES LOGIN
        if (isset($url[1]) && $url[1] === 'proses') {

            $username = $_POST['username'] ?? '';
            $password = md5($_POST['password'] ?? '');

            $query = mysqli_query($conn,
                "SELECT * FROM users 
                 WHERE username='$username' 
                 AND password='$password'"
            );

            $user = mysqli_fetch_assoc($query);

            if ($user) {
                $_SESSION['login'] = true;
                $_SESSION['user']  = $user['username'];
                $_SESSION['role']  = $user['role'];

                header("Location: /todo-uas/dashboard");
                exit;
            } else {
                echo "<h3 style='text-align:center;margin-top:50px;'>❌ Login gagal</h3>";
            }

        } else {
            require '../app/views/login.php';
        }
        break;

    // ================= DASHBOARD =================
    case 'dashboard':
        if (!isset($_SESSION['login'])) {
            header("Location: /todo-uas/login");
            exit;
        }
        require '../app/views/dashboard.php';
        break;

    // ================= TODO =================
    case 'todo':
        if (!isset($_SESSION['login'])) {
            header("Location: /todo-uas/login");
            exit;
        }

        // TAMBAH TODO
        if (isset($url[1]) && $url[1] === 'tambah') {
            $title = $_POST['title'];
            $user  = $_SESSION['user'];

            mysqli_query($conn,
                "INSERT INTO todos (user, title) VALUES ('$user', '$title')"
            );

            header("Location: /todo-uas/todo");
            exit;
        }

        // UPDATE STATUS
        if (isset($url[1]) && $url[1] === 'status') {
            $id     = $url[2];
            $status = $url[3];

            mysqli_query($conn,
                "UPDATE todos SET status='$status' WHERE id='$id'"
            );

            header("Location: /todo-uas/todo");
            exit;
        }

        // DELETE TODO
        if (isset($url[1]) && $url[1] === 'hapus') {
            $id = $url[2];

            mysqli_query($conn,
                "DELETE FROM todos WHERE id='$id'"
            );

            header("Location: /todo-uas/todo");
            exit;
        }

        require '../app/views/todo.php';
        break;

    // ================= LOGOUT =================
    case 'logout':
        session_destroy();
        header("Location: /todo-uas/login");
        exit;

    // ================= DEFAULT =================
    default:
        echo "404 - Halaman tidak ditemukan";
        break;
}
