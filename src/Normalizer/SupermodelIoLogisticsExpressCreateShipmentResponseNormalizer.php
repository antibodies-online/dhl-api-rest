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
    class SupermodelIoLogisticsExpressCreateShipmentResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
            }
            if (\array_key_exists('shipmentTrackingNumber', $data)) {
                $object->setShipmentTrackingNumber($data['shipmentTrackingNumber']);
            }
            if (\array_key_exists('cancelPickupUrl', $data)) {
                $object->setCancelPickupUrl($data['cancelPickupUrl']);
            }
            if (\array_key_exists('trackingUrl', $data)) {
                $object->setTrackingUrl($data['trackingUrl']);
            }
            if (\array_key_exists('dispatchConfirmationNumber', $data)) {
                $object->setDispatchConfirmationNumber($data['dispatchConfirmationNumber']);
            }
            if (\array_key_exists('packages', $data)) {
                $values = [];
                foreach ($data['packages'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem::class, 'json', $context);
                }
                $object->setPackages($values);
            }
            if (\array_key_exists('documents', $data)) {
                $values_1 = [];
                foreach ($data['documents'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem::class, 'json', $context);
                }
                $object->setDocuments($values_1);
            }
            if (\array_key_exists('onDemandDeliveryURL', $data)) {
                $object->setOnDemandDeliveryURL($data['onDemandDeliveryURL']);
            }
            if (\array_key_exists('shipmentDetails', $data)) {
                $values_2 = [];
                foreach ($data['shipmentDetails'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class, 'json', $context);
                }
                $object->setShipmentDetails($values_2);
            }
            if (\array_key_exists('shipmentCharges', $data)) {
                $values_3 = [];
                foreach ($data['shipmentCharges'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem::class, 'json', $context);
                }
                $object->setShipmentCharges($values_3);
            }
            if (\array_key_exists('barcodeInfo', $data)) {
                $object->setBarcodeInfo($this->denormalizer->denormalize($data['barcodeInfo'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo::class, 'json', $context));
            }
            if (\array_key_exists('estimatedDeliveryDate', $data)) {
                $object->setEstimatedDeliveryDate($this->denormalizer->denormalize($data['estimatedDeliveryDate'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate::class, 'json', $context));
            }
            if (\array_key_exists('warnings', $data)) {
                $values_4 = [];
                foreach ($data['warnings'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setWarnings($values_4);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }
            if ($object->isInitialized('shipmentTrackingNumber') && null !== $object->getShipmentTrackingNumber()) {
                $data['shipmentTrackingNumber'] = $object->getShipmentTrackingNumber();
            }
            if ($object->isInitialized('cancelPickupUrl') && null !== $object->getCancelPickupUrl()) {
                $data['cancelPickupUrl'] = $object->getCancelPickupUrl();
            }
            if ($object->isInitialized('trackingUrl') && null !== $object->getTrackingUrl()) {
                $data['trackingUrl'] = $object->getTrackingUrl();
            }
            if ($object->isInitialized('dispatchConfirmationNumber') && null !== $object->getDispatchConfirmationNumber()) {
                $data['dispatchConfirmationNumber'] = $object->getDispatchConfirmationNumber();
            }
            if ($object->isInitialized('packages') && null !== $object->getPackages()) {
                $values = [];
                foreach ($object->getPackages() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['packages'] = $values;
            }
            if ($object->isInitialized('documents') && null !== $object->getDocuments()) {
                $values_1 = [];
                foreach ($object->getDocuments() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['documents'] = $values_1;
            }
            if ($object->isInitialized('onDemandDeliveryURL') && null !== $object->getOnDemandDeliveryURL()) {
                $data['onDemandDeliveryURL'] = $object->getOnDemandDeliveryURL();
            }
            if ($object->isInitialized('shipmentDetails') && null !== $object->getShipmentDetails()) {
                $values_2 = [];
                foreach ($object->getShipmentDetails() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['shipmentDetails'] = $values_2;
            }
            if ($object->isInitialized('shipmentCharges') && null !== $object->getShipmentCharges()) {
                $values_3 = [];
                foreach ($object->getShipmentCharges() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['shipmentCharges'] = $values_3;
            }
            if ($object->isInitialized('barcodeInfo') && null !== $object->getBarcodeInfo()) {
                $data['barcodeInfo'] = $this->normalizer->normalize($object->getBarcodeInfo(), 'json', $context);
            }
            if ($object->isInitialized('estimatedDeliveryDate') && null !== $object->getEstimatedDeliveryDate()) {
                $data['estimatedDeliveryDate'] = $this->normalizer->normalize($object->getEstimatedDeliveryDate(), 'json', $context);
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values_4 = [];
                foreach ($object->getWarnings() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['warnings'] = $values_4;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressCreateShipmentResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
            }
            if (\array_key_exists('shipmentTrackingNumber', $data)) {
                $object->setShipmentTrackingNumber($data['shipmentTrackingNumber']);
            }
            if (\array_key_exists('cancelPickupUrl', $data)) {
                $object->setCancelPickupUrl($data['cancelPickupUrl']);
            }
            if (\array_key_exists('trackingUrl', $data)) {
                $object->setTrackingUrl($data['trackingUrl']);
            }
            if (\array_key_exists('dispatchConfirmationNumber', $data)) {
                $object->setDispatchConfirmationNumber($data['dispatchConfirmationNumber']);
            }
            if (\array_key_exists('packages', $data)) {
                $values = [];
                foreach ($data['packages'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem::class, 'json', $context);
                }
                $object->setPackages($values);
            }
            if (\array_key_exists('documents', $data)) {
                $values_1 = [];
                foreach ($data['documents'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem::class, 'json', $context);
                }
                $object->setDocuments($values_1);
            }
            if (\array_key_exists('onDemandDeliveryURL', $data)) {
                $object->setOnDemandDeliveryURL($data['onDemandDeliveryURL']);
            }
            if (\array_key_exists('shipmentDetails', $data)) {
                $values_2 = [];
                foreach ($data['shipmentDetails'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class, 'json', $context);
                }
                $object->setShipmentDetails($values_2);
            }
            if (\array_key_exists('shipmentCharges', $data)) {
                $values_3 = [];
                foreach ($data['shipmentCharges'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem::class, 'json', $context);
                }
                $object->setShipmentCharges($values_3);
            }
            if (\array_key_exists('barcodeInfo', $data)) {
                $object->setBarcodeInfo($this->denormalizer->denormalize($data['barcodeInfo'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo::class, 'json', $context));
            }
            if (\array_key_exists('estimatedDeliveryDate', $data)) {
                $object->setEstimatedDeliveryDate($this->denormalizer->denormalize($data['estimatedDeliveryDate'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate::class, 'json', $context));
            }
            if (\array_key_exists('warnings', $data)) {
                $values_4 = [];
                foreach ($data['warnings'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setWarnings($values_4);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }
            if ($object->isInitialized('shipmentTrackingNumber') && null !== $object->getShipmentTrackingNumber()) {
                $data['shipmentTrackingNumber'] = $object->getShipmentTrackingNumber();
            }
            if ($object->isInitialized('cancelPickupUrl') && null !== $object->getCancelPickupUrl()) {
                $data['cancelPickupUrl'] = $object->getCancelPickupUrl();
            }
            if ($object->isInitialized('trackingUrl') && null !== $object->getTrackingUrl()) {
                $data['trackingUrl'] = $object->getTrackingUrl();
            }
            if ($object->isInitialized('dispatchConfirmationNumber') && null !== $object->getDispatchConfirmationNumber()) {
                $data['dispatchConfirmationNumber'] = $object->getDispatchConfirmationNumber();
            }
            if ($object->isInitialized('packages') && null !== $object->getPackages()) {
                $values = [];
                foreach ($object->getPackages() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['packages'] = $values;
            }
            if ($object->isInitialized('documents') && null !== $object->getDocuments()) {
                $values_1 = [];
                foreach ($object->getDocuments() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['documents'] = $values_1;
            }
            if ($object->isInitialized('onDemandDeliveryURL') && null !== $object->getOnDemandDeliveryURL()) {
                $data['onDemandDeliveryURL'] = $object->getOnDemandDeliveryURL();
            }
            if ($object->isInitialized('shipmentDetails') && null !== $object->getShipmentDetails()) {
                $values_2 = [];
                foreach ($object->getShipmentDetails() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['shipmentDetails'] = $values_2;
            }
            if ($object->isInitialized('shipmentCharges') && null !== $object->getShipmentCharges()) {
                $values_3 = [];
                foreach ($object->getShipmentCharges() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['shipmentCharges'] = $values_3;
            }
            if ($object->isInitialized('barcodeInfo') && null !== $object->getBarcodeInfo()) {
                $data['barcodeInfo'] = $this->normalizer->normalize($object->getBarcodeInfo(), 'json', $context);
            }
            if ($object->isInitialized('estimatedDeliveryDate') && null !== $object->getEstimatedDeliveryDate()) {
                $data['estimatedDeliveryDate'] = $this->normalizer->normalize($object->getEstimatedDeliveryDate(), 'json', $context);
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values_4 = [];
                foreach ($object->getWarnings() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['warnings'] = $values_4;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse::class => false];
        }
    }
}