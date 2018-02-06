<?php
/**
 * KQCachebuster plugin for Craft CMS 3.x
 *
 * KQCachebuster
 *
 * @link      www.kreuzundquer.ch
 * @copyright Copyright (c) 2017 kreuz+quer GmbH
 */

namespace kreuzundquer\kqcachebuster\models;

use kreuzundquer\kqcachebuster\KQCachebuster;

use Craft;
use craft\base\Model;

/**
 * KQCachebuster Settings Model
 *
 * This is a model used to define the plugin's settings.
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    kreuz+quer GmbH
 * @package   KQCachebuster
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some field model attribute
     *
     * @var string
     */
    public $pathToVersionTxt = '';
    public $cacheBusterString = '';

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
//    public function rules()
//    {
//        return [
//            ['someAttribute', 'string'],
//            ['someAttribute', 'default', 'value' => 'Some Default'],
//        ];
//    }
}
