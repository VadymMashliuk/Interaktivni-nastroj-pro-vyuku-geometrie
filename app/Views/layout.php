<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <a class="nav-link" href="<?= base_url('ctverec') ?>">Čtverec</a>
                    <a class="nav-link" href="<?= base_url('obdelnik') ?>">Obdélník</a>
                    <a class="nav-link" href="#">Trojúhelník</a>
                    <a class="nav-link" href="#">Kruh</a>
                    <a class="nav-link" href="#">Lichoběžník</a>
                    <a class="nav-link" href="#">Rovnoběžník</a>
                    <a class="nav-link" href="#">Kosočtverec</a>
                    <a class="nav-link" href="#">Pravidelný mnohoúhelník</a>
                    <a class="nav-link" href="#">Krychle</a>
                    <a class="nav-link" href="#">Obdélníkový rovnoběžnostěn</a>
                    <a class="nav-link" href="#">Válec</a>
                    <a class="nav-link" href="#">Kužel</a>
                    <a class="nav-link" href="#">Koule</a>
                    <a class="nav-link" href="#">Jehlan</a>
                    <a class="nav-link" href="#">Hranol</a>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <?= $this->renderSection('obsah') ?>
    </div>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="JavaScript šablona.js"></script>
</body>
</html>