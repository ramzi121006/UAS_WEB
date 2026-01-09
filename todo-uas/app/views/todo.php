<?php
if (!isset($_SESSION['login'])) {
    header("Location: /todo-uas/login");
    exit;
}

// ===== PAGINATION =====
$limit = 5;
$page  = $_GET['page'] ?? 1;
$page  = (int)$page;
$start = ($page - 1) * $limit;

// SEARCH
$search = $_GET['search'] ?? '';

// ===== QUERY BASED ON ROLE =====
if ($_SESSION['role'] == 'admin') {
    $query = "SELECT * FROM todos WHERE 1";
} else {
    $query = "SELECT * FROM todos WHERE user='".$_SESSION['user']."'";
}

if ($search != '') {
    $query .= " AND title LIKE '%$search%'";
}

$query_total = $query;
$query .= " ORDER BY id DESC LIMIT $start, $limit";

$data = mysqli_query($conn, $query);

// TOTAL DATA
$total_data = mysqli_num_rows(mysqli_query($conn, $query_total));
$total_page = ceil($total_data / $limit);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/todo-uas/public/css/style.css">
</head>
<body>

<div class="container mt-5">
    <div class="card p-4 shadow-lg">

        <h3 class="text-orange fw-bold text-center mb-3">
            <?php if ($_SESSION['role'] == 'admin'): ?>
                🛠️ Semua To-Do User
            <?php else: ?>
                📋 To-Do Saya
            <?php endif; ?>
        </h3>

        <!-- SEARCH -->
        <form method="GET" action="/todo-uas/todo" class="mb-3">
            <div class="input-group">
                <input
                    type="text"
                    name="search"
                    class="form-control"
                    placeholder="🔍 Cari to-do..."
                    value="<?= htmlspecialchars($search) ?>"
                >
                <button class="btn btn-warning">Cari</button>
            </div>
        </form>

        <!-- TAMBAH TODO (USER SAJA) -->
        <?php if ($_SESSION['role'] == 'user'): ?>
        <form method="POST" action="/todo-uas/todo/tambah" class="mb-3">
            <div class="input-group">
                <input 
                    type="text" 
                    name="title" 
                    class="form-control"
                    placeholder="✏️ Tulis to-do baru..."
                    required
                >
                <button class="btn btn-orange">➕ Tambah</button>
            </div>
        </form>
        <?php endif; ?>

        <!-- TABLE -->
        <table class="table table-bordered text-center">
            <thead class="table-warning">
                <tr>
                    <th>No</th>
                    <?php if ($_SESSION['role'] == 'admin'): ?>
                        <th>User</th>
                    <?php endif; ?>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php if (mysqli_num_rows($data) > 0): ?>
                <?php $no = $start + 1; while ($row = mysqli_fetch_assoc($data)): ?>
                    <tr>
                        <td><?= $no++ ?></td>

                        <?php if ($_SESSION['role'] == 'admin'): ?>
                            <td><?= htmlspecialchars($row['user']) ?></td>
                        <?php endif; ?>

                        <td><?= htmlspecialchars($row['title']) ?></td>
                        <td><?= $row['status'] == 'selesai' ? '✅ Selesai' : '⏳ Belum' ?></td>
                        <td>
                            <a href="/todo-uas/todo/status/<?= $row['id']; ?>/<?= $row['status']=='belum'?'selesai':'belum'; ?>"
                               class="btn btn-sm <?= $row['status']=='belum'?'btn-success':'btn-warning'; ?>">
                               <?= $row['status']=='belum'?'✅':'⏳'; ?>
                            </a>

                            <a href="/todo-uas/todo/hapus/<?= $row['id']; ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Yakin hapus to-do ini?')">
                               🗑️
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">📭 Belum ada to-do</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>

        <!-- PAGINATION -->
        <?php if ($total_page > 1): ?>
        <nav>
            <ul class="pagination justify-content-center">
                <?php for ($i = 1; $i <= $total_page; $i++): ?>
                    <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                        <a class="page-link"
                           href="/todo-uas/todo?page=<?= $i ?>&search=<?= urlencode($search) ?>">
                           <?= $i ?>
                        </a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>
        <?php endif; ?>

        <div class="text-center mt-3">
            <a href="/todo-uas/dashboard" class="btn btn-secondary btn-sm">
                ⬅ Kembali ke Dashboard
            </a>
        </div>

    </div>
</div>

</body>
</html>
