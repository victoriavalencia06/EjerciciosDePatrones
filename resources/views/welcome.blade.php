<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Patrones de Diseño</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f6fa;
            color: #1e293b;
            font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            padding-bottom: 40px;
        }

        header {
            background-color: #0d6efd;
            color: white;
            padding: 30px 0;
            text-align: center;
            margin-bottom: 20px;
        }

        header h1 {
            font-weight: 700;
            margin: 0;
            font-size: 1.8rem;
        }

        .intro-text {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 40px;
            color: #475569;
            font-size: 1rem;
        }

        .cards-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .pattern-card {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            background: #fff;
            padding: 20px 25px;
            transition: box-shadow 0.2s ease;
        }

        .pattern-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .pattern-title {
            font-weight: 600;
            font-size: 1.2rem;
            color: #0d6efd;
            margin-bottom: 12px;
        }

        .route-link {
            display: block;
            padding: 6px 10px;
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, "Roboto Mono", "Courier New", monospace;
            font-size: 0.95rem;
            color: #212529;
            background-color: #f8f9fa;
            border-radius: 4px;
            text-decoration: none;
            margin-bottom: 6px;
            border: 1px solid #e9ecef;
            word-break: break-all;
        }

        .route-link:hover {
            background-color: #e9f2ff;
            border-color: #bfdcff;
            color: #0d6efd;
        }
    </style>
</head>

<body>
    <header>
        <h1>Patrones de Diseño</h1>
    </header>

    <section class="intro-text">
        <p>
            Este proyecto educativo demuestra la aplicación de varios <strong>patrones de diseño</strong>.
            A continuacion se incluyen las rutas del proyecto que muestran cómo se implementan los patrones de <i>Factory</i>, <i>Adapter</i>,
            <i>Decorator</i> y <i>Strategy</i>.
        </p>
    </section>

    <main>
        <div class="cards-container">

            <!-- Factory -->
            <div class="pattern-card">
                <div class="pattern-title">Factory</div>
                <a href="http://127.0.0.1:8000/factory/facil" target="_blank" class="route-link">http://127.0.0.1:8000/factory/facil</a>
                <a href="http://127.0.0.1:8000/factory/dificil" target="_blank" class="route-link">http://127.0.0.1:8000/factory/dificil</a>
            </div>

            <!-- Adapter -->
            <div class="pattern-card">
                <div class="pattern-title">Adapter</div>
                <a href="http://127.0.0.1:8000/adapter/win10/Presentacion.pptx" target="_blank" class="route-link">http://127.0.0.1:8000/adapter/win10/Presentacion.pptx</a>
                <a href="http://127.0.0.1:8000/adapter/win7/Documento.doc" target="_blank" class="route-link">http://127.0.0.1:8000/adapter/win7/Documento.doc</a>
            </div>

            <!-- Decorator -->
            <div class="pattern-card">
                <div class="pattern-title">Decorator</div>
                <a href="http://127.0.0.1:8000/decorator/email" target="_blank" class="route-link">http://127.0.0.1:8000/decorator/email</a>
                <a href="http://127.0.0.1:8000/decorator/sms" target="_blank" class="route-link">http://127.0.0.1:8000/decorator/sms</a>
                <a href="http://127.0.0.1:8000/decorator/whatsapp" target="_blank" class="route-link">http://127.0.0.1:8000/decorator/whatsapp</a>
                <a href="http://127.0.0.1:8000/decorator/todos" target="_blank" class="route-link">http://127.0.0.1:8000/decorator/todos</a>
            </div>

            <!-- Strategy -->
            <div class="pattern-card">
                <div class="pattern-title">Strategy</div>
                <a href="http://127.0.0.1:8000/strategy/consola" target="_blank" class="route-link">http://127.0.0.1:8000/strategy/consola</a>
                <a href="http://127.0.0.1:8000/strategy/json" target="_blank" class="route-link">http://127.0.0.1:8000/strategy/json</a>
                <a href="http://127.0.0.1:8000/strategy/txt" target="_blank" class="route-link">http://127.0.0.1:8000/strategy/txt</a>
            </div>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>