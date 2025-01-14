<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/services/ad_group_criterion_customizer_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Services;

class AdGroupCriterionCustomizerService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
>google/ads/googleads/v11/enums/customizer_attribute_type.protogoogle.ads.googleads.v11.enums"�
CustomizerAttributeTypeEnum"e
CustomizerAttributeType
UNSPECIFIED 
UNKNOWN
TEXT

NUMBER	
PRICE
PERCENTB�
"com.google.ads.googleads.v11.enumsBCustomizerAttributeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
6google/ads/googleads/v11/common/customizer_value.protogoogle.ads.googleads.v11.commongoogle/api/field_behavior.proto"�
CustomizerValuef
type (2S.google.ads.googleads.v11.enums.CustomizerAttributeTypeEnum.CustomizerAttributeTypeB�A
string_value (	B�AB�
#com.google.ads.googleads.v11.commonBCustomizerValueProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v11/common;common�GAA�Google.Ads.GoogleAds.V11.Common�Google\\Ads\\GoogleAds\\V11\\Common�#Google::Ads::GoogleAds::V11::Commonbproto3
�
<google/ads/googleads/v11/enums/customizer_value_status.protogoogle.ads.googleads.v11.enums"l
CustomizerValueStatusEnum"O
CustomizerValueStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v11.enumsBCustomizerValueStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
:google/ads/googleads/v11/enums/response_content_type.protogoogle.ads.googleads.v11.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v11.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�	
Fgoogle/ads/googleads/v11/resources/ad_group_criterion_customizer.proto"google.ads.googleads.v11.resources<google/ads/googleads/v11/enums/customizer_value_status.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
AdGroupCriterionCustomizerR
resource_name (	B;�A�A5
3googleads.googleapis.com/AdGroupCriterionCustomizerR
ad_group_criterion (	B1�A�A+
)googleads.googleapis.com/AdGroupCriterionH �U
customizer_attribute (	B7�A�A�A.
,googleads.googleapis.com/CustomizerAttributed
status (2O.google.ads.googleads.v11.enums.CustomizerValueStatusEnum.CustomizerValueStatusB�AD
value (20.google.ads.googleads.v11.common.CustomizerValueB�A:��A�
3googleads.googleapis.com/AdGroupCriterionCustomizerjcustomers/{customer_id}/adGroupCriterionCustomizers/{ad_group_id}~{criterion_id}~{customizer_attribute_id}B
_ad_group_criterionB�
&com.google.ads.googleads.v11.resourcesBAdGroupCriterionCustomizerProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v11/resources;resources�GAA�"Google.Ads.GoogleAds.V11.Resources�"Google\\Ads\\GoogleAds\\V11\\Resources�&Google::Ads::GoogleAds::V11::Resourcesbproto3
�
Mgoogle/ads/googleads/v11/services/ad_group_criterion_customizer_service.proto!google.ads.googleads.v11.servicesFgoogle/ads/googleads/v11/resources/ad_group_criterion_customizer.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/rpc/status.proto"�
(MutateAdGroupCriterionCustomizersRequest
customer_id (	B�A_

operations (2F.google.ads.googleads.v11.services.AdGroupCriterionCustomizerOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v11.enums.ResponseContentTypeEnum.ResponseContentType"�
#AdGroupCriterionCustomizerOperationP
create (2>.google.ads.googleads.v11.resources.AdGroupCriterionCustomizerH J
remove (	B8�A5
3googleads.googleapis.com/AdGroupCriterionCustomizerH B
	operation"�
)MutateAdGroupCriterionCustomizersResponseZ
results (2I.google.ads.googleads.v11.services.MutateAdGroupCriterionCustomizerResult1
partial_failure_error (2.google.rpc.Status"�
&MutateAdGroupCriterionCustomizerResultO
resource_name (	B8�A5
3googleads.googleapis.com/AdGroupCriterionCustomizere
ad_group_criterion_customizer (2>.google.ads.googleads.v11.resources.AdGroupCriterionCustomizer2�
!AdGroupCriterionCustomizerService�
!MutateAdGroupCriterionCustomizersK.google.ads.googleads.v11.services.MutateAdGroupCriterionCustomizersRequestL.google.ads.googleads.v11.services.MutateAdGroupCriterionCustomizersResponse"e���F"A/v11/customers/{customer_id=*}/AdGroupCriterionCustomizers:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v11.servicesB&AdGroupCriterionCustomizerServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v11/services;services�GAA�!Google.Ads.GoogleAds.V11.Services�!Google\\Ads\\GoogleAds\\V11\\Services�%Google::Ads::GoogleAds::V11::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

