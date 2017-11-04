<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="libs/ckeditor/ckeditor.js"></script>
    {{--<script src="libs/ckeditor4/config.js"></script>--}}
</head>
<body>
    <form>
        <textarea name="editor1" id="editor1" rows="10" cols="80">
            This is my textarea to be replaced with CKEditor.
        </textarea>
        <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            //CKEDITOR.replace('editor1');
            CKEDITOR.replace('editor1', {
                //ustomConfig: 'config_c.js',
                filebrowserBrowseUrl: '/img',
                filebrowserUploadUrl: 'http://localhost/lab-project/public/upload'
            });
        </script>
    </form>
</body>
</html>