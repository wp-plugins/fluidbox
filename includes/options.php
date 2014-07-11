<?php
// Handle settings form
if (isset($_POST["fluidbox_submit"])) {

    // Do the saving
    $fb_activated = esc_attr($_POST["fluidbox_active"]);
    update_option("fluidbox_active", $fb_activated);
}

// Load settings
if(get_option("fluidbox_active") == 1) {
    $fluidbox_active = true;
} else {
    $fluidbox_active = false;
}

// Setup constants
define('FLUIDBOX_ACTIVE', $fluidbox_active);