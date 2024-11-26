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
    class SupermodelIoLogisticsExpressRatesProductsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem();
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
                $object->setWeight($this->denormalizer->denormalize($data['weight'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemWeight::class, 'json', $context));
            }
            if (\array_key_exists('totalPrice', $data)) {
                $values = [];
                foreach ($data['totalPrice'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem::class, 'json', $context);
                }
                $object->setTotalPrice($values);
            }
            if (\array_key_exists('totalPriceBreakdown', $data)) {
                $values_1 = [];
                foreach ($data['totalPriceBreakdown'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem::class, 'json', $context);
                }
                $object->setTotalPriceBreakdown($values_1);
            }
            if (\array_key_exists('detailedPriceBreakdown', $data)) {
                $values_2 = [];
                foreach ($data['detailedPriceBreakdown'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItem::class, 'json', $context);
                }
                $object->setDetailedPriceBreakdown($values_2);
            }
            if (\array_key_exists('serviceCodeMutuallyExclusiveGroups', $data)) {
                $values_3 = [];
                foreach ($data['serviceCodeMutuallyExclusiveGroups'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem::class, 'json', $context);
                }
                $object->setServiceCodeMutuallyExclusiveGroups($values_3);
            }
            if (\array_key_exists('serviceCodeDependencyRuleGroups', $data)) {
                $values_4 = [];
                foreach ($data['serviceCodeDependencyRuleGroups'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem::class, 'json', $context);
                }
                $object->setServiceCodeDependencyRuleGroups($values_4);
            }
            if (\array_key_exists('pickupCapabilities', $data)) {
                $object->setPickupCapabilities($this->denormalizer->denormalize($data['pickupCapabilities'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class, 'json', $context));
            }
            if (\array_key_exists('deliveryCapabilities', $data)) {
                $object->setDeliveryCapabilities($this->denormalizer->denormalize($data['deliveryCapabilities'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities::class, 'json', $context));
            }
            if (\array_key_exists('items', $data)) {
                $values_5 = [];
                foreach ($data['items'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItem::class, 'json', $context);
                }
                $object->setItems($values_5);
            }
            if (\array_key_exists('pricingDate', $data)) {
                $object->setPricingDate($data['pricingDate']);
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
            $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            $values = [];
            foreach ($object->getTotalPrice() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['totalPrice'] = $values;
            if ($object->isInitialized('totalPriceBreakdown') && null !== $object->getTotalPriceBreakdown()) {
                $values_1 = [];
                foreach ($object->getTotalPriceBreakdown() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['totalPriceBreakdown'] = $values_1;
            }
            if ($object->isInitialized('detailedPriceBreakdown') && null !== $object->getDetailedPriceBreakdown()) {
                $values_2 = [];
                foreach ($object->getDetailedPriceBreakdown() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['detailedPriceBreakdown'] = $values_2;
            }
            if ($object->isInitialized('serviceCodeMutuallyExclusiveGroups') && null !== $object->getServiceCodeMutuallyExclusiveGroups()) {
                $values_3 = [];
                foreach ($object->getServiceCodeMutuallyExclusiveGroups() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['serviceCodeMutuallyExclusiveGroups'] = $values_3;
            }
            if ($object->isInitialized('serviceCodeDependencyRuleGroups') && null !== $object->getServiceCodeDependencyRuleGroups()) {
                $values_4 = [];
                foreach ($object->getServiceCodeDependencyRuleGroups() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['serviceCodeDependencyRuleGroups'] = $values_4;
            }
            if ($object->isInitialized('pickupCapabilities') && null !== $object->getPickupCapabilities()) {
                $data['pickupCapabilities'] = $this->normalizer->normalize($object->getPickupCapabilities(), 'json', $context);
            }
            if ($object->isInitialized('deliveryCapabilities') && null !== $object->getDeliveryCapabilities()) {
                $data['deliveryCapabilities'] = $this->normalizer->normalize($object->getDeliveryCapabilities(), 'json', $context);
            }
            if ($object->isInitialized('items') && null !== $object->getItems()) {
                $values_5 = [];
                foreach ($object->getItems() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['items'] = $values_5;
            }
            if ($object->isInitialized('pricingDate') && null !== $object->getPricingDate()) {
                $data['pricingDate'] = $object->getPricingDate();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressRatesProductsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem();
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
                $object->setWeight($this->denormalizer->denormalize($data['weight'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemWeight::class, 'json', $context));
            }
            if (\array_key_exists('totalPrice', $data)) {
                $values = [];
                foreach ($data['totalPrice'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem::class, 'json', $context);
                }
                $object->setTotalPrice($values);
            }
            if (\array_key_exists('totalPriceBreakdown', $data)) {
                $values_1 = [];
                foreach ($data['totalPriceBreakdown'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem::class, 'json', $context);
                }
                $object->setTotalPriceBreakdown($values_1);
            }
            if (\array_key_exists('detailedPriceBreakdown', $data)) {
                $values_2 = [];
                foreach ($data['detailedPriceBreakdown'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItem::class, 'json', $context);
                }
                $object->setDetailedPriceBreakdown($values_2);
            }
            if (\array_key_exists('serviceCodeMutuallyExclusiveGroups', $data)) {
                $values_3 = [];
                foreach ($data['serviceCodeMutuallyExclusiveGroups'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem::class, 'json', $context);
                }
                $object->setServiceCodeMutuallyExclusiveGroups($values_3);
            }
            if (\array_key_exists('serviceCodeDependencyRuleGroups', $data)) {
                $values_4 = [];
                foreach ($data['serviceCodeDependencyRuleGroups'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem::class, 'json', $context);
                }
                $object->setServiceCodeDependencyRuleGroups($values_4);
            }
            if (\array_key_exists('pickupCapabilities', $data)) {
                $object->setPickupCapabilities($this->denormalizer->denormalize($data['pickupCapabilities'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class, 'json', $context));
            }
            if (\array_key_exists('deliveryCapabilities', $data)) {
                $object->setDeliveryCapabilities($this->denormalizer->denormalize($data['deliveryCapabilities'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities::class, 'json', $context));
            }
            if (\array_key_exists('items', $data)) {
                $values_5 = [];
                foreach ($data['items'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItem::class, 'json', $context);
                }
                $object->setItems($values_5);
            }
            if (\array_key_exists('pricingDate', $data)) {
                $object->setPricingDate($data['pricingDate']);
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
            $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            $values = [];
            foreach ($object->getTotalPrice() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['totalPrice'] = $values;
            if ($object->isInitialized('totalPriceBreakdown') && null !== $object->getTotalPriceBreakdown()) {
                $values_1 = [];
                foreach ($object->getTotalPriceBreakdown() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['totalPriceBreakdown'] = $values_1;
            }
            if ($object->isInitialized('detailedPriceBreakdown') && null !== $object->getDetailedPriceBreakdown()) {
                $values_2 = [];
                foreach ($object->getDetailedPriceBreakdown() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['detailedPriceBreakdown'] = $values_2;
            }
            if ($object->isInitialized('serviceCodeMutuallyExclusiveGroups') && null !== $object->getServiceCodeMutuallyExclusiveGroups()) {
                $values_3 = [];
                foreach ($object->getServiceCodeMutuallyExclusiveGroups() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['serviceCodeMutuallyExclusiveGroups'] = $values_3;
            }
            if ($object->isInitialized('serviceCodeDependencyRuleGroups') && null !== $object->getServiceCodeDependencyRuleGroups()) {
                $values_4 = [];
                foreach ($object->getServiceCodeDependencyRuleGroups() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['serviceCodeDependencyRuleGroups'] = $values_4;
            }
            if ($object->isInitialized('pickupCapabilities') && null !== $object->getPickupCapabilities()) {
                $data['pickupCapabilities'] = $this->normalizer->normalize($object->getPickupCapabilities(), 'json', $context);
            }
            if ($object->isInitialized('deliveryCapabilities') && null !== $object->getDeliveryCapabilities()) {
                $data['deliveryCapabilities'] = $this->normalizer->normalize($object->getDeliveryCapabilities(), 'json', $context);
            }
            if ($object->isInitialized('items') && null !== $object->getItems()) {
                $values_5 = [];
                foreach ($object->getItems() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['items'] = $values_5;
            }
            if ($object->isInitialized('pricingDate') && null !== $object->getPricingDate()) {
                $data['pricingDate'] = $object->getPricingDate();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class => false];
        }
    }
}