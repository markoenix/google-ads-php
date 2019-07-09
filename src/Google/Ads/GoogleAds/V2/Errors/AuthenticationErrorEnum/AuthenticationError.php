<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/errors/authentication_error.proto

namespace Google\Ads\GoogleAds\V2\Errors\AuthenticationErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible authentication errors.
 *
 * Protobuf type <code>google.ads.googleads.v2.errors.AuthenticationErrorEnum.AuthenticationError</code>
 */
class AuthenticationError
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
     * Authentication of the request failed.
     *
     * Generated from protobuf enum <code>AUTHENTICATION_ERROR = 2;</code>
     */
    const AUTHENTICATION_ERROR = 2;
    /**
     * Client Customer Id is not a number.
     *
     * Generated from protobuf enum <code>CLIENT_CUSTOMER_ID_INVALID = 5;</code>
     */
    const CLIENT_CUSTOMER_ID_INVALID = 5;
    /**
     * No customer found for the provided customer id.
     *
     * Generated from protobuf enum <code>CUSTOMER_NOT_FOUND = 8;</code>
     */
    const CUSTOMER_NOT_FOUND = 8;
    /**
     * Client's Google Account is deleted.
     *
     * Generated from protobuf enum <code>GOOGLE_ACCOUNT_DELETED = 9;</code>
     */
    const GOOGLE_ACCOUNT_DELETED = 9;
    /**
     * Google account login token in the cookie is invalid.
     *
     * Generated from protobuf enum <code>GOOGLE_ACCOUNT_COOKIE_INVALID = 10;</code>
     */
    const GOOGLE_ACCOUNT_COOKIE_INVALID = 10;
    /**
     * A problem occurred during Google account authentication.
     *
     * Generated from protobuf enum <code>GOOGLE_ACCOUNT_AUTHENTICATION_FAILED = 25;</code>
     */
    const GOOGLE_ACCOUNT_AUTHENTICATION_FAILED = 25;
    /**
     * The user in the google account login token does not match the UserId in
     * the cookie.
     *
     * Generated from protobuf enum <code>GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH = 12;</code>
     */
    const GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH = 12;
    /**
     * Login cookie is required for authentication.
     *
     * Generated from protobuf enum <code>LOGIN_COOKIE_REQUIRED = 13;</code>
     */
    const LOGIN_COOKIE_REQUIRED = 13;
    /**
     * User in the cookie is not a valid Ads user.
     *
     * Generated from protobuf enum <code>NOT_ADS_USER = 14;</code>
     */
    const NOT_ADS_USER = 14;
    /**
     * Oauth token in the header is not valid.
     *
     * Generated from protobuf enum <code>OAUTH_TOKEN_INVALID = 15;</code>
     */
    const OAUTH_TOKEN_INVALID = 15;
    /**
     * Oauth token in the header has expired.
     *
     * Generated from protobuf enum <code>OAUTH_TOKEN_EXPIRED = 16;</code>
     */
    const OAUTH_TOKEN_EXPIRED = 16;
    /**
     * Oauth token in the header has been disabled.
     *
     * Generated from protobuf enum <code>OAUTH_TOKEN_DISABLED = 17;</code>
     */
    const OAUTH_TOKEN_DISABLED = 17;
    /**
     * Oauth token in the header has been revoked.
     *
     * Generated from protobuf enum <code>OAUTH_TOKEN_REVOKED = 18;</code>
     */
    const OAUTH_TOKEN_REVOKED = 18;
    /**
     * Oauth token HTTP header is malformed.
     *
     * Generated from protobuf enum <code>OAUTH_TOKEN_HEADER_INVALID = 19;</code>
     */
    const OAUTH_TOKEN_HEADER_INVALID = 19;
    /**
     * Login cookie is not valid.
     *
     * Generated from protobuf enum <code>LOGIN_COOKIE_INVALID = 20;</code>
     */
    const LOGIN_COOKIE_INVALID = 20;
    /**
     * User Id in the header is not a valid id.
     *
     * Generated from protobuf enum <code>USER_ID_INVALID = 22;</code>
     */
    const USER_ID_INVALID = 22;
    /**
     * An account administrator changed this account's authentication settings.
     * To access this Google Ads account, enable 2-Step Verification in your
     * Google account at https://www.google.com/landing/2step.
     *
     * Generated from protobuf enum <code>TWO_STEP_VERIFICATION_NOT_ENROLLED = 23;</code>
     */
    const TWO_STEP_VERIFICATION_NOT_ENROLLED = 23;
    /**
     * An account administrator changed this account's authentication settings.
     * To access this Google Ads account, enable Advanced Protection in your
     * Google account at https://landing.google.com/advancedprotection.
     *
     * Generated from protobuf enum <code>ADVANCED_PROTECTION_NOT_ENROLLED = 24;</code>
     */
    const ADVANCED_PROTECTION_NOT_ENROLLED = 24;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::AUTHENTICATION_ERROR => 'AUTHENTICATION_ERROR',
        self::CLIENT_CUSTOMER_ID_INVALID => 'CLIENT_CUSTOMER_ID_INVALID',
        self::CUSTOMER_NOT_FOUND => 'CUSTOMER_NOT_FOUND',
        self::GOOGLE_ACCOUNT_DELETED => 'GOOGLE_ACCOUNT_DELETED',
        self::GOOGLE_ACCOUNT_COOKIE_INVALID => 'GOOGLE_ACCOUNT_COOKIE_INVALID',
        self::GOOGLE_ACCOUNT_AUTHENTICATION_FAILED => 'GOOGLE_ACCOUNT_AUTHENTICATION_FAILED',
        self::GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH => 'GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH',
        self::LOGIN_COOKIE_REQUIRED => 'LOGIN_COOKIE_REQUIRED',
        self::NOT_ADS_USER => 'NOT_ADS_USER',
        self::OAUTH_TOKEN_INVALID => 'OAUTH_TOKEN_INVALID',
        self::OAUTH_TOKEN_EXPIRED => 'OAUTH_TOKEN_EXPIRED',
        self::OAUTH_TOKEN_DISABLED => 'OAUTH_TOKEN_DISABLED',
        self::OAUTH_TOKEN_REVOKED => 'OAUTH_TOKEN_REVOKED',
        self::OAUTH_TOKEN_HEADER_INVALID => 'OAUTH_TOKEN_HEADER_INVALID',
        self::LOGIN_COOKIE_INVALID => 'LOGIN_COOKIE_INVALID',
        self::USER_ID_INVALID => 'USER_ID_INVALID',
        self::TWO_STEP_VERIFICATION_NOT_ENROLLED => 'TWO_STEP_VERIFICATION_NOT_ENROLLED',
        self::ADVANCED_PROTECTION_NOT_ENROLLED => 'ADVANCED_PROTECTION_NOT_ENROLLED',
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
class_alias(AuthenticationError::class, \Google\Ads\GoogleAds\V2\Errors\AuthenticationErrorEnum_AuthenticationError::class);
