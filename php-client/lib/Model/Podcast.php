<?php
/**
 * Podcast
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
 * OpenAPI Generator version: 6.3.0
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
 * Podcast Class Doc Comment
 *
 * @category Class
 * @package  Libretime\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Podcast implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Podcast';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'url' => 'string',
        'title' => 'string',
        'creator' => 'string',
        'description' => 'string',
        'language' => 'string',
        'copyright' => 'string',
        'link' => 'string',
        'itunes_author' => 'string',
        'itunes_keywords' => 'string',
        'itunes_summary' => 'string',
        'itunes_subtitle' => 'string',
        'itunes_category' => 'string',
        'itunes_explicit' => 'string',
        'owner' => 'int'
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
        'url' => null,
        'title' => null,
        'creator' => null,
        'description' => null,
        'language' => null,
        'copyright' => null,
        'link' => null,
        'itunes_author' => null,
        'itunes_keywords' => null,
        'itunes_summary' => null,
        'itunes_subtitle' => null,
        'itunes_category' => null,
        'itunes_explicit' => null,
        'owner' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'url' => false,
		'title' => false,
		'creator' => true,
		'description' => true,
		'language' => true,
		'copyright' => true,
		'link' => true,
		'itunes_author' => true,
		'itunes_keywords' => true,
		'itunes_summary' => true,
		'itunes_subtitle' => true,
		'itunes_category' => true,
		'itunes_explicit' => true,
		'owner' => true
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
        'url' => 'url',
        'title' => 'title',
        'creator' => 'creator',
        'description' => 'description',
        'language' => 'language',
        'copyright' => 'copyright',
        'link' => 'link',
        'itunes_author' => 'itunes_author',
        'itunes_keywords' => 'itunes_keywords',
        'itunes_summary' => 'itunes_summary',
        'itunes_subtitle' => 'itunes_subtitle',
        'itunes_category' => 'itunes_category',
        'itunes_explicit' => 'itunes_explicit',
        'owner' => 'owner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'url' => 'setUrl',
        'title' => 'setTitle',
        'creator' => 'setCreator',
        'description' => 'setDescription',
        'language' => 'setLanguage',
        'copyright' => 'setCopyright',
        'link' => 'setLink',
        'itunes_author' => 'setItunesAuthor',
        'itunes_keywords' => 'setItunesKeywords',
        'itunes_summary' => 'setItunesSummary',
        'itunes_subtitle' => 'setItunesSubtitle',
        'itunes_category' => 'setItunesCategory',
        'itunes_explicit' => 'setItunesExplicit',
        'owner' => 'setOwner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'url' => 'getUrl',
        'title' => 'getTitle',
        'creator' => 'getCreator',
        'description' => 'getDescription',
        'language' => 'getLanguage',
        'copyright' => 'getCopyright',
        'link' => 'getLink',
        'itunes_author' => 'getItunesAuthor',
        'itunes_keywords' => 'getItunesKeywords',
        'itunes_summary' => 'getItunesSummary',
        'itunes_subtitle' => 'getItunesSubtitle',
        'itunes_category' => 'getItunesCategory',
        'itunes_explicit' => 'getItunesExplicit',
        'owner' => 'getOwner'
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
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('creator', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('copyright', $data ?? [], null);
        $this->setIfExists('link', $data ?? [], null);
        $this->setIfExists('itunes_author', $data ?? [], null);
        $this->setIfExists('itunes_keywords', $data ?? [], null);
        $this->setIfExists('itunes_summary', $data ?? [], null);
        $this->setIfExists('itunes_subtitle', $data ?? [], null);
        $this->setIfExists('itunes_category', $data ?? [], null);
        $this->setIfExists('itunes_explicit', $data ?? [], null);
        $this->setIfExists('owner', $data ?? [], null);
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
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ((mb_strlen($this->container['url']) > 4096)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 4096.";
        }

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) > 4096)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) > 4096)) {
            $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 4096)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 4096)) {
            $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['copyright']) && (mb_strlen($this->container['copyright']) > 4096)) {
            $invalidProperties[] = "invalid value for 'copyright', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['link']) && (mb_strlen($this->container['link']) > 4096)) {
            $invalidProperties[] = "invalid value for 'link', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['itunes_author']) && (mb_strlen($this->container['itunes_author']) > 4096)) {
            $invalidProperties[] = "invalid value for 'itunes_author', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['itunes_keywords']) && (mb_strlen($this->container['itunes_keywords']) > 4096)) {
            $invalidProperties[] = "invalid value for 'itunes_keywords', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['itunes_summary']) && (mb_strlen($this->container['itunes_summary']) > 4096)) {
            $invalidProperties[] = "invalid value for 'itunes_summary', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['itunes_subtitle']) && (mb_strlen($this->container['itunes_subtitle']) > 4096)) {
            $invalidProperties[] = "invalid value for 'itunes_subtitle', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['itunes_category']) && (mb_strlen($this->container['itunes_category']) > 4096)) {
            $invalidProperties[] = "invalid value for 'itunes_category', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['itunes_explicit']) && (mb_strlen($this->container['itunes_explicit']) > 4096)) {
            $invalidProperties[] = "invalid value for 'itunes_explicit', the character length must be smaller than or equal to 4096.";
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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        if ((mb_strlen($url) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $url when calling Podcast., must be smaller than or equal to 4096.');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        if ((mb_strlen($title) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $title when calling Podcast., must be smaller than or equal to 4096.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return string|null
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param string|null $creator creator
     *
     * @return self
     */
    public function setCreator($creator)
    {
        if (is_null($creator)) {
            array_push($this->openAPINullablesSetToNull, 'creator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('creator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($creator) && (mb_strlen($creator) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $creator when calling Podcast., must be smaller than or equal to 4096.');
        }

        $this->container['creator'] = $creator;

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
        if (!is_null($description) && (mb_strlen($description) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Podcast., must be smaller than or equal to 4096.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            array_push($this->openAPINullablesSetToNull, 'language');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('language', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($language) && (mb_strlen($language) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $language when calling Podcast., must be smaller than or equal to 4096.');
        }

        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets copyright
     *
     * @return string|null
     */
    public function getCopyright()
    {
        return $this->container['copyright'];
    }

    /**
     * Sets copyright
     *
     * @param string|null $copyright copyright
     *
     * @return self
     */
    public function setCopyright($copyright)
    {
        if (is_null($copyright)) {
            array_push($this->openAPINullablesSetToNull, 'copyright');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('copyright', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($copyright) && (mb_strlen($copyright) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $copyright when calling Podcast., must be smaller than or equal to 4096.');
        }

        $this->container['copyright'] = $copyright;

        return $this;
    }

    /**
     * Gets link
     *
     * @return string|null
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string|null $link link
     *
     * @return self
     */
    public function setLink($link)
    {
        if (is_null($link)) {
            array_push($this->openAPINullablesSetToNull, 'link');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('link', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($link) && (mb_strlen($link) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $link when calling Podcast., must be smaller than or equal to 4096.');
        }

        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets itunes_author
     *
     * @return string|null
     */
    public function getItunesAuthor()
    {
        return $this->container['itunes_author'];
    }

    /**
     * Sets itunes_author
     *
     * @param string|null $itunes_author itunes_author
     *
     * @return self
     */
    public function setItunesAuthor($itunes_author)
    {
        if (is_null($itunes_author)) {
            array_push($this->openAPINullablesSetToNull, 'itunes_author');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('itunes_author', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($itunes_author) && (mb_strlen($itunes_author) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $itunes_author when calling Podcast., must be smaller than or equal to 4096.');
        }

        $this->container['itunes_author'] = $itunes_author;

        return $this;
    }

    /**
     * Gets itunes_keywords
     *
     * @return string|null
     */
    public function getItunesKeywords()
    {
        return $this->container['itunes_keywords'];
    }

    /**
     * Sets itunes_keywords
     *
     * @param string|null $itunes_keywords itunes_keywords
     *
     * @return self
     */
    public function setItunesKeywords($itunes_keywords)
    {
        if (is_null($itunes_keywords)) {
            array_push($this->openAPINullablesSetToNull, 'itunes_keywords');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('itunes_keywords', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($itunes_keywords) && (mb_strlen($itunes_keywords) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $itunes_keywords when calling Podcast., must be smaller than or equal to 4096.');
        }

        $this->container['itunes_keywords'] = $itunes_keywords;

        return $this;
    }

    /**
     * Gets itunes_summary
     *
     * @return string|null
     */
    public function getItunesSummary()
    {
        return $this->container['itunes_summary'];
    }

    /**
     * Sets itunes_summary
     *
     * @param string|null $itunes_summary itunes_summary
     *
     * @return self
     */
    public function setItunesSummary($itunes_summary)
    {
        if (is_null($itunes_summary)) {
            array_push($this->openAPINullablesSetToNull, 'itunes_summary');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('itunes_summary', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($itunes_summary) && (mb_strlen($itunes_summary) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $itunes_summary when calling Podcast., must be smaller than or equal to 4096.');
        }

        $this->container['itunes_summary'] = $itunes_summary;

        return $this;
    }

    /**
     * Gets itunes_subtitle
     *
     * @return string|null
     */
    public function getItunesSubtitle()
    {
        return $this->container['itunes_subtitle'];
    }

    /**
     * Sets itunes_subtitle
     *
     * @param string|null $itunes_subtitle itunes_subtitle
     *
     * @return self
     */
    public function setItunesSubtitle($itunes_subtitle)
    {
        if (is_null($itunes_subtitle)) {
            array_push($this->openAPINullablesSetToNull, 'itunes_subtitle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('itunes_subtitle', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($itunes_subtitle) && (mb_strlen($itunes_subtitle) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $itunes_subtitle when calling Podcast., must be smaller than or equal to 4096.');
        }

        $this->container['itunes_subtitle'] = $itunes_subtitle;

        return $this;
    }

    /**
     * Gets itunes_category
     *
     * @return string|null
     */
    public function getItunesCategory()
    {
        return $this->container['itunes_category'];
    }

    /**
     * Sets itunes_category
     *
     * @param string|null $itunes_category itunes_category
     *
     * @return self
     */
    public function setItunesCategory($itunes_category)
    {
        if (is_null($itunes_category)) {
            array_push($this->openAPINullablesSetToNull, 'itunes_category');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('itunes_category', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($itunes_category) && (mb_strlen($itunes_category) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $itunes_category when calling Podcast., must be smaller than or equal to 4096.');
        }

        $this->container['itunes_category'] = $itunes_category;

        return $this;
    }

    /**
     * Gets itunes_explicit
     *
     * @return string|null
     */
    public function getItunesExplicit()
    {
        return $this->container['itunes_explicit'];
    }

    /**
     * Sets itunes_explicit
     *
     * @param string|null $itunes_explicit itunes_explicit
     *
     * @return self
     */
    public function setItunesExplicit($itunes_explicit)
    {
        if (is_null($itunes_explicit)) {
            array_push($this->openAPINullablesSetToNull, 'itunes_explicit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('itunes_explicit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($itunes_explicit) && (mb_strlen($itunes_explicit) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $itunes_explicit when calling Podcast., must be smaller than or equal to 4096.');
        }

        $this->container['itunes_explicit'] = $itunes_explicit;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return int|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param int|null $owner owner
     *
     * @return self
     */
    public function setOwner($owner)
    {
        if (is_null($owner)) {
            array_push($this->openAPINullablesSetToNull, 'owner');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('owner', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['owner'] = $owner;

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


