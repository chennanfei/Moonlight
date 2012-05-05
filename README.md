Moonlight
=========

The aim of this project is to develop a page framework based on Zend framework and Smarty. The core idea is to separate a page to several features, and each feature will be handled in parallel. The output of each feature is HTML segment, and then the framework assembles all html segments by layout configuration. Finally a complete page is generated and transported to the client.

To make it work, you need install Zend framework and php 5.3 above.

In the class application/models/shared/frontend/PageRender.php/PageRenderingHandler, you need modify following code line, and replace 'http://localhost/Moonlight/public/' with your own.

    private static $_featureHandlerUrl = 'http://localhost/Moonlight/public/framework/index';