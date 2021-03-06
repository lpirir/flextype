<?php
    namespace Flextype;
    use Flextype\Component\{Event\Event, Http\Http, Registry\Registry};
?>
<!doctype html>
<html lang="<?php echo Registry::get('site.locale'); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo Registry::get('site.description'); ?>">
    <meta name="author" content="">

	<?php Event::dispatch('onThemeMeta'); ?>

	<title><?php echo $page['title']; ?> | <?php echo Registry::get('site.title'); ?></title>

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>

	<link href="<?php echo Http::getBaseUrl(); ?>/site/themes/<?php echo Registry::get('site.theme'); ?>/assets/dist/css/simple.css" rel="stylesheet">

    <?php Event::dispatch('onThemeHeader'); ?>
  </head>
  <body>
  <?php Themes::view('partials/navigation')->display(); ?>
  <main role="main" class="container content">
