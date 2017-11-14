<?php
/**
 * Mappy plugin for Craft CMS 3.x
 *
 * Real Time Maps
 *
 * @link      technicalstudio.co.uk
 * @copyright Copyright (c) 2017 Tech Studio
 */

namespace mappy\mappy\models;

use mappy\mappy\Mappy;

use Craft;
use craft\base\Model;

/**
 * MappyModel Model
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Tech Studio
 * @package   Mappy
 * @since     1.0.0
 */
class MappyModel extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some model attribute
     *
     * @var string
     */
    public $someAttribute = 'Some Default';

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['someAttribute', 'string'],
            ['someAttribute', 'default', 'value' => 'Some Default'],
        ];
    }
}
