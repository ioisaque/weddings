<?php
	// Check Website Status
   $id = 2;
   $website_title = 'Sara & Bruno';
	$website_status = file_get_contents('https://hi.isaquecosta.com.br/webservices/getWebsiteStatus.php?id='.$id);

   switch($website_status): 
		case 'CLEARED':
         $page_to_mount = 'site/index.php';
			break;
		case 'MAINTENANCE':
         $page_to_mount = 'https://cdn.isaquecosta.com.br/pages/manutencao.php';
			break;
		case 'BLOCKED':
         $page_to_mount = 'https://isaquecosta.com.br/';
			break;

		default:
         $page_to_mount = 'site/index.php';
			break;
	endswitch;
?>

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
  <!-- HEAD DEFAULTS - START -->
  
	<!-- META DEFAULT -->
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="robots" content="index, follow" />    
	<meta name="author" content="Isaque Costa" />
	
	<!-- META CLIENT -->
    <meta name="description" content="Isaque Costa - Desenvolvedor Web" />
   <meta name="keywords" content="Designer, site, website, meu site, novo site, como criar um site, responsivo, desenvolvimento, desenvolvimento de sites, aplicativos, android, iOS, iPhone, apple">
   
	<!-- WEBSITE TITLE -->
   <title><?=$website_title;?></title>

    <!-- DEFAULT FAVICONS -->
    <?php $icon = file_get_contents('https://cdn.isaquecosta.com.br/pages/defaults/favicon.php'); ?>
	
    <link rel="shortcut icon" href="<?=$icon;?>">
    <link rel="apple-touch-icon" href="<?=$icon;?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=$icon;?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=$icon;?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=$icon;?>">
	<!-- END OF DEFAULT CONFIGS -->
  
  <!-- HEAD DEFAULTS - END -->
</head>
<frameset frameborder="0" framespacing="0">
    <frame src="<?=$page_to_mount;?>">
<noframes>
<body>
</body>
</noframes>
</frameset>
</html>