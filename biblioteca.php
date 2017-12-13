<?php
function show_head($titulo){
    print " <!DOCTYPE html>
    <html lang=\"es\">
        <head>
            <title>".$titulo."</title>
            <meta charset=\"utf-8\"/>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\">
        </head>
        <body> 
        <script src=\"http://code.jquery.com/jquery.js\"></script>
        <script src=\"js/bootstrap.min.js\"></script>";
        print "<h1>$titulo</h1>"; 
}
function show_footer()
{
        
print "
</body>
</html>
";
}
?>
