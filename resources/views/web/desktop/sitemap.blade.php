<?xml version="1.0" encoding="utf-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
@foreach($data['terms'] as $term)
	<url>
		<loc>{{ MyAPI::getUrlTermObj($term) }}</loc>
		<lastmod>{{ date('Y-m-d',strtotime($term->created_at)) }}</lastmod>
		<changefreq>daily</changefreq>
		<priority>0.9</priority>
	</url>
@endforeach
@foreach($data['posts'] as $post)
	<url>
		<loc>{{ MyAPI::getUrlPostObj($post) }}</loc>
		<lastmod>{{ date('Y-m-d',strtotime($post->created_at)) }}</lastmod>
		<changefreq>daily</changefreq>
		<priority>0.9</priority>
	</url>
@endforeach
</urlset>