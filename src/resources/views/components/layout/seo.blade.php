@props([
    'title' => 'Portal Web PE',
    'description' => 'Hospedagem e criação de sites com suporte especializado.',
    'keywords' => null,
    'image' => null,
])

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
@if($keywords)
<meta name="keywords" content="{{ $keywords }}">
@endif
<meta name="robots" content="index,follow">
<link rel="canonical" href="{{ url()->current() }}">
<meta property="og:locale" content="pt_BR">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="{{ url()->current() }}">
@if($image)
<meta property="og:image" content="{{ $image }}">
<meta name="twitter:image" content="{{ $image }}">
@endif
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
