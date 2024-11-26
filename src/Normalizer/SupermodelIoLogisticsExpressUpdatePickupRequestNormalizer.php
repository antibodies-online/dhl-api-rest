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
    class SupermodelIoLogisticsExpressUpdatePickupRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dispatchConfirmationNumber', $data)) {
                $object->setDispatchConfirmationNumber($data['dispatchConfirmationNumber']);
            }
            if (\array_key_exists('originalShipperAccountNumber', $data)) {
                $object->setOriginalShipperAccountNumber($data['originalShipperAccountNumber']);
            }
            if (\array_key_exists('plannedPickupDateAndTime', $data)) {
                $object->setPlannedPickupDateAndTime($data['plannedPickupDateAndTime']);
            }
            if (\array_key_exists('closeTime', $data)) {
                $object->setCloseTime($data['closeTime']);
            }
            if (\array_key_exists('location', $data)) {
                $object->setLocation($data['location']);
            }
            if (\array_key_exists('locationType', $data)) {
                $object->setLocationType($data['locationType']);
            }
            if (\array_key_exists('accounts', $data)) {
                $values = [];
                foreach ($data['accounts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAccount::class, 'json', $context);
                }
                $object->setAccounts($values);
            }
            if (\array_key_exists('specialInstructions', $data)) {
                $values_1 = [];
                foreach ($data['specialInstructions'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItem::class, 'json', $context);
                }
                $object->setSpecialInstructions($values_1);
            }
            if (\array_key_exists('remark', $data)) {
                $object->setRemark($data['remark']);
            }
            if (\array_key_exists('customerDetails', $data)) {
                $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails::class, 'json', $context));
            }
            if (\array_key_exists('shipmentDetails', $data)) {
                $values_2 = [];
                foreach ($data['shipmentDetails'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem::class, 'json', $context);
                }
                $object->setShipmentDetails($values_2);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['dispatchConfirmationNumber'] = $object->getDispatchConfirmationNumber();
            $data['originalShipperAccountNumber'] = $object->getOriginalShipperAccountNumber();
            $data['plannedPickupDateAndTime'] = $object->getPlannedPickupDateAndTime();
            if ($object->isInitialized('closeTime') && null !== $object->getCloseTime()) {
                $data['closeTime'] = $object->getCloseTime();
            }
            if ($object->isInitialized('location') && null !== $object->getLocation()) {
                $data['location'] = $object->getLocation();
            }
            if ($object->isInitialized('locationType') && null !== $object->getLocationType()) {
                $data['locationType'] = $object->getLocationType();
            }
            $values = [];
            foreach ($object->getAccounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['accounts'] = $values;
            if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
                $values_1 = [];
                foreach ($object->getSpecialInstructions() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['specialInstructions'] = $values_1;
            }
            if ($object->isInitialized('remark') && null !== $object->getRemark()) {
                $data['remark'] = $object->getRemark();
            }
            $data['customerDetails'] = $this->normalizer->normalize($object->getCustomerDetails(), 'json', $context);
            if ($object->isInitialized('shipmentDetails') && null !== $object->getShipmentDetails()) {
                $values_2 = [];
                foreach ($object->getShipmentDetails() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['shipmentDetails'] = $values_2;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressUpdatePickupRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dispatchConfirmationNumber', $data)) {
                $object->setDispatchConfirmationNumber($data['dispatchConfirmationNumber']);
            }
            if (\array_key_exists('originalShipperAccountNumber', $data)) {
                $object->setOriginalShipperAccountNumber($data['originalShipperAccountNumber']);
            }
            if (\array_key_exists('plannedPickupDateAndTime', $data)) {
                $object->setPlannedPickupDateAndTime($data['plannedPickupDateAndTime']);
            }
            if (\array_key_exists('closeTime', $data)) {
                $object->setCloseTime($data['closeTime']);
            }
            if (\array_key_exists('location', $data)) {
                $object->setLocation($data['location']);
            }
            if (\array_key_exists('locationType', $data)) {
                $object->setLocationType($data['locationType']);
            }
            if (\array_key_exists('accounts', $data)) {
                $values = [];
                foreach ($data['accounts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAccount::class, 'json', $context);
                }
                $object->setAccounts($values);
            }
            if (\array_key_exists('specialInstructions', $data)) {
                $values_1 = [];
                foreach ($data['specialInstructions'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItem::class, 'json', $context);
                }
                $object->setSpecialInstructions($values_1);
            }
            if (\array_key_exists('remark', $data)) {
                $object->setRemark($data['remark']);
            }
            if (\array_key_exists('customerDetails', $data)) {
                $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails::class, 'json', $context));
            }
            if (\array_key_exists('shipmentDetails', $data)) {
                $values_2 = [];
                foreach ($data['shipmentDetails'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem::class, 'json', $context);
                }
                $object->setShipmentDetails($values_2);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['dispatchConfirmationNumber'] = $object->getDispatchConfirmationNumber();
            $data['originalShipperAccountNumber'] = $object->getOriginalShipperAccountNumber();
            $data['plannedPickupDateAndTime'] = $object->getPlannedPickupDateAndTime();
            if ($object->isInitialized('closeTime') && null !== $object->getCloseTime()) {
                $data['closeTime'] = $object->getCloseTime();
            }
            if ($object->isInitialized('location') && null !== $object->getLocation()) {
                $data['location'] = $object->getLocation();
            }
            if ($object->isInitialized('locationType') && null !== $object->getLocationType()) {
                $data['locationType'] = $object->getLocationType();
            }
            $values = [];
            foreach ($object->getAccounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['accounts'] = $values;
            if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
                $values_1 = [];
                foreach ($object->getSpecialInstructions() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['specialInstructions'] = $values_1;
            }
            if ($object->isInitialized('remark') && null !== $object->getRemark()) {
                $data['remark'] = $object->getRemark();
            }
            $data['customerDetails'] = $this->normalizer->normalize($object->getCustomerDetails(), 'json', $context);
            if ($object->isInitialized('shipmentDetails') && null !== $object->getShipmentDetails()) {
                $values_2 = [];
                foreach ($object->getShipmentDetails() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['shipmentDetails'] = $values_2;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest::class => false];
        }
    }
}