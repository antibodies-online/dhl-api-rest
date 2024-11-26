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
    class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem();
            if (\array_key_exists('number', $data) && \is_int($data['number'])) {
                $data['number'] = (double) $data['number'];
            }
            if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
                $data['weight'] = (double) $data['weight'];
            }
            if (\array_key_exists('dimensionalWeight', $data) && \is_int($data['dimensionalWeight'])) {
                $data['dimensionalWeight'] = (double) $data['dimensionalWeight'];
            }
            if (\array_key_exists('actualWeight', $data) && \is_int($data['actualWeight'])) {
                $data['actualWeight'] = (double) $data['actualWeight'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('number', $data)) {
                $object->setNumber($data['number']);
            }
            if (\array_key_exists('typeCode', $data)) {
                $object->setTypeCode($data['typeCode']);
            }
            if (\array_key_exists('shipmentTrackingNumber', $data)) {
                $object->setShipmentTrackingNumber($data['shipmentTrackingNumber']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($data['weight']);
            }
            if (\array_key_exists('dimensionalWeight', $data)) {
                $object->setDimensionalWeight($data['dimensionalWeight']);
            }
            if (\array_key_exists('actualWeight', $data)) {
                $object->setActualWeight($data['actualWeight']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions::class, 'json', $context));
            }
            if (\array_key_exists('actualDimensions', $data)) {
                $object->setActualDimensions($this->denormalizer->denormalize($data['actualDimensions'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions::class, 'json', $context));
            }
            if (\array_key_exists('unitOfMeasurements', $data)) {
                $object->setUnitOfMeasurements($data['unitOfMeasurements']);
            }
            if (\array_key_exists('shipperReferences', $data)) {
                $values = [];
                foreach ($data['shipperReferences'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReference::class, 'json', $context);
                }
                $object->setShipperReferences($values);
            }
            if (\array_key_exists('events', $data)) {
                $values_1 = [];
                foreach ($data['events'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem::class, 'json', $context);
                }
                $object->setEvents($values_1);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('number') && null !== $object->getNumber()) {
                $data['number'] = $object->getNumber();
            }
            if ($object->isInitialized('typeCode') && null !== $object->getTypeCode()) {
                $data['typeCode'] = $object->getTypeCode();
            }
            if ($object->isInitialized('shipmentTrackingNumber') && null !== $object->getShipmentTrackingNumber()) {
                $data['shipmentTrackingNumber'] = $object->getShipmentTrackingNumber();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $object->getWeight();
            }
            if ($object->isInitialized('dimensionalWeight') && null !== $object->getDimensionalWeight()) {
                $data['dimensionalWeight'] = $object->getDimensionalWeight();
            }
            if ($object->isInitialized('actualWeight') && null !== $object->getActualWeight()) {
                $data['actualWeight'] = $object->getActualWeight();
            }
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('actualDimensions') && null !== $object->getActualDimensions()) {
                $data['actualDimensions'] = $this->normalizer->normalize($object->getActualDimensions(), 'json', $context);
            }
            if ($object->isInitialized('unitOfMeasurements') && null !== $object->getUnitOfMeasurements()) {
                $data['unitOfMeasurements'] = $object->getUnitOfMeasurements();
            }
            if ($object->isInitialized('shipperReferences') && null !== $object->getShipperReferences()) {
                $values = [];
                foreach ($object->getShipperReferences() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['shipperReferences'] = $values;
            }
            $values_1 = [];
            foreach ($object->getEvents() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['events'] = $values_1;
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem();
            if (\array_key_exists('number', $data) && \is_int($data['number'])) {
                $data['number'] = (double) $data['number'];
            }
            if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
                $data['weight'] = (double) $data['weight'];
            }
            if (\array_key_exists('dimensionalWeight', $data) && \is_int($data['dimensionalWeight'])) {
                $data['dimensionalWeight'] = (double) $data['dimensionalWeight'];
            }
            if (\array_key_exists('actualWeight', $data) && \is_int($data['actualWeight'])) {
                $data['actualWeight'] = (double) $data['actualWeight'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('number', $data)) {
                $object->setNumber($data['number']);
            }
            if (\array_key_exists('typeCode', $data)) {
                $object->setTypeCode($data['typeCode']);
            }
            if (\array_key_exists('shipmentTrackingNumber', $data)) {
                $object->setShipmentTrackingNumber($data['shipmentTrackingNumber']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($data['weight']);
            }
            if (\array_key_exists('dimensionalWeight', $data)) {
                $object->setDimensionalWeight($data['dimensionalWeight']);
            }
            if (\array_key_exists('actualWeight', $data)) {
                $object->setActualWeight($data['actualWeight']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions::class, 'json', $context));
            }
            if (\array_key_exists('actualDimensions', $data)) {
                $object->setActualDimensions($this->denormalizer->denormalize($data['actualDimensions'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions::class, 'json', $context));
            }
            if (\array_key_exists('unitOfMeasurements', $data)) {
                $object->setUnitOfMeasurements($data['unitOfMeasurements']);
            }
            if (\array_key_exists('shipperReferences', $data)) {
                $values = [];
                foreach ($data['shipperReferences'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReference::class, 'json', $context);
                }
                $object->setShipperReferences($values);
            }
            if (\array_key_exists('events', $data)) {
                $values_1 = [];
                foreach ($data['events'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem::class, 'json', $context);
                }
                $object->setEvents($values_1);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('number') && null !== $object->getNumber()) {
                $data['number'] = $object->getNumber();
            }
            if ($object->isInitialized('typeCode') && null !== $object->getTypeCode()) {
                $data['typeCode'] = $object->getTypeCode();
            }
            if ($object->isInitialized('shipmentTrackingNumber') && null !== $object->getShipmentTrackingNumber()) {
                $data['shipmentTrackingNumber'] = $object->getShipmentTrackingNumber();
            }
            if ($object->isInitialized('trackingNumber') && null !== $object->getTrackingNumber()) {
                $data['trackingNumber'] = $object->getTrackingNumber();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $object->getWeight();
            }
            if ($object->isInitialized('dimensionalWeight') && null !== $object->getDimensionalWeight()) {
                $data['dimensionalWeight'] = $object->getDimensionalWeight();
            }
            if ($object->isInitialized('actualWeight') && null !== $object->getActualWeight()) {
                $data['actualWeight'] = $object->getActualWeight();
            }
            if ($object->isInitialized('dimensions') && null !== $object->getDimensions()) {
                $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            }
            if ($object->isInitialized('actualDimensions') && null !== $object->getActualDimensions()) {
                $data['actualDimensions'] = $this->normalizer->normalize($object->getActualDimensions(), 'json', $context);
            }
            if ($object->isInitialized('unitOfMeasurements') && null !== $object->getUnitOfMeasurements()) {
                $data['unitOfMeasurements'] = $object->getUnitOfMeasurements();
            }
            if ($object->isInitialized('shipperReferences') && null !== $object->getShipperReferences()) {
                $values = [];
                foreach ($object->getShipperReferences() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['shipperReferences'] = $values;
            }
            $values_1 = [];
            foreach ($object->getEvents() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['events'] = $values_1;
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class => false];
        }
    }
}