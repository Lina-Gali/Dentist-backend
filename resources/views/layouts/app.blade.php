<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cabinet Dentaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
        }

        .sidebar {
            width: 220px;
            background: #f8f9fa;
            padding: 20px;
        }

        .sidebar a {
            display: block;
            margin-bottom: 15px;
            color: #333;
            text-decoration: none;
        }

        .main {
            flex: 1;
            padding: 30px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h4>🦷 Cabinet</h4>
        <a href="/dashboard">Dashboard</a>
        <a href="/patients">Patients</a>
        <a href="#">Rendez-vous</a>
        <a href="#">Dentistes</a>
    </div>

    <div class="main">
        @yield('content')
    </div>
</body>

</html>