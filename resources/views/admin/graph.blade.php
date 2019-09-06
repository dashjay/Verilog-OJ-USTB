<!doctype html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">

    <title>DashOJ</title>
    <script src="/js/default.js" type="text/javascript"></script>
    <script src="/js/wavedrom.min.js" type="text/javascript"></script>
    <script src="/js/jquery.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $("#wavedrom").append("{{$wavedrom}}");
        });

    </script>
</head>
<body onload="WaveDrom.ProcessAll()">
<div>
    <script type='WaveDrom' id="wavedrom">
    </script>
</div>
</body>

</html>
