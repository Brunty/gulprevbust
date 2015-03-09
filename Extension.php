<?php

namespace Bolt\Extension\Brunty\GulpRevBust;

use Bolt\Application;
use Bolt\BaseExtension;

/**
 * Class Extension
 * @package Bolt\Extension\Brunty\GulpRevBust
 */
class Extension extends BaseExtension
{
    /**
     *
     */
    const NAME = 'gulprevbust';

    /**
     *
     */
    public function initialize() {
        $this->addTwigFunction('gulp_rev_bust', 'gulpRevBust');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return Extension::NAME;
    }

    /**
     * @param string $accessorName
     * @return string
     */
    public function gulpRevBust($accessorName = '') {
        if(trim($accessorName) == '') {
            return '';
        }

        $fileName = $this->getManifestFileName();


        if( ! file_exists($fileName)) {
            return '';
        }

        $options = json_decode(file_get_contents($fileName), true);

        return isset($options[$accessorName]) ? $options[$accessorName]: '';
    }

    /**
     * @return string
     */
    protected function getDefaultFilename() {
        return 'rev-manifest.json';
    }

    /**
     * @return string
     */
    protected function getManifestFileName()
    {
        // get location of our gulp-rev manifest file
        $file = isset($this->config['rev_file']) ? $this->config['rev_file'] : $this->getDefaultFilename();
        $filePath = $this->app['paths']['themepath'] . '/' . $file;
        return $filePath;
    }


}






