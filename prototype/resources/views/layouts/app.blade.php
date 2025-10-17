<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">

    <header class="bg-dark text-white p-4 p-lg-5 text-center shadow-lg border-bottom border-primary border-5">
        <h1 class="display-3 fw-bold text-uppercase mb-0"> Portfolio</h1>
    </header>

    <main class="container py-5 my-md-5">
        @yield('content')
    </main>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>