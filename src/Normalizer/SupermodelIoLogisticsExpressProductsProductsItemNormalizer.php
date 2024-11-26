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
    class SupermodelIoLogisticsExpressProductsProductsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('productName', $data)) {
                $object->setProductName($data['productName']);
            }
            if (\array_key_exists('productCode', $data)) {
                $object->setProductCode($data['productCode']);
            }
            if (\array_key_exists('localProductCode', $data)) {
                $object->setLocalProductCode($data['localProductCode']);
            }
            if (\array_key_exists('localProductCountryCode', $data)) {
                $object->setLocalProductCountryCode($data['localProductCountryCode']);
            }
            if (\array_key_exists('networkTypeCode', $data)) {
                $object->setNetworkTypeCode($data['networkTypeCode']);
            }
            if (\array_key_exists('isCustomerAgreement', $data)) {
                $object->setIsCustomerAgreement($data['isCustomerAgreement']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemWeight::class, 'json', $context));
            }
            if (\array_key_exists('breakdown', $data)) {
                $values = [];
                foreach ($data['breakdown'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem::class, 'json', $context);
                }
                $object->setBreakdown($values);
            }
            if (\array_key_exists('serviceCodeMutuallyExclusiveGroups', $data)) {
                $values_1 = [];
                foreach ($data['serviceCodeMutuallyExclusiveGroups'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItem::class, 'json', $context);
                }
                $object->setServiceCodeMutuallyExclusiveGroups($values_1);
            }
            if (\array_key_exists('serviceCodeDependencyRuleGroups', $data)) {
                $values_2 = [];
                foreach ($data['serviceCodeDependencyRuleGroups'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem::class, 'json', $context);
                }
                $object->setServiceCodeDependencyRuleGroups($values_2);
            }
            if (\array_key_exists('pickupCapabilities', $data)) {
                $object->setPickupCapabilities($this->denormalizer->denormalize($data['pickupCapabilities'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities::class, 'json', $context));
            }
            if (\array_key_exists('deliveryCapabilities', $data)) {
                $object->setDeliveryCapabilities($this->denormalizer->denormalize($data['deliveryCapabilities'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('productName') && null !== $object->getProductName()) {
                $data['productName'] = $object->getProductName();
            }
            if ($object->isInitialized('productCode') && null !== $object->getProductCode()) {
                $data['productCode'] = $object->getProductCode();
            }
            if ($object->isInitialized('localProductCode') && null !== $object->getLocalProductCode()) {
                $data['localProductCode'] = $object->getLocalProductCode();
            }
            if ($object->isInitialized('localProductCountryCode') && null !== $object->getLocalProductCountryCode()) {
                $data['localProductCountryCode'] = $object->getLocalProductCountryCode();
            }
            if ($object->isInitialized('networkTypeCode') && null !== $object->getNetworkTypeCode()) {
                $data['networkTypeCode'] = $object->getNetworkTypeCode();
            }
            if ($object->isInitialized('isCustomerAgreement') && null !== $object->getIsCustomerAgreement()) {
                $data['isCustomerAgreement'] = $object->getIsCustomerAgreement();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            }
            if ($object->isInitialized('breakdown') && null !== $object->getBreakdown()) {
                $values = [];
                foreach ($object->getBreakdown() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['breakdown'] = $values;
            }
            if ($object->isInitialized('serviceCodeMutuallyExclusiveGroups') && null !== $object->getServiceCodeMutuallyExclusiveGroups()) {
                $values_1 = [];
                foreach ($object->getServiceCodeMutuallyExclusiveGroups() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['serviceCodeMutuallyExclusiveGroups'] = $values_1;
            }
            if ($object->isInitialized('serviceCodeDependencyRuleGroups') && null !== $object->getServiceCodeDependencyRuleGroups()) {
                $values_2 = [];
                foreach ($object->getServiceCodeDependencyRuleGroups() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['serviceCodeDependencyRuleGroups'] = $values_2;
            }
            if ($object->isInitialized('pickupCapabilities') && null !== $object->getPickupCapabilities()) {
                $data['pickupCapabilities'] = $this->normalizer->normalize($object->getPickupCapabilities(), 'json', $context);
            }
            if ($object->isInitialized('deliveryCapabilities') && null !== $object->getDeliveryCapabilities()) {
                $data['deliveryCapabilities'] = $this->normalizer->normalize($object->getDeliveryCapabilities(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItem::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressProductsProductsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItem::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('productName', $data)) {
                $object->setProductName($data['productName']);
            }
            if (\array_key_exists('productCode', $data)) {
                $object->setProductCode($data['productCode']);
            }
            if (\array_key_exists('localProductCode', $data)) {
                $object->setLocalProductCode($data['localProductCode']);
            }
            if (\array_key_exists('localProductCountryCode', $data)) {
                $object->setLocalProductCountryCode($data['localProductCountryCode']);
            }
            if (\array_key_exists('networkTypeCode', $data)) {
                $object->setNetworkTypeCode($data['networkTypeCode']);
            }
            if (\array_key_exists('isCustomerAgreement', $data)) {
                $object->setIsCustomerAgreement($data['isCustomerAgreement']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemWeight::class, 'json', $context));
            }
            if (\array_key_exists('breakdown', $data)) {
                $values = [];
                foreach ($data['breakdown'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem::class, 'json', $context);
                }
                $object->setBreakdown($values);
            }
            if (\array_key_exists('serviceCodeMutuallyExclusiveGroups', $data)) {
                $values_1 = [];
                foreach ($data['serviceCodeMutuallyExclusiveGroups'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItem::class, 'json', $context);
                }
                $object->setServiceCodeMutuallyExclusiveGroups($values_1);
            }
            if (\array_key_exists('serviceCodeDependencyRuleGroups', $data)) {
                $values_2 = [];
                foreach ($data['serviceCodeDependencyRuleGroups'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem::class, 'json', $context);
                }
                $object->setServiceCodeDependencyRuleGroups($values_2);
            }
            if (\array_key_exists('pickupCapabilities', $data)) {
                $object->setPickupCapabilities($this->denormalizer->denormalize($data['pickupCapabilities'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities::class, 'json', $context));
            }
            if (\array_key_exists('deliveryCapabilities', $data)) {
                $object->setDeliveryCapabilities($this->denormalizer->denormalize($data['deliveryCapabilities'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities::class, 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('productName') && null !== $object->getProductName()) {
                $data['productName'] = $object->getProductName();
            }
            if ($object->isInitialized('productCode') && null !== $object->getProductCode()) {
                $data['productCode'] = $object->getProductCode();
            }
            if ($object->isInitialized('localProductCode') && null !== $object->getLocalProductCode()) {
                $data['localProductCode'] = $object->getLocalProductCode();
            }
            if ($object->isInitialized('localProductCountryCode') && null !== $object->getLocalProductCountryCode()) {
                $data['localProductCountryCode'] = $object->getLocalProductCountryCode();
            }
            if ($object->isInitialized('networkTypeCode') && null !== $object->getNetworkTypeCode()) {
                $data['networkTypeCode'] = $object->getNetworkTypeCode();
            }
            if ($object->isInitialized('isCustomerAgreement') && null !== $object->getIsCustomerAgreement()) {
                $data['isCustomerAgreement'] = $object->getIsCustomerAgreement();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            }
            if ($object->isInitialized('breakdown') && null !== $object->getBreakdown()) {
                $values = [];
                foreach ($object->getBreakdown() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['breakdown'] = $values;
            }
            if ($object->isInitialized('serviceCodeMutuallyExclusiveGroups') && null !== $object->getServiceCodeMutuallyExclusiveGroups()) {
                $values_1 = [];
                foreach ($object->getServiceCodeMutuallyExclusiveGroups() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['serviceCodeMutuallyExclusiveGroups'] = $values_1;
            }
            if ($object->isInitialized('serviceCodeDependencyRuleGroups') && null !== $object->getServiceCodeDependencyRuleGroups()) {
                $values_2 = [];
                foreach ($object->getServiceCodeDependencyRuleGroups() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['serviceCodeDependencyRuleGroups'] = $values_2;
            }
            if ($object->isInitialized('pickupCapabilities') && null !== $object->getPickupCapabilities()) {
                $data['pickupCapabilities'] = $this->normalizer->normalize($object->getPickupCapabilities(), 'json', $context);
            }
            if ($object->isInitialized('deliveryCapabilities') && null !== $object->getDeliveryCapabilities()) {
                $data['deliveryCapabilities'] = $this->normalizer->normalize($object->getDeliveryCapabilities(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItem::class => false];
        }
    }
}