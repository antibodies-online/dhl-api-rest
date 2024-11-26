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
    class SupermodelIoLogisticsExpressProductsProductsItemBreakdownItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('serviceCode', $data)) {
                $object->setServiceCode($data['serviceCode']);
            }
            if (\array_key_exists('localServiceCode', $data)) {
                $object->setLocalServiceCode($data['localServiceCode']);
            }
            if (\array_key_exists('typeCode', $data)) {
                $object->setTypeCode($data['typeCode']);
            }
            if (\array_key_exists('serviceTypeCode', $data)) {
                $object->setServiceTypeCode($data['serviceTypeCode']);
            }
            if (\array_key_exists('isCustomerAgreement', $data)) {
                $object->setIsCustomerAgreement($data['isCustomerAgreement']);
            }
            if (\array_key_exists('isMarketedService', $data)) {
                $object->setIsMarketedService($data['isMarketedService']);
            }
            if (\array_key_exists('isBillingServiceIndicator', $data)) {
                $object->setIsBillingServiceIndicator($data['isBillingServiceIndicator']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('serviceCode') && null !== $object->getServiceCode()) {
                $data['serviceCode'] = $object->getServiceCode();
            }
            if ($object->isInitialized('localServiceCode') && null !== $object->getLocalServiceCode()) {
                $data['localServiceCode'] = $object->getLocalServiceCode();
            }
            if ($object->isInitialized('typeCode') && null !== $object->getTypeCode()) {
                $data['typeCode'] = $object->getTypeCode();
            }
            if ($object->isInitialized('serviceTypeCode') && null !== $object->getServiceTypeCode()) {
                $data['serviceTypeCode'] = $object->getServiceTypeCode();
            }
            if ($object->isInitialized('isCustomerAgreement') && null !== $object->getIsCustomerAgreement()) {
                $data['isCustomerAgreement'] = $object->getIsCustomerAgreement();
            }
            if ($object->isInitialized('isMarketedService') && null !== $object->getIsMarketedService()) {
                $data['isMarketedService'] = $object->getIsMarketedService();
            }
            if ($object->isInitialized('isBillingServiceIndicator') && null !== $object->getIsBillingServiceIndicator()) {
                $data['isBillingServiceIndicator'] = $object->getIsBillingServiceIndicator();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressProductsProductsItemBreakdownItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('serviceCode', $data)) {
                $object->setServiceCode($data['serviceCode']);
            }
            if (\array_key_exists('localServiceCode', $data)) {
                $object->setLocalServiceCode($data['localServiceCode']);
            }
            if (\array_key_exists('typeCode', $data)) {
                $object->setTypeCode($data['typeCode']);
            }
            if (\array_key_exists('serviceTypeCode', $data)) {
                $object->setServiceTypeCode($data['serviceTypeCode']);
            }
            if (\array_key_exists('isCustomerAgreement', $data)) {
                $object->setIsCustomerAgreement($data['isCustomerAgreement']);
            }
            if (\array_key_exists('isMarketedService', $data)) {
                $object->setIsMarketedService($data['isMarketedService']);
            }
            if (\array_key_exists('isBillingServiceIndicator', $data)) {
                $object->setIsBillingServiceIndicator($data['isBillingServiceIndicator']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('serviceCode') && null !== $object->getServiceCode()) {
                $data['serviceCode'] = $object->getServiceCode();
            }
            if ($object->isInitialized('localServiceCode') && null !== $object->getLocalServiceCode()) {
                $data['localServiceCode'] = $object->getLocalServiceCode();
            }
            if ($object->isInitialized('typeCode') && null !== $object->getTypeCode()) {
                $data['typeCode'] = $object->getTypeCode();
            }
            if ($object->isInitialized('serviceTypeCode') && null !== $object->getServiceTypeCode()) {
                $data['serviceTypeCode'] = $object->getServiceTypeCode();
            }
            if ($object->isInitialized('isCustomerAgreement') && null !== $object->getIsCustomerAgreement()) {
                $data['isCustomerAgreement'] = $object->getIsCustomerAgreement();
            }
            if ($object->isInitialized('isMarketedService') && null !== $object->getIsMarketedService()) {
                $data['isMarketedService'] = $object->getIsMarketedService();
            }
            if ($object->isInitialized('isBillingServiceIndicator') && null !== $object->getIsBillingServiceIndicator()) {
                $data['isBillingServiceIndicator'] = $object->getIsBillingServiceIndicator();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem::class => false];
        }
    }
}