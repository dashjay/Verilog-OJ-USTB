<!doctype html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="renderer" content="webkit"/>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="/css/loader.css" rel="stylesheet">


    <meta charset="utf-8">
    <script>
        // IE 10 and earlier
        if (window.navigator.userAgent.indexOf('MSIE ') > 0 &&
            window.confirm('Your browser is not supported, click \'OK\' to update')) {
            window.location = 'http://outdatedbrowser.com'
        }
    </script>
    <title>DashOJ</title>
</head>
<body>
{{--<div id="app-loader">--}}
{{--    <div class="square"></div>--}}
{{--    <div class="square"></div>--}}
{{--    <div class="square last"></div>--}}
{{--    <div class="square clear"></div>--}}
{{--    <div class="square"></div>--}}
{{--    <div class="square last"></div>--}}
{{--    <div class="square clear"></div>--}}
{{--    <div class="square "></div>--}}
{{--    <div class="square last"></div>--}}
{{--</div>--}}
<div id="app">

</div>
</body>
<script src="{{mix('js/index.js')}}"></script>
</html>
