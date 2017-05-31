<?php
    function tabHeader($title){
        echo "<html>
            <head>
                <title>$title</title>
                <link rel='stylesheet' href='style.css?Time=<?php echo microtime()?>' />
                <link href='https://fonts.googleapis.com/css?family=Playfair+Display+SC'
                rel='stylesheet'>
                <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300'
                rel='stylesheet'>

            </head>
            ";
    }
?>


<?php
function tabBlogPosts($blogPosts){
    echo "<h2>Blog Posts:</h2>
            <ul>$blogPosts</ul>
    ";
}
 ?>


<?php
function tabFooter(){
        echo "
            </div>
            </body>
        </html>";
    }

?>
