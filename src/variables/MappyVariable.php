<?php
/**
 * Mappy plugin for Craft CMS 3.x
 *
 * Real Time Maps
 *
 * @link      technicalstudio.co.uk
 * @copyright Copyright (c) 2017 Tech Studio
 */

namespace mappy\mappy\variables;

use mappy\mappy\Mappy;

use Craft;

/**
 * Mappy Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.mappy }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Tech Studio
 * @package   Mappy
 * @since     1.0.0
 */
class MappyVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.mappy.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.mappy.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
