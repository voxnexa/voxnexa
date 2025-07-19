<?php
include_once 'cabecera.php';
?>

<script src='script.js'></script>
<body>
    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="VoxNexa Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#programacion">Programación</a></li>
                    <li class="nav-item"><a class="nav-link" href="#noticias">Noticias</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección Inicio -->
    <section id="home" class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold">VoxNexa</h1>
            <p class="lead">Conectando voces, inspirando mundos</p>
            <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                 <div class="player-container">
                    <h3 class="text-center mb-6">Escucha en Vivo</h3>
                    <iframe src="https://tunein.com/embed/player/s86439/" style="width:100%; height:100px;" scrolling="no" frameborder="no"></iframe>
                    
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="player-container">
                    <h3 class="text-center mb-3">Escucha en Vivo</h3>
                    <iframe src="https://tunein.com/embed/player/s86439/" style="width:100%; height:100px;" scrolling="no" frameborder="no"></iframe>
                    
                </div>
            </div>
             </div>
            
            <div class="social-buttons mt-4">
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                    </svg>
                </a>
                <a href="https://tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a>

            </div>
        </div>
    </section>

    <!-- Sección Programación -->
    <section id="programacion" class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Programación</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="program-card">
                        <h4>Urban Beats</h4>
                        <p><strong>Horario:</strong> Lunes a Viernes, 8:00 - 10:00</p>
                        <p><strong>Locutor:</strong> DJ Alex</p>
                        <p>La mejor selección de música urbana para empezar el día con energía.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="program-card">
                        <h4>Vibe Nights</h4>
                        <p><strong>Horario:</strong> Viernes y Sábado, 20:00 - 22:00</p>
                        <p><strong>Locutor:</strong> Sofía Mix</p>
                        <p>Sesiones en vivo con los mejores DJs y remixes exclusivos.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="program-card">
                        <h4>Top Hits</h4>
                        <p><strong>Horario:</strong> Todos los días, 14:00 - 16:00</p>
                        <p><strong>Locutor:</strong> Carlos Vibe</p>
                        <p>Los éxitos del momento que están conquistando las listas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Noticias -->
    <section id="noticias" class="py-5 bg-dark">
        <div class="container">
            <h2 class="section-title text-center">Noticias y Eventos</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="news-card">
                        <h4>Concierto Vibes 2025</h4>
                        <p><strong>Fecha:</strong> 15 de Julio, 2025</p>
                        <p>¡Prepárate para el evento del año! Artistas invitados y sorpresas en vivo.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="news-card">
                        <h4>Nuevo Programa</h4>
                        <p><strong>Fecha:</strong> 1 de Agosto, 2025</p>
                        <p>Presentamos "Retro Vibe", un espacio para los clásicos urbanos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Contacto -->
    <section id="contacto" class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Contacto</h2>
            <div class="row">
                <div class="col-md-6 contact-form">
                    <form action="send.php" method="POST" id="contactForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <br><br>

                    <h4>Información de Contacto</h4>
                    <p><i class="fas fa-envelope"></i> contacto@radiovibe.com</p>
                    <p><i class="fas fa-phone"></i> +123 456 7890</p>
                    <p><i class="fas fa-map-marker-alt"></i> Av. Música 123, Ciudad Vibe</p>
                </div>
            </div>
        </div>
    </section>

   

   
</body>
</html>