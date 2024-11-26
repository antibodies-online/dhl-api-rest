<?php

namespace AntibodiesOnline\DHL\Api\Normalizer;

use AntibodiesOnline\DHL\Api\Runtime\Normalizer\CheckArray;
use AntibodiesOnline\DHL\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAccount::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressAccountNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddress::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressAddressNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressCreateShipmentRequest::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressAddressCreateShipmentRequestNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressCreateShipmentResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressAddressCreateShipmentResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressRatesRequest::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressAddressRatesRequestNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressAddressValidateResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressAddressValidateResponseAddressItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceAreaNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressBankDetailsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressBankDetailsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressContact::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressContactNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressContactBuyer::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressContactBuyerNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressContactCreateShipmentResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressContactCreateShipmentResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestPickupNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsManufacturerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsManufacturerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBrokerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBrokerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemQuantity::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemQuantityNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCommodityCodesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCommodityCodesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemWeight::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemWeightNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomerReferencesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomerReferencesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomsDocumentsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomsDocumentsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValuesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoicePreCalculatedTotalValues::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoicePreCalculatedTotalValuesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporterNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDeliveryNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDate::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDateNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestParentShipmentNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsShipperDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsShipperDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsReceiverDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsReceiverDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceAreaNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceAreaNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDateNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDocumentImageResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressDocumentImageResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDocumentImagesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressDocumentImagesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressErrorResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressErrorResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclaration::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantityNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeightNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationInvoiceNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValuesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoicePreCalculatedTotalValues::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationInvoicePreCalculatedTotalValuesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationRemarksItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationRemarksItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationExporter::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationExporterNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressIdentifier::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressIdentifierNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressIdentifierResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressIdentifierResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressImageUploadRequest::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressImageUploadRequestNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressLandedCostRequestNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressLandedCostRequestCustomerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestChargesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressLandedCostRequestChargesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressLandedCostRequestItemsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackage::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPackageNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageDimensions::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPackageDimensionsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageLabelBarcodesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPackageLabelBarcodesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageLabelTextItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPackageLabelTextItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageRR::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPackageRRNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageRRDimensions::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPackageRRDimensionsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageReference::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPackageReferenceNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequest::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPickupRequestNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPickupResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProducts::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemWeight::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemWeightNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilitiesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilitiesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequest::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRateRequestNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestCustomerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRateRequestCustomerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRateRequestProductsAndServicesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRateRequestMonetaryAmountItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDateNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRates::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemWeight::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemWeightNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemPriceBreakdownItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemPriceBreakdownItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilitiesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilitiesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemItemsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemPriceBreakdownItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemPriceBreakdownItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesExchangeRatesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesExchangeRatesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReference::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressReferenceNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRegistrationNumbers::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRegistrationNumbersNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddress::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddressNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddress::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddressNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemServiceAreaItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemServiceAreaItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensionsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensionsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemServiceAreaItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemServiceAreaItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUpdatePickupRequestNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUpdatePickupResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequest::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestContentNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsManufacturerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsManufacturerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBrokerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBrokerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContent::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContentNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImageProperties::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBrokerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBrokerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServices::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressValueAddedServicesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesRates::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressValueAddedServicesRatesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressEPODResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressEPODResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressEPODResponseDocumentsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressEPODResponseDocumentsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReferenceDataResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressReferenceDataResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReferenceData::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressReferenceDataNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReferenceDataDataItemItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressReferenceDataDataItemItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\Address::class => \AntibodiesOnline\DHL\Api\Normalizer\AddressNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\CapacityStatus::class => \AntibodiesOnline\DHL\Api\Normalizer\CapacityStatusNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\Chronology::class => \AntibodiesOnline\DHL\Api\Normalizer\ChronologyNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\ClosedDates::class => \AntibodiesOnline\DHL\Api\Normalizer\ClosedDatesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\ContactDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\ContactDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\DateTimeField::class => \AntibodiesOnline\DHL\Api\Normalizer\DateTimeFieldNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\DateTimeFieldType::class => \AntibodiesOnline\DHL\Api\Normalizer\DateTimeFieldTypeNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\DateTimeZone::class => \AntibodiesOnline\DHL\Api\Normalizer\DateTimeZoneNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\Dimensions::class => \AntibodiesOnline\DHL\Api\Normalizer\DimensionsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\DurationField::class => \AntibodiesOnline\DHL\Api\Normalizer\DurationFieldNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\DurationFieldType::class => \AntibodiesOnline\DHL\Api\Normalizer\DurationFieldTypeNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\GeoLocation::class => \AntibodiesOnline\DHL\Api\Normalizer\GeoLocationNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\Holidays::class => \AntibodiesOnline\DHL\Api\Normalizer\HolidaysNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\Language::class => \AntibodiesOnline\DHL\Api\Normalizer\LanguageNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\LocalTime::class => \AntibodiesOnline\DHL\Api\Normalizer\LocalTimeNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\OpenDatesTime::class => \AntibodiesOnline\DHL\Api\Normalizer\OpenDatesTimeNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\OpeningHours::class => \AntibodiesOnline\DHL\Api\Normalizer\OpeningHoursNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\OpeningTime::class => \AntibodiesOnline\DHL\Api\Normalizer\OpeningTimeNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\Partner::class => \AntibodiesOnline\DHL\Api\Normalizer\PartnerNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\Promotion::class => \AntibodiesOnline\DHL\Api\Normalizer\PromotionNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\RestResponseStatus::class => \AntibodiesOnline\DHL\Api\Normalizer\RestResponseStatusNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\ServicePoint::class => \AntibodiesOnline\DHL\Api\Normalizer\ServicePointNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\ServicePointCapabilities::class => \AntibodiesOnline\DHL\Api\Normalizer\ServicePointCapabilitiesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\ServicePointsRestResponseV3::class => \AntibodiesOnline\DHL\Api\Normalizer\ServicePointsRestResponseV3Normalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\ShipmentLimitations::class => \AntibodiesOnline\DHL\Api\Normalizer\ShipmentLimitationsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\ShipmentLimitationsByPiece::class => \AntibodiesOnline\DHL\Api\Normalizer\ShipmentLimitationsByPieceNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\Suggestion::class => \AntibodiesOnline\DHL\Api\Normalizer\SuggestionNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\Translations::class => \AntibodiesOnline\DHL\Api\Normalizer\TranslationsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\ValueUnit::class => \AntibodiesOnline\DHL\Api\Normalizer\ValueUnitNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\ExceptionResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\ExceptionResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressDeliveryOptionsResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemParametersItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemParametersItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemDeliveryWindowsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemDeliveryWindowsItemNormalizer::class,
            
            \Jane\Component\JsonSchemaRuntime\Reference::class => \AntibodiesOnline\DHL\Api\Runtime\Normalizer\ReferenceNormalizer::class,
        ], $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [
                
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAccount::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddress::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressCreateShipmentRequest::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressCreateShipmentResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressRatesRequest::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressBankDetailsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressContact::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressContactBuyer::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressContactCreateShipmentResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsManufacturerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBrokerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemQuantity::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCommodityCodesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemWeight::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomerReferencesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomsDocumentsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoicePreCalculatedTotalValues::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDate::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsShipperDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsReceiverDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDocumentImageResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDocumentImagesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressErrorResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclaration::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoicePreCalculatedTotalValues::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationRemarksItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationExporter::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressIdentifier::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressIdentifierResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressImageUploadRequest::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestChargesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackage::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageDimensions::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageLabelBarcodesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageLabelTextItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageRR::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageRRDimensions::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageReference::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequest::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProducts::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemWeight::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequest::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestCustomerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRates::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemWeight::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemPriceBreakdownItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemPriceBreakdownItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesExchangeRatesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReference::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRegistrationNumbers::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddress::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddress::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemServiceAreaItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemServiceAreaItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequest::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsManufacturerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBrokerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContent::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImageProperties::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBrokerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServices::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesRates::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressEPODResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressEPODResponseDocumentsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReferenceDataResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReferenceData::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReferenceDataDataItemItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\Address::class => false,
                \AntibodiesOnline\DHL\Api\Model\CapacityStatus::class => false,
                \AntibodiesOnline\DHL\Api\Model\Chronology::class => false,
                \AntibodiesOnline\DHL\Api\Model\ClosedDates::class => false,
                \AntibodiesOnline\DHL\Api\Model\ContactDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\DateTimeField::class => false,
                \AntibodiesOnline\DHL\Api\Model\DateTimeFieldType::class => false,
                \AntibodiesOnline\DHL\Api\Model\DateTimeZone::class => false,
                \AntibodiesOnline\DHL\Api\Model\Dimensions::class => false,
                \AntibodiesOnline\DHL\Api\Model\DurationField::class => false,
                \AntibodiesOnline\DHL\Api\Model\DurationFieldType::class => false,
                \AntibodiesOnline\DHL\Api\Model\GeoLocation::class => false,
                \AntibodiesOnline\DHL\Api\Model\Holidays::class => false,
                \AntibodiesOnline\DHL\Api\Model\Language::class => false,
                \AntibodiesOnline\DHL\Api\Model\LocalTime::class => false,
                \AntibodiesOnline\DHL\Api\Model\OpenDatesTime::class => false,
                \AntibodiesOnline\DHL\Api\Model\OpeningHours::class => false,
                \AntibodiesOnline\DHL\Api\Model\OpeningTime::class => false,
                \AntibodiesOnline\DHL\Api\Model\Partner::class => false,
                \AntibodiesOnline\DHL\Api\Model\Promotion::class => false,
                \AntibodiesOnline\DHL\Api\Model\RestResponseStatus::class => false,
                \AntibodiesOnline\DHL\Api\Model\ServicePoint::class => false,
                \AntibodiesOnline\DHL\Api\Model\ServicePointCapabilities::class => false,
                \AntibodiesOnline\DHL\Api\Model\ServicePointsRestResponseV3::class => false,
                \AntibodiesOnline\DHL\Api\Model\ShipmentLimitations::class => false,
                \AntibodiesOnline\DHL\Api\Model\ShipmentLimitationsByPiece::class => false,
                \AntibodiesOnline\DHL\Api\Model\Suggestion::class => false,
                \AntibodiesOnline\DHL\Api\Model\Translations::class => false,
                \AntibodiesOnline\DHL\Api\Model\ValueUnit::class => false,
                \AntibodiesOnline\DHL\Api\Model\ExceptionResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemParametersItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemDeliveryWindowsItem::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAccount::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressAccountNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddress::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressAddressNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressCreateShipmentRequest::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressAddressCreateShipmentRequestNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressCreateShipmentResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressAddressCreateShipmentResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressRatesRequest::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressAddressRatesRequestNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressAddressValidateResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressAddressValidateResponseAddressItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceAreaNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressBankDetailsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressBankDetailsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressContact::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressContactNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressContactBuyer::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressContactBuyerNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressContactCreateShipmentResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressContactCreateShipmentResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestPickupNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsManufacturerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsManufacturerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBrokerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBrokerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemQuantity::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemQuantityNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCommodityCodesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCommodityCodesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemWeight::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemWeightNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomerReferencesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomerReferencesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomsDocumentsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomsDocumentsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValuesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoicePreCalculatedTotalValues::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoicePreCalculatedTotalValuesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporterNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDeliveryNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDate::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDateNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentRequestParentShipmentNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsShipperDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsShipperDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsReceiverDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsReceiverDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceAreaNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceAreaNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDateNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDocumentImageResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressDocumentImageResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDocumentImagesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressDocumentImagesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressErrorResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressErrorResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclaration::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantityNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeightNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationInvoiceNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValuesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoicePreCalculatedTotalValues::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationInvoicePreCalculatedTotalValuesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationRemarksItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationRemarksItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationExporter::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationExporterNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressIdentifier::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressIdentifierNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressIdentifierResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressIdentifierResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressImageUploadRequest::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressImageUploadRequestNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressLandedCostRequestNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressLandedCostRequestCustomerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestChargesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressLandedCostRequestChargesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressLandedCostRequestItemsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackage::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPackageNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageDimensions::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPackageDimensionsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageLabelBarcodesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPackageLabelBarcodesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageLabelTextItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPackageLabelTextItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageRR::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPackageRRNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageRRDimensions::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPackageRRDimensionsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageReference::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPackageReferenceNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequest::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPickupRequestNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressPickupResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProducts::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemWeight::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemWeightNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilitiesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilitiesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequest::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRateRequestNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestCustomerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRateRequestCustomerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRateRequestProductsAndServicesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRateRequestMonetaryAmountItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDateNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRates::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemWeight::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemWeightNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemPriceBreakdownItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemPriceBreakdownItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilitiesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilitiesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemItemsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemPriceBreakdownItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemPriceBreakdownItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesExchangeRatesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRatesExchangeRatesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReference::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressReferenceNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRegistrationNumbers::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressRegistrationNumbersNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddress::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddressNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddress::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddressNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemServiceAreaItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemServiceAreaItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensionsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensionsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemServiceAreaItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemServiceAreaItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUpdatePickupRequestNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUpdatePickupResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequest::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestContentNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsManufacturerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsManufacturerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBrokerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBrokerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContent::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContentNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImageProperties::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBrokerDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBrokerDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressUploadInvoiceDataResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServices::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressValueAddedServicesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesRates::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressValueAddedServicesRatesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressEPODResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressEPODResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressEPODResponseDocumentsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressEPODResponseDocumentsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReferenceDataResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressReferenceDataResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReferenceData::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressReferenceDataNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReferenceDataDataItemItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressReferenceDataDataItemItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\Address::class => \AntibodiesOnline\DHL\Api\Normalizer\AddressNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\CapacityStatus::class => \AntibodiesOnline\DHL\Api\Normalizer\CapacityStatusNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\Chronology::class => \AntibodiesOnline\DHL\Api\Normalizer\ChronologyNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\ClosedDates::class => \AntibodiesOnline\DHL\Api\Normalizer\ClosedDatesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\ContactDetails::class => \AntibodiesOnline\DHL\Api\Normalizer\ContactDetailsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\DateTimeField::class => \AntibodiesOnline\DHL\Api\Normalizer\DateTimeFieldNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\DateTimeFieldType::class => \AntibodiesOnline\DHL\Api\Normalizer\DateTimeFieldTypeNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\DateTimeZone::class => \AntibodiesOnline\DHL\Api\Normalizer\DateTimeZoneNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\Dimensions::class => \AntibodiesOnline\DHL\Api\Normalizer\DimensionsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\DurationField::class => \AntibodiesOnline\DHL\Api\Normalizer\DurationFieldNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\DurationFieldType::class => \AntibodiesOnline\DHL\Api\Normalizer\DurationFieldTypeNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\GeoLocation::class => \AntibodiesOnline\DHL\Api\Normalizer\GeoLocationNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\Holidays::class => \AntibodiesOnline\DHL\Api\Normalizer\HolidaysNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\Language::class => \AntibodiesOnline\DHL\Api\Normalizer\LanguageNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\LocalTime::class => \AntibodiesOnline\DHL\Api\Normalizer\LocalTimeNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\OpenDatesTime::class => \AntibodiesOnline\DHL\Api\Normalizer\OpenDatesTimeNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\OpeningHours::class => \AntibodiesOnline\DHL\Api\Normalizer\OpeningHoursNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\OpeningTime::class => \AntibodiesOnline\DHL\Api\Normalizer\OpeningTimeNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\Partner::class => \AntibodiesOnline\DHL\Api\Normalizer\PartnerNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\Promotion::class => \AntibodiesOnline\DHL\Api\Normalizer\PromotionNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\RestResponseStatus::class => \AntibodiesOnline\DHL\Api\Normalizer\RestResponseStatusNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\ServicePoint::class => \AntibodiesOnline\DHL\Api\Normalizer\ServicePointNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\ServicePointCapabilities::class => \AntibodiesOnline\DHL\Api\Normalizer\ServicePointCapabilitiesNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\ServicePointsRestResponseV3::class => \AntibodiesOnline\DHL\Api\Normalizer\ServicePointsRestResponseV3Normalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\ShipmentLimitations::class => \AntibodiesOnline\DHL\Api\Normalizer\ShipmentLimitationsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\ShipmentLimitationsByPiece::class => \AntibodiesOnline\DHL\Api\Normalizer\ShipmentLimitationsByPieceNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\Suggestion::class => \AntibodiesOnline\DHL\Api\Normalizer\SuggestionNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\Translations::class => \AntibodiesOnline\DHL\Api\Normalizer\TranslationsNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\ValueUnit::class => \AntibodiesOnline\DHL\Api\Normalizer\ValueUnitNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\ExceptionResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\ExceptionResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponse::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressDeliveryOptionsResponseNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemParametersItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemParametersItemNormalizer::class,
            
            \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemDeliveryWindowsItem::class => \AntibodiesOnline\DHL\Api\Normalizer\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemDeliveryWindowsItemNormalizer::class,
            
            \Jane\Component\JsonSchemaRuntime\Reference::class => \AntibodiesOnline\DHL\Api\Runtime\Normalizer\ReferenceNormalizer::class,
        ], $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [
                
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAccount::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddress::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressCreateShipmentRequest::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressCreateShipmentResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressRatesRequest::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressBankDetailsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressContact::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressContactBuyer::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressContactCreateShipmentResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsManufacturerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBrokerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemQuantity::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCommodityCodesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemWeight::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomerReferencesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomsDocumentsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoicePreCalculatedTotalValues::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDate::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsShipperDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsReceiverDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDocumentImageResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDocumentImagesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressErrorResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclaration::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoicePreCalculatedTotalValues::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationRemarksItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationExporter::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressIdentifier::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressIdentifierResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressImageUploadRequest::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestChargesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackage::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageDimensions::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageLabelBarcodesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageLabelTextItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageRR::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageRRDimensions::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageReference::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequest::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProducts::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemWeight::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequest::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestCustomerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRates::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemWeight::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemPriceBreakdownItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemPriceBreakdownItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesExchangeRatesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReference::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRegistrationNumbers::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddress::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddress::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemServiceAreaItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemServiceAreaItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequest::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsManufacturerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBrokerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContent::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImageProperties::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBrokerDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServices::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesRates::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressEPODResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressEPODResponseDocumentsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReferenceDataResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReferenceData::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReferenceDataDataItemItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\Address::class => false,
                \AntibodiesOnline\DHL\Api\Model\CapacityStatus::class => false,
                \AntibodiesOnline\DHL\Api\Model\Chronology::class => false,
                \AntibodiesOnline\DHL\Api\Model\ClosedDates::class => false,
                \AntibodiesOnline\DHL\Api\Model\ContactDetails::class => false,
                \AntibodiesOnline\DHL\Api\Model\DateTimeField::class => false,
                \AntibodiesOnline\DHL\Api\Model\DateTimeFieldType::class => false,
                \AntibodiesOnline\DHL\Api\Model\DateTimeZone::class => false,
                \AntibodiesOnline\DHL\Api\Model\Dimensions::class => false,
                \AntibodiesOnline\DHL\Api\Model\DurationField::class => false,
                \AntibodiesOnline\DHL\Api\Model\DurationFieldType::class => false,
                \AntibodiesOnline\DHL\Api\Model\GeoLocation::class => false,
                \AntibodiesOnline\DHL\Api\Model\Holidays::class => false,
                \AntibodiesOnline\DHL\Api\Model\Language::class => false,
                \AntibodiesOnline\DHL\Api\Model\LocalTime::class => false,
                \AntibodiesOnline\DHL\Api\Model\OpenDatesTime::class => false,
                \AntibodiesOnline\DHL\Api\Model\OpeningHours::class => false,
                \AntibodiesOnline\DHL\Api\Model\OpeningTime::class => false,
                \AntibodiesOnline\DHL\Api\Model\Partner::class => false,
                \AntibodiesOnline\DHL\Api\Model\Promotion::class => false,
                \AntibodiesOnline\DHL\Api\Model\RestResponseStatus::class => false,
                \AntibodiesOnline\DHL\Api\Model\ServicePoint::class => false,
                \AntibodiesOnline\DHL\Api\Model\ServicePointCapabilities::class => false,
                \AntibodiesOnline\DHL\Api\Model\ServicePointsRestResponseV3::class => false,
                \AntibodiesOnline\DHL\Api\Model\ShipmentLimitations::class => false,
                \AntibodiesOnline\DHL\Api\Model\ShipmentLimitationsByPiece::class => false,
                \AntibodiesOnline\DHL\Api\Model\Suggestion::class => false,
                \AntibodiesOnline\DHL\Api\Model\Translations::class => false,
                \AntibodiesOnline\DHL\Api\Model\ValueUnit::class => false,
                \AntibodiesOnline\DHL\Api\Model\ExceptionResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponse::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemParametersItem::class => false,
                \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemDeliveryWindowsItem::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
}