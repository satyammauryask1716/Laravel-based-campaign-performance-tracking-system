<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Campaign Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {background-color: #f8f9fa;}
        .sidebar {min-height: 100vh; background: #343a40; color: #fff;}
        .sidebar .nav-link {color: #fff;}
        .sidebar .nav-link.active, .sidebar .nav-link:hover {background: #495057; color: #fff;}
        .sidebar .navbar-brand {color: #fff;}
        .table thead th {background-color: #e9ecef;}
        .summary-charts {background: #fff; padding: 1.5rem; border-radius: 8px;}
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar -->
        <nav class="col-md-2 d-none d-md-block sidebar px-0">
            <div class="p-3">
                <a class="navbar-brand fs-4 mb-4 d-block" href="#">Laravel</a>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a class="nav-link {{ request()->is('campaign') ? 'active' : '' }}" href="{{ route('campaign.index') }}">
                            <i class="bi bi-table"></i> Records
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link {{ request()->is('campaign/create') ? 'active' : '' }}" href="{{ route('campaign.create') }}">
                            <i class="bi bi-plus-circle"></i> Add Record
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link {{ request()->is('campaign/upload*') ? 'active' : '' }}" href="{{ route('campaign.uploadform') }}">
                            <i class="bi bi-upload"></i> Upload Excel
                        </a>
                    </li>
                    <!-- Add more links if needed -->
                </ul>
            </div>
        </nav>
        <!-- Main Content -->
        <main class="col-md-10 ms-sm-auto px-4 pt-4">
            @yield('content')
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- For Bootstrap Icons (optional) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
@yield('scripts')
</body>
</html>
