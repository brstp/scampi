<?php



// Exit if accessed directly

if( !defined( 'ABSPATH' ) ) {

	exit;

}



/**

 * Post Data Template-Part File

 *

 * @file           post-data.php

 * @package        Responsive

 * @author         Emil Uzelac

 * @copyright      2003 - 2014 CyberChimps

 * @license        license.txt

 * @version        Release: 1.1.0

 * @filesource     wp-content/themes/responsive/post-data.php

 * @link           http://codex.wordpress.org/Templates

 * @since          available since Release 1.0

 */

?>



<?php if( is_single() ) { ?>



	<div class="post-data">

		<?php the_tags( __( 'Etiketter:', 'scampi' ) . ' ', ', ', '<br />' ); ?>

		<?php printf( __( 'Posted in %s', 'responsive' ), get_the_category_list( ', ' ) ); ?><br />

  <span class="post-license">
    <span class="license-legend"><?php _e('Upphovsrätt', 'scampi') ?>: </span>
    <?php 
      if(get_field('license_type') == "cc-by-nc-sa")  {
      	echo '<a rel="license" rel="nofollow" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
      	        <img alt="Creative Commons Erkännande-IckeKommersiell-DelaLika 4.0 Internationell Licens" title="Creative Commons Erkännande-IckeKommersiell-DelaLika 4.0 Internationell Licens" src="http://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a> ';
      }
      else  if(get_field('license_type') == "cc0") {
           echo '<span class="license-cc0"><a rel="license" rel="nofollow" href="http://creativecommons.org/publicdomain/zero/1.0/">CC0 "No rights reserved" </a> </span> ';
         }
         else {
            echo '<span class="license-copyright">&copy; </span> ';         
           }
      if(get_field('copyright_owner') == "editor") {
        the_author_posts_link();
        }
      else if (get_field('copyright_owner') == "site_owner") {
        echo 'Scampiförbundet';
        }
        else {
          echo 'Författaren';
        }
      echo '. ';
 
      if(get_field('link_to_author')) {
	      echo '<a href="'.get_field('link_to_author').'" rel="nofollow">Upphovsrättsinnehavaren/originalet.</a>';
      }
 
    ?>
    
    
  </span><!-- /.post-license -->
    



	</div><!-- end of .post-data -->


<?php } ?>



<div class="post-edit"><?php edit_post_link( __( 'Edit', 'responsive' ) ); ?></div>