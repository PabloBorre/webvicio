<x-layouts::web.app title="Aviso Legal">

    <section class="pt-180 pb-130">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="section-header mb-60">
                        <h1 class="section-title">Aviso Legal</h1>
                        <p class="section-subtitle">viciotheroom.es</p>
                    </div>

                    <div class="legal-content">

                        <h2>1. Datos identificativos</h2>
                        <p>
                            En cumplimiento de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y del Comercio Electrónico (LSSI-CE), se facilitan los siguientes datos identificativos del titular de este sitio web:
                        </p>
                        <ul>
                            <li><strong>Denominación:</strong> Vicio</li>
                            <li><strong>CIF/NIF:</strong> [PENDIENTE]</li>
                            <li><strong>Sitio web:</strong> viciotheroom.es</li>
                        </ul>

                        <h2>2. Objeto y ámbito de aplicación</h2>
                        <p>
                            El presente Aviso Legal regula el acceso y uso del sitio web viciotheroom.es, a través del cual se ofrece información sobre la actividad artística y proyectos de Vicio. El acceso al sitio web implica la aceptación plena y sin reservas de las condiciones establecidas en este Aviso Legal.
                        </p>

                        <h2>3. Propiedad intelectual e industrial</h2>
                        <p>
                            Todos los contenidos del sitio web (textos, imágenes, vídeos, logotipos, diseño gráfico, código fuente y demás elementos) son propiedad de Vicio o de terceros que han autorizado su uso, y están protegidos por la legislación española e internacional en materia de propiedad intelectual e industrial.
                        </p>
                        <p>
                            Queda expresamente prohibida la reproducción total o parcial, distribución, transformación o comunicación pública de dichos contenidos sin autorización expresa y por escrito del titular.
                        </p>

                        <h2>4. Condiciones de uso</h2>
                        <p>
                            El usuario se compromete a hacer un uso adecuado y lícito del sitio web, de conformidad con la legislación aplicable y el presente Aviso Legal. Queda prohibido el uso del sitio con fines ilícitos o lesivos, o que puedan dañar la imagen, los intereses o los derechos de Vicio o de terceros.
                        </p>

                        <h2>5. Exclusión de responsabilidad</h2>
                        <p>
                            Vicio no se hace responsable de los daños y perjuicios que pudieran derivarse de:
                        </p>
                        <ul>
                            <li>Interrupciones del servicio por causas técnicas ajenas a su voluntad.</li>
                            <li>El uso inadecuado que los usuarios puedan hacer del sitio web.</li>
                            <li>El contenido de sitios web de terceros enlazados desde este sitio.</li>
                        </ul>

                        <h2>6. Enlaces a terceros</h2>
                        <p>
                            Este sitio web puede contener enlaces a páginas web de terceros. Dichos enlaces se facilitan únicamente a efectos informativos. Vicio no controla ni se responsabiliza del contenido, la política de privacidad ni las prácticas de dichos sitios.
                        </p>

                        <h2>7. Legislación aplicable y jurisdicción</h2>
                        <p>
                            El presente Aviso Legal se rige por la legislación española. Para la resolución de cualquier controversia derivada del acceso o uso de este sitio web, las partes se someten, con renuncia expresa a cualquier otro fuero que pudiera corresponderles, a los juzgados y tribunales competentes conforme a la normativa vigente.
                        </p>

                        <h2>8. Modificaciones</h2>
                        <p>
                            Vicio se reserva el derecho de modificar el presente Aviso Legal en cualquier momento para adaptarlo a cambios legislativos o a modificaciones del sitio web. Se recomienda al usuario revisarlo periódicamente.
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