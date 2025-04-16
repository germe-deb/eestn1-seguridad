
<link rel="preload" href="button-chestbta-h.svg" as="image">
<link rel="preload" href="button-LRM-h.svg" as="image">
<link rel="preload" href="button-donate-h.svg" as="image">
<link rel="preload" href="button-randevents-h.svg" as="image">
<link rel="preload" href="button-screenshots-h.svg" as="image">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    body {
        padding-top: 50px;
        background-image: url('fondo.png');
        background-repeat: repeat;
        background-size: auto;
    }

    header {
        padding-bottom: 10px;
    }
        /* codigo generado por chatgpt */

    .container {
        display: flex;
        flex-direction: column;
        min-height: 100vh; /* Ocupar toda la pantalla */
    }

    main {
        flex-grow: 1; /* Ocupa todo el espacio disponible */
    }
    
        /* Contenedor de los botones */
    @media (min-width: 600px) {
        .contenedor-botones {
        display: flex; /* Alinear botones en fila */
        flex-direction: row;
        justify-content: flex-start; /* Alinear a la izquierda */
        gap: 10px; /* Espacio entre botones */
        }
    }
    @media (max-width: 600px) {
        .contenedor-botones {
        display: flex; /* Alinear botones en fila */
        flex-direction: column;
        justify-content: flex-start; /* Alinear a la izquierda */
        gap: 10px; /* Espacio entre botones */
        }
    }
    .boton-imagen {
        display: inline-block;
        height: 38px; /* Altura fija */
        background-size: contain; /* Escalar para ajustarse al tamaño */
        background-repeat: no-repeat; /* Evitar que se repita la imagen */
        text-decoration: none; /* Sin subrayado */
        transition: background-image 0.3s ease; /* Transición suave */
    }

    .boton-imagen:hover {
        border-bottom: 0px solid #000000;
    }
</style>