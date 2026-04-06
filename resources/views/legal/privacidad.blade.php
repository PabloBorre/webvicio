<x-layouts::web.app title="Política de Privacidad">

    <section class="pt-180 pb-130">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="section-header mb-60">
                        <h1 class="section-title">Política de Privacidad</h1>
                        <p class="section-subtitle">viciotheroom.es</p>
                    </div>

                    <div class="legal-content">

                        <h2>1. Responsable del tratamiento</h2>
                        <p>
                            En cumplimiento del Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo (RGPD) y de la Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y garantía de los derechos digitales (LOPDGDD), le informamos de que el responsable del tratamiento de sus datos personales es:
                        </p>
                        <ul>
                            <li><strong>Denominación:</strong> Vicio</li>
                            <li><strong>CIF/NIF:</strong> [PENDIENTE]</li>
                            <li><strong>Web:</strong> viciotheroom.es</li>
                        </ul>

                        <h2>2. Datos que recogemos</h2>
                        <p>
                            Este sitio web es de carácter informativo y no dispone de formularios de registro, suscripción ni recogida activa de datos personales. No recopilamos ningún dato personal identificable de los visitantes.
                        </p>
                        <p>
                            Con carácter técnico, el servidor web puede registrar automáticamente datos de acceso estándar (dirección IP, fecha y hora de visita, páginas consultadas y navegador utilizado) con la única finalidad de garantizar el correcto funcionamiento y la seguridad del sitio. Estos datos no se asocian a ninguna persona identificada ni identificable y se eliminan de forma periódica.
                        </p>

                        <h2>3. Finalidad del tratamiento</h2>
                        <p>
                            El único tratamiento que se realiza es el técnico necesario para servir las páginas del sitio web y mantener su seguridad. No se elaboran perfiles de usuario ni se realiza ninguna actividad de análisis, segmentación o marketing basada en datos personales.
                        </p>

                        <h2>4. Base jurídica</h2>
                        <p>
                            El tratamiento técnico descrito está amparado en el interés legítimo del responsable (art. 6.1.f RGPD) para garantizar la seguridad y el correcto funcionamiento del sitio web.
                        </p>

                        <h2>5. Comunicación de datos a terceros</h2>
                        <p>
                            No cedemos ni comunicamos sus datos a terceros. Este sitio web no utiliza servicios de análisis de terceros, redes de publicidad ni ninguna otra plataforma que implique la transferencia de datos personales a terceras empresas.
                        </p>

                        <h2>6. Transferencias internacionales</h2>
                        <p>
                            No se realizan transferencias internacionales de datos a países fuera del Espacio Económico Europeo.
                        </p>

                        <h2>7. Conservación de datos</h2>
                        <p>
                            Los registros técnicos de acceso al servidor se conservan durante el tiempo mínimo necesario para garantizar la seguridad del sistema y, en todo caso, no más de 12 meses.
                        </p>

                        <h2>8. Derechos del interesado</h2>
                        <p>
                            Aunque este sitio no recoge datos personales de forma activa, le informamos de que, en la medida en que resulte aplicable, usted tiene derecho a:
                        </p>
                        <ul>
                            <li>Acceder a sus datos personales.</li>
                            <li>Solicitar la rectificación de datos inexactos.</li>
                            <li>Solicitar la supresión de sus datos.</li>
                            <li>Oponerse al tratamiento o solicitar su limitación.</li>
                            <li>Solicitar la portabilidad de sus datos.</li>
                        </ul>
                        <p>
                            Para ejercer estos derechos puede contactarnos a través de los medios indicados en el Aviso Legal de esta web.
                        </p>
                        <p>
                            Si considera que el tratamiento de sus datos no se ajusta a la normativa vigente, tiene derecho a presentar una reclamación ante la Agencia Española de Protección de Datos (<a href="https://www.aepd.es" target="_blank" rel="noopener noreferrer">www.aepd.es</a>).
                        </p>

                        <h2>9. Modificaciones</h2>
                        <p>
                            Nos reservamos el derecho de actualizar esta Política de Privacidad para adaptarla a cambios legislativos o modificaciones del sitio web. Le recomendamos revisarla periódicamente.
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