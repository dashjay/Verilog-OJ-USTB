<!doctype html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta charset="utf-8">
    <title>DashOJ</title>
</head>
<body>
<div id="app">

</div>
</body>
<script src="{{mix('js/index.js')}}"></script>
</html>
