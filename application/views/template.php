<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="non-ie"> <!--<![endif]-->
<head>
	<base href="<?php echo URL::base('', 'http'); ?>" />
	
	<!-- TODO: Combine -->
	<link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/base.css" type="text/css" />
	<link rel="stylesheet" href="css/styles.css" type="text/css" />
	<link rel="stylesheet" href="css/membership/membership.css" type="text/css" />
	<link rel="stylesheet" href="css/membership/lightbox.css" type="text/css" />
</head>
	
<body id="<?php echo $body_id ?>">
	<div id="header">
		<p>
<?php
if ($logged_in)
{
	echo '
			Logged in as ', $member->name, '. <a href="', url::site('member'), '">Manage your account</a> or <a href="', url::site('member/logout'), '">Log out</a>.';
}
else
{
	echo '
			Not logged in. <a href="', url::site('member/login'), '" id="header-login">Log in or register</a>.';
}
?>	
		</p>
	
<?php
// Do we have a top message?
if (!empty($message))
{
	echo '
		<p id="message">', $message, '</p>';
}
?>
		<hr />
	</div>
	
	<?php echo $body; ?>
	
	
	<hr />
	Footer
	
	<!-- Scripts -->
	<!-- TODO: Combine -->
	<!--script src="http://ajax.googleapis.com/ajax/libs/mootools/1.2.4/mootools-yui-compressed.js"></script-->
	<script src="http://ajax.googleapis.com/ajax/libs/mootools/1.3.0/mootools-yui-compressed.js"></script>
	<script src="js/mootools-more.js"></script>
	<script src="js/daniel15/d15.js"></script>
	<script src="js/membership/membership.js"></script>
	<script src="js/membership/lightbox.js"></script>
	<!-- TODO: Store this in a site object somewhere! -->
	<script>var base_url = '<?php echo url::base(true, true); ?>';</script>
</body>
</html>