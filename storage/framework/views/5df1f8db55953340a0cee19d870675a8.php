<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kumsal | Sandalye ve Sandık</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Hover ile dropdown açma */
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0; /* Dropdown'ın animasyonla kaymaması için */
        }

        /* Hover olmasa bile dropdown'ı düzgün göster */
        .dropdown-menu {
            display: none;
            transition: all 0.2s ease-in-out;
        }

        .nav-item.dropdown:hover > .nav-link {
            color: #ffffff;
        }
        /* Navbar link renkleri ve parlaklık */
        .navbar-nav .nav-link {
            color: #fffde7 !important;
            font-weight: 700;
            font-size: 1.1rem;
            text-shadow: 0 2px 8px #2196f3a0, 0 0 2px #fff;
            transition: color 0.2s, text-shadow 0.2s;
        }
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link:focus {
            color: #ffd54f !important;
            text-shadow: 0 2px 12px #fffde7, 0 0 4px #2196f3;
        }
        .navbar-brand {
            color: #fffde7 !important;
            text-shadow: 0 2px 8px #2196f3a0, 0 0 2px #fff;
        }
        .navbar-brand:hover, .navbar-brand:focus {
            color: #ffd54f !important;
            text-shadow: 0 2px 12px #fffde7, 0 0 4px #2196f3;
        }
    </style>
</head>

<body>
    <!-- MAVİ ÜST BAR VE NAV -->
    <div style="background: linear-gradient(90deg, #2196f3 0%, #21cbf3 100%); padding: 0;">
        <div class="container-fluid py-2 d-flex justify-content-between align-items-center" style="color: #fff;">
            <div class="d-flex align-items-center gap-3">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Kumsal Logo" style="height:64px; border-radius:50%; background:linear-gradient(135deg,#ffe082 60%,#fffde7 100%); box-shadow:0 4px 24px #2196f3a0,0 0 0 6px #fffde7; border:3px solid #ffd54f;">
            <span style="font-size:2rem; font-family:'Segoe UI',sans-serif; font-weight:700; letter-spacing:2px; color:#1565c0; text-shadow:0 2px 8px #fff,0 0 2px #2196f3;">Kumsal</span>
            </div>
            <div class="d-flex gap-4">
                <div class="bg-white rounded px-3 py-1 shadow-sm d-flex align-items-center gap-2" style="color:#1976d2; font-weight:600; font-size:1.1rem;"><i class="bi bi-geo-alt"></i> Gaziantep Burç</div>
                <div class="bg-white rounded px-3 py-1 shadow-sm d-flex align-items-center gap-2" style="color:#1976d2; font-weight:600; font-size:1.1rem;"><i class="bi bi-telephone"></i> 0536 501 33 91</div>
                <div class="bg-white rounded px-3 py-1 shadow-sm d-flex align-items-center gap-2" style="color:#1976d2; font-weight:600; font-size:1.1rem;"><i class="bi bi-envelope"></i> didarsari@gmail.com</div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark w-100" style="background:rgba(33,150,243,0.95);">
            <div class="container-fluid">
                <a class="navbar-brand" href="/user" style="font-weight:700; font-size:1.3rem;">Kumsal</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sandalye Çeşitleri
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo e(url('/urunler/sandalye/4-ayakli')); ?>">4 Ayaklı</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(url('/urunler/sandalye/3-ayakli')); ?>">3 Ayaklı</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sandık Çeşitleri
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo e(url('/urunler/sandik/tek-sandik')); ?>">Tek Sandık</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(url('/urunler/sandik/cift-sandik')); ?>">Çift Sandık</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/user">Ana Sayfa</a></li>
                        <li class="nav-item"><a class="nav-link" href="/siparisler">Siparişler</a></li>
                        <li class="nav-item"><a class="nav-link" href="/urunler">Ürünler</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container mt-5 mb-5">
        <div class="rounded-4 shadow-lg p-4" style="background:rgba(255,255,255,0.95); min-height:60vh;">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\musta\kumsal\resources\views/layouts/app.blade.php ENDPATH**/ ?>