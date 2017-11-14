<?php
/**
 * Mappy plugin for Craft CMS 3.x
 *
 * Real Time Maps
 *
 * @link      technicalstudio.co.uk
 * @copyright Copyright (c) 2017 Tech Studio
 */

namespace mappy\mappy\services;

use mappy\mappy\Mappy;

use Craft;
use craft\base\Component;

/**
 * MappyService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Tech Studio
 * @package   Mappy
 * @since     1.0.0
 */
class MappyService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Mappy::$plugin->mappyService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (Mappy::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}
