<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Fluidbox
 * @author    flowdee <support@flowdee.de>
 * @license   GPL-2.0+
 * @link      http://www.flowdee.de
 * @copyright 2014 flowdee
 */
?>

<div class="wrap fluidbox-wrap">

    <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

    <div id="poststuff">

        <div id="post-body" class="metabox-holder columns-2">

            <!-- main content -->
            <div id="post-body-content">

                <div class="meta-box-sortables ui-sortable">

                    <div class="postbox">

                        <?php $fluidbox_active = get_option("fluidbox_active"); ?>

                        <form action="" method="POST">
                            <h3><span><?php _e( 'Configuration' ); ?></span></h3>
                            <div class="inside">
                                <p>After activating the plugin no more configuration needed.</p>
                                <p>
                                    <fieldset>
                                        <label for="fluidbox_active">
                                            <input name="fluidbox_active" type="checkbox" id="fluidbox_active" value="1" <?php if($fluidbox_active == 1) echo 'checked="checked"'; ?> />
                                            <span><?php _e( 'Fluidbox enabled' ); ?></span>
                                        </label>
                                    </fieldset>
                                </p>
                                <p>
                                    <input class="button-primary" type="submit" name="fluidbox_submit" value="<?php _e( 'Save' ); ?>" />
                                </p>

                            </div> <!-- .inside -->
                        </form>

                    </div> <!-- .postbox -->

                </div> <!-- .meta-box-sortables .ui-sortable -->

            </div> <!-- post-body-content -->

            <!-- sidebar -->
            <div id="postbox-container-1" class="postbox-container">

                <div class="meta-box-sortables">

                    <div class="postbox fluidbox-postbox fluidbox-copyright">

                        <h3><span> Information</span></h3>
                        <div class="inside">
                            <p>Fluidbox is a lightweight and modern lightbox plugin to enlarge your images for an optimized view.</p>
                            <p>All of my plugins & themes are handmade with passion. I really looking forward to your feedback and suggestions.</p>
                            <p>© Copyright 2014 <a href="http://www.flowdee.de/" title="flowdee">flowdee</a></p>
                        </div> <!-- .inside -->

                    </div> <!-- .postbox -->

                    <div class="postbox fluidbox-postbox fluidbox-support">

                        <h3><span> Support & Resources</span></h3>
                        <div class="inside">
                            <ul>
                                <li><a href="http://codecanyon.net/user/flowdee?ref=flowdee" title="Envato Author Profile">Envato Author Profile</a></li>
                                <li><a href="http://codecanyon.net/user/flowdee/portfolio?ref=flowdee" title="Envato Portfolio">Envato Portfolio</a></li>
                                <li><a href="http://coder.flowdee.de/fluidbox-for-wordpress/documentation/" title="View Documentation">View Documentation</a></li>
                                <li><a href="http://coder.flowdee.de/support/" title="Support Forum">Support Forum</a></li>
                                <li><a href="http://coder.flowdee.de/contact/" title="Contact via E-Mail">Contact via E-Mail</a></li>
                            </ul>
                        </div> <!-- .inside -->

                    </div> <!-- .postbox -->

                </div> <!-- .meta-box-sortables -->

            </div> <!-- #postbox-container-1 .postbox-container -->

        </div> <!-- #post-body .metabox-holder .columns-2 -->

        <br class="clear">
    </div> <!-- #poststuff -->

</div> <!-- .wrap -->
