<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initDoctype()
    {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');
        
        $loader = new Zend_Loader_Autoloader_Resource (array (
          'basePath' => APPLICATION_PATH,
          'namespace' => 'Application',
        ));
        
        $loader->addResourceType ( 'model', 'models', 'Model'); 
        $loader->addResourceType ( 'form', 'forms', 'Form');
    }
}

