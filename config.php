<?php 

Kirby::plugin('sylvainjule/annotator', array(
	'sections' => array(
        'annotator' => array(
        	'props' => array(
        		'debug' => function($debug = false) {
        			return $debug;
        		},
        		'theme' => function($theme = 'light') {
        			return $theme;
        		},
        		'buttons' => function($buttons = ['pin', 'rect', 'circle']) {
        			return $buttons;
        		},
        		'colors' => function($colors = ['orange', 'yellow', 'green', 'blue', 'purple', 'pink']) {
        			return $colors;
        		},
        		'storage' => function($storage = []) {
                    return $storage;
                },
        	),
        	'computed' => array(
                'image' => function() {
                    if ($this->model()->type() == "image") {
                        return $this->model()->url();
                    }
                    else {
                        return false;
                    }
                }
            )
        ),
    ),
));