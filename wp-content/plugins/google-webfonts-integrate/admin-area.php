<?php
//Custom Admin Area Settinngs
add_action('admin_menu', 'gwi_admin_page');

function gwi_admin_page() {
	add_options_page(__('Google WebFonts Integrate', 'gwi'), __('Google WebFonts Integrate', 'gwi'), '8', 'gwi', 'gwi_settings');
}
function gwi_settings() {
	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	global $gwiopts, $_POST;
	//Define update
	@$gwiopts['gwi_font'] = $_POST['gwi_font'];
	@$gwiopts['gwi_script'] = $_POST['gwi_script'];
	@$gwiopts['use_style_where'] = $_POST['use_style_where'];
	@$gwiopts['use_style_where2'] = $_POST['use_style_where2'];
	@$gwiopts['gwi_sl1'] = $_POST['gwi_sl1'];
	@$gwiopts['gwi_prvw'] = $_POST['gwi_prvw'];
	@$gwiopts['gwi_sub'] = $_POST['gwi_sub'];
	@$gwiopts['gwi_my_font'] = $_POST['gwi_my_gont'];
	@$gwiopts['gwi_own'] = $_POST['gwi_own'];
	@$gwiopts['gwi_own_font'] = $_POST['gwi_own_font'];

	update_option('OPTIONS', $gwiopts);

//Start to write admin area
	?>
	<div>
	<div class='wrap' style="width:49%">
	<div id="icon-plugins" class="icon32"></div><h2><?php _e('Google Webfonts Integrate', 'gwi') ?> (<?php echo plugin1_get_version(); ?>)</h2>
<?php include 'right-side.php'; ?>
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options') ?>

	<h4><strong><?php _e('Select Where you want to use fonts:', 'gwi')?></strong></h4>
	<label><strong><?php _e('For Font 1', 'gwi')?> </strong></label><input type="text" name="use_style_where" size="45" value="<?php echo get_option('use_style_where'); ?>" /><br />
	<label><strong><?php _e('For Font 2', 'gwi')?> </strong></label><input type="text" name="use_style_where2" size="45" value="<?php echo get_option('use_style_where2'); ?>" /><br />
	<span style="font-size: 10px;text-align:justify;"><em><?php _e('Write div or anything <em>id, class etc.</em>. Sperate them with comma. For example: <code>#content,.entry,#breadcrumb a,....</code>', 'gwi')?></em></span><br />
	<h4><strong><?php _e('Select Your Font:', 'gwi')?></strong></h4>
	<span style="font-size: 10px;text-align:justify;"><em><?php _e('You can choose two different font. It\'s optional. If you choose second font you can use two different fonts for two different areas', 'gwi')?></em></span><br />
<strong><?php _e('Font 1','gwi')?> </strong>

<?php
	$font_values = array ("","Abel","Abril+Fatface","Aclonica","Acme","Actor","Adamina","Advent+Pro","Aguafina+Script","Aladin","Aldrich","Alegreya","Alegreya+SC","Alex+Brush","Alfa+Slab+One","Alice","Alike","Alike+Angular","Allan","Allerta","Allerta+Stencil","Allura","Almendra","Almendra+SC","Amaranth","Amatic+SC","Amethysta","Andada","Andika","Angkor","Annie+Use+Your+Telescope","Anonymous+Pro","Antic","Antic+Didone","Antic+Slab","Anton","Arapey","Arbutus","Architects+Daughter","Arimo","Arizonia","Armata","Artifika","Arvo","Asap","Asset","Astloch","Asul","Atomic+Age","Aubrey","Audiowide","Average","Averia+Gruesa+Libre","Averia+Libre","Averia+Sans+Libre","Averia+Serif+Libre","Bad+Script","Balthazar","Bangers","Basic","Battambang","Baumans","Bayon","Belgrano","Belleza","Bentham","Berkshire+Swash","Bevan","Bigshot+One","Bilbo","Bilbo+Swash+Caps","Bitter","Black+Ops+One","Bokor","Bonbon","Boogaloo","Bowlby+One","Bowlby+One+SC","Brawler","Bree+Serif","Bubblegum+Sans","Buda","Buenard","Butcherman","Butterfly+Kids","Cabin","Cabin+Condensed","Cabin+Sketch","Caesar+Dressing","Cagliostro","Calligraffitti","Cambo","Candal","Cantarell","Cantata+One","Cardo","Carme","Carter+One","Caudex","Cedarville+Cursive","Ceviche+One","Changa+One","Chango","Chau+Philomene+One","Chelsea+Market","Chenla","Cherry+Cream+Soda","Chewy","Chicle","Chivo","Coda","Coda+Caption","Codystar","Comfortaa","Coming+Soon","Concert+One","Condiment","Content","Contrail+One","Convergence","Cookie","Copse","Corben","Cousine","Coustard","Covered+By+Your+Grace","Crafty+Girls","Creepster","Crete+Round","Crimson+Text","Crushed","Cuprum","Cutive","Damion","Dancing+Script","Dangrek","Dawning+of+a+New+Day","Days+One","Delius","Delius+Swash+Caps","Delius+Unicase","Della+Respira","Devonshire","Didact+Gothic","Diplomata","Diplomata+SC","Doppio+One","Dorsa","Dosis","Dr+Sugiyama","Droid+Sans","Droid+Sans+Mono","Droid+Serif","Duru+Sans","Dynalight","EB+Garamond","Eater","Economica","Electrolize","Emblema+One","Emilys+Candy","Engagement","Enriqueta","Erica+One","Esteban","Euphoria+Script","Ewert","Exo","Expletus+Sans","Fanwood+Text","Fascinate","Fascinate+Inline","Federant","Federo","Felipa","Fjord+One","Flamenco","Flavors","Fondamento","Fontdiner+Swanky","Forum","Francois+One","Fredericka+the+Great","Fredoka+One","Freehand","Fresca","Frijole","Fugaz+One","GFS+Didot","GFS+Neohellenic","Galdeano","Gentium+Basic","Gentium+Book+Basic","Geo","Geostar","Geostar+Fill","Germania+One","Give+You+Glory","Glass+Antiqua","Glegoo","Gloria+Hallelujah","Goblin+One","Gochi+Hand","Gorditas","Goudy+Bookletter+1911","Graduate","Gravitas+One","Great+Vibes","Gruppo","Gudea","Habibi","Hammersmith+One","Handlee","Hanuman","Happy+Monkey","Henny+Penny","Herr+Von+Muellerhoff","Holtwood+One+SC","Homemade+Apple","Homenaje","IM+Fell+DW+Pica","IM+Fell+DW+Pica+SC","IM+Fell+Double+Pica","IM+Fell+Double+Pica+SC","IM+Fell+English","IM+Fell+English+SC","IM+Fell+French+Canon","IM+Fell+French+Canon+SC","IM+Fell+Great+Primer","IM+Fell+Great+Primer+SC","Iceberg","Iceland","Imprima","Inconsolata","Inder","Indie+Flower","Inika","Irish+Grover","Istok+Web","Italiana","Italianno","Jim+Nightshade","Jockey+One","Jolly+Lodger","Josefin+Sans","Josefin+Slab","Judson","Julee","Junge","Jura","Just+Another+Hand","Just+Me+Again+Down+Here","Kameron","Karla","Kaushan+Script","Kelly+Slab","Kenia","Khmer","Knewave","Kotta+One","Koulen","Kranky","Kreon","Kristi","Krona+One","La+Belle+Aurore","Lancelot","Lato","League+Script","Leckerli+One","Ledger","Lekton","Lemon","Lilita+One","Limelight","Linden+Hill","Lobster","Lobster+Two","Londrina+Outline","Londrina+Shadow","Londrina+Sketch","Londrina+Solid","Lora","Love+Ya+Like+A+Sister","Loved+by+the+King","Lovers+Quarrel","Luckiest+Guy","Lusitana","Lustria","Macondo","Macondo+Swash+Caps","Magra","Maiden+Orange","Mako","Marck+Script","Marko+One","Marmelad","Marvel","Mate","Mate+SC","Maven+Pro","Meddon","MedievalSharp","Medula+One","Megrim","Merienda+One","Merriweather","Metal","Metamorphous","Metrophobic","Michroma","Miltonian","Miltonian+Tattoo","Miniver","Miss+Fajardose","Modern+Antiqua","Molengo","Monofett","Monoton","Monsieur+La+Doulaise","Montaga","Montez","Montserrat","Moul","Moulpali","Mountains+of+Christmas","Mr+Bedfort","Mr+Dafoe","Mr+De+Haviland","Mrs+Saint+Delafield","Mrs+Sheppards","Muli","Mystery+Quest","Neucha","Neuton","News+Cycle","Niconne","Nixie+One","Nobile","Nokora","Norican","Nosifer","Nothing+You+Could+Do","Noticia+Text","Nova+Cut","Nova+Flat","Nova+Mono","Nova+Oval","Nova+Round","Nova+Script","Nova+Slim","Nova+Square","Numans","Nunito","Odor+Mean+Chey","Old+Standard+TT","Oldenburg","Oleo+Script","Open+Sans","Open+Sans+Condensed","Orbitron","Original+Surfer","Oswald","Over+the+Rainbow","Overlock","Overlock+SC","Ovo","Oxygen","PT+Mono","PT+Sans","PT+Sans+Caption","PT+Sans+Narrow","PT+Serif","PT+Serif+Caption","Pacifico","Parisienne","Passero+One","Passion+One","Patrick+Hand","Patua+One","Paytone+One","Permanent+Marker","Petrona","Philosopher","Piedra","Pinyon+Script","Plaster","Play","Playball","Playfair+Display","Podkova","Poiret+One","Poller+One","Poly","Pompiere","Pontano+Sans","Port+Lligat+Sans","Port+Lligat+Slab","Prata","Preahvihear","Press+Start+2P","Princess+Sofia","Prociono","Prosto+One","Puritan","Quantico","Quattrocento","Quattrocento+Sans","Questrial","Quicksand","Qwigley","Radley","Raleway","Rammetto+One","Rancho","Rationale","Redressed","Reenie+Beanie","Revalia","Ribeye","Ribeye+Marrow","Righteous","Rochester","Rock+Salt","Rokkitt","Ropa+Sans","Rosario","Rosarivo","Rouge+Script","Ruda","Ruge+Boogie","Ruluko","Ruslan+Display","Russo+One","Ruthie","Sail","Salsa","Sancreek","Sansita+One","Sarina","Satisfy","Schoolbell","Seaweed+Script","Sevillana","Shadows+Into+Light","Shadows+Into+Light+Two","Shanti","Share","Shojumaru","Short+Stack","Siemreap","Sigmar+One","Signika","Signika+Negative","Simonetta","Sirin+Stencil","Six+Caps","Slackey","Smokum","Smythe","Sniglet","Snippet","Sofia","Sonsie+One","Sorts+Mill+Goudy","Special+Elite","Spicy+Rice","Spinnaker","Spirax","Squada+One","Stardos+Stencil","Stint+Ultra+Condensed","Stint+Ultra+Expanded","Stoke","Sue+Ellen+Francisco","Sunshiney","Supermercado+One","Suwannaphum","Swanky+and+Moo+Moo","Syncopate","Tangerine","Taprom","Telex","Tenor+Sans","The+Girl+Next+Door","Tienne","Tinos","Titan+One","Trade+Winds","Trocchi","Trochut","Trykker","Tulpen+One","Ubuntu","Ubuntu+Condensed","Ubuntu+Mono","Ultra","Uncial+Antiqua","UnifrakturCook","UnifrakturMaguntia","Unkempt","Unlock","Unna","VT323","Varela","Varela+Round","Vast+Shadow","Vibur","Vidaloka","Viga","Voces","Volkhov","Vollkorn","Voltaire","Waiting+for+the+Sunrise","Wallpoet","Walter+Turncoat","Wellfleet","Wire+One","Yanone+Kaffeesatz","Yellowtail","Yeseva+One","Yesteryear","Zeyada");
	$subsets = array ("","greek","greek-ext","cyrillic","cyrillic-ext","vietnamese","latin-ext");
	$charopt = get_option('gwi_sub');
	$optme = get_option('gwi_font');
	$optme2 = get_option('gwi_sl1');
	?>
<select name="gwi_font">
<?php
	foreach($font_values as $f_v){
	$f_v_str = str_replace("+"," ",$f_v);
	$selected =($optme==$f_v) ? 'selected="selected"' : '';
	$selected1 = ($optme2==$f_v) ? 'selected="selected"' : '';
?>
<option name="gwi_font" value="<?php echo $f_v; ?>" <?php echo $selected; ?> /><?php echo $f_v_str; ?></option>
<?php } ?>
</select>

<small><?php _e('Also Preview Font','gwi') ?></small>
<br />
<label><strong><?php _e('Font 2','gwi')?> </strong></label>
<select name="gwi_sl1">
<?php
	foreach($font_values as $f_v1){
	$f_v_str1 = str_replace("+"," ",$f_v1);
	$selected1 = ($optme2==$f_v1) ? 'selected="selected"' : '';
?>
<option name="gwi_sl1" value="<?php echo $f_v1; ?>" <?php echo $selected1; ?> /><?php echo $f_v_str1; ?></option>
<?php } ?>
</select><br />
<h4><?php _e('Character Set (subset)','gwi') ?></h4>
<span style="font-size: 10px;text-align:justify;"><em><?php _e('Dont select anything if you use "<strong>only</strong>" Latin character set. Latin is <strong>default</strong>.', 'gwi') ?></em></span><br />
<select name="gwi_sub">
<?php
	foreach($subsets as $subset){
	$subset_str = str_replace("+"," ",$subset);
	$selectedc =($charopt==$subset) ? 'selected="selected"' : '';
?>
<option name="gwi_sub" value="<?php echo $subset; ?>" <?php echo $selectedc; ?> /><?php echo $subset_str; ?></option>
<?php } ?>
</select><br />


<h4><?php _e('Preview Word','gwi') ?></h4>
	<input type="text" name="gwi_prvw" size="45" value="<?php echo get_option('gwi_prvw'); ?>" />

<h4><?php _e('Use your own font', 'gwi') ?></h4>
<small><?php _e('You can add your own value for your choose (maybe 3 orf 4 fonts together)', 'gwi') ?>.<?php _e('Use this format. Ex:','gwi') ?></small><br>
<code><  link href='http://fonts.googleapis.com/css?family=Philosopher&subset=latin,cyrillic&v2' rel='stylesheet' type='text/css'></code> <small><?php _e('So what you get from Google','gwi') ?></small><br />
<input type="checkbox" name="gwi_my_font" value="yes" <?php if (get_option('gwi_my_font') == "yes") { echo "checked"; } else {}?> /> <?php _e('Enable', 'gwi')?>
	<?php if (get_option('gwi_my_font') == "yes") { echo '<span style="margin-left:7px;color:#ff0000;"><em>'._e('<strong>Enabled</strong>', 'gwi').'</em></span>'; } else { echo '<span style="margin-left:7px;color:#ff0000;"><em>'._e('<strong>Disabled</strong>', 'gwi').'</em></span>';}?><br/>
	<small><?php _e('If you want to use your own font please select this checkbox', 'gwi') ?></small><br />
	<input type="text" name="gwi_own" size="45" value="<?php echo get_option('gwi_own'); ?>" /><br />
<small><?php _e('Also you have to write your font name here. Because my plugin cant see font name from your links for now :).','gwi') ?><?php _e('You can use Font 1 CSS area for your style.', 'gwi') ?><br />
	<input type="text" name="gwi_own_font" size="45" value="<?php echo get_option('gwi_own_font'); ?>" />

	<p><input type="submit" name="Submit" value="<?php _e('Save Changes') ?>" class="button-primary" /></p>

	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="gwi_font,use_style_where,gwi_sl1,use_style_where2,gwi_prvw,gwi_sub,gwi_my_font,gwi_own,gwi_own_font" />

	</form>

</div>

	<?php
//Admin area finish
}
// Insert admin area with this code
add_action('admin_menu', 'gwi_admin_page');


?>
