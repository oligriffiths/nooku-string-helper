<?php

Nooku\Library\ClassLoader::getInstance()->registerLocatorNamespaces(
    'library', array('Nooku\\Library' => dirname(__FILE__).'/lib')
);