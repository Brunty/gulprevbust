<?php

namespace Bolt\Extension\Brunty\GulpRevBust;

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
        //$this->addTwigFunction('gulp_rev_bust', 'gulpRevBust');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return Extension::NAME;
    }



}






