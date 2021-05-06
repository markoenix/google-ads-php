<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/errors/authorization_error.proto

namespace Google\Ads\GoogleAds\V7\Errors\AuthorizationErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible authorization errors.
 *
 * Protobuf type <code>google.ads.googleads.v7.errors.AuthorizationErrorEnum.AuthorizationError</code>
 */
class AuthorizationError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * User doesn't have permission to access customer. Note: If you're
     * accessing a client customer, the manager's customer ID must be set in the
     * `login-customer-id` header. Learn more at
     * https://developers.google.com/google-ads/api/docs/concepts/call-structure#cid
     *
     * Generated from protobuf enum <code>USER_PERMISSION_DENIED = 2;</code>
     */
    const USER_PERMISSION_DENIED = 2;
    /**
     * The developer token is not on the allow-list.
     *
     * Generated from protobuf enum <code>DEVELOPER_TOKEN_NOT_ON_ALLOWLIST = 13;</code>
     */
    const DEVELOPER_TOKEN_NOT_ON_ALLOWLIST = 13;
    /**
     * The developer token is not allowed with the project sent in the request.
     *
     * Generated from protobuf enum <code>DEVELOPER_TOKEN_PROHIBITED = 4;</code>
     */
    const DEVELOPER_TOKEN_PROHIBITED = 4;
    /**
     * The Google Cloud project sent in the request does not have permission to
     * access the api.
     *
     * Generated from protobuf enum <code>PROJECT_DISABLED = 5;</code>
     */
    const PROJECT_DISABLED = 5;
    /**
     * Authorization of the client failed.
     *
     * Generated from protobuf enum <code>AUTHORIZATION_ERROR = 6;</code>
     */
    const AUTHORIZATION_ERROR = 6;
    /**
     * The user does not have permission to perform this action
     * (e.g., ADD, UPDATE, REMOVE) on the resource or call a method.
     *
     * Generated from protobuf enum <code>ACTION_NOT_PERMITTED = 7;</code>
     */
    const ACTION_NOT_PERMITTED = 7;
    /**
     * Signup not complete.
     *
     * Generated from protobuf enum <code>INCOMPLETE_SIGNUP = 8;</code>
     */
    const INCOMPLETE_SIGNUP = 8;
    /**
     * The customer can't be used because it isn't enabled.
     *
     * Generated from protobuf enum <code>CUSTOMER_NOT_ENABLED = 24;</code>
     */
    const CUSTOMER_NOT_ENABLED = 24;
    /**
     * The developer must sign the terms of service. They can be found here:
     * ads.google.com/aw/apicenter
     *
     * Generated from protobuf enum <code>MISSING_TOS = 9;</code>
     */
    const MISSING_TOS = 9;
    /**
     * The developer token is not approved. Non-approved developer tokens can
     * only be used with test accounts.
     *
     * Generated from protobuf enum <code>DEVELOPER_TOKEN_NOT_APPROVED = 10;</code>
     */
    const DEVELOPER_TOKEN_NOT_APPROVED = 10;
    /**
     * The login customer specified does not have access to the account
     * specified, so the request is invalid.
     *
     * Generated from protobuf enum <code>INVALID_LOGIN_CUSTOMER_ID_SERVING_CUSTOMER_ID_COMBINATION = 11;</code>
     */
    const INVALID_LOGIN_CUSTOMER_ID_SERVING_CUSTOMER_ID_COMBINATION = 11;
    /**
     * The developer specified does not have access to the service.
     *
     * Generated from protobuf enum <code>SERVICE_ACCESS_DENIED = 12;</code>
     */
    const SERVICE_ACCESS_DENIED = 12;
    /**
     * The customer (or login customer) isn't in Google Ads. It belongs to
     * another ads system.
     *
     * Generated from protobuf enum <code>ACCESS_DENIED_FOR_ACCOUNT_TYPE = 25;</code>
     */
    const ACCESS_DENIED_FOR_ACCOUNT_TYPE = 25;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::USER_PERMISSION_DENIED => 'USER_PERMISSION_DENIED',
        self::DEVELOPER_TOKEN_NOT_ON_ALLOWLIST => 'DEVELOPER_TOKEN_NOT_ON_ALLOWLIST',
        self::DEVELOPER_TOKEN_PROHIBITED => 'DEVELOPER_TOKEN_PROHIBITED',
        self::PROJECT_DISABLED => 'PROJECT_DISABLED',
        self::AUTHORIZATION_ERROR => 'AUTHORIZATION_ERROR',
        self::ACTION_NOT_PERMITTED => 'ACTION_NOT_PERMITTED',
        self::INCOMPLETE_SIGNUP => 'INCOMPLETE_SIGNUP',
        self::CUSTOMER_NOT_ENABLED => 'CUSTOMER_NOT_ENABLED',
        self::MISSING_TOS => 'MISSING_TOS',
        self::DEVELOPER_TOKEN_NOT_APPROVED => 'DEVELOPER_TOKEN_NOT_APPROVED',
        self::INVALID_LOGIN_CUSTOMER_ID_SERVING_CUSTOMER_ID_COMBINATION => 'INVALID_LOGIN_CUSTOMER_ID_SERVING_CUSTOMER_ID_COMBINATION',
        self::SERVICE_ACCESS_DENIED => 'SERVICE_ACCESS_DENIED',
        self::ACCESS_DENIED_FOR_ACCOUNT_TYPE => 'ACCESS_DENIED_FOR_ACCOUNT_TYPE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuthorizationError::class, \Google\Ads\GoogleAds\V7\Errors\AuthorizationErrorEnum_AuthorizationError::class);
