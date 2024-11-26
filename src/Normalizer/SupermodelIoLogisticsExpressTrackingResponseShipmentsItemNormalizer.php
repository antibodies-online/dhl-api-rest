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
    class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem();
            if (\array_key_exists('totalWeight', $data) && \is_int($data['totalWeight'])) {
                $data['totalWeight'] = (double) $data['totalWeight'];
            }
            if (\array_key_exists('numberOfPieces', $data) && \is_int($data['numberOfPieces'])) {
                $data['numberOfPieces'] = (double) $data['numberOfPieces'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipmentTrackingNumber', $data)) {
                $object->setShipmentTrackingNumber($data['shipmentTrackingNumber']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            if (\array_key_exists('shipmentTimestamp', $data)) {
                $object->setShipmentTimestamp($data['shipmentTimestamp']);
            }
            if (\array_key_exists('productCode', $data)) {
                $object->setProductCode($data['productCode']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('shipperDetails', $data)) {
                $object->setShipperDetails($this->denormalizer->denormalize($data['shipperDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails::class, 'json', $context));
            }
            if (\array_key_exists('receiverDetails', $data)) {
                $object->setReceiverDetails($this->denormalizer->denormalize($data['receiverDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails::class, 'json', $context));
            }
            if (\array_key_exists('totalWeight', $data)) {
                $object->setTotalWeight($data['totalWeight']);
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
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem::class, 'json', $context);
                }
                $object->setEvents($values_1);
            }
            if (\array_key_exists('numberOfPieces', $data)) {
                $object->setNumberOfPieces($data['numberOfPieces']);
            }
            if (\array_key_exists('pieces', $data)) {
                $values_2 = [];
                foreach ($data['pieces'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class, 'json', $context);
                }
                $object->setPieces($values_2);
            }
            if (\array_key_exists('estimatedDeliveryDate', $data)) {
                $object->setEstimatedDeliveryDate($data['estimatedDeliveryDate']);
            }
            if (\array_key_exists('childrenShipmentIdentificationNumbers', $data)) {
                $values_3 = [];
                foreach ($data['childrenShipmentIdentificationNumbers'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setChildrenShipmentIdentificationNumbers($values_3);
            }
            if (\array_key_exists('controlledAccessDataCodes', $data)) {
                $values_4 = [];
                foreach ($data['controlledAccessDataCodes'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setControlledAccessDataCodes($values_4);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('shipmentTrackingNumber') && null !== $object->getShipmentTrackingNumber()) {
                $data['shipmentTrackingNumber'] = $object->getShipmentTrackingNumber();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('shipmentTimestamp') && null !== $object->getShipmentTimestamp()) {
                $data['shipmentTimestamp'] = $object->getShipmentTimestamp();
            }
            if ($object->isInitialized('productCode') && null !== $object->getProductCode()) {
                $data['productCode'] = $object->getProductCode();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('shipperDetails') && null !== $object->getShipperDetails()) {
                $data['shipperDetails'] = $this->normalizer->normalize($object->getShipperDetails(), 'json', $context);
            }
            if ($object->isInitialized('receiverDetails') && null !== $object->getReceiverDetails()) {
                $data['receiverDetails'] = $this->normalizer->normalize($object->getReceiverDetails(), 'json', $context);
            }
            if ($object->isInitialized('totalWeight') && null !== $object->getTotalWeight()) {
                $data['totalWeight'] = $object->getTotalWeight();
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
            if ($object->isInitialized('numberOfPieces') && null !== $object->getNumberOfPieces()) {
                $data['numberOfPieces'] = $object->getNumberOfPieces();
            }
            if ($object->isInitialized('pieces') && null !== $object->getPieces()) {
                $values_2 = [];
                foreach ($object->getPieces() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['pieces'] = $values_2;
            }
            if ($object->isInitialized('estimatedDeliveryDate') && null !== $object->getEstimatedDeliveryDate()) {
                $data['estimatedDeliveryDate'] = $object->getEstimatedDeliveryDate();
            }
            if ($object->isInitialized('childrenShipmentIdentificationNumbers') && null !== $object->getChildrenShipmentIdentificationNumbers()) {
                $values_3 = [];
                foreach ($object->getChildrenShipmentIdentificationNumbers() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['childrenShipmentIdentificationNumbers'] = $values_3;
            }
            if ($object->isInitialized('controlledAccessDataCodes') && null !== $object->getControlledAccessDataCodes()) {
                $values_4 = [];
                foreach ($object->getControlledAccessDataCodes() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['controlledAccessDataCodes'] = $values_4;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem();
            if (\array_key_exists('totalWeight', $data) && \is_int($data['totalWeight'])) {
                $data['totalWeight'] = (double) $data['totalWeight'];
            }
            if (\array_key_exists('numberOfPieces', $data) && \is_int($data['numberOfPieces'])) {
                $data['numberOfPieces'] = (double) $data['numberOfPieces'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipmentTrackingNumber', $data)) {
                $object->setShipmentTrackingNumber($data['shipmentTrackingNumber']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            if (\array_key_exists('shipmentTimestamp', $data)) {
                $object->setShipmentTimestamp($data['shipmentTimestamp']);
            }
            if (\array_key_exists('productCode', $data)) {
                $object->setProductCode($data['productCode']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('shipperDetails', $data)) {
                $object->setShipperDetails($this->denormalizer->denormalize($data['shipperDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails::class, 'json', $context));
            }
            if (\array_key_exists('receiverDetails', $data)) {
                $object->setReceiverDetails($this->denormalizer->denormalize($data['receiverDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails::class, 'json', $context));
            }
            if (\array_key_exists('totalWeight', $data)) {
                $object->setTotalWeight($data['totalWeight']);
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
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem::class, 'json', $context);
                }
                $object->setEvents($values_1);
            }
            if (\array_key_exists('numberOfPieces', $data)) {
                $object->setNumberOfPieces($data['numberOfPieces']);
            }
            if (\array_key_exists('pieces', $data)) {
                $values_2 = [];
                foreach ($data['pieces'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class, 'json', $context);
                }
                $object->setPieces($values_2);
            }
            if (\array_key_exists('estimatedDeliveryDate', $data)) {
                $object->setEstimatedDeliveryDate($data['estimatedDeliveryDate']);
            }
            if (\array_key_exists('childrenShipmentIdentificationNumbers', $data)) {
                $values_3 = [];
                foreach ($data['childrenShipmentIdentificationNumbers'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setChildrenShipmentIdentificationNumbers($values_3);
            }
            if (\array_key_exists('controlledAccessDataCodes', $data)) {
                $values_4 = [];
                foreach ($data['controlledAccessDataCodes'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setControlledAccessDataCodes($values_4);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('shipmentTrackingNumber') && null !== $object->getShipmentTrackingNumber()) {
                $data['shipmentTrackingNumber'] = $object->getShipmentTrackingNumber();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('shipmentTimestamp') && null !== $object->getShipmentTimestamp()) {
                $data['shipmentTimestamp'] = $object->getShipmentTimestamp();
            }
            if ($object->isInitialized('productCode') && null !== $object->getProductCode()) {
                $data['productCode'] = $object->getProductCode();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('shipperDetails') && null !== $object->getShipperDetails()) {
                $data['shipperDetails'] = $this->normalizer->normalize($object->getShipperDetails(), 'json', $context);
            }
            if ($object->isInitialized('receiverDetails') && null !== $object->getReceiverDetails()) {
                $data['receiverDetails'] = $this->normalizer->normalize($object->getReceiverDetails(), 'json', $context);
            }
            if ($object->isInitialized('totalWeight') && null !== $object->getTotalWeight()) {
                $data['totalWeight'] = $object->getTotalWeight();
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
            if ($object->isInitialized('numberOfPieces') && null !== $object->getNumberOfPieces()) {
                $data['numberOfPieces'] = $object->getNumberOfPieces();
            }
            if ($object->isInitialized('pieces') && null !== $object->getPieces()) {
                $values_2 = [];
                foreach ($object->getPieces() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['pieces'] = $values_2;
            }
            if ($object->isInitialized('estimatedDeliveryDate') && null !== $object->getEstimatedDeliveryDate()) {
                $data['estimatedDeliveryDate'] = $object->getEstimatedDeliveryDate();
            }
            if ($object->isInitialized('childrenShipmentIdentificationNumbers') && null !== $object->getChildrenShipmentIdentificationNumbers()) {
                $values_3 = [];
                foreach ($object->getChildrenShipmentIdentificationNumbers() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['childrenShipmentIdentificationNumbers'] = $values_3;
            }
            if ($object->isInitialized('controlledAccessDataCodes') && null !== $object->getControlledAccessDataCodes()) {
                $values_4 = [];
                foreach ($object->getControlledAccessDataCodes() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['controlledAccessDataCodes'] = $values_4;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem::class => false];
        }
    }
}