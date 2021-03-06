<?php

namespace Bordeux\SchemaOrg\Thing\Event;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/DeliveryEvent
 *
 *
 * -------------------------------- AccessCode ---------------------------------------------
 *
 * @property string|string[] accessCode
 *
 * @method string|string[] getAccessCode() Password, PIN, or access code needed for delivery (e.g. from a locker).
 *
 * @method DeliveryEvent setAccessCode(string $accessCode ) setAccessCode(string[] $accessCode )Password, PIN, or access code needed for delivery (e.g. from a locker).
 *
 *
 * -------------------------------- AvailableFrom ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] availableFrom
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] getAvailableFrom() When the item is available for pickup from the store, locker, etc.
 *
 * @method DeliveryEvent setAvailableFrom(\Bordeux\SchemaOrg\SchemaDateTime $availableFrom ) setAvailableFrom(\Bordeux\SchemaOrg\SchemaDateTime[] $availableFrom )When the item is available for pickup from the store, locker, etc.
 *
 *
 * -------------------------------- AvailableThrough ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] availableThrough
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] getAvailableThrough() After this date, the item will no longer be available for pickup.
 *
 * @method DeliveryEvent setAvailableThrough(\Bordeux\SchemaOrg\SchemaDateTime $availableThrough ) setAvailableThrough(\Bordeux\SchemaOrg\SchemaDateTime[] $availableThrough )After this date, the item will no longer be available for pickup.
 *
 *
 * -------------------------------- HasDeliveryMethod ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod|\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod[] hasDeliveryMethod
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod|\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod[] getHasDeliveryMethod() Method used for delivery or shipping.
 *
 * @method DeliveryEvent setHasDeliveryMethod(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod $hasDeliveryMethod ) setHasDeliveryMethod(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod[] $hasDeliveryMethod )Method used for delivery or shipping.
 *
 *
 */
 class DeliveryEvent extends \Bordeux\SchemaOrg\Thing\Event {

 }