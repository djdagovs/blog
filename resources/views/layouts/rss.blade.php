<?xml version="1.0" encoding="UTF-8"?>
<rss
    version="2.0"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:content="http://purl.org/rss/1.0/modules/content/"
    xmlns:atom="http://www.w3.org/2005/Atom"
>
    <channel>
        <title>{{ config('app.name', 'My Blog') }}</title>
        <link>{{ url()->current() }}</link>
        <description>The latest blog posts</description>
        @yield('content')
    </channel>
</rss>
