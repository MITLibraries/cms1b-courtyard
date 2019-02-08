<?php
/**
 * The template for displaying search forms in Courtyard
 *
 * @package cms1b-courtyard
 */

?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" class="<?php esc_attr_e( bootstrap_searchform_class( debug_backtrace() ) ); ?>">
        <div class="form-group">
            <input type="text" class="form-control" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'courtyard' ); ?>" />
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
	</form>

