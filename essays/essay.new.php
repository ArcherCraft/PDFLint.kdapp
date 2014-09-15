<!DOCTYPE HTML>

<html>
<head>
<title>New Essay</title>
<meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
<script src="jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
<script src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<link rel="stylesheet" type="text/css" href="essay.new.css">
<script src="bootstrap.js"></script>
<link href="bootstrap.css" rel="stylesheet">
<link href="bootstrap-tour.min.css" rel="stylesheet">
<link href="bootstrap-tour.min.css" rel="stylesheet">
<script src="bootstrap-tour.min.js"></script>
<script src="bootstrap-tour.js"></script>

<script>
function PDFLintSave(element_id, html, body) {
        // Do some custom HTML cleanup
        html = html.replace(/a/g,'b');

        return html;
}
 tinymce.init({
selector:'textarea', 
save_callback: "PDFLintSave",
content_css : "essaycontent.css",
plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
toolbar1 : "newdocument bold italic underline strikethrough alignleft aligncenter alignright alignjustify styleselect" ,
toolbar2 : "formatselect fontselect fontsizeselect cut copy paste bullist numlist outdent indent blockquote undo redo removeformat subscript superscript save",
toolbar3 : "insertdatetime forecolor backcolor",

});

var introToPDFLint =  new Tour({
       steps: [
         {
           element: "input[name=title]",
           title: "Naming your Document ",
           content: "Click on The Title Box and type in the Title",
            },
               {
           element: "input[name=author]",
           title: "Authoring  your Document ",
           content: "Click on The Author Box and type in the Title",
            },
               {
           element: "#mceu_30",
           title: "Editing your Document ",
           content: "Click on The Document Body Box and type in the Title",
            }
            
            ]});
         introToPDFLint.init();
         introToPDFLint.start();
</script>


</head>
<body>
<div class="container-fluid">
<nav class="nav navbar-default navbar-fixed-top " role="navigation">
<ul class="nav nav-tabs" role="tablist">
<li class="active"><a href="#new">New</a></li>
<li><a href="#edit">Edit</a></li>
</ul>
</nav>
<div class="jumbotron">
<div class="input-group">
<form method ="POST" action="createproc.php">


<input type="text" name="title" class="form-control" placeholder="Title">

<input type="text" name="author" class="form-control" placeholder="Author">




<textarea name="body"></textarea>

<input type="submit" value="Submit">
</form>
</div>
</div>
</body>
</html>