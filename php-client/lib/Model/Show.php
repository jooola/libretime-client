<?php
/**
 * Show
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Libretime\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * LibreTime API
 *
 * Radio Broadcast & Automation Platform
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-beta
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Libretime\Client\Model;

use \ArrayAccess;
use \Libretime\Client\ObjectSerializer;

/**
 * Show Class Doc Comment
 *
 * @category Class
 * @package  Libretime\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Show implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Show';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item_url' => 'string',
        'id' => 'int',
        'name' => 'string',
        'url' => 'string',
        'genre' => 'string',
        'description' => 'string',
        'color' => 'string',
        'background_color' => 'string',
        'linked' => 'bool',
        'is_linkable' => 'bool',
        'image_path' => 'string',
        'has_autoplaylist' => 'bool',
        'autoplaylist_repeat' => 'bool',
        'autoplaylist' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'item_url' => 'uri',
        'id' => null,
        'name' => null,
        'url' => null,
        'genre' => null,
        'description' => null,
        'color' => null,
        'background_color' => null,
        'linked' => null,
        'is_linkable' => null,
        'image_path' => null,
        'has_autoplaylist' => null,
        'autoplaylist_repeat' => null,
        'autoplaylist' => 'uri'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'item_url' => 'item_url',
        'id' => 'id',
        'name' => 'name',
        'url' => 'url',
        'genre' => 'genre',
        'description' => 'description',
        'color' => 'color',
        'background_color' => 'background_color',
        'linked' => 'linked',
        'is_linkable' => 'is_linkable',
        'image_path' => 'image_path',
        'has_autoplaylist' => 'has_autoplaylist',
        'autoplaylist_repeat' => 'autoplaylist_repeat',
        'autoplaylist' => 'autoplaylist'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_url' => 'setItemUrl',
        'id' => 'setId',
        'name' => 'setName',
        'url' => 'setUrl',
        'genre' => 'setGenre',
        'description' => 'setDescription',
        'color' => 'setColor',
        'background_color' => 'setBackgroundColor',
        'linked' => 'setLinked',
        'is_linkable' => 'setIsLinkable',
        'image_path' => 'setImagePath',
        'has_autoplaylist' => 'setHasAutoplaylist',
        'autoplaylist_repeat' => 'setAutoplaylistRepeat',
        'autoplaylist' => 'setAutoplaylist'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_url' => 'getItemUrl',
        'id' => 'getId',
        'name' => 'getName',
        'url' => 'getUrl',
        'genre' => 'getGenre',
        'description' => 'getDescription',
        'color' => 'getColor',
        'background_color' => 'getBackgroundColor',
        'linked' => 'getLinked',
        'is_linkable' => 'getIsLinkable',
        'image_path' => 'getImagePath',
        'has_autoplaylist' => 'getHasAutoplaylist',
        'autoplaylist_repeat' => 'getAutoplaylistRepeat',
        'autoplaylist' => 'getAutoplaylist'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['item_url'] = $data['item_url'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['genre'] = $data['genre'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['color'] = $data['color'] ?? null;
        $this->container['background_color'] = $data['background_color'] ?? null;
        $this->container['linked'] = $data['linked'] ?? null;
        $this->container['is_linkable'] = $data['is_linkable'] ?? null;
        $this->container['image_path'] = $data['image_path'] ?? null;
        $this->container['has_autoplaylist'] = $data['has_autoplaylist'] ?? null;
        $this->container['autoplaylist_repeat'] = $data['autoplaylist_repeat'] ?? null;
        $this->container['autoplaylist'] = $data['autoplaylist'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['item_url'] === null) {
            $invalidProperties[] = "'item_url' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 255)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['genre']) && (mb_strlen($this->container['genre']) > 255)) {
            $invalidProperties[] = "invalid value for 'genre', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 8192)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 8192.";
        }

        if (!is_null($this->container['color']) && (mb_strlen($this->container['color']) > 6)) {
            $invalidProperties[] = "invalid value for 'color', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['background_color']) && (mb_strlen($this->container['background_color']) > 6)) {
            $invalidProperties[] = "invalid value for 'background_color', the character length must be smaller than or equal to 6.";
        }

        if ($this->container['linked'] === null) {
            $invalidProperties[] = "'linked' can't be null";
        }
        if ($this->container['is_linkable'] === null) {
            $invalidProperties[] = "'is_linkable' can't be null";
        }
        if (!is_null($this->container['image_path']) && (mb_strlen($this->container['image_path']) > 255)) {
            $invalidProperties[] = "invalid value for 'image_path', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['has_autoplaylist'] === null) {
            $invalidProperties[] = "'has_autoplaylist' can't be null";
        }
        if ($this->container['autoplaylist_repeat'] === null) {
            $invalidProperties[] = "'autoplaylist_repeat' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets item_url
     *
     * @return string
     */
    public function getItemUrl()
    {
        return $this->container['item_url'];
    }

    /**
     * Sets item_url
     *
     * @param string $item_url item_url
     *
     * @return self
     */
    public function setItemUrl($item_url)
    {
        $this->container['item_url'] = $item_url;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Show., must be smaller than or equal to 255.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (!is_null($url) && (mb_strlen($url) > 255)) {
            throw new \InvalidArgumentException('invalid length for $url when calling Show., must be smaller than or equal to 255.');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets genre
     *
     * @return string|null
     */
    public function getGenre()
    {
        return $this->container['genre'];
    }

    /**
     * Sets genre
     *
     * @param string|null $genre genre
     *
     * @return self
     */
    public function setGenre($genre)
    {
        if (!is_null($genre) && (mb_strlen($genre) > 255)) {
            throw new \InvalidArgumentException('invalid length for $genre when calling Show., must be smaller than or equal to 255.');
        }

        $this->container['genre'] = $genre;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 8192)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Show., must be smaller than or equal to 8192.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color color
     *
     * @return self
     */
    public function setColor($color)
    {
        if (!is_null($color) && (mb_strlen($color) > 6)) {
            throw new \InvalidArgumentException('invalid length for $color when calling Show., must be smaller than or equal to 6.');
        }

        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets background_color
     *
     * @return string|null
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param string|null $background_color background_color
     *
     * @return self
     */
    public function setBackgroundColor($background_color)
    {
        if (!is_null($background_color) && (mb_strlen($background_color) > 6)) {
            throw new \InvalidArgumentException('invalid length for $background_color when calling Show., must be smaller than or equal to 6.');
        }

        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets linked
     *
     * @return bool
     */
    public function getLinked()
    {
        return $this->container['linked'];
    }

    /**
     * Sets linked
     *
     * @param bool $linked linked
     *
     * @return self
     */
    public function setLinked($linked)
    {
        $this->container['linked'] = $linked;

        return $this;
    }

    /**
     * Gets is_linkable
     *
     * @return bool
     */
    public function getIsLinkable()
    {
        return $this->container['is_linkable'];
    }

    /**
     * Sets is_linkable
     *
     * @param bool $is_linkable is_linkable
     *
     * @return self
     */
    public function setIsLinkable($is_linkable)
    {
        $this->container['is_linkable'] = $is_linkable;

        return $this;
    }

    /**
     * Gets image_path
     *
     * @return string|null
     */
    public function getImagePath()
    {
        return $this->container['image_path'];
    }

    /**
     * Sets image_path
     *
     * @param string|null $image_path image_path
     *
     * @return self
     */
    public function setImagePath($image_path)
    {
        if (!is_null($image_path) && (mb_strlen($image_path) > 255)) {
            throw new \InvalidArgumentException('invalid length for $image_path when calling Show., must be smaller than or equal to 255.');
        }

        $this->container['image_path'] = $image_path;

        return $this;
    }

    /**
     * Gets has_autoplaylist
     *
     * @return bool
     */
    public function getHasAutoplaylist()
    {
        return $this->container['has_autoplaylist'];
    }

    /**
     * Sets has_autoplaylist
     *
     * @param bool $has_autoplaylist has_autoplaylist
     *
     * @return self
     */
    public function setHasAutoplaylist($has_autoplaylist)
    {
        $this->container['has_autoplaylist'] = $has_autoplaylist;

        return $this;
    }

    /**
     * Gets autoplaylist_repeat
     *
     * @return bool
     */
    public function getAutoplaylistRepeat()
    {
        return $this->container['autoplaylist_repeat'];
    }

    /**
     * Sets autoplaylist_repeat
     *
     * @param bool $autoplaylist_repeat autoplaylist_repeat
     *
     * @return self
     */
    public function setAutoplaylistRepeat($autoplaylist_repeat)
    {
        $this->container['autoplaylist_repeat'] = $autoplaylist_repeat;

        return $this;
    }

    /**
     * Gets autoplaylist
     *
     * @return string|null
     */
    public function getAutoplaylist()
    {
        return $this->container['autoplaylist'];
    }

    /**
     * Sets autoplaylist
     *
     * @param string|null $autoplaylist autoplaylist
     *
     * @return self
     */
    public function setAutoplaylist($autoplaylist)
    {
        $this->container['autoplaylist'] = $autoplaylist;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


