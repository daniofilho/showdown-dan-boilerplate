<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Showdown Dan Boilerplate</title>

	<!-- Normalize -->
	<link rel="stylesheet" href="assets/css/normalize.css" type="text/css">

	<!-- Kube CSS Framework -->
	<link rel="stylesheet" href="libs/kube/kube.min.css" type="text/css">

	<!-- Markdown Styles-->
	<link rel="stylesheet" href="assets/markdown-themes/googlePretiffy-tomorrow.css" type="text/css">
	<link rel="stylesheet" href="assets/markdown-themes/markdown7.css" type="text/css">

	<!-- Font Awesome - using CDN because it`s not a necessary thing to save locally -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Project Style -->
	<link rel="stylesheet" href="assets/css/style.css?v=<? rand(); ?>" type="text/css">

</head>

<?php
	//	Search on "documents" folder for files and prints documents
	$dir    = 'documents/';
	$selectFiles = array();

	$folders =  array_diff(scandir($dir), array('..', '.', '.DS_Store')); //ignore some files

	foreach( $folders as $folder ) {
		$tempArray = array_diff(scandir( $dir . $folder), array('..', '.', '.DS_Store'));

		foreach( $tempArray as $file )
			array_push( $selectFiles, $dir . $folder . "/$file"  );

	}
?>

<body>

	<header>
		<div class="wrapper">
			<row>

				<column cols="2" class="github-link">
					<a href="https://github.com/daniofilho/showdown-dan-boilerplate">
						<i class="fa fa-github"></i> Github Project
					</a>
				</column>

				<column cols="6">
					<select id="select_mdFile">
		 				<option value=""> - - Select your Markdown File - - </option>
						<?php
							foreach( $selectFiles as $file )
								echo "<option value='$file'>$file</option>";
						?>
		 			</select>
				</column>

				<column cols="3">
					<button id="btn_mdFile" onClick="loadMD()">Load Markdown</button>
				</column>

			</row>
		</div><!-- wrapper -->
	</header>

	<section>
		<div id="md_content_here">

			<blockquote>
			    <p>Select your Markdown file...</p>
			    <cite>... and have fun</cite>
			</blockquote>

			<!-- dinamic -->

		</div>
	</section>

	<!-- Showdown -->
	<script type='text/javascript' src='libs/showdown/showdown.js'></script>

	<!-- Extensions -->
	<script type='text/javascript' src='libs/showdown/extensions/prettify/showdown-prettify.min.js'></script>
	<script type='text/javascript' src='libs/showdown/extensions/custom-md/custom-md.js?v=<?= rand(); ?>'></script>
	<script type='text/javascript' src='libs/google-code-prettify/prettify.js'></script>

	<!-- Main Script -->
	<script type='text/javascript' src='assets/js/main.js?v=<?= rand(); ?>'></script>

</body>
</html>
