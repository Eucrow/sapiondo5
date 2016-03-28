<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   <head>
      <jdoc:include type="head" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
   </head>
   <body>
      <header>
       <div class="logo-head">
        <jdoc:include type="modules" name="top" style="xhtml" />
       </div>
       <nav class="mainmenu">
         <jdoc:include type="modules" name="mainmenu" style="xhtml" />
       </nav>
      </header>
    <section class="main">

      <?php if ($this->countModules( 'sidebar' )) : ?>
        <!-- comprobamos que al menos existe un módulo en la posicion sidebar -->
        <article class="content-left">
          <jdoc:include type="component" />
        </article>
        <aside class="sidebar-right">
          <jdoc:include type="modules" name="sidebar" style="xhtml" />
        </aside>
      <?php else: ?> <!-- si no... -->
          <?php if ($this->countModules( 'newsresume' )) : ?>
            <!-- comprobamos que al menos existe un módulo en la posicion newsresume -->
            <article class="content">
              <jdoc:include type="component" />
            </article>
            <article class="news">
              <jdoc:include type="modules" name="newsresume" style="xhtml" />
            </article>
          <?php else: ?> <!-- si no... -->
            <article class="content">
              <jdoc:include type="component" />
            </article>
          <?php endif; ?>
      <?php endif; ?>






    </section>
    <footer>
      <jdoc:include type="modules" name="bottom" style="xhtml" />
    </footer>

   </body>
</html>
