<?php
// Theme functions

function create_link($link_data, $classes) {
    ob_start(); ?>
    <a 
        class="<?php echo $classes; ?>" 
        href="<?php if($link_url = $link_data['url']) {echo esc_url($link_url);} ?>" 
        <?php if($link_data['target']) {echo 'target="'.$link_data['target'].'"';} ?>
    >
        <?php echo $link_data['title']; ?>
    </a>
    <?php return ob_get_clean();
}