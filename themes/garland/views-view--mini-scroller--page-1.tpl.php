<?php
/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>

<?php
drupal_add_js(drupal_get_path('theme', 'garland') . '/js/scrollingcarousel.2.0.min.js');
drupal_add_js(drupal_get_path('theme', 'garland') . '/js/jquery.prettyPhoto.js');

$js = <<<JS
(function ($) {
$(document).ready(function() {
		$('#carousel-demo1').scrollingCarousel(); 
                    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'facebook', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
        social_tools: "" /* html or false to disable */});

});
}(jQuery));
JS;
drupal_add_css(drupal_get_path('theme', 'garland') . '/css/prettyPhoto.css');
drupal_add_css(drupal_get_path('theme', 'garland') . '/css/scroller.css');
drupal_add_js($js, array('type' => 'inline', 'scope' => 'header', 'weight' => 5));
?>
<div class="<?php print $classes; ?>">
    <div id="carousel-demo1" class="carousel-demo">
        <?php if ($rows): ?>
            <?php print $rows; ?>
        <?php endif ?>
       
    </div>
</div>
<?php /* class view */ ?>
