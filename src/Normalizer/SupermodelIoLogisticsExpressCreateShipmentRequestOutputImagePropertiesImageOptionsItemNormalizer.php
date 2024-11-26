<?php

namespace AntibodiesOnline\DHL\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use AntibodiesOnline\DHL\Api\Runtime\Normalizer\CheckArray;
use AntibodiesOnline\DHL\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem();
            if (\array_key_exists('numberOfCopies', $data) && \is_int($data['numberOfCopies'])) {
                $data['numberOfCopies'] = (double) $data['numberOfCopies'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('typeCode', $data)) {
                $object->setTypeCode($data['typeCode']);
            }
            if (\array_key_exists('templateName', $data)) {
                $object->setTemplateName($data['templateName']);
            }
            if (\array_key_exists('isRequested', $data)) {
                $object->setIsRequested($data['isRequested']);
            }
            if (\array_key_exists('hideAccountNumber', $data)) {
                $object->setHideAccountNumber($data['hideAccountNumber']);
            }
            if (\array_key_exists('numberOfCopies', $data)) {
                $object->setNumberOfCopies($data['numberOfCopies']);
            }
            if (\array_key_exists('invoiceType', $data)) {
                $object->setInvoiceType($data['invoiceType']);
            }
            if (\array_key_exists('languageCode', $data)) {
                $object->setLanguageCode($data['languageCode']);
            }
            if (\array_key_exists('languageCountryCode', $data)) {
                $object->setLanguageCountryCode($data['languageCountryCode']);
            }
            if (\array_key_exists('languageScriptCode', $data)) {
                $object->setLanguageScriptCode($data['languageScriptCode']);
            }
            if (\array_key_exists('encodingFormat', $data)) {
                $object->setEncodingFormat($data['encodingFormat']);
            }
            if (\array_key_exists('renderDHLLogo', $data)) {
                $object->setRenderDHLLogo($data['renderDHLLogo']);
            }
            if (\array_key_exists('fitLabelsToA4', $data)) {
                $object->setFitLabelsToA4($data['fitLabelsToA4']);
            }
            if (\array_key_exists('labelFreeText', $data)) {
                $object->setLabelFreeText($data['labelFreeText']);
            }
            if (\array_key_exists('labelCustomerDataText', $data)) {
                $object->setLabelCustomerDataText($data['labelCustomerDataText']);
            }
            if (\array_key_exists('shipmentReceiptCustomerDataText', $data)) {
                $object->setShipmentReceiptCustomerDataText($data['shipmentReceiptCustomerDataText']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['typeCode'] = $object->getTypeCode();
            if ($object->isInitialized('templateName') && null !== $object->getTemplateName()) {
                $data['templateName'] = $object->getTemplateName();
            }
            if ($object->isInitialized('isRequested') && null !== $object->getIsRequested()) {
                $data['isRequested'] = $object->getIsRequested();
            }
            if ($object->isInitialized('hideAccountNumber') && null !== $object->getHideAccountNumber()) {
                $data['hideAccountNumber'] = $object->getHideAccountNumber();
            }
            if ($object->isInitialized('numberOfCopies') && null !== $object->getNumberOfCopies()) {
                $data['numberOfCopies'] = $object->getNumberOfCopies();
            }
            if ($object->isInitialized('invoiceType') && null !== $object->getInvoiceType()) {
                $data['invoiceType'] = $object->getInvoiceType();
            }
            if ($object->isInitialized('languageCode') && null !== $object->getLanguageCode()) {
                $data['languageCode'] = $object->getLanguageCode();
            }
            if ($object->isInitialized('languageCountryCode') && null !== $object->getLanguageCountryCode()) {
                $data['languageCountryCode'] = $object->getLanguageCountryCode();
            }
            if ($object->isInitialized('languageScriptCode') && null !== $object->getLanguageScriptCode()) {
                $data['languageScriptCode'] = $object->getLanguageScriptCode();
            }
            if ($object->isInitialized('encodingFormat') && null !== $object->getEncodingFormat()) {
                $data['encodingFormat'] = $object->getEncodingFormat();
            }
            if ($object->isInitialized('renderDHLLogo') && null !== $object->getRenderDHLLogo()) {
                $data['renderDHLLogo'] = $object->getRenderDHLLogo();
            }
            if ($object->isInitialized('fitLabelsToA4') && null !== $object->getFitLabelsToA4()) {
                $data['fitLabelsToA4'] = $object->getFitLabelsToA4();
            }
            if ($object->isInitialized('labelFreeText') && null !== $object->getLabelFreeText()) {
                $data['labelFreeText'] = $object->getLabelFreeText();
            }
            if ($object->isInitialized('labelCustomerDataText') && null !== $object->getLabelCustomerDataText()) {
                $data['labelCustomerDataText'] = $object->getLabelCustomerDataText();
            }
            if ($object->isInitialized('shipmentReceiptCustomerDataText') && null !== $object->getShipmentReceiptCustomerDataText()) {
                $data['shipmentReceiptCustomerDataText'] = $object->getShipmentReceiptCustomerDataText();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem();
            if (\array_key_exists('numberOfCopies', $data) && \is_int($data['numberOfCopies'])) {
                $data['numberOfCopies'] = (double) $data['numberOfCopies'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('typeCode', $data)) {
                $object->setTypeCode($data['typeCode']);
            }
            if (\array_key_exists('templateName', $data)) {
                $object->setTemplateName($data['templateName']);
            }
            if (\array_key_exists('isRequested', $data)) {
                $object->setIsRequested($data['isRequested']);
            }
            if (\array_key_exists('hideAccountNumber', $data)) {
                $object->setHideAccountNumber($data['hideAccountNumber']);
            }
            if (\array_key_exists('numberOfCopies', $data)) {
                $object->setNumberOfCopies($data['numberOfCopies']);
            }
            if (\array_key_exists('invoiceType', $data)) {
                $object->setInvoiceType($data['invoiceType']);
            }
            if (\array_key_exists('languageCode', $data)) {
                $object->setLanguageCode($data['languageCode']);
            }
            if (\array_key_exists('languageCountryCode', $data)) {
                $object->setLanguageCountryCode($data['languageCountryCode']);
            }
            if (\array_key_exists('languageScriptCode', $data)) {
                $object->setLanguageScriptCode($data['languageScriptCode']);
            }
            if (\array_key_exists('encodingFormat', $data)) {
                $object->setEncodingFormat($data['encodingFormat']);
            }
            if (\array_key_exists('renderDHLLogo', $data)) {
                $object->setRenderDHLLogo($data['renderDHLLogo']);
            }
            if (\array_key_exists('fitLabelsToA4', $data)) {
                $object->setFitLabelsToA4($data['fitLabelsToA4']);
            }
            if (\array_key_exists('labelFreeText', $data)) {
                $object->setLabelFreeText($data['labelFreeText']);
            }
            if (\array_key_exists('labelCustomerDataText', $data)) {
                $object->setLabelCustomerDataText($data['labelCustomerDataText']);
            }
            if (\array_key_exists('shipmentReceiptCustomerDataText', $data)) {
                $object->setShipmentReceiptCustomerDataText($data['shipmentReceiptCustomerDataText']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['typeCode'] = $object->getTypeCode();
            if ($object->isInitialized('templateName') && null !== $object->getTemplateName()) {
                $data['templateName'] = $object->getTemplateName();
            }
            if ($object->isInitialized('isRequested') && null !== $object->getIsRequested()) {
                $data['isRequested'] = $object->getIsRequested();
            }
            if ($object->isInitialized('hideAccountNumber') && null !== $object->getHideAccountNumber()) {
                $data['hideAccountNumber'] = $object->getHideAccountNumber();
            }
            if ($object->isInitialized('numberOfCopies') && null !== $object->getNumberOfCopies()) {
                $data['numberOfCopies'] = $object->getNumberOfCopies();
            }
            if ($object->isInitialized('invoiceType') && null !== $object->getInvoiceType()) {
                $data['invoiceType'] = $object->getInvoiceType();
            }
            if ($object->isInitialized('languageCode') && null !== $object->getLanguageCode()) {
                $data['languageCode'] = $object->getLanguageCode();
            }
            if ($object->isInitialized('languageCountryCode') && null !== $object->getLanguageCountryCode()) {
                $data['languageCountryCode'] = $object->getLanguageCountryCode();
            }
            if ($object->isInitialized('languageScriptCode') && null !== $object->getLanguageScriptCode()) {
                $data['languageScriptCode'] = $object->getLanguageScriptCode();
            }
            if ($object->isInitialized('encodingFormat') && null !== $object->getEncodingFormat()) {
                $data['encodingFormat'] = $object->getEncodingFormat();
            }
            if ($object->isInitialized('renderDHLLogo') && null !== $object->getRenderDHLLogo()) {
                $data['renderDHLLogo'] = $object->getRenderDHLLogo();
            }
            if ($object->isInitialized('fitLabelsToA4') && null !== $object->getFitLabelsToA4()) {
                $data['fitLabelsToA4'] = $object->getFitLabelsToA4();
            }
            if ($object->isInitialized('labelFreeText') && null !== $object->getLabelFreeText()) {
                $data['labelFreeText'] = $object->getLabelFreeText();
            }
            if ($object->isInitialized('labelCustomerDataText') && null !== $object->getLabelCustomerDataText()) {
                $data['labelCustomerDataText'] = $object->getLabelCustomerDataText();
            }
            if ($object->isInitialized('shipmentReceiptCustomerDataText') && null !== $object->getShipmentReceiptCustomerDataText()) {
                $data['shipmentReceiptCustomerDataText'] = $object->getShipmentReceiptCustomerDataText();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class => false];
        }
    }
}