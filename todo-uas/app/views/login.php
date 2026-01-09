<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - To Do App</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/todo-uas/public/css/style.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="card p-4 shadow-lg">

                <!-- Emoji Header -->
                <div class="text-center mb-2" style="font-size: 3.5rem;">
                    🔐📝✏️
                </div>

                <h4 class="text-center text-orange fw-bold mb-3">
                    Login To-Do List
                </h4>

                <!-- FORM LOGIN (FIXED) -->
                <form method="POST" action="/todo-uas/login/proses">

                    <div class="mb-3">
                        <input
                            type="text"
                            name="username"
                            class="form-control"
                            placeholder="👤 Username"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            placeholder="🔑 Password"
                            required
                        >
                    </div>

                    <button type="submit" class="btn btn-orange w-100">
                        🚀 Login
                    </button>

                </form>

            </div>

        </div>
    </div>
</div>

</body>
</html>
