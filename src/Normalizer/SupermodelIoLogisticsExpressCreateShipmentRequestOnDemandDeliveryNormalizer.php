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
    class SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('deliveryOption', $data)) {
                $object->setDeliveryOption($data['deliveryOption']);
            }
            if (\array_key_exists('location', $data)) {
                $object->setLocation($data['location']);
            }
            if (\array_key_exists('specialInstructions', $data)) {
                $object->setSpecialInstructions($data['specialInstructions']);
            }
            if (\array_key_exists('gateCode', $data)) {
                $object->setGateCode($data['gateCode']);
            }
            if (\array_key_exists('whereToLeave', $data)) {
                $object->setWhereToLeave($data['whereToLeave']);
            }
            if (\array_key_exists('neighbourName', $data)) {
                $object->setNeighbourName($data['neighbourName']);
            }
            if (\array_key_exists('neighbourHouseNumber', $data)) {
                $object->setNeighbourHouseNumber($data['neighbourHouseNumber']);
            }
            if (\array_key_exists('authorizerName', $data)) {
                $object->setAuthorizerName($data['authorizerName']);
            }
            if (\array_key_exists('servicePointId', $data)) {
                $object->setServicePointId($data['servicePointId']);
            }
            if (\array_key_exists('requestedDeliveryDate', $data)) {
                $object->setRequestedDeliveryDate($data['requestedDeliveryDate']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['deliveryOption'] = $object->getDeliveryOption();
            if ($object->isInitialized('location') && null !== $object->getLocation()) {
                $data['location'] = $object->getLocation();
            }
            if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
                $data['specialInstructions'] = $object->getSpecialInstructions();
            }
            if ($object->isInitialized('gateCode') && null !== $object->getGateCode()) {
                $data['gateCode'] = $object->getGateCode();
            }
            if ($object->isInitialized('whereToLeave') && null !== $object->getWhereToLeave()) {
                $data['whereToLeave'] = $object->getWhereToLeave();
            }
            if ($object->isInitialized('neighbourName') && null !== $object->getNeighbourName()) {
                $data['neighbourName'] = $object->getNeighbourName();
            }
            if ($object->isInitialized('neighbourHouseNumber') && null !== $object->getNeighbourHouseNumber()) {
                $data['neighbourHouseNumber'] = $object->getNeighbourHouseNumber();
            }
            if ($object->isInitialized('authorizerName') && null !== $object->getAuthorizerName()) {
                $data['authorizerName'] = $object->getAuthorizerName();
            }
            if ($object->isInitialized('servicePointId') && null !== $object->getServicePointId()) {
                $data['servicePointId'] = $object->getServicePointId();
            }
            if ($object->isInitialized('requestedDeliveryDate') && null !== $object->getRequestedDeliveryDate()) {
                $data['requestedDeliveryDate'] = $object->getRequestedDeliveryDate();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('deliveryOption', $data)) {
                $object->setDeliveryOption($data['deliveryOption']);
            }
            if (\array_key_exists('location', $data)) {
                $object->setLocation($data['location']);
            }
            if (\array_key_exists('specialInstructions', $data)) {
                $object->setSpecialInstructions($data['specialInstructions']);
            }
            if (\array_key_exists('gateCode', $data)) {
                $object->setGateCode($data['gateCode']);
            }
            if (\array_key_exists('whereToLeave', $data)) {
                $object->setWhereToLeave($data['whereToLeave']);
            }
            if (\array_key_exists('neighbourName', $data)) {
                $object->setNeighbourName($data['neighbourName']);
            }
            if (\array_key_exists('neighbourHouseNumber', $data)) {
                $object->setNeighbourHouseNumber($data['neighbourHouseNumber']);
            }
            if (\array_key_exists('authorizerName', $data)) {
                $object->setAuthorizerName($data['authorizerName']);
            }
            if (\array_key_exists('servicePointId', $data)) {
                $object->setServicePointId($data['servicePointId']);
            }
            if (\array_key_exists('requestedDeliveryDate', $data)) {
                $object->setRequestedDeliveryDate($data['requestedDeliveryDate']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['deliveryOption'] = $object->getDeliveryOption();
            if ($object->isInitialized('location') && null !== $object->getLocation()) {
                $data['location'] = $object->getLocation();
            }
            if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
                $data['specialInstructions'] = $object->getSpecialInstructions();
            }
            if ($object->isInitialized('gateCode') && null !== $object->getGateCode()) {
                $data['gateCode'] = $object->getGateCode();
            }
            if ($object->isInitialized('whereToLeave') && null !== $object->getWhereToLeave()) {
                $data['whereToLeave'] = $object->getWhereToLeave();
            }
            if ($object->isInitialized('neighbourName') && null !== $object->getNeighbourName()) {
                $data['neighbourName'] = $object->getNeighbourName();
            }
            if ($object->isInitialized('neighbourHouseNumber') && null !== $object->getNeighbourHouseNumber()) {
                $data['neighbourHouseNumber'] = $object->getNeighbourHouseNumber();
            }
            if ($object->isInitialized('authorizerName') && null !== $object->getAuthorizerName()) {
                $data['authorizerName'] = $object->getAuthorizerName();
            }
            if ($object->isInitialized('servicePointId') && null !== $object->getServicePointId()) {
                $data['servicePointId'] = $object->getServicePointId();
            }
            if ($object->isInitialized('requestedDeliveryDate') && null !== $object->getRequestedDeliveryDate()) {
                $data['requestedDeliveryDate'] = $object->getRequestedDeliveryDate();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class => false];
        }
    }
}