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
    class SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipmentIdentificationNumberBarcodeContent', $data)) {
                $object->setShipmentIdentificationNumberBarcodeContent($data['shipmentIdentificationNumberBarcodeContent']);
            }
            if (\array_key_exists('originDestinationServiceTypeBarcodeContent', $data)) {
                $object->setOriginDestinationServiceTypeBarcodeContent($data['originDestinationServiceTypeBarcodeContent']);
            }
            if (\array_key_exists('routingBarcodeContent', $data)) {
                $object->setRoutingBarcodeContent($data['routingBarcodeContent']);
            }
            if (\array_key_exists('trackingNumberBarcodes', $data)) {
                $values = [];
                foreach ($data['trackingNumberBarcodes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem::class, 'json', $context);
                }
                $object->setTrackingNumberBarcodes($values);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('shipmentIdentificationNumberBarcodeContent') && null !== $object->getShipmentIdentificationNumberBarcodeContent()) {
                $data['shipmentIdentificationNumberBarcodeContent'] = $object->getShipmentIdentificationNumberBarcodeContent();
            }
            if ($object->isInitialized('originDestinationServiceTypeBarcodeContent') && null !== $object->getOriginDestinationServiceTypeBarcodeContent()) {
                $data['originDestinationServiceTypeBarcodeContent'] = $object->getOriginDestinationServiceTypeBarcodeContent();
            }
            if ($object->isInitialized('routingBarcodeContent') && null !== $object->getRoutingBarcodeContent()) {
                $data['routingBarcodeContent'] = $object->getRoutingBarcodeContent();
            }
            if ($object->isInitialized('trackingNumberBarcodes') && null !== $object->getTrackingNumberBarcodes()) {
                $values = [];
                foreach ($object->getTrackingNumberBarcodes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['trackingNumberBarcodes'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipmentIdentificationNumberBarcodeContent', $data)) {
                $object->setShipmentIdentificationNumberBarcodeContent($data['shipmentIdentificationNumberBarcodeContent']);
            }
            if (\array_key_exists('originDestinationServiceTypeBarcodeContent', $data)) {
                $object->setOriginDestinationServiceTypeBarcodeContent($data['originDestinationServiceTypeBarcodeContent']);
            }
            if (\array_key_exists('routingBarcodeContent', $data)) {
                $object->setRoutingBarcodeContent($data['routingBarcodeContent']);
            }
            if (\array_key_exists('trackingNumberBarcodes', $data)) {
                $values = [];
                foreach ($data['trackingNumberBarcodes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem::class, 'json', $context);
                }
                $object->setTrackingNumberBarcodes($values);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('shipmentIdentificationNumberBarcodeContent') && null !== $object->getShipmentIdentificationNumberBarcodeContent()) {
                $data['shipmentIdentificationNumberBarcodeContent'] = $object->getShipmentIdentificationNumberBarcodeContent();
            }
            if ($object->isInitialized('originDestinationServiceTypeBarcodeContent') && null !== $object->getOriginDestinationServiceTypeBarcodeContent()) {
                $data['originDestinationServiceTypeBarcodeContent'] = $object->getOriginDestinationServiceTypeBarcodeContent();
            }
            if ($object->isInitialized('routingBarcodeContent') && null !== $object->getRoutingBarcodeContent()) {
                $data['routingBarcodeContent'] = $object->getRoutingBarcodeContent();
            }
            if ($object->isInitialized('trackingNumberBarcodes') && null !== $object->getTrackingNumberBarcodes()) {
                $values = [];
                foreach ($object->getTrackingNumberBarcodes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['trackingNumberBarcodes'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo::class => false];
        }
    }
}