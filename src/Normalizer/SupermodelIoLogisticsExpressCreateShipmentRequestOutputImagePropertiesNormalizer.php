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
    class SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties();
            if (\array_key_exists('printerDPI', $data) && \is_int($data['printerDPI'])) {
                $data['printerDPI'] = (double) $data['printerDPI'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('printerDPI', $data)) {
                $object->setPrinterDPI($data['printerDPI']);
            }
            if (\array_key_exists('customerBarcodes', $data)) {
                $values = [];
                foreach ($data['customerBarcodes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem::class, 'json', $context);
                }
                $object->setCustomerBarcodes($values);
            }
            if (\array_key_exists('customerLogos', $data)) {
                $values_1 = [];
                foreach ($data['customerLogos'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem::class, 'json', $context);
                }
                $object->setCustomerLogos($values_1);
            }
            if (\array_key_exists('encodingFormat', $data)) {
                $object->setEncodingFormat($data['encodingFormat']);
            }
            if (\array_key_exists('imageOptions', $data)) {
                $values_2 = [];
                foreach ($data['imageOptions'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class, 'json', $context);
                }
                $object->setImageOptions($values_2);
            }
            if (\array_key_exists('splitTransportAndWaybillDocLabels', $data)) {
                $object->setSplitTransportAndWaybillDocLabels($data['splitTransportAndWaybillDocLabels']);
            }
            if (\array_key_exists('allDocumentsInOneImage', $data)) {
                $object->setAllDocumentsInOneImage($data['allDocumentsInOneImage']);
            }
            if (\array_key_exists('splitDocumentsByPages', $data)) {
                $object->setSplitDocumentsByPages($data['splitDocumentsByPages']);
            }
            if (\array_key_exists('splitInvoiceAndReceipt', $data)) {
                $object->setSplitInvoiceAndReceipt($data['splitInvoiceAndReceipt']);
            }
            if (\array_key_exists('receiptAndLabelsInOneImage', $data)) {
                $object->setReceiptAndLabelsInOneImage($data['receiptAndLabelsInOneImage']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('printerDPI') && null !== $object->getPrinterDPI()) {
                $data['printerDPI'] = $object->getPrinterDPI();
            }
            if ($object->isInitialized('customerBarcodes') && null !== $object->getCustomerBarcodes()) {
                $values = [];
                foreach ($object->getCustomerBarcodes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['customerBarcodes'] = $values;
            }
            if ($object->isInitialized('customerLogos') && null !== $object->getCustomerLogos()) {
                $values_1 = [];
                foreach ($object->getCustomerLogos() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['customerLogos'] = $values_1;
            }
            if ($object->isInitialized('encodingFormat') && null !== $object->getEncodingFormat()) {
                $data['encodingFormat'] = $object->getEncodingFormat();
            }
            if ($object->isInitialized('imageOptions') && null !== $object->getImageOptions()) {
                $values_2 = [];
                foreach ($object->getImageOptions() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['imageOptions'] = $values_2;
            }
            if ($object->isInitialized('splitTransportAndWaybillDocLabels') && null !== $object->getSplitTransportAndWaybillDocLabels()) {
                $data['splitTransportAndWaybillDocLabels'] = $object->getSplitTransportAndWaybillDocLabels();
            }
            if ($object->isInitialized('allDocumentsInOneImage') && null !== $object->getAllDocumentsInOneImage()) {
                $data['allDocumentsInOneImage'] = $object->getAllDocumentsInOneImage();
            }
            if ($object->isInitialized('splitDocumentsByPages') && null !== $object->getSplitDocumentsByPages()) {
                $data['splitDocumentsByPages'] = $object->getSplitDocumentsByPages();
            }
            if ($object->isInitialized('splitInvoiceAndReceipt') && null !== $object->getSplitInvoiceAndReceipt()) {
                $data['splitInvoiceAndReceipt'] = $object->getSplitInvoiceAndReceipt();
            }
            if ($object->isInitialized('receiptAndLabelsInOneImage') && null !== $object->getReceiptAndLabelsInOneImage()) {
                $data['receiptAndLabelsInOneImage'] = $object->getReceiptAndLabelsInOneImage();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties();
            if (\array_key_exists('printerDPI', $data) && \is_int($data['printerDPI'])) {
                $data['printerDPI'] = (double) $data['printerDPI'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('printerDPI', $data)) {
                $object->setPrinterDPI($data['printerDPI']);
            }
            if (\array_key_exists('customerBarcodes', $data)) {
                $values = [];
                foreach ($data['customerBarcodes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem::class, 'json', $context);
                }
                $object->setCustomerBarcodes($values);
            }
            if (\array_key_exists('customerLogos', $data)) {
                $values_1 = [];
                foreach ($data['customerLogos'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem::class, 'json', $context);
                }
                $object->setCustomerLogos($values_1);
            }
            if (\array_key_exists('encodingFormat', $data)) {
                $object->setEncodingFormat($data['encodingFormat']);
            }
            if (\array_key_exists('imageOptions', $data)) {
                $values_2 = [];
                foreach ($data['imageOptions'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class, 'json', $context);
                }
                $object->setImageOptions($values_2);
            }
            if (\array_key_exists('splitTransportAndWaybillDocLabels', $data)) {
                $object->setSplitTransportAndWaybillDocLabels($data['splitTransportAndWaybillDocLabels']);
            }
            if (\array_key_exists('allDocumentsInOneImage', $data)) {
                $object->setAllDocumentsInOneImage($data['allDocumentsInOneImage']);
            }
            if (\array_key_exists('splitDocumentsByPages', $data)) {
                $object->setSplitDocumentsByPages($data['splitDocumentsByPages']);
            }
            if (\array_key_exists('splitInvoiceAndReceipt', $data)) {
                $object->setSplitInvoiceAndReceipt($data['splitInvoiceAndReceipt']);
            }
            if (\array_key_exists('receiptAndLabelsInOneImage', $data)) {
                $object->setReceiptAndLabelsInOneImage($data['receiptAndLabelsInOneImage']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('printerDPI') && null !== $object->getPrinterDPI()) {
                $data['printerDPI'] = $object->getPrinterDPI();
            }
            if ($object->isInitialized('customerBarcodes') && null !== $object->getCustomerBarcodes()) {
                $values = [];
                foreach ($object->getCustomerBarcodes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['customerBarcodes'] = $values;
            }
            if ($object->isInitialized('customerLogos') && null !== $object->getCustomerLogos()) {
                $values_1 = [];
                foreach ($object->getCustomerLogos() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['customerLogos'] = $values_1;
            }
            if ($object->isInitialized('encodingFormat') && null !== $object->getEncodingFormat()) {
                $data['encodingFormat'] = $object->getEncodingFormat();
            }
            if ($object->isInitialized('imageOptions') && null !== $object->getImageOptions()) {
                $values_2 = [];
                foreach ($object->getImageOptions() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['imageOptions'] = $values_2;
            }
            if ($object->isInitialized('splitTransportAndWaybillDocLabels') && null !== $object->getSplitTransportAndWaybillDocLabels()) {
                $data['splitTransportAndWaybillDocLabels'] = $object->getSplitTransportAndWaybillDocLabels();
            }
            if ($object->isInitialized('allDocumentsInOneImage') && null !== $object->getAllDocumentsInOneImage()) {
                $data['allDocumentsInOneImage'] = $object->getAllDocumentsInOneImage();
            }
            if ($object->isInitialized('splitDocumentsByPages') && null !== $object->getSplitDocumentsByPages()) {
                $data['splitDocumentsByPages'] = $object->getSplitDocumentsByPages();
            }
            if ($object->isInitialized('splitInvoiceAndReceipt') && null !== $object->getSplitInvoiceAndReceipt()) {
                $data['splitInvoiceAndReceipt'] = $object->getSplitInvoiceAndReceipt();
            }
            if ($object->isInitialized('receiptAndLabelsInOneImage') && null !== $object->getReceiptAndLabelsInOneImage()) {
                $data['receiptAndLabelsInOneImage'] = $object->getReceiptAndLabelsInOneImage();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class => false];
        }
    }
}