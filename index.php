<?php
#include("src/php/config/conexion.php");
#include("src/php/config/validation.php");
?>

<!DOCTYPE html>
<html lang="es" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProyecTEA | Inicio</title>
    <meta name="description" content="ProyecTEA es una plataforma web destinada a facilitar el acceso a la informacion y herramientas digitales acerca del Autismo, con el fin de buscar un impacto positivo en la calidad de vida de las personas con esta condicion y la de sus familiares.">
    <link rel="stylesheet" href="https://localhost/ProyecTEA/src/css/style.css">
    <link rel="icon" type="image/png" href="https://localhost/ProyecTEA/assets/img/default/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <meta property="og:title" content="ProyecTEA | Inicio">
    <meta property="og:description" content="ProyecTEA es una plataforma web destinada a facilitar el acceso a la informacion y herramientas digitales acerca del Autismo, con el fin de buscar un impacto positivo en la calidad de vida de las personas con esta condicion y la de sus familiares.">
    <meta property="og:image" content="https://localhost/ProyecTEA/assets/img/sections/banner.webp">
    <meta property="og:url" content="https://localhost/ProyecTEA/">
    <meta name="twitter:card" content="summary_large_image">
</head>

<body>

    <?php include("src/templates/header.php"); ?>
    
    <div class="content-wrapper">

    <?php include("src/templates/sidebar.php"); ?>

        <main id="main" tabindex="-1">
            <div class="wp-banner">
                <img src="assets/img/sections/banner.webp" alt="Niños jugando juntos, representando inclusión y diversidad">
                <div class="banner-content">
                    <h1 class="banner-title">Bienvenid@ a ProyecTEA</h1>
                    <p class="banner-text">ProyecTEA es una plataforma web destinada a facilitar el acceso a la informacion y herramientas digitales acerca del Autismo, con el fin de buscar un impacto positivo en la calidad de vida de las personas con esta condicion y la de sus familiares.</p>
                </div>
            </div>

            <div class="container">
                <section class="section" id="video">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/msW4e-qnFjk?si=HXQx8jQNyJMOOVT3" title="Qué sabemos sobre Autismo? - Curiosamente" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span class="video-caption">¿Qué sabemos sobre Autismo? - Canal Curiosamente</span>
                </section>

                <section class="section" id="articulos">
                    <h2 class="section-title">Artículos Destacados</h2>
                    <p class="section-subtitle">Información relevante y actualizada sobre el espectro autista</p>
                    <div class="wp-grid wp-articles">
                        <article class="card">
                            <img src="La musica y el Autismo.png" alt="Niño escuchando música con auriculares" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">La música y el Autismo</h3>
                                <p class="card-text">Cómo la terapia musical puede beneficiar a personas en el espectro autista y mejorar sus habilidades comunicativas.</p>
                            </div>
                            <div class="card-footer">
                                <span class="badge badge-primary">Nuevo</span>
                                <small>5 min lectura</small>
                            </div>
                        </article>
                        <article class="card">
                            <img src="assets/img/articles/terapias-autismo.webp" alt="Terapeuta trabajando con niño" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Terapias Efectivas para TEA</h3>
                                <p class="card-text">Análisis de las diferentes opciones terapéuticas y su efectividad comprobada para personas con autismo.</p>
                            </div>
                            <div class="card-footer">
                                <small>8 min lectura</small>
                            </div>
                        </article>
                        <article class="card">
                            <img src="assets/img/articles/apoyo-familiar.webp" alt="Familia abrazándose" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Apoyo Familiar en el TEA</h3>
                                <p class="card-text">Estrategias para familias que buscan crear un entorno de apoyo y comprensión para sus seres queridos con autismo.</p>
                            </div>
                            <div class="card-footer">
                                <span class="badge badge-primary">Popular</span>
                                <small>6 min lectura</small>
                            </div>
                        </article>
                    </div>
                </section>

                <section class="section" id="actividades">
                    <h2 class="section-title">Actividades Didácticas</h2>
                    <p class="section-subtitle">Recursos interactivos para el aprendizaje y desarrollo</p>
                    <div class="wp-grid wp-activities">
                        <article class="card">
                            <img src="assets/img/activities/cuestionario.webp" alt="Cuestionario sobre autismo" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Cuestionario de Conocimientos</h3>
                                <p class="card-text">Pon a prueba lo que sabes sobre el autismo con este cuestionario interactivo y aprende datos nuevos.</p>
                            </div>
                            <div class="card-footer">
                                <small>10 preguntas</small>
                            </div>
                        </article>
                        <article class="card">
                            <img src="assets/img/activities/emociones.webp" alt="Caras representando emociones" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Juego de Emociones</h3>
                                <p class="card-text">Ayuda a identificar y expresar emociones a través de este juego interactivo diseñado para niños en el espectro.</p>
                            </div>
                            <div class="card-footer">
                                <small>Interactivo</small>
                            </div>
                        </article>
                        <article class="card">
                            <img src="assets/img/activities/rompecabezas.webp" alt="Rompecabezas colorido" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Rompecabezas Sensorial</h3>
                                <p class="card-text">Actividad diseñada para estimular la percepción sensorial mientras se divierten armando imágenes.</p>
                            </div>
                            <div class="card-footer">
                                <small>3 niveles</small>
                            </div>
                        </article>
                    </div>
                </section>

                <section class="section" id="comunidad">
                    <h2 class="section-title">Comunidades de Apoyo</h2>
                    <p class="section-subtitle">Conecta con otras personas y comparte experiencias</p>
                    <div class="wp-grid wp-groups">
                        <article class="card">
                            <img src="assets/img/community/padres.webp" alt="Padres en reunión" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Padres de Niños con TEA</h3>
                                <p class="card-text">Espacio para padres y cuidadores donde compartir experiencias, consejos y apoyo mutuo.</p>
                            </div>
                            <div class="card-footer">
                                <small>1,245 miembros</small>
                            </div>
                        </article>
                        <article class="card">
                            <img src="assets/img/community/adolescentes.webp" alt="Adolescentes conversando" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Adolescentes en el Espectro</h3>
                                <p class="card-text">Comunidad segura para adolescentes con autismo donde pueden conectar y compartir sus intereses.</p>
                            </div>
                            <div class="card-footer">
                                <small>856 miembros</small>
                            </div>
                        </article>
                        <article class="card">
                            <img src="assets/img/community/profesionales.webp" alt="Profesionales trabajando" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Profesionales del TEA</h3>
                                <p class="card-text">Red de terapeutas, educadores y especialistas que comparten recursos y mejores prácticas.</p>
                            </div>
                            <div class="card-footer">
                                <small>432 miembros</small>
                            </div>
                        </article>
                    </div>
                </section>
            </div>
        </main>
    </div>

    <?php include("src/templates/footer.php"); ?>

    <script src="https://localhost/ProyecTEA/src/js/config/sidebar.js"></script>
</body>
</html>
