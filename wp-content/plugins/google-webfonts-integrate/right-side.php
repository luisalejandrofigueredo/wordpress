<!-- Right Widgets -->
<?php
$fontp1 = get_option('gwi_font');
$fontp2 = str_replace("+", " ", $fontp1);
$scriptp1 = "latin,";
$scriptpc = get_option('gwi_sub');
            echo "<style>.previewg {font-family:$fontp2}</style>" . "\n";
	    echo "<link href='http://fonts.googleapis.com/css?family=$fontp1&subset=$scriptp1$scriptpc&v2' rel='stylesheet' type='text/css'>" . "\n";
?>
<div id="dashboard-widgets-wrap" style="float:right;width:150px;"><div id="dashboard_plugins" class="metabox-holder">
<div width="150px" id="dashboard" class="postbox"><h3 class='hndle'><span><?php _e('Contributor', 'gwi') ?></span></h3><div class="inside">
<p style="padding:5px;"><strong>Serkan Algur</strong><ul style="padding:5px;"><li><a href="http://www.wpadami.com" target="_blank"><?php _e('Personal Blog (Turkish)', 'gwi') ?></a></li><li><a href="http://facebook.com/serkan.algur" target="_blank"><?php _e('Facebook', 'gwi')?></a></li><li><a href="http://twitter.com/kaisercrazy" class="twitter-follow-button">Follow @kaisercrazy</a>
<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script></li><li><a href="http://www.friendfeed.com/kaisercrazy" target="_blank"><?php _e('Friendfeed', 'gwi')?></a></li><li><a href="mailto:info@wpadami.com"><?php _e('Email Me', 'gwi')?></a></li></ul></p>
</div>

</div>
<div width="250px" id="dashboard" class="postbox">
<h3><?php _e('Preview', 'gwi') ?></h3>
<div class="inside"><br />
<div class='previewg'><?php echo get_option('gwi_prvw'); ?><br />
</div><br />
</div>
</div>
</div>

</div>
</div>
<!-- Right Widgets -->
