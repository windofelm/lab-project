<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-beta.3/css/select2.min.css">
</head>
<body>
    <form action="" id="tagForm">
        <select multiple="true" name="tags[]" id="tagSelector" class="form-control select2" style="width: 500px;">
            <option value="1">Awsome</option>
            <option value="2">Cool</option>
            <option value="3">Balls</option>
        </select>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-beta.3/js/select2.min.js"></script>
    <script type="application/javascript">
        $('.select2').select2({
            tags: true,
            tokenSeparators: [",", " "],
            createTag: function (tag) {
                return {
                    id: tag.term,
                    text: tag.term,
                    isNew : true
                };
            }
        }).on("select2:select", function(e) {
            if(e.params.data.isNew){
                $('#console').append('<code>New tag: {"' + e.params.data.id + '":"' + e.params.data.text + '"}</code><br>');
                $(this).find('[value="'+e.params.data.id+'"]').replaceWith('<option selected value="'+e.params.data.id+'">'+e.params.data.text+'</option>');
            }
        });
    </script>
</body>
</html>