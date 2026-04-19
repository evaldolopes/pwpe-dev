<script type="application/ld+json">
    @php
    echo json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => 'Vocês fazem migração de site?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' =>
                    'Sim. A migração pode ser apresentada como um diferencial forte na comunicação comercial.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Posso contratar só a hospedagem?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' =>
                    'Sim. O cliente pode contratar apenas a hospedagem e publicar seu próprio projeto.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Vocês também criam o site?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sim. A empresa pode oferecer hospedagem e criação como soluções complementares.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Tem suporte humano?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Sim. Esse é um diferencial importante e deve aparecer com destaque no site.',
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    @endphp
</script>