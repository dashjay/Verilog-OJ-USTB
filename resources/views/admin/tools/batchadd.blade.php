<html lang="">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title></title>
</head>

<input type="file" id="multiply" class="input-large">
<button onclick="upload()" class="btn-primary" style="margin-top: 5px">批量添加</button>
<button class="btn-danger"><a href="/template.xlsx" target="_blank">下载模板文件</a></button>
{{--<img src="/template.jpg" alt="" width="15%">--}}
<script>
    function upload() {
        var form = new FormData();
        let file = document.getElementById('multiply').files[0];
        if (file == null) {
            alert('请选择一个文件');
        }
        form.append("batch", file);

        var settings = {
            "async": true,
            "crossDomain": true,
            "url": "/admin/user/batchadd",
            "method": "POST",
            "headers": {
                "cache-control": "no-cache",
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        };
        $.ajax(settings).done(function (response) {
            console.log(response);
            // window.location.reload();
        }).error(function (error) {
            console.log(error);
            // window.location.reload();
        });
    }

    function download() {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": "/admin/user/template",
            "method": "GET",
            "headers": {
                "cache-control": "no-cache",
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                "Content-Disposition": "attachment;filename=template.xlsx"
            },
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
        };


        return $.ajax(settings);
    }
</script>
</html>
