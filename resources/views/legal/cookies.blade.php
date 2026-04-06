<x-layouts::web.app title="Política de Cookies">

    <section class="pt-180 pb-130">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="section-header mb-60">
                        <h1 class="section-title">Política de Cookies</h1>
                        <p class="section-subtitle">viciotheroom.es</p>
                    </div>

                    <div class="legal-content">

                        <h2>1. ¿Qué son las cookies?</h2>
                        <p>
                            Las cookies son pequeños archivos de texto que los sitios web almacenan en el dispositivo del usuario al visitarlos. Permiten al sitio recordar información sobre la visita para mejorar la experiencia de navegación.
                        </p>

                        <h2>2. ¿Qué cookies utilizamos?</h2>
                        <p>
                            Este sitio web utiliza únicamente <strong>cookies técnicas estrictamente necesarias</strong> para su funcionamiento. No utilizamos cookies de análisis, publicidad, redes sociales ni ningún otro tipo de cookie de terceros.
                        </p>
                        <p>
                            Las cookies técnicas que pueden estar presentes son las propias del servidor web o del framework de la aplicación (por ejemplo, cookies de sesión), necesarias para garantizar la navegación correcta y segura del sitio. Su uso no requiere consentimiento del usuario según el art. 22.2 de la LSSI-CE, ya que son imprescindibles para la prestación del servicio.
                        </p>

                        <h2>3. Cookies de terceros</h2>
                        <p>
                            Este sitio web <strong>no instala cookies de terceros</strong>. No utilizamos herramientas de analítica (como Google Analytics), píxeles de seguimiento, servicios de publicidad ni widgets de redes sociales que pudieran generar cookies externas.
                        </p>

                        <h2>4. ¿Cómo gestionar o eliminar las cookies?</h2>
                        <p>
                            Puede configurar su navegador para bloquear o eliminar cookies en cualquier momento. A continuación le indicamos cómo hacerlo en los principales navegadores:
                        </p>
                        <ul>
                            <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener noreferrer">Google Chrome</a></li>
                            <li><a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web-rastrear-preferencias" target="_blank" rel="noopener noreferrer">Mozilla Firefox</a></li>
                            <li><a href="https://support.apple.com/es-es/guide/safari/sfri11471/mac" target="_blank" rel="noopener noreferrer">Safari</a></li>
                            <li><a href="https://support.microsoft.com/es-es/microsoft-edge/eliminar-las-cookies-en-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener noreferrer">Microsoft Edge</a></li>
                        </ul>
                        <p>
                            Tenga en cuenta que deshabilitar las cookies técnicas puede afectar al correcto funcionamiento del sitio web.
                        </p>

                        <h2>5. Actualizaciones de esta política</h2>
                        <p>
                            Podemos actualizar esta Política de Cookies si el sitio incorpora nuevas funcionalidades. Le recomendamos revisarla periódicamente.
                        </p>
                        <p><em>Última actualización: {{ \Carbon\Carbon::now()->format('d/m/Y') }}</em></p>

                    </div>

                </div>
            </div>

        </div>
    </section>

   <style>
    .legal-content h2 {
        font-size: 22px;
        font-weight: 600;
        margin-top: 40px;
        margin-bottom: 14px;
        color: #EECBE2;
    }
    .legal-content p,
    .legal-content ul {
        font-size: 16px;
        line-height: 1.8;
        color: #BF9BC8;
        margin-bottom: 16px;
    }
    .legal-content ul {
        padding-left: 24px;
    }
    .legal-content ul li {
        margin-bottom: 6px;
    }
    .legal-content strong {
        color: #EECBE2;
    }
    .legal-content a {
        color: #EECBE2;
        text-decoration: underline;
    }
    .legal-content a:hover {
        color: #BF9BC8;
    }
    .section-title {
        color: #EECBE2 !important;
    }
    .section-subtitle {
        color: #BF9BC8 !important;
    }
</style>

</x-layouts::web.app>