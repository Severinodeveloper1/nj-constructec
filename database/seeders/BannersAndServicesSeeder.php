<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Service;
use App\Models\Project;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class BannersAndServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Seed Extended Settings
        $setting = Setting::first();
        if ($setting) {
            $setting->update([
                'about_history' => "Con casi dos décadas de trayectoria en el sector residencial y comercial en el Perú, en NJ CONSTRUCTEC brindamos soluciones de ingeniería que duran en el tiempo. Iniciamos operaciones con la convicción de elevar los estándares de calidad y seguridad en instalaciones técnicas, convirtiéndonos hoy en un socio estratégico clave para condominios, constructoras y hogares peruanos.\n\nContamos con un equipo de ingenieros y técnicos homologados que aseguran que cada obra cumpla rigurosamente con el Reglamento Nacional de Edificaciones (RNE) y normas internacionales.",
                'about_mission' => "Brindar servicios especializados de ingeniería y construcción con altos estándares de calidad, utilizando materiales homologados y tecnología adecuada, asegurando la satisfacción del cliente.",
                'about_vision' => "Consolidarnos a nivel nacional como la empresa líder en soluciones de ingeniería sanitaria, eléctrica e hidráulica, destacando por nuestra innovación y garantía real.",
                'contact_email_receiver' => 'contacto@njconstructec.com',
                'pilar_1_title' => 'Garantía Real',
                'pilar_1_desc' => 'Respaldo absoluto y acompañamiento post-servicio en todas nuestras obras de ingeniería.',
                'pilar_2_title' => 'Atención Personalizada',
                'pilar_2_desc' => 'Visitas técnicas a domicilio y presupuestos a la medida de su requerimiento real.',
                'pilar_3_title' => 'Precios Competitivos',
                'pilar_3_desc' => 'Costos optimizados y presupuestos justos sin sacrificar la calidad técnica de los materiales.',
                'about_values' => [
                    ['title' => 'Responsabilidad', 'description' => 'Cumplimos rigurosamente con nuestros compromisos y plazos pactados en cada obra.', 'icon' => 'assignment_turned_in'],
                    ['title' => 'Honestidad', 'description' => 'Presupuestos transparentes y relaciones de confianza duraderas con el cliente.', 'icon' => 'gavel'],
                    ['title' => 'Calidad', 'description' => 'Utilizamos insumos garantizados y aplicamos altos estándares en cada detalle.', 'icon' => 'workspace_premium'],
                    ['title' => 'Compromiso', 'description' => 'Nos involucramos al 100% para superar las expectativas de nuestros socios.', 'icon' => 'handshake'],
                    ['title' => 'Seguridad', 'description' => 'Respetamos de forma estricta las normas de prevención de riesgos (SST).', 'icon' => 'health_and_safety'],
                    ['title' => 'Trabajo en Equipo', 'description' => 'Sinergia entre ingenieros, técnicos y operarios para el éxito del proyecto.', 'icon' => 'groups'],
                    ['title' => 'Innovación', 'description' => 'Búsqueda continua de mejores tecnologías hidráulicas y de construcción.', 'icon' => 'lightbulb']
                ]
            ]);
        }

        // 2. Seed Banners
        Banner::truncate();
        Banner::create([
            'image_path' => 'banners/placeholder_1.jpg', // can be uploaded by user
            'title' => 'Más de 18 años de Excelencia en Ingeniería Residencial',
            'subtitle' => 'Especialistas peruanos en instalaciones sanitarias, eléctricas y equipos de bombeo con garantía real.',
            'link_url' => '/servicios',
            'is_active' => true,
            'order' => 1,
        ]);
        Banner::create([
            'image_path' => 'banners/placeholder_2.jpg',
            'title' => 'Sistemas de Presión Constante y Equipos de Bombeo',
            'subtitle' => 'Diseño e instalación de redes y tableros automatizados para asegurar el caudal y presión ideal en su edificio.',
            'link_url' => '/servicios#bombeo',
            'is_active' => true,
            'order' => 2,
        ]);

        // 3. Seed Services
        Service::truncate();
        Service::create([
            'name' => 'Instalaciones Sanitarias',
            'slug' => 'instalaciones-sanitarias',
            'icon' => 'plumbing',
            'short_description' => 'Diseño, instalación y mantenimiento de redes de agua fría, caliente y desagüe bajo normas del RNE.',
            'description' => '<p>Nuestro servicio de <strong>Instalaciones Sanitarias</strong> abarca el diseño y tendido completo de redes internas y externas para edificaciones multifamiliares, residenciales y comerciales. Implementamos soluciones eficientes para el transporte de fluidos.</p><p>Utilizamos materiales certificados de alta densidad como PPR (polipropileno copolímero random), PVC y CPVC para garantizar una larga vida útil libre de fugas.</p>',
            'technical_specs' => '<ul><li>Cumplimiento estricto de la <strong>Norma Técnica I.S. 010</strong> del Reglamento Nacional de Edificaciones.</li><li>Uso de soldadura de termofusión homologada para conexiones PPR.</li><li>Pruebas hidráulicas de estanqueidad a alta presión (mínimo 150 PSI) por 24 horas antes del tapado.</li></ul>',
            'is_active' => true,
            'order' => 1,
        ]);
        Service::create([
            'name' => 'Instalaciones Eléctricas',
            'slug' => 'instalaciones-electricas',
            'icon' => 'bolt',
            'short_description' => 'Montaje de redes eléctricas seguras, tableros de control y sistemas de puesta a tierra certificados.',
            'description' => '<p>Ofrecemos soluciones integrales en <strong>Instalaciones Eléctricas</strong> para garantizar la seguridad de su edificación y evitar sobrecargas o cortocircuitos. Realizamos cableado estructurado, balanceo de cargas y montaje de sistemas de seguridad eléctrica.</p><p>Nuestro personal cuenta con homologación vigente y utiliza equipos de medición calibrados.</p>',
            'technical_specs' => '<ul><li>Cumplimiento del <strong>Código Nacional de Electricidad (CNE)</strong> de Perú.</li><li>Medición de resistencia de pozos a tierra con telurómetro digital certificado.</li><li>Instalación de interruptores termomagnéticos y diferenciales de alta sensibilidad (30mA).</li></ul>',
            'is_active' => true,
            'order' => 2,
        ]);
        Service::create([
            'name' => 'Equipos de Bombeo',
            'slug' => 'equipos-de-bombeo',
            'icon' => 'water_drop',
            'short_description' => 'Sistemas de presión constante, electrobombas y automatización para abastecimiento de agua continuo.',
            'description' => '<p>Especialistas en la automatización y puesta en marcha de <strong>Sistemas de Bombeo de Presión Constante</strong>. Estos sistemas regulan la velocidad de los motores mediante variadores de frecuencia, optimizando el consumo de energía y protegiendo la tubería de golpes de ariete.</p>',
            'technical_specs' => '<ul><li>Variadores de velocidad electrónicos con protección contra trabajo en seco.</li><li>Cálculo hidráulico preciso de altura dinámica total (ADT) y caudal demandado (MDC).</li><li>Mantenimiento preventivo de tanques hidroneumáticos y calibración de presostatos.</li></ul>',
            'is_active' => true,
            'order' => 3,
        ]);
        Service::create([
            'name' => 'Bridas Rompeagua',
            'slug' => 'bridas-rompeagua',
            'icon' => 'settings_input_component',
            'short_description' => 'Fabricación a medida e instalación hermética de bridas de fierro negro para pozos y cisternas.',
            'description' => '<p>Las <strong>Bridas Rompeagua</strong> son piezas metálicas críticas diseñadas para evitar la filtración de humedad a través de muros de concreto en cisternas, tanques elevados y fosas de bombeo. En NJ CONSTRUCTEC fabricamos estas bridas a medida según el diámetro de la tubería de pase.</p>',
            'technical_specs' => '<ul><li>Fabricación en plancha de acero ASTM A36 con espesores norma.</li><li>Soldadura corrida por arco eléctrico realizada por operario calificado 6G.</li><li>Recubrimiento con pintura epóxica de alta resistencia anticorrosiva apta para agua potable.</li></ul>',
            'is_active' => true,
            'order' => 4,
        ]);

        // 4. Seed Projects
        Project::truncate();
        Project::create([
            'title' => 'Sistema de Presión Constante - Edificio San Fernando',
            'description' => 'Implementación y montaje de un sistema de bombeo de presión constante de 3 bombas con variadores de velocidad ABB para un complejo de 64 departamentos. Incluye tablero electrónico y transductores de presión.',
            'location' => 'Miraflores, Lima',
            'service_type' => 'Equipos de Bombeo',
            'image_path' => 'projects/placeholder_p1.jpg',
            'is_featured' => true,
            'is_active' => true,
            'order' => 1,
        ]);
        Project::create([
            'title' => 'Redes Sanitarias y Termofusión - Condominio Las Hortensias',
            'description' => 'Instalación integral de las redes de agua potable mediante termofusión PPR y desagües de PVC en condominios residenciales de 5 niveles. Pruebas de estanqueidad validadas por supervisión.',
            'location' => 'Surco, Lima',
            'service_type' => 'Instalaciones Sanitarias',
            'image_path' => 'projects/placeholder_p2.jpg',
            'is_featured' => true,
            'is_active' => true,
            'order' => 2,
        ]);
        Project::create([
            'title' => 'Tableros Generales e Iluminación - Residencial El Polo',
            'description' => 'Montaje de tableros eléctricos generales, distribución de llaves térmicas y cableado general de áreas comunes para edificio residencial. Certificación de pozos a tierra con protocolo de pruebas.',
            'location' => 'San Borja, Lima',
            'service_type' => 'Instalaciones Eléctricas',
            'image_path' => 'projects/placeholder_p3.jpg',
            'is_featured' => true,
            'is_active' => true,
            'order' => 3,
        ]);

        // 5. Seed Blog Posts
        Post::truncate();
        Post::create([
            'title' => 'Cómo evitar aniegos en sótanos mediante el correcto mantenimiento de bombas',
            'slug' => 'evitar-aniegos-en-sotanos-mantenimiento-de-bombas',
            'content' => '<p>Las inundaciones o aniegos en sótanos suelen ocurrir por la falla de los sistemas de bombeo de agua residual o lluvia. El mantenimiento periódico es la única garantía para evitar siniestros que comprometan los sótanos y los vehículos estacionados.</p><h3>Aspectos clave a inspeccionar:</h3><ul><li><strong>Sensores de nivel (flotadores):</strong> Deben limpiarse de grasas y lodos acumulados para evitar que se queden trabados.</li><li><strong>Tablero de alternancia:</strong> Verificar que los contactores y relés térmicos operen correctamente.</li><li><strong>Prueba de consumo (Amperaje):</strong> Asegura que el motor de la electrobomba no esté trabajando sobrecargado.</li></ul><p>Se recomienda una inspección profesional técnica de manera trimestral para condominios residenciales.</p>',
            'image_path' => 'blog/placeholder_b1.jpg',
            'meta_title' => 'Mantenimiento de Bombas en Sótanos | NJ Constructec',
            'meta_description' => 'Aprenda a evitar inundaciones y aniegos en los sótanos de condominios mediante un correcto programa de mantenimiento de electrobombas sumergibles.',
            'meta_keywords' => 'bombas sumergibles, aniegos, mantenimiento, ingenieria',
            'is_published' => true,
            'published_at' => now(),
        ]);
        Post::create([
            'title' => 'Importancia de las bridas rompeagua en el vaciado de cisternas de concreto',
            'slug' => 'importancia-bridas-rompeagua-cisternas-concreto',
            'content' => '<p>Al construir tanques de almacenamiento de agua subterráneos o cisternas, el concreto vaciado sufre un proceso de contracción. La unión entre la tubería de PVC o fierro y el concreto es una junta fría muy propensa a filtraciones de agua.</p><p>Las <strong>bridas rompeagua</strong> solucionan este problema de forma definitiva al crear una barrera física de acero en medio del muro que corta la trayectoria del agua filtrada.</p><h3>Recomendaciones de instalación:</h3><ul><li>La brida debe estar perfectamente centrada en el espesor del muro.</li><li>Debe asegurarse firmemente a la armadura de fierro antes de verter el concreto para evitar que se mueva de su alineación.</li><li>Se debe aplicar pintura epóxica para evitar la corrosión prematura del metal.</li></ul>',
            'image_path' => 'blog/placeholder_b2.jpg',
            'meta_title' => '¿Por qué usar Bridas Rompeagua? | NJ Constructec',
            'meta_description' => 'Evite filtraciones de humedad y fugas de agua en cisternas de concreto utilizando bridas rompeagua fabricadas e instaladas adecuadamente.',
            'meta_keywords' => 'bridas rompeagua, cisternas, concreto, filtraciones',
            'is_published' => true,
            'published_at' => now()->subDay(),
        ]);
    }
}
