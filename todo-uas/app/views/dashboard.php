<?php
if (!isset($_SESSION['login'])) {
    header("Location: /todo-uas/login");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/todo-uas/public/css/style.css">
</head>
<body class="bg-gradient-orange">

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-orange shadow">
    <div class="container">
        <span class="navbar-brand fw-bold">
            📝 To-Do App UAS
        </span>
        <span class="text-white">
            👤 <?= $_SESSION['user']; ?> (<?= $_SESSION['role']; ?>)
        </span>
    </div>
</nav>

<!-- CONTENT -->
<div class="container mt-5">
    <div class="card dashboard-card p-4 shadow-lg text-center">

        <h2 class="fw-bold text-orange mb-2">
            <?php if ($_SESSION['role'] == 'admin'): ?>
                👑 Admin Panel
            <?php else: ?>
                👤 User Dashboard
            <?php endif; ?>
        </h2>

        <p class="fs-5 mb-1">
            Halo, <b><?= $_SESSION['user']; ?></b> 👋
        </p>

        <p class="text-muted mb-4">
            Role kamu: <b><?= $_SESSION['role']; ?></b>
        </p>

        <div class="d-grid gap-3 col-md-6 mx-auto">
            <?php if ($_SESSION['role'] == 'admin'): ?>
                <a href="/todo-uas/todo" class="btn btn-danger btn-lg">
                    🛠️ Kelola Semua To-Do
                </a>
            <?php else: ?>
                <a href="/todo-uas/todo" class="btn btn-orange btn-lg">
                    📋 To-Do Saya
                </a>
            <?php endif; ?>

            <a href="/todo-uas/logout"
               class="btn btn-outline-danger"
               onclick="return confirm('Yakin mau logout?')">
               🚪 Logout
            </a>
        </div>

        <hr class="my-4">

        <p class="text-muted small">
            💡 “Sedikit demi sedikit, lama-lama UAS kelar”
        </p>

    </div>
</div>

</body>
</html>
