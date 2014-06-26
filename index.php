<?php
defined('_JEXEC') or die;
$doc = JFactory::getDocument();

$doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap.min.css');
$doc->addStyleSheet(JUri::base() . 'templates/' . $this->template . '/css/style.css', $type = 'text/css');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/main.js', 'text/javascript');

?>

<!DOCTYPE html>
<html>
<head>
<!--
    <link rel="stylesheet" href="/templates/abcd/css/style.css" type="text/css" />
    <script src="/templates/abcd/js/main.js" type="text/javascript"></script>
-->
<jdoc:include type="head" />
</head>
<body>
    <!-- main container -->
    <div class='main_container'>
        <!-- header -->
        <div class='header'>Header</div>
    
        <!-- mid container - includes main content area and right sidebar -->
        <div class='mid_container'>
    
            <!-- main content area -->
            <div class='main_content_area'>
                Main Content Area

<jdoc:include type="modules" name="position-3" style="xhtml" />
<jdoc:include type="message" />
<jdoc:include type="component" />
<jdoc:include type="modules" name="position-2" style="none" />

            </div>
    
            <!-- right sidebar -->
            <div class='right_sidebar'>
                Right SideBar
<jdoc:include type="modules" name="position-7" style="well" />

            </div>
            
            <div style='clear:both;'></div>
    
        </div>
    
        <!-- footer -->
        <div class='footer'>
            Footer
        </div>
        
    </div>
</body>
</html>
