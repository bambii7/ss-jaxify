<?php

class JaxifyController extends Extension {

    public static $allowed_actions = array('ajax');

    public function ajax() {
		$view = $this->owner->getViewer( $this->owner->getAction() );
		$view->setTemplateFile( 'main', getcwd() . '/../ss-jaxify/templates/jaxifymain.ss' );
		return $view->process( $this->owner );
    }
    
}