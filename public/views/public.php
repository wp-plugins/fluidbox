<?php
/**
 * Represents the view for the public-facing component of the plugin.
 *
 * This typically includes any information, if any, that is rendered to the
 * frontend of the theme when the plugin is activated.
 *
 * @package   Fluidbox
 * @author    flowdee <support@flowdee.de>
 * @license   GPL-2.0+
 * @link      http://www.flowdee.de
 * @copyright 2014 flowdee
 */

add_action('wp_head','fluidbox_frontend_scripts');

function fluidbox_frontend_scripts() {

    ob_start();
    ?>

    <script>
        (function ( $ ) {
            "use strict";

            $(document).ready( function() {

                // Add rel attribute to image links
                $("a[href$='.jpg'], a[href$='.jpeg'], a[href$='.gif'], a[href$='.png']").has("img").attr("rel", "fluidbox");

                // Enhancement for WP Galleries
                $('.gallery-item').addClass('gallery-item-fluidbox');
            });

            $(function () {

                // Init fluidbox
                $('a[rel="fluidbox"]').fluidbox({
                    overlayColor: 'rgba(0, 0, 0, .85)'
                });

            });

        }(jQuery));
    </script>

    <?php

    $out = ob_get_clean();
    echo $out;
}