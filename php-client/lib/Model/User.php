<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @category Class
 * @package  Libretime\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class User implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'role' => '\Libretime\Client\Model\RoleEnum',
        'username' => 'string',
        'email' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'login_attempts' => 'int',
        'last_login' => '\DateTime',
        'last_failed_login' => '\DateTime',
        'skype' => 'string',
        'jabber' => 'string',
        'phone' => 'string'
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
        'role' => null,
        'username' => null,
        'email' => null,
        'first_name' => null,
        'last_name' => null,
        'login_attempts' => null,
        'last_login' => 'date-time',
        'last_failed_login' => 'date-time',
        'skype' => null,
        'jabber' => null,
        'phone' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'role' => false,
		'username' => false,
		'email' => true,
		'first_name' => false,
		'last_name' => false,
		'login_attempts' => true,
		'last_login' => true,
		'last_failed_login' => true,
		'skype' => true,
		'jabber' => true,
		'phone' => true
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
        'role' => 'role',
        'username' => 'username',
        'email' => 'email',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'login_attempts' => 'login_attempts',
        'last_login' => 'last_login',
        'last_failed_login' => 'last_failed_login',
        'skype' => 'skype',
        'jabber' => 'jabber',
        'phone' => 'phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'role' => 'setRole',
        'username' => 'setUsername',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'login_attempts' => 'setLoginAttempts',
        'last_login' => 'setLastLogin',
        'last_failed_login' => 'setLastFailedLogin',
        'skype' => 'setSkype',
        'jabber' => 'setJabber',
        'phone' => 'setPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'role' => 'getRole',
        'username' => 'getUsername',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'login_attempts' => 'getLoginAttempts',
        'last_login' => 'getLastLogin',
        'last_failed_login' => 'getLastFailedLogin',
        'skype' => 'getSkype',
        'jabber' => 'getJabber',
        'phone' => 'getPhone'
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
        $this->setIfExists('role', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('login_attempts', $data ?? [], null);
        $this->setIfExists('last_login', $data ?? [], null);
        $this->setIfExists('last_failed_login', $data ?? [], null);
        $this->setIfExists('skype', $data ?? [], null);
        $this->setIfExists('jabber', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
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
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        if ((mb_strlen($this->container['username']) > 255)) {
            $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 1024)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 1024.";
        }

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ((mb_strlen($this->container['first_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ((mb_strlen($this->container['last_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['login_attempts']) && ($this->container['login_attempts'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'login_attempts', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['login_attempts']) && ($this->container['login_attempts'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'login_attempts', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['skype']) && (mb_strlen($this->container['skype']) > 1024)) {
            $invalidProperties[] = "invalid value for 'skype', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['jabber']) && (mb_strlen($this->container['jabber']) > 1024)) {
            $invalidProperties[] = "invalid value for 'jabber', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 1024)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 1024.";
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
     * Gets role
     *
     * @return \Libretime\Client\Model\RoleEnum
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param \Libretime\Client\Model\RoleEnum $role role
     *
     * @return self
     */
    public function setRole($role)
    {
        if (is_null($role)) {
            throw new \InvalidArgumentException('non-nullable role cannot be null');
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (is_null($username)) {
            throw new \InvalidArgumentException('non-nullable username cannot be null');
        }
        if ((mb_strlen($username) > 255)) {
            throw new \InvalidArgumentException('invalid length for $username when calling User., must be smaller than or equal to 255.');
        }

        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            array_push($this->openAPINullablesSetToNull, 'email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($email) && (mb_strlen($email) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $email when calling User., must be smaller than or equal to 1024.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        if ((mb_strlen($first_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling User., must be smaller than or equal to 255.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        if ((mb_strlen($last_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling User., must be smaller than or equal to 255.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets login_attempts
     *
     * @return int|null
     */
    public function getLoginAttempts()
    {
        return $this->container['login_attempts'];
    }

    /**
     * Sets login_attempts
     *
     * @param int|null $login_attempts login_attempts
     *
     * @return self
     */
    public function setLoginAttempts($login_attempts)
    {
        if (is_null($login_attempts)) {
            array_push($this->openAPINullablesSetToNull, 'login_attempts');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('login_attempts', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($login_attempts) && ($login_attempts > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $login_attempts when calling User., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($login_attempts) && ($login_attempts < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $login_attempts when calling User., must be bigger than or equal to -2147483648.');
        }

        $this->container['login_attempts'] = $login_attempts;

        return $this;
    }

    /**
     * Gets last_login
     *
     * @return \DateTime|null
     */
    public function getLastLogin()
    {
        return $this->container['last_login'];
    }

    /**
     * Sets last_login
     *
     * @param \DateTime|null $last_login last_login
     *
     * @return self
     */
    public function setLastLogin($last_login)
    {
        if (is_null($last_login)) {
            array_push($this->openAPINullablesSetToNull, 'last_login');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_login', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_login'] = $last_login;

        return $this;
    }

    /**
     * Gets last_failed_login
     *
     * @return \DateTime|null
     */
    public function getLastFailedLogin()
    {
        return $this->container['last_failed_login'];
    }

    /**
     * Sets last_failed_login
     *
     * @param \DateTime|null $last_failed_login last_failed_login
     *
     * @return self
     */
    public function setLastFailedLogin($last_failed_login)
    {
        if (is_null($last_failed_login)) {
            array_push($this->openAPINullablesSetToNull, 'last_failed_login');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_failed_login', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_failed_login'] = $last_failed_login;

        return $this;
    }

    /**
     * Gets skype
     *
     * @return string|null
     */
    public function getSkype()
    {
        return $this->container['skype'];
    }

    /**
     * Sets skype
     *
     * @param string|null $skype skype
     *
     * @return self
     */
    public function setSkype($skype)
    {
        if (is_null($skype)) {
            array_push($this->openAPINullablesSetToNull, 'skype');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('skype', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($skype) && (mb_strlen($skype) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $skype when calling User., must be smaller than or equal to 1024.');
        }

        $this->container['skype'] = $skype;

        return $this;
    }

    /**
     * Gets jabber
     *
     * @return string|null
     */
    public function getJabber()
    {
        return $this->container['jabber'];
    }

    /**
     * Sets jabber
     *
     * @param string|null $jabber jabber
     *
     * @return self
     */
    public function setJabber($jabber)
    {
        if (is_null($jabber)) {
            array_push($this->openAPINullablesSetToNull, 'jabber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('jabber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($jabber) && (mb_strlen($jabber) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $jabber when calling User., must be smaller than or equal to 1024.');
        }

        $this->container['jabber'] = $jabber;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            array_push($this->openAPINullablesSetToNull, 'phone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($phone) && (mb_strlen($phone) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling User., must be smaller than or equal to 1024.');
        }

        $this->container['phone'] = $phone;

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


