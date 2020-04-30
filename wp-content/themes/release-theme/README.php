<?php
/**
 * READ ME
 *
 * Please have a quick read of the information below before you start building.
 */

/* 1. You can use these PHP functions to include certain things in a template file:
--------------------------------------------------------------------------*/
get_header(); // WordPress header.
get_footer(); // WordPress footer.
get_offcanvas(); // Get the navigation or part of site that begins off-page.
get_social_media(); // Get social media icons.
get_schema(); // Get schema structured data partial.

/* 2. Compiling Sass and jQuery.
--------------------------------*/?>
Child theme (will compile all styles from parent theme in "style.scss":
- Run "npm install" in the root of "release-theme" to install dependancies;
- Run "gulp scss" to compile Sass to compressed CSS;
- Run "gulp js" to compile jQuery to compressed JavaScript.

Should you ever need to compile JavaScrpit in the parent theme:
- Run "npm install" in "poise-theme";
- Run "gulp js" in "poise-theme".

<?php
/* 3. Use the child theme (release-theme).
------------------------------------------*/?>
The themes are designed to be customised through the child theme (release-theme).

Here you can add new template files, write custom JS, and write custom Sass/CSS.