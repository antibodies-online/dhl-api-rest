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
    class SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities();
            if (\array_key_exists('pickupAdditionalDays', $data) && \is_int($data['pickupAdditionalDays'])) {
                $data['pickupAdditionalDays'] = (double) $data['pickupAdditionalDays'];
            }
            if (\array_key_exists('pickupDayOfWeek', $data) && \is_int($data['pickupDayOfWeek'])) {
                $data['pickupDayOfWeek'] = (double) $data['pickupDayOfWeek'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('nextBusinessDay', $data)) {
                $object->setNextBusinessDay($data['nextBusinessDay']);
            }
            if (\array_key_exists('localCutoffDateAndTime', $data)) {
                $object->setLocalCutoffDateAndTime($data['localCutoffDateAndTime']);
            }
            if (\array_key_exists('pickupEarliest', $data)) {
                $object->setPickupEarliest($data['pickupEarliest']);
            }
            if (\array_key_exists('pickupLatest', $data)) {
                $object->setPickupLatest($data['pickupLatest']);
            }
            if (\array_key_exists('pickupCutoffSameDayOutboundProcessing', $data)) {
                $object->setPickupCutoffSameDayOutboundProcessing($data['pickupCutoffSameDayOutboundProcessing']);
            }
            if (\array_key_exists('originServiceAreaCode', $data)) {
                $object->setOriginServiceAreaCode($data['originServiceAreaCode']);
            }
            if (\array_key_exists('originFacilityAreaCode', $data)) {
                $object->setOriginFacilityAreaCode($data['originFacilityAreaCode']);
            }
            if (\array_key_exists('pickupAdditionalDays', $data)) {
                $object->setPickupAdditionalDays($data['pickupAdditionalDays']);
            }
            if (\array_key_exists('pickupDayOfWeek', $data)) {
                $object->setPickupDayOfWeek($data['pickupDayOfWeek']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('nextBusinessDay') && null !== $object->getNextBusinessDay()) {
                $data['nextBusinessDay'] = $object->getNextBusinessDay();
            }
            if ($object->isInitialized('localCutoffDateAndTime') && null !== $object->getLocalCutoffDateAndTime()) {
                $data['localCutoffDateAndTime'] = $object->getLocalCutoffDateAndTime();
            }
            if ($object->isInitialized('pickupEarliest') && null !== $object->getPickupEarliest()) {
                $data['pickupEarliest'] = $object->getPickupEarliest();
            }
            if ($object->isInitialized('pickupLatest') && null !== $object->getPickupLatest()) {
                $data['pickupLatest'] = $object->getPickupLatest();
            }
            if ($object->isInitialized('pickupCutoffSameDayOutboundProcessing') && null !== $object->getPickupCutoffSameDayOutboundProcessing()) {
                $data['pickupCutoffSameDayOutboundProcessing'] = $object->getPickupCutoffSameDayOutboundProcessing();
            }
            if ($object->isInitialized('originServiceAreaCode') && null !== $object->getOriginServiceAreaCode()) {
                $data['originServiceAreaCode'] = $object->getOriginServiceAreaCode();
            }
            if ($object->isInitialized('originFacilityAreaCode') && null !== $object->getOriginFacilityAreaCode()) {
                $data['originFacilityAreaCode'] = $object->getOriginFacilityAreaCode();
            }
            if ($object->isInitialized('pickupAdditionalDays') && null !== $object->getPickupAdditionalDays()) {
                $data['pickupAdditionalDays'] = $object->getPickupAdditionalDays();
            }
            if ($object->isInitialized('pickupDayOfWeek') && null !== $object->getPickupDayOfWeek()) {
                $data['pickupDayOfWeek'] = $object->getPickupDayOfWeek();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities();
            if (\array_key_exists('pickupAdditionalDays', $data) && \is_int($data['pickupAdditionalDays'])) {
                $data['pickupAdditionalDays'] = (double) $data['pickupAdditionalDays'];
            }
            if (\array_key_exists('pickupDayOfWeek', $data) && \is_int($data['pickupDayOfWeek'])) {
                $data['pickupDayOfWeek'] = (double) $data['pickupDayOfWeek'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('nextBusinessDay', $data)) {
                $object->setNextBusinessDay($data['nextBusinessDay']);
            }
            if (\array_key_exists('localCutoffDateAndTime', $data)) {
                $object->setLocalCutoffDateAndTime($data['localCutoffDateAndTime']);
            }
            if (\array_key_exists('pickupEarliest', $data)) {
                $object->setPickupEarliest($data['pickupEarliest']);
            }
            if (\array_key_exists('pickupLatest', $data)) {
                $object->setPickupLatest($data['pickupLatest']);
            }
            if (\array_key_exists('pickupCutoffSameDayOutboundProcessing', $data)) {
                $object->setPickupCutoffSameDayOutboundProcessing($data['pickupCutoffSameDayOutboundProcessing']);
            }
            if (\array_key_exists('originServiceAreaCode', $data)) {
                $object->setOriginServiceAreaCode($data['originServiceAreaCode']);
            }
            if (\array_key_exists('originFacilityAreaCode', $data)) {
                $object->setOriginFacilityAreaCode($data['originFacilityAreaCode']);
            }
            if (\array_key_exists('pickupAdditionalDays', $data)) {
                $object->setPickupAdditionalDays($data['pickupAdditionalDays']);
            }
            if (\array_key_exists('pickupDayOfWeek', $data)) {
                $object->setPickupDayOfWeek($data['pickupDayOfWeek']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('nextBusinessDay') && null !== $object->getNextBusinessDay()) {
                $data['nextBusinessDay'] = $object->getNextBusinessDay();
            }
            if ($object->isInitialized('localCutoffDateAndTime') && null !== $object->getLocalCutoffDateAndTime()) {
                $data['localCutoffDateAndTime'] = $object->getLocalCutoffDateAndTime();
            }
            if ($object->isInitialized('pickupEarliest') && null !== $object->getPickupEarliest()) {
                $data['pickupEarliest'] = $object->getPickupEarliest();
            }
            if ($object->isInitialized('pickupLatest') && null !== $object->getPickupLatest()) {
                $data['pickupLatest'] = $object->getPickupLatest();
            }
            if ($object->isInitialized('pickupCutoffSameDayOutboundProcessing') && null !== $object->getPickupCutoffSameDayOutboundProcessing()) {
                $data['pickupCutoffSameDayOutboundProcessing'] = $object->getPickupCutoffSameDayOutboundProcessing();
            }
            if ($object->isInitialized('originServiceAreaCode') && null !== $object->getOriginServiceAreaCode()) {
                $data['originServiceAreaCode'] = $object->getOriginServiceAreaCode();
            }
            if ($object->isInitialized('originFacilityAreaCode') && null !== $object->getOriginFacilityAreaCode()) {
                $data['originFacilityAreaCode'] = $object->getOriginFacilityAreaCode();
            }
            if ($object->isInitialized('pickupAdditionalDays') && null !== $object->getPickupAdditionalDays()) {
                $data['pickupAdditionalDays'] = $object->getPickupAdditionalDays();
            }
            if ($object->isInitialized('pickupDayOfWeek') && null !== $object->getPickupDayOfWeek()) {
                $data['pickupDayOfWeek'] = $object->getPickupDayOfWeek();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class => false];
        }
    }
}