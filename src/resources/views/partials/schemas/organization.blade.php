<script type="application/ld+json">
    @php
    $organizationSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Portal Web PE',
        'url' => url('/'),
        'sameAs' => [],
    ];

    if (file_exists(public_path('images/logo.png'))) {
        $organizationSchema['logo'] = asset('images/logo.png');
    }
    @endphp

    @php
    echo json_encode($organizationSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    @endphp
</script>