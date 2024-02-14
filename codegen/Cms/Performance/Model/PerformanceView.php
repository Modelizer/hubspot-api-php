<?php
/**
 * PerformanceView
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Performance
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CMS Performance
 *
 * Use these endpoints to get a time series view of your website's performance.
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Cms\Performance\Model;

use \ArrayAccess;
use \HubSpot\Client\Cms\Performance\ObjectSerializer;

/**
 * PerformanceView Class Doc Comment
 *
 * @category Class
 * @description An individual time series performance data point.
 * @package  HubSpot\Client\Cms\Performance
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PerformanceView implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PerformanceView';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_403' => 'int',
        '_404' => 'int',
        '_500' => 'int',
        '_504' => 'int',
        'start_datetime' => 'string',
        'response_time_ms' => 'int',
        '_95th' => 'int',
        'total_requests' => 'int',
        'cache_hit_rate' => 'float',
        '_99th' => 'int',
        'total_request_time' => 'int',
        '_100_x' => 'int',
        '_50th' => 'int',
        'cache_hits' => 'int',
        '_20_x' => 'int',
        '_30_x' => 'int',
        '_40_x' => 'int',
        'end_timestamp' => 'int',
        '_50_x' => 'int',
        'start_timestamp' => 'int',
        'end_datetime' => 'string',
        'avg_origin_response_time' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        '_403' => 'int32',
        '_404' => 'int32',
        '_500' => 'int32',
        '_504' => 'int32',
        'start_datetime' => null,
        'response_time_ms' => 'int32',
        '_95th' => 'int32',
        'total_requests' => 'int32',
        'cache_hit_rate' => null,
        '_99th' => 'int32',
        'total_request_time' => 'int32',
        '_100_x' => 'int32',
        '_50th' => 'int32',
        'cache_hits' => 'int32',
        '_20_x' => 'int32',
        '_30_x' => 'int32',
        '_40_x' => 'int32',
        'end_timestamp' => 'int64',
        '_50_x' => 'int32',
        'start_timestamp' => 'int64',
        'end_datetime' => null,
        'avg_origin_response_time' => 'int32'
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
        '_403' => '403',
        '_404' => '404',
        '_500' => '500',
        '_504' => '504',
        'start_datetime' => 'startDatetime',
        'response_time_ms' => 'responseTimeMs',
        '_95th' => '95th',
        'total_requests' => 'totalRequests',
        'cache_hit_rate' => 'cacheHitRate',
        '_99th' => '99th',
        'total_request_time' => 'totalRequestTime',
        '_100_x' => '100X',
        '_50th' => '50th',
        'cache_hits' => 'cacheHits',
        '_20_x' => '20X',
        '_30_x' => '30X',
        '_40_x' => '40X',
        'end_timestamp' => 'endTimestamp',
        '_50_x' => '50X',
        'start_timestamp' => 'startTimestamp',
        'end_datetime' => 'endDatetime',
        'avg_origin_response_time' => 'avgOriginResponseTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_403' => 'set403',
        '_404' => 'set404',
        '_500' => 'set500',
        '_504' => 'set504',
        'start_datetime' => 'setStartDatetime',
        'response_time_ms' => 'setResponseTimeMs',
        '_95th' => 'set95th',
        'total_requests' => 'setTotalRequests',
        'cache_hit_rate' => 'setCacheHitRate',
        '_99th' => 'set99th',
        'total_request_time' => 'setTotalRequestTime',
        '_100_x' => 'set100X',
        '_50th' => 'set50th',
        'cache_hits' => 'setCacheHits',
        '_20_x' => 'set20X',
        '_30_x' => 'set30X',
        '_40_x' => 'set40X',
        'end_timestamp' => 'setEndTimestamp',
        '_50_x' => 'set50X',
        'start_timestamp' => 'setStartTimestamp',
        'end_datetime' => 'setEndDatetime',
        'avg_origin_response_time' => 'setAvgOriginResponseTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_403' => 'get403',
        '_404' => 'get404',
        '_500' => 'get500',
        '_504' => 'get504',
        'start_datetime' => 'getStartDatetime',
        'response_time_ms' => 'getResponseTimeMs',
        '_95th' => 'get95th',
        'total_requests' => 'getTotalRequests',
        'cache_hit_rate' => 'getCacheHitRate',
        '_99th' => 'get99th',
        'total_request_time' => 'getTotalRequestTime',
        '_100_x' => 'get100X',
        '_50th' => 'get50th',
        'cache_hits' => 'getCacheHits',
        '_20_x' => 'get20X',
        '_30_x' => 'get30X',
        '_40_x' => 'get40X',
        'end_timestamp' => 'getEndTimestamp',
        '_50_x' => 'get50X',
        'start_timestamp' => 'getStartTimestamp',
        'end_datetime' => 'getEndDatetime',
        'avg_origin_response_time' => 'getAvgOriginResponseTime'
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
        $this->container['_403'] = $data['_403'] ?? null;
        $this->container['_404'] = $data['_404'] ?? null;
        $this->container['_500'] = $data['_500'] ?? null;
        $this->container['_504'] = $data['_504'] ?? null;
        $this->container['start_datetime'] = $data['start_datetime'] ?? null;
        $this->container['response_time_ms'] = $data['response_time_ms'] ?? null;
        $this->container['_95th'] = $data['_95th'] ?? null;
        $this->container['total_requests'] = $data['total_requests'] ?? null;
        $this->container['cache_hit_rate'] = $data['cache_hit_rate'] ?? null;
        $this->container['_99th'] = $data['_99th'] ?? null;
        $this->container['total_request_time'] = $data['total_request_time'] ?? null;
        $this->container['_100_x'] = $data['_100_x'] ?? null;
        $this->container['_50th'] = $data['_50th'] ?? null;
        $this->container['cache_hits'] = $data['cache_hits'] ?? null;
        $this->container['_20_x'] = $data['_20_x'] ?? null;
        $this->container['_30_x'] = $data['_30_x'] ?? null;
        $this->container['_40_x'] = $data['_40_x'] ?? null;
        $this->container['end_timestamp'] = $data['end_timestamp'] ?? null;
        $this->container['_50_x'] = $data['_50_x'] ?? null;
        $this->container['start_timestamp'] = $data['start_timestamp'] ?? null;
        $this->container['end_datetime'] = $data['end_datetime'] ?? null;
        $this->container['avg_origin_response_time'] = $data['avg_origin_response_time'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['_403'] === null) {
            $invalidProperties[] = "'_403' can't be null";
        }
        if ($this->container['_404'] === null) {
            $invalidProperties[] = "'_404' can't be null";
        }
        if ($this->container['_500'] === null) {
            $invalidProperties[] = "'_500' can't be null";
        }
        if ($this->container['_504'] === null) {
            $invalidProperties[] = "'_504' can't be null";
        }
        if ($this->container['response_time_ms'] === null) {
            $invalidProperties[] = "'response_time_ms' can't be null";
        }
        if ($this->container['_95th'] === null) {
            $invalidProperties[] = "'_95th' can't be null";
        }
        if ($this->container['total_requests'] === null) {
            $invalidProperties[] = "'total_requests' can't be null";
        }
        if ($this->container['cache_hit_rate'] === null) {
            $invalidProperties[] = "'cache_hit_rate' can't be null";
        }
        if ($this->container['_99th'] === null) {
            $invalidProperties[] = "'_99th' can't be null";
        }
        if ($this->container['_100_x'] === null) {
            $invalidProperties[] = "'_100_x' can't be null";
        }
        if ($this->container['_50th'] === null) {
            $invalidProperties[] = "'_50th' can't be null";
        }
        if ($this->container['cache_hits'] === null) {
            $invalidProperties[] = "'cache_hits' can't be null";
        }
        if ($this->container['_20_x'] === null) {
            $invalidProperties[] = "'_20_x' can't be null";
        }
        if ($this->container['_30_x'] === null) {
            $invalidProperties[] = "'_30_x' can't be null";
        }
        if ($this->container['_40_x'] === null) {
            $invalidProperties[] = "'_40_x' can't be null";
        }
        if ($this->container['end_timestamp'] === null) {
            $invalidProperties[] = "'end_timestamp' can't be null";
        }
        if ($this->container['_50_x'] === null) {
            $invalidProperties[] = "'_50_x' can't be null";
        }
        if ($this->container['start_timestamp'] === null) {
            $invalidProperties[] = "'start_timestamp' can't be null";
        }
        if ($this->container['avg_origin_response_time'] === null) {
            $invalidProperties[] = "'avg_origin_response_time' can't be null";
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
     * Gets _403
     *
     * @return int
     */
    public function get403()
    {
        return $this->container['_403'];
    }

    /**
     * Sets _403
     *
     * @param int $_403 The number of responses that had an http status code of 403.
     *
     * @return self
     */
    public function set403($_403)
    {
        $this->container['_403'] = $_403;

        return $this;
    }

    /**
     * Gets _404
     *
     * @return int
     */
    public function get404()
    {
        return $this->container['_404'];
    }

    /**
     * Sets _404
     *
     * @param int $_404 The number of responses that had an http status code of 404.
     *
     * @return self
     */
    public function set404($_404)
    {
        $this->container['_404'] = $_404;

        return $this;
    }

    /**
     * Gets _500
     *
     * @return int
     */
    public function get500()
    {
        return $this->container['_500'];
    }

    /**
     * Sets _500
     *
     * @param int $_500 The number of responses that had an http status code of 500.
     *
     * @return self
     */
    public function set500($_500)
    {
        $this->container['_500'] = $_500;

        return $this;
    }

    /**
     * Gets _504
     *
     * @return int
     */
    public function get504()
    {
        return $this->container['_504'];
    }

    /**
     * Sets _504
     *
     * @param int $_504 The number of responses that had an http status code of 504.
     *
     * @return self
     */
    public function set504($_504)
    {
        $this->container['_504'] = $_504;

        return $this;
    }

    /**
     * Gets start_datetime
     *
     * @return string|null
     */
    public function getStartDatetime()
    {
        return $this->container['start_datetime'];
    }

    /**
     * Sets start_datetime
     *
     * @param string|null $start_datetime start_datetime
     *
     * @return self
     */
    public function setStartDatetime($start_datetime)
    {
        $this->container['start_datetime'] = $start_datetime;

        return $this;
    }

    /**
     * Gets response_time_ms
     *
     * @return int
     */
    public function getResponseTimeMs()
    {
        return $this->container['response_time_ms'];
    }

    /**
     * Sets response_time_ms
     *
     * @param int $response_time_ms The average response time in milliseconds.
     *
     * @return self
     */
    public function setResponseTimeMs($response_time_ms)
    {
        $this->container['response_time_ms'] = $response_time_ms;

        return $this;
    }

    /**
     * Gets _95th
     *
     * @return int
     */
    public function get95th()
    {
        return $this->container['_95th'];
    }

    /**
     * Sets _95th
     *
     * @param int $_95th The 95th percentile response time.
     *
     * @return self
     */
    public function set95th($_95th)
    {
        $this->container['_95th'] = $_95th;

        return $this;
    }

    /**
     * Gets total_requests
     *
     * @return int
     */
    public function getTotalRequests()
    {
        return $this->container['total_requests'];
    }

    /**
     * Sets total_requests
     *
     * @param int $total_requests The total number of requests received in this period.
     *
     * @return self
     */
    public function setTotalRequests($total_requests)
    {
        $this->container['total_requests'] = $total_requests;

        return $this;
    }

    /**
     * Gets cache_hit_rate
     *
     * @return float
     */
    public function getCacheHitRate()
    {
        return $this->container['cache_hit_rate'];
    }

    /**
     * Sets cache_hit_rate
     *
     * @param float $cache_hit_rate The percentage of requests that were served cached responses.
     *
     * @return self
     */
    public function setCacheHitRate($cache_hit_rate)
    {
        $this->container['cache_hit_rate'] = $cache_hit_rate;

        return $this;
    }

    /**
     * Gets _99th
     *
     * @return int
     */
    public function get99th()
    {
        return $this->container['_99th'];
    }

    /**
     * Sets _99th
     *
     * @param int $_99th The 99th percentile response time.
     *
     * @return self
     */
    public function set99th($_99th)
    {
        $this->container['_99th'] = $_99th;

        return $this;
    }

    /**
     * Gets total_request_time
     *
     * @return int|null
     */
    public function getTotalRequestTime()
    {
        return $this->container['total_request_time'];
    }

    /**
     * Sets total_request_time
     *
     * @param int|null $total_request_time total_request_time
     *
     * @return self
     */
    public function setTotalRequestTime($total_request_time)
    {
        $this->container['total_request_time'] = $total_request_time;

        return $this;
    }

    /**
     * Gets _100_x
     *
     * @return int
     */
    public function get100X()
    {
        return $this->container['_100_x'];
    }

    /**
     * Sets _100_x
     *
     * @param int $_100_x The number of responses that had an http status code between 1000-1999.
     *
     * @return self
     */
    public function set100X($_100_x)
    {
        $this->container['_100_x'] = $_100_x;

        return $this;
    }

    /**
     * Gets _50th
     *
     * @return int
     */
    public function get50th()
    {
        return $this->container['_50th'];
    }

    /**
     * Sets _50th
     *
     * @param int $_50th The 50th percentile response time.
     *
     * @return self
     */
    public function set50th($_50th)
    {
        $this->container['_50th'] = $_50th;

        return $this;
    }

    /**
     * Gets cache_hits
     *
     * @return int
     */
    public function getCacheHits()
    {
        return $this->container['cache_hits'];
    }

    /**
     * Sets cache_hits
     *
     * @param int $cache_hits The total number of requests that were served cached responses.
     *
     * @return self
     */
    public function setCacheHits($cache_hits)
    {
        $this->container['cache_hits'] = $cache_hits;

        return $this;
    }

    /**
     * Gets _20_x
     *
     * @return int
     */
    public function get20X()
    {
        return $this->container['_20_x'];
    }

    /**
     * Sets _20_x
     *
     * @param int $_20_x The number of responses that had an http status code between 200-299.
     *
     * @return self
     */
    public function set20X($_20_x)
    {
        $this->container['_20_x'] = $_20_x;

        return $this;
    }

    /**
     * Gets _30_x
     *
     * @return int
     */
    public function get30X()
    {
        return $this->container['_30_x'];
    }

    /**
     * Sets _30_x
     *
     * @param int $_30_x The number of responses that had an http status code between 300-399.
     *
     * @return self
     */
    public function set30X($_30_x)
    {
        $this->container['_30_x'] = $_30_x;

        return $this;
    }

    /**
     * Gets _40_x
     *
     * @return int
     */
    public function get40X()
    {
        return $this->container['_40_x'];
    }

    /**
     * Sets _40_x
     *
     * @param int $_40_x The number of responses that had an http status code between 400-499.
     *
     * @return self
     */
    public function set40X($_40_x)
    {
        $this->container['_40_x'] = $_40_x;

        return $this;
    }

    /**
     * Gets end_timestamp
     *
     * @return int
     */
    public function getEndTimestamp()
    {
        return $this->container['end_timestamp'];
    }

    /**
     * Sets end_timestamp
     *
     * @param int $end_timestamp The timestamp in milliseconds of the end of this interval.
     *
     * @return self
     */
    public function setEndTimestamp($end_timestamp)
    {
        $this->container['end_timestamp'] = $end_timestamp;

        return $this;
    }

    /**
     * Gets _50_x
     *
     * @return int
     */
    public function get50X()
    {
        return $this->container['_50_x'];
    }

    /**
     * Sets _50_x
     *
     * @param int $_50_x The number of responses that had an http status code between 500-599.
     *
     * @return self
     */
    public function set50X($_50_x)
    {
        $this->container['_50_x'] = $_50_x;

        return $this;
    }

    /**
     * Gets start_timestamp
     *
     * @return int
     */
    public function getStartTimestamp()
    {
        return $this->container['start_timestamp'];
    }

    /**
     * Sets start_timestamp
     *
     * @param int $start_timestamp The timestamp in milliseconds of the start of this interval.
     *
     * @return self
     */
    public function setStartTimestamp($start_timestamp)
    {
        $this->container['start_timestamp'] = $start_timestamp;

        return $this;
    }

    /**
     * Gets end_datetime
     *
     * @return string|null
     */
    public function getEndDatetime()
    {
        return $this->container['end_datetime'];
    }

    /**
     * Sets end_datetime
     *
     * @param string|null $end_datetime end_datetime
     *
     * @return self
     */
    public function setEndDatetime($end_datetime)
    {
        $this->container['end_datetime'] = $end_datetime;

        return $this;
    }

    /**
     * Gets avg_origin_response_time
     *
     * @return int
     */
    public function getAvgOriginResponseTime()
    {
        return $this->container['avg_origin_response_time'];
    }

    /**
     * Sets avg_origin_response_time
     *
     * @param int $avg_origin_response_time The average response time in milliseconds from the origin to the edge.
     *
     * @return self
     */
    public function setAvgOriginResponseTime($avg_origin_response_time)
    {
        $this->container['avg_origin_response_time'] = $avg_origin_response_time;

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


