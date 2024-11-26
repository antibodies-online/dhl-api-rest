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
    class SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities();
            if (\array_key_exists('deliveryAdditionalDays', $data) && \is_int($data['deliveryAdditionalDays'])) {
                $data['deliveryAdditionalDays'] = (double) $data['deliveryAdditionalDays'];
            }
            if (\array_key_exists('deliveryDayOfWeek', $data) && \is_int($data['deliveryDayOfWeek'])) {
                $data['deliveryDayOfWeek'] = (double) $data['deliveryDayOfWeek'];
            }
            if (\array_key_exists('totalTransitDays', $data) && \is_int($data['totalTransitDays'])) {
                $data['totalTransitDays'] = (double) $data['totalTransitDays'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('deliveryTypeCode', $data)) {
                $object->setDeliveryTypeCode($data['deliveryTypeCode']);
            }
            if (\array_key_exists('estimatedDeliveryDateAndTime', $data)) {
                $object->setEstimatedDeliveryDateAndTime($data['estimatedDeliveryDateAndTime']);
            }
            if (\array_key_exists('destinationServiceAreaCode', $data)) {
                $object->setDestinationServiceAreaCode($data['destinationServiceAreaCode']);
            }
            if (\array_key_exists('destinationFacilityAreaCode', $data)) {
                $object->setDestinationFacilityAreaCode($data['destinationFacilityAreaCode']);
            }
            if (\array_key_exists('deliveryAdditionalDays', $data)) {
                $object->setDeliveryAdditionalDays($data['deliveryAdditionalDays']);
            }
            if (\array_key_exists('deliveryDayOfWeek', $data)) {
                $object->setDeliveryDayOfWeek($data['deliveryDayOfWeek']);
            }
            if (\array_key_exists('totalTransitDays', $data)) {
                $object->setTotalTransitDays($data['totalTransitDays']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('deliveryTypeCode') && null !== $object->getDeliveryTypeCode()) {
                $data['deliveryTypeCode'] = $object->getDeliveryTypeCode();
            }
            if ($object->isInitialized('estimatedDeliveryDateAndTime') && null !== $object->getEstimatedDeliveryDateAndTime()) {
                $data['estimatedDeliveryDateAndTime'] = $object->getEstimatedDeliveryDateAndTime();
            }
            if ($object->isInitialized('destinationServiceAreaCode') && null !== $object->getDestinationServiceAreaCode()) {
                $data['destinationServiceAreaCode'] = $object->getDestinationServiceAreaCode();
            }
            if ($object->isInitialized('destinationFacilityAreaCode') && null !== $object->getDestinationFacilityAreaCode()) {
                $data['destinationFacilityAreaCode'] = $object->getDestinationFacilityAreaCode();
            }
            if ($object->isInitialized('deliveryAdditionalDays') && null !== $object->getDeliveryAdditionalDays()) {
                $data['deliveryAdditionalDays'] = $object->getDeliveryAdditionalDays();
            }
            if ($object->isInitialized('deliveryDayOfWeek') && null !== $object->getDeliveryDayOfWeek()) {
                $data['deliveryDayOfWeek'] = $object->getDeliveryDayOfWeek();
            }
            if ($object->isInitialized('totalTransitDays') && null !== $object->getTotalTransitDays()) {
                $data['totalTransitDays'] = $object->getTotalTransitDays();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities();
            if (\array_key_exists('deliveryAdditionalDays', $data) && \is_int($data['deliveryAdditionalDays'])) {
                $data['deliveryAdditionalDays'] = (double) $data['deliveryAdditionalDays'];
            }
            if (\array_key_exists('deliveryDayOfWeek', $data) && \is_int($data['deliveryDayOfWeek'])) {
                $data['deliveryDayOfWeek'] = (double) $data['deliveryDayOfWeek'];
            }
            if (\array_key_exists('totalTransitDays', $data) && \is_int($data['totalTransitDays'])) {
                $data['totalTransitDays'] = (double) $data['totalTransitDays'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('deliveryTypeCode', $data)) {
                $object->setDeliveryTypeCode($data['deliveryTypeCode']);
            }
            if (\array_key_exists('estimatedDeliveryDateAndTime', $data)) {
                $object->setEstimatedDeliveryDateAndTime($data['estimatedDeliveryDateAndTime']);
            }
            if (\array_key_exists('destinationServiceAreaCode', $data)) {
                $object->setDestinationServiceAreaCode($data['destinationServiceAreaCode']);
            }
            if (\array_key_exists('destinationFacilityAreaCode', $data)) {
                $object->setDestinationFacilityAreaCode($data['destinationFacilityAreaCode']);
            }
            if (\array_key_exists('deliveryAdditionalDays', $data)) {
                $object->setDeliveryAdditionalDays($data['deliveryAdditionalDays']);
            }
            if (\array_key_exists('deliveryDayOfWeek', $data)) {
                $object->setDeliveryDayOfWeek($data['deliveryDayOfWeek']);
            }
            if (\array_key_exists('totalTransitDays', $data)) {
                $object->setTotalTransitDays($data['totalTransitDays']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('deliveryTypeCode') && null !== $object->getDeliveryTypeCode()) {
                $data['deliveryTypeCode'] = $object->getDeliveryTypeCode();
            }
            if ($object->isInitialized('estimatedDeliveryDateAndTime') && null !== $object->getEstimatedDeliveryDateAndTime()) {
                $data['estimatedDeliveryDateAndTime'] = $object->getEstimatedDeliveryDateAndTime();
            }
            if ($object->isInitialized('destinationServiceAreaCode') && null !== $object->getDestinationServiceAreaCode()) {
                $data['destinationServiceAreaCode'] = $object->getDestinationServiceAreaCode();
            }
            if ($object->isInitialized('destinationFacilityAreaCode') && null !== $object->getDestinationFacilityAreaCode()) {
                $data['destinationFacilityAreaCode'] = $object->getDestinationFacilityAreaCode();
            }
            if ($object->isInitialized('deliveryAdditionalDays') && null !== $object->getDeliveryAdditionalDays()) {
                $data['deliveryAdditionalDays'] = $object->getDeliveryAdditionalDays();
            }
            if ($object->isInitialized('deliveryDayOfWeek') && null !== $object->getDeliveryDayOfWeek()) {
                $data['deliveryDayOfWeek'] = $object->getDeliveryDayOfWeek();
            }
            if ($object->isInitialized('totalTransitDays') && null !== $object->getTotalTransitDays()) {
                $data['totalTransitDays'] = $object->getTotalTransitDays();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities::class => false];
        }
    }
}