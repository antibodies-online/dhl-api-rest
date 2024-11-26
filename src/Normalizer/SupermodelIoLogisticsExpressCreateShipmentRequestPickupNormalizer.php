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
    class SupermodelIoLogisticsExpressCreateShipmentRequestPickupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('isRequested', $data)) {
                $object->setIsRequested($data['isRequested']);
            }
            if (\array_key_exists('closeTime', $data)) {
                $object->setCloseTime($data['closeTime']);
            }
            if (\array_key_exists('location', $data)) {
                $object->setLocation($data['location']);
            }
            if (\array_key_exists('specialInstructions', $data)) {
                $values = [];
                foreach ($data['specialInstructions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItem::class, 'json', $context);
                }
                $object->setSpecialInstructions($values);
            }
            if (\array_key_exists('pickupDetails', $data)) {
                $object->setPickupDetails($this->denormalizer->denormalize($data['pickupDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails::class, 'json', $context));
            }
            if (\array_key_exists('pickupRequestorDetails', $data)) {
                $object->setPickupRequestorDetails($this->denormalizer->denormalize($data['pickupRequestorDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['isRequested'] = $object->getIsRequested();
            if ($object->isInitialized('closeTime') && null !== $object->getCloseTime()) {
                $data['closeTime'] = $object->getCloseTime();
            }
            if ($object->isInitialized('location') && null !== $object->getLocation()) {
                $data['location'] = $object->getLocation();
            }
            if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
                $values = [];
                foreach ($object->getSpecialInstructions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['specialInstructions'] = $values;
            }
            if ($object->isInitialized('pickupDetails') && null !== $object->getPickupDetails()) {
                $data['pickupDetails'] = $this->normalizer->normalize($object->getPickupDetails(), 'json', $context);
            }
            if ($object->isInitialized('pickupRequestorDetails') && null !== $object->getPickupRequestorDetails()) {
                $data['pickupRequestorDetails'] = $this->normalizer->normalize($object->getPickupRequestorDetails(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressCreateShipmentRequestPickupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('isRequested', $data)) {
                $object->setIsRequested($data['isRequested']);
            }
            if (\array_key_exists('closeTime', $data)) {
                $object->setCloseTime($data['closeTime']);
            }
            if (\array_key_exists('location', $data)) {
                $object->setLocation($data['location']);
            }
            if (\array_key_exists('specialInstructions', $data)) {
                $values = [];
                foreach ($data['specialInstructions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItem::class, 'json', $context);
                }
                $object->setSpecialInstructions($values);
            }
            if (\array_key_exists('pickupDetails', $data)) {
                $object->setPickupDetails($this->denormalizer->denormalize($data['pickupDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails::class, 'json', $context));
            }
            if (\array_key_exists('pickupRequestorDetails', $data)) {
                $object->setPickupRequestorDetails($this->denormalizer->denormalize($data['pickupRequestorDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails::class, 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['isRequested'] = $object->getIsRequested();
            if ($object->isInitialized('closeTime') && null !== $object->getCloseTime()) {
                $data['closeTime'] = $object->getCloseTime();
            }
            if ($object->isInitialized('location') && null !== $object->getLocation()) {
                $data['location'] = $object->getLocation();
            }
            if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
                $values = [];
                foreach ($object->getSpecialInstructions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['specialInstructions'] = $values;
            }
            if ($object->isInitialized('pickupDetails') && null !== $object->getPickupDetails()) {
                $data['pickupDetails'] = $this->normalizer->normalize($object->getPickupDetails(), 'json', $context);
            }
            if ($object->isInitialized('pickupRequestorDetails') && null !== $object->getPickupRequestorDetails()) {
                $data['pickupRequestorDetails'] = $this->normalizer->normalize($object->getPickupRequestorDetails(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class => false];
        }
    }
}