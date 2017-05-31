<?php
include('config/init.php');

getPost($_REQUEST['PostId']);
tabHeader($_REQUEST['PostId']);
tabBlogPosts($_REQUEST['PostId']);
tabFooter();

?>
