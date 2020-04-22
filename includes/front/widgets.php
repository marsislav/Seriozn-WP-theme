<?php
function seriozn_widgets () {
    register_sidebar( array(
        'name'=>__('Main Sidebar', 'seriozn'),
        'description'=>__('Main Sidebar for SerioZN theme', 'seriozn'),
        'id'=>'seriozn_sidebar',
        'before_widget'=>'<div id=""%1$s" class="widget clearfix 2$s">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>',

    ));
}