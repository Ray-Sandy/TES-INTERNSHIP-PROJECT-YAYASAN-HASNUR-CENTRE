<!DOCTYPE html>
<html>
<head>
    <title>Online Course Management</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="logo.png" alt="Logo" class="navbar-logo">
            Online Course Management
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>">
                    <a class="nav-link" href="index.php">Kursus</a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'create_course.php') echo 'active'; ?>">
                    <a class="nav-link" href="create_course.php">Tambah Kursus Baru</a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'create_material.php') echo 'active'; ?>">
                    <a class="nav-link" href="create_material.php">Tambah Materi Baru</a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>
