<?php
/**
 * PatchedPodcastEpisode
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
 * OpenAPI Generator version: 6.0.0
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
 * PatchedPodcastEpisode Class Doc Comment
 *
 * @category Class
 * @package  Libretime\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PatchedPodcastEpisode implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PatchedPodcastEpisode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item_url' => 'string',
        'publication_date' => '\DateTime',
        'download_url' => 'string',
        'episode_guid' => 'string',
        'episode_title' => 'string',
        'episode_description' => 'string',
        'file' => 'string',
        'podcast' => 'string'
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
        'publication_date' => 'date-time',
        'download_url' => null,
        'episode_guid' => null,
        'episode_title' => null,
        'episode_description' => null,
        'file' => 'uri',
        'podcast' => 'uri'
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
        'publication_date' => 'publication_date',
        'download_url' => 'download_url',
        'episode_guid' => 'episode_guid',
        'episode_title' => 'episode_title',
        'episode_description' => 'episode_description',
        'file' => 'file',
        'podcast' => 'podcast'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_url' => 'setItemUrl',
        'publication_date' => 'setPublicationDate',
        'download_url' => 'setDownloadUrl',
        'episode_guid' => 'setEpisodeGuid',
        'episode_title' => 'setEpisodeTitle',
        'episode_description' => 'setEpisodeDescription',
        'file' => 'setFile',
        'podcast' => 'setPodcast'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_url' => 'getItemUrl',
        'publication_date' => 'getPublicationDate',
        'download_url' => 'getDownloadUrl',
        'episode_guid' => 'getEpisodeGuid',
        'episode_title' => 'getEpisodeTitle',
        'episode_description' => 'getEpisodeDescription',
        'file' => 'getFile',
        'podcast' => 'getPodcast'
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
        $this->container['publication_date'] = $data['publication_date'] ?? null;
        $this->container['download_url'] = $data['download_url'] ?? null;
        $this->container['episode_guid'] = $data['episode_guid'] ?? null;
        $this->container['episode_title'] = $data['episode_title'] ?? null;
        $this->container['episode_description'] = $data['episode_description'] ?? null;
        $this->container['file'] = $data['file'] ?? null;
        $this->container['podcast'] = $data['podcast'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['download_url']) && (mb_strlen($this->container['download_url']) > 4096)) {
            $invalidProperties[] = "invalid value for 'download_url', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['episode_guid']) && (mb_strlen($this->container['episode_guid']) > 4096)) {
            $invalidProperties[] = "invalid value for 'episode_guid', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['episode_title']) && (mb_strlen($this->container['episode_title']) > 4096)) {
            $invalidProperties[] = "invalid value for 'episode_title', the character length must be smaller than or equal to 4096.";
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
     * @return string|null
     */
    public function getItemUrl()
    {
        return $this->container['item_url'];
    }

    /**
     * Sets item_url
     *
     * @param string|null $item_url item_url
     *
     * @return self
     */
    public function setItemUrl($item_url)
    {
        $this->container['item_url'] = $item_url;

        return $this;
    }

    /**
     * Gets publication_date
     *
     * @return \DateTime|null
     */
    public function getPublicationDate()
    {
        return $this->container['publication_date'];
    }

    /**
     * Sets publication_date
     *
     * @param \DateTime|null $publication_date publication_date
     *
     * @return self
     */
    public function setPublicationDate($publication_date)
    {
        $this->container['publication_date'] = $publication_date;

        return $this;
    }

    /**
     * Gets download_url
     *
     * @return string|null
     */
    public function getDownloadUrl()
    {
        return $this->container['download_url'];
    }

    /**
     * Sets download_url
     *
     * @param string|null $download_url download_url
     *
     * @return self
     */
    public function setDownloadUrl($download_url)
    {
        if (!is_null($download_url) && (mb_strlen($download_url) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $download_url when calling PatchedPodcastEpisode., must be smaller than or equal to 4096.');
        }

        $this->container['download_url'] = $download_url;

        return $this;
    }

    /**
     * Gets episode_guid
     *
     * @return string|null
     */
    public function getEpisodeGuid()
    {
        return $this->container['episode_guid'];
    }

    /**
     * Sets episode_guid
     *
     * @param string|null $episode_guid episode_guid
     *
     * @return self
     */
    public function setEpisodeGuid($episode_guid)
    {
        if (!is_null($episode_guid) && (mb_strlen($episode_guid) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $episode_guid when calling PatchedPodcastEpisode., must be smaller than or equal to 4096.');
        }

        $this->container['episode_guid'] = $episode_guid;

        return $this;
    }

    /**
     * Gets episode_title
     *
     * @return string|null
     */
    public function getEpisodeTitle()
    {
        return $this->container['episode_title'];
    }

    /**
     * Sets episode_title
     *
     * @param string|null $episode_title episode_title
     *
     * @return self
     */
    public function setEpisodeTitle($episode_title)
    {
        if (!is_null($episode_title) && (mb_strlen($episode_title) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $episode_title when calling PatchedPodcastEpisode., must be smaller than or equal to 4096.');
        }

        $this->container['episode_title'] = $episode_title;

        return $this;
    }

    /**
     * Gets episode_description
     *
     * @return string|null
     */
    public function getEpisodeDescription()
    {
        return $this->container['episode_description'];
    }

    /**
     * Sets episode_description
     *
     * @param string|null $episode_description episode_description
     *
     * @return self
     */
    public function setEpisodeDescription($episode_description)
    {
        $this->container['episode_description'] = $episode_description;

        return $this;
    }

    /**
     * Gets file
     *
     * @return string|null
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param string|null $file file
     *
     * @return self
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets podcast
     *
     * @return string|null
     */
    public function getPodcast()
    {
        return $this->container['podcast'];
    }

    /**
     * Sets podcast
     *
     * @param string|null $podcast podcast
     *
     * @return self
     */
    public function setPodcast($podcast)
    {
        $this->container['podcast'] = $podcast;

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


