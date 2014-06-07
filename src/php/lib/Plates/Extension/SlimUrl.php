<?php

namespace Plates\Extension;

/**
 * Extension that adds the ability to create absolute urls also in docroots with subdirectory.
 */
class SlimUrl implements \League\Plates\Extension\ExtensionInterface
{
    /**
     * Instance of the parent engine.
     * @var Engine
     */
    public $engine;

    /**
     * Instance of the current template.
     * @var Template
     */
    public $template;


    /**
     * Get the defined extension functions.
     * @return array
     */
    public function getFunctions()
    {
        return array(
            'url' => 'getUrl'
        );
    }

    /**
     * Creates an asset url based on the root uri deliverd by Slim.
     *
     * @param string $uri
     *   The asset uri.
     * @return string
     *   The absolute path to the asset.
     */
    public function getUrl($uri) {
        // Initiate result.
        $result = $uri;

        if (substr($uri, 0, 1) === '/') {
          $rootUri = \Slim\Slim::getInstance()->request->getRootUri();

          $result = $rootUri . $uri;
        }

        return $result;
    }
}
