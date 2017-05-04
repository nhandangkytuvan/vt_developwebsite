<!-- meta -->
@if($data['term']->term_description)
	<meta name="description" content="{{ MyAPI::getLimitWord($data['term']->term_description,32) }}">
@else
	<meta name="description" content="{{ $data['term']->term_name }}">
@endif

@if($data['term']->term_keyword)
	<meta name="keywords" content="{{ $data['term']->term_keyword }}">
@else
	<meta name="keywords" content="{{ $data['term']->term_name }}">
@endif
	<!-- facebook -->
@if($data['term']->term_avatar)
	<meta property="og:image" content="{{ asset('public/img/'.$data['term']->term_avatar) }}">
@else
	<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
@endif
	<meta property="og:url" content="{{ MyAPI::getUrlTermObj($data['term']) }}" />
	<meta property="og:title" content="{{ $data['term']->term_name }}" />
	<meta property="og:description" content="{{ $data['term']->term_description }}" />
@if($data['term']->term_avatar)
	<meta property="og:image" content="{{ asset('public/img/'.$data['term']->term_avatar) }}">
	<meta name="twitter:image" content="{{ asset('public/img/'.$data['term']->term_avatar) }}" />
@else
	<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
	<meta name="twitter:image" content="{{ asset('public/img/'.$setting->web_logo) }}" />
@endif
	<!-- twiter -->
	<meta name="twitter:card" content="Bệnh viện" />
	<meta name="twitter:title" content="{{ $data['term']->term_name }}" />
	<meta name="twitter:description" content="{{ $data['term']->term_description }}" />