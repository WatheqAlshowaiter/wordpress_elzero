<?php 

get_header(); 
?> 

<h1>My header</h1>

<?php 
echo "my name is: " .bloginfo('name');
get_search_form(); 

get_sidebar(); 


get_footer(); 