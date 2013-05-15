<?php

class JaxifyController extends Extension {

    public static $allowed_actions = array('ajax');

    public function ajax() {
        $tpl = get_class( $this->owner->dataRecord );
        return $this->owner->renderWith( $tpl );
    }
    
}