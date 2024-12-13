
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Currículum de {{ $resume->name }}</title>
            <style>
                /* Estilos generales para el PDF */
                @page {
                    margin: 0;
                }
                body {
                    font-family: 'poppins', sans-serif;
                    margin: 30px;
                    background-color: #f7fafc;
                    color: #333;
                }
                h1, h2 {
                    color: #2d3748;
                    font-weight: 600;
                }
                h3 {
                    color: #4a5568;
                    font-weight: 500;
                }
                p, li {
                    font-size: 14px;
                    color: #4a5568;
                    line-height: 1.6;
                }
        
                /* Sección de nombre */
                .header {
                    text-align: center;
                    margin-bottom: 30px;
                }
                .header h1 {
                    font-size: 30px;
                    margin: 0;
                }
                .header p {
                    font-size: 18px;
                    margin: 5px 0;
                    color: #718096;
                }
        
                /* Secciones del currículum */
                .section {
                    margin-bottom: 20px;
                    padding-left: 20px;
                }
        
                .section h2 {
                    font-size: 20px;
                    margin-bottom: 10px;
                    color: #2d3748;
                    border-bottom: 2px solid #e2e8f0;
                    padding-bottom: 5px;
                }
        
                .content {
                    margin-left: 20px;
                }
        
                .content ul {
                    list-style-type: none;
                    padding-left: 0;
                }
        
                .content li {
                    margin: 5px 0;
                }
        
                .footer {
                    text-align: center;
                    font-size: 12px;
                    margin-top: 30px;
                    color: #a0aec0;
                }
        
            </style>
        </head>
        <body>
            <!-- Encabezado -->
            <div class="header">
                <h1>{{ $resume->name }}</h1>
                <p>{{ $resume->email }}</p>
                <p>{{ $resume->phone }}</p>
            </div>
        
            <!-- Información personal -->
            <div class="section">
                <h2>Información Personal</h2>
                <div class="content">
                    <p><strong>Email:</strong> {{ $resume->email }}</p>
                    <p><strong>Teléfono:</strong> {{ $resume->phone }}</p>
                </div>
            </div>
        
            <!-- Educación -->
            <div class="section">
                <h2>Educación</h2>
                <div class="content">
                    <p>{{ $resume->education }}</p>
                </div>
            </div>
        
            <!-- Experiencia -->
            <div class="section">
                <h2>Experiencia</h2>
                <div class="content">
                    <p>{{ $resume->experience }}</p>
                </div>
            </div>
        
            <!-- Habilidades -->
            <div class="section">
                <h2>Habilidades</h2>
                <div class="content">
                    <p>{{ $resume->skills }}</p>
                </div>
            </div>

            <!-- Idiomas -->
            <div class="section">
                <h2>Idiomas</h2>
                <div class="content">
                    <p>{{ $resume->languages }}</p>
                </div>
            </div>
        
            <!-- Pie de página -->
            <div class="footer">
                <p>Currículum generado con Laravel</p>
            </div>
        </body>
        </html>
