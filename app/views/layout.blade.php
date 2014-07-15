<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title>{{{ $title or '' }}}</title>
    {{ HTML::style('css/reset.css'); }}
    {{ HTML::style('css/flags.css'); }}
	{{ HTML::style('css/style.css'); }}
</head>
<body>
    <div id="wrapper">
        <!-- Header -->
        <div id="header">
            <div class="container">
                <a href="/" class="logo">World Cup 2014</a>
            </div>
        </div>

        <div id="main">
        @yield('content')
        </div>

    </div>
</body>
</html>