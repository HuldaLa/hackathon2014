<?php
namespace Controller;

class Template {
    private $template_directory = 'js_templates';

    function get($identifier, $engine, $template) {
        // Template path.
        $template_path = $this->template_directory . DS . $identifier;

        if ($engine->pathExists($template_path)) {
            echo $template->render($template_path);
        }
    }

}