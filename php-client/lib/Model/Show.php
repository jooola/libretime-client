<?php
/**
 * Show
 *
 * PHP version 7.4
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
 * OpenAPI Generator version: 6.5.0
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
 * @implements \ArrayAccess<string, mixed>
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
        'id' => 'int',
        'name' => 'string',
        'description' => 'string',
        'genre' => 'string',
        'url' => 'string',
        'image' => 'string',
        'foreground_color' => 'string',
        'background_color' => 'string',
        'live_enabled' => 'bool',
        'linked' => 'bool',
        'linkable' => 'bool',
        'auto_playlist' => 'int',
        'auto_playlist_enabled' => 'bool',
        'auto_playlist_repeat' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'genre' => null,
        'url' => null,
        'image' => null,
        'foreground_color' => null,
        'background_color' => null,
        'live_enabled' => null,
        'linked' => null,
        'linkable' => null,
        'auto_playlist' => null,
        'auto_playlist_enabled' => null,
        'auto_playlist_repeat' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'description' => true,
		'genre' => true,
		'url' => true,
		'image' => true,
		'foreground_color' => true,
		'background_color' => true,
		'live_enabled' => false,
		'linked' => false,
		'linkable' => false,
		'auto_playlist' => true,
		'auto_playlist_enabled' => false,
		'auto_playlist_repeat' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'description' => 'description',
        'genre' => 'genre',
        'url' => 'url',
        'image' => 'image',
        'foreground_color' => 'foreground_color',
        'background_color' => 'background_color',
        'live_enabled' => 'live_enabled',
        'linked' => 'linked',
        'linkable' => 'linkable',
        'auto_playlist' => 'auto_playlist',
        'auto_playlist_enabled' => 'auto_playlist_enabled',
        'auto_playlist_repeat' => 'auto_playlist_repeat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'genre' => 'setGenre',
        'url' => 'setUrl',
        'image' => 'setImage',
        'foreground_color' => 'setForegroundColor',
        'background_color' => 'setBackgroundColor',
        'live_enabled' => 'setLiveEnabled',
        'linked' => 'setLinked',
        'linkable' => 'setLinkable',
        'auto_playlist' => 'setAutoPlaylist',
        'auto_playlist_enabled' => 'setAutoPlaylistEnabled',
        'auto_playlist_repeat' => 'setAutoPlaylistRepeat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'genre' => 'getGenre',
        'url' => 'getUrl',
        'image' => 'getImage',
        'foreground_color' => 'getForegroundColor',
        'background_color' => 'getBackgroundColor',
        'live_enabled' => 'getLiveEnabled',
        'linked' => 'getLinked',
        'linkable' => 'getLinkable',
        'auto_playlist' => 'getAutoPlaylist',
        'auto_playlist_enabled' => 'getAutoPlaylistEnabled',
        'auto_playlist_repeat' => 'getAutoPlaylistRepeat'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('genre', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('foreground_color', $data ?? [], null);
        $this->setIfExists('background_color', $data ?? [], null);
        $this->setIfExists('live_enabled', $data ?? [], null);
        $this->setIfExists('linked', $data ?? [], null);
        $this->setIfExists('linkable', $data ?? [], null);
        $this->setIfExists('auto_playlist', $data ?? [], null);
        $this->setIfExists('auto_playlist_enabled', $data ?? [], null);
        $this->setIfExists('auto_playlist_repeat', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 8192)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 8192.";
        }

        if (!is_null($this->container['genre']) && (mb_strlen($this->container['genre']) > 255)) {
            $invalidProperties[] = "invalid value for 'genre', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 255)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['image']) && (mb_strlen($this->container['image']) > 255)) {
            $invalidProperties[] = "invalid value for 'image', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['foreground_color']) && (mb_strlen($this->container['foreground_color']) > 6)) {
            $invalidProperties[] = "invalid value for 'foreground_color', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['background_color']) && (mb_strlen($this->container['background_color']) > 6)) {
            $invalidProperties[] = "invalid value for 'background_color', the character length must be smaller than or equal to 6.";
        }

        if ($this->container['live_enabled'] === null) {
            $invalidProperties[] = "'live_enabled' can't be null";
        }
        if ($this->container['linked'] === null) {
            $invalidProperties[] = "'linked' can't be null";
        }
        if ($this->container['linkable'] === null) {
            $invalidProperties[] = "'linkable' can't be null";
        }
        if ($this->container['auto_playlist_enabled'] === null) {
            $invalidProperties[] = "'auto_playlist_enabled' can't be null";
        }
        if ($this->container['auto_playlist_repeat'] === null) {
            $invalidProperties[] = "'auto_playlist_repeat' can't be null";
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
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
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
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Show., must be smaller than or equal to 255.');
        }

        $this->container['name'] = $name;

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
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($description) && (mb_strlen($description) > 8192)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Show., must be smaller than or equal to 8192.');
        }

        $this->container['description'] = $description;

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
        if (is_null($genre)) {
            array_push($this->openAPINullablesSetToNull, 'genre');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('genre', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($genre) && (mb_strlen($genre) > 255)) {
            throw new \InvalidArgumentException('invalid length for $genre when calling Show., must be smaller than or equal to 255.');
        }

        $this->container['genre'] = $genre;

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
        if (is_null($url)) {
            array_push($this->openAPINullablesSetToNull, 'url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($url) && (mb_strlen($url) > 255)) {
            throw new \InvalidArgumentException('invalid length for $url when calling Show., must be smaller than or equal to 255.');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string|null $image image
     *
     * @return self
     */
    public function setImage($image)
    {
        if (is_null($image)) {
            array_push($this->openAPINullablesSetToNull, 'image');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('image', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($image) && (mb_strlen($image) > 255)) {
            throw new \InvalidArgumentException('invalid length for $image when calling Show., must be smaller than or equal to 255.');
        }

        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets foreground_color
     *
     * @return string|null
     */
    public function getForegroundColor()
    {
        return $this->container['foreground_color'];
    }

    /**
     * Sets foreground_color
     *
     * @param string|null $foreground_color foreground_color
     *
     * @return self
     */
    public function setForegroundColor($foreground_color)
    {
        if (is_null($foreground_color)) {
            array_push($this->openAPINullablesSetToNull, 'foreground_color');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('foreground_color', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($foreground_color) && (mb_strlen($foreground_color) > 6)) {
            throw new \InvalidArgumentException('invalid length for $foreground_color when calling Show., must be smaller than or equal to 6.');
        }

        $this->container['foreground_color'] = $foreground_color;

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
        if (is_null($background_color)) {
            array_push($this->openAPINullablesSetToNull, 'background_color');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('background_color', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($background_color) && (mb_strlen($background_color) > 6)) {
            throw new \InvalidArgumentException('invalid length for $background_color when calling Show., must be smaller than or equal to 6.');
        }

        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets live_enabled
     *
     * @return bool
     */
    public function getLiveEnabled()
    {
        return $this->container['live_enabled'];
    }

    /**
     * Sets live_enabled
     *
     * @param bool $live_enabled live_enabled
     *
     * @return self
     */
    public function setLiveEnabled($live_enabled)
    {
        if (is_null($live_enabled)) {
            throw new \InvalidArgumentException('non-nullable live_enabled cannot be null');
        }
        $this->container['live_enabled'] = $live_enabled;

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
        if (is_null($linked)) {
            throw new \InvalidArgumentException('non-nullable linked cannot be null');
        }
        $this->container['linked'] = $linked;

        return $this;
    }

    /**
     * Gets linkable
     *
     * @return bool
     */
    public function getLinkable()
    {
        return $this->container['linkable'];
    }

    /**
     * Sets linkable
     *
     * @param bool $linkable linkable
     *
     * @return self
     */
    public function setLinkable($linkable)
    {
        if (is_null($linkable)) {
            throw new \InvalidArgumentException('non-nullable linkable cannot be null');
        }
        $this->container['linkable'] = $linkable;

        return $this;
    }

    /**
     * Gets auto_playlist
     *
     * @return int|null
     */
    public function getAutoPlaylist()
    {
        return $this->container['auto_playlist'];
    }

    /**
     * Sets auto_playlist
     *
     * @param int|null $auto_playlist auto_playlist
     *
     * @return self
     */
    public function setAutoPlaylist($auto_playlist)
    {
        if (is_null($auto_playlist)) {
            array_push($this->openAPINullablesSetToNull, 'auto_playlist');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('auto_playlist', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['auto_playlist'] = $auto_playlist;

        return $this;
    }

    /**
     * Gets auto_playlist_enabled
     *
     * @return bool
     */
    public function getAutoPlaylistEnabled()
    {
        return $this->container['auto_playlist_enabled'];
    }

    /**
     * Sets auto_playlist_enabled
     *
     * @param bool $auto_playlist_enabled auto_playlist_enabled
     *
     * @return self
     */
    public function setAutoPlaylistEnabled($auto_playlist_enabled)
    {
        if (is_null($auto_playlist_enabled)) {
            throw new \InvalidArgumentException('non-nullable auto_playlist_enabled cannot be null');
        }
        $this->container['auto_playlist_enabled'] = $auto_playlist_enabled;

        return $this;
    }

    /**
     * Gets auto_playlist_repeat
     *
     * @return bool
     */
    public function getAutoPlaylistRepeat()
    {
        return $this->container['auto_playlist_repeat'];
    }

    /**
     * Sets auto_playlist_repeat
     *
     * @param bool $auto_playlist_repeat auto_playlist_repeat
     *
     * @return self
     */
    public function setAutoPlaylistRepeat($auto_playlist_repeat)
    {
        if (is_null($auto_playlist_repeat)) {
            throw new \InvalidArgumentException('non-nullable auto_playlist_repeat cannot be null');
        }
        $this->container['auto_playlist_repeat'] = $auto_playlist_repeat;

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


