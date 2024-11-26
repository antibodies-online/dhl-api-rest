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
    class SupermodelIoLogisticsExpressRateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequest::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('customerDetails', $data)) {
                $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestCustomerDetails::class, 'json', $context));
            }
            if (\array_key_exists('accounts', $data)) {
                $values = [];
                foreach ($data['accounts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAccount::class, 'json', $context);
                }
                $object->setAccounts($values);
            }
            if (\array_key_exists('productCode', $data)) {
                $object->setProductCode($data['productCode']);
            }
            if (\array_key_exists('localProductCode', $data)) {
                $object->setLocalProductCode($data['localProductCode']);
            }
            if (\array_key_exists('valueAddedServices', $data)) {
                $values_1 = [];
                foreach ($data['valueAddedServices'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesRates::class, 'json', $context);
                }
                $object->setValueAddedServices($values_1);
            }
            if (\array_key_exists('productsAndServices', $data)) {
                $values_2 = [];
                foreach ($data['productsAndServices'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem::class, 'json', $context);
                }
                $object->setProductsAndServices($values_2);
            }
            if (\array_key_exists('payerCountryCode', $data)) {
                $object->setPayerCountryCode($data['payerCountryCode']);
            }
            if (\array_key_exists('plannedShippingDateAndTime', $data)) {
                $object->setPlannedShippingDateAndTime($data['plannedShippingDateAndTime']);
            }
            if (\array_key_exists('unitOfMeasurement', $data)) {
                $object->setUnitOfMeasurement($data['unitOfMeasurement']);
            }
            if (\array_key_exists('isCustomsDeclarable', $data)) {
                $object->setIsCustomsDeclarable($data['isCustomsDeclarable']);
            }
            if (\array_key_exists('monetaryAmount', $data)) {
                $values_3 = [];
                foreach ($data['monetaryAmount'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem::class, 'json', $context);
                }
                $object->setMonetaryAmount($values_3);
            }
            if (\array_key_exists('requestAllValueAddedServices', $data)) {
                $object->setRequestAllValueAddedServices($data['requestAllValueAddedServices']);
            }
            if (\array_key_exists('estimatedDeliveryDate', $data)) {
                $object->setEstimatedDeliveryDate($this->denormalizer->denormalize($data['estimatedDeliveryDate'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate::class, 'json', $context));
            }
            if (\array_key_exists('getAdditionalInformation', $data)) {
                $values_4 = [];
                foreach ($data['getAdditionalInformation'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem::class, 'json', $context);
                }
                $object->setGetAdditionalInformation($values_4);
            }
            if (\array_key_exists('returnStandardProductsOnly', $data)) {
                $object->setReturnStandardProductsOnly($data['returnStandardProductsOnly']);
            }
            if (\array_key_exists('nextBusinessDay', $data)) {
                $object->setNextBusinessDay($data['nextBusinessDay']);
            }
            if (\array_key_exists('productTypeCode', $data)) {
                $object->setProductTypeCode($data['productTypeCode']);
            }
            if (\array_key_exists('packages', $data)) {
                $values_5 = [];
                foreach ($data['packages'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageRR::class, 'json', $context);
                }
                $object->setPackages($values_5);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['customerDetails'] = $this->normalizer->normalize($object->getCustomerDetails(), 'json', $context);
            if ($object->isInitialized('accounts') && null !== $object->getAccounts()) {
                $values = [];
                foreach ($object->getAccounts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['accounts'] = $values;
            }
            if ($object->isInitialized('productCode') && null !== $object->getProductCode()) {
                $data['productCode'] = $object->getProductCode();
            }
            if ($object->isInitialized('localProductCode') && null !== $object->getLocalProductCode()) {
                $data['localProductCode'] = $object->getLocalProductCode();
            }
            if ($object->isInitialized('valueAddedServices') && null !== $object->getValueAddedServices()) {
                $values_1 = [];
                foreach ($object->getValueAddedServices() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['valueAddedServices'] = $values_1;
            }
            if ($object->isInitialized('productsAndServices') && null !== $object->getProductsAndServices()) {
                $values_2 = [];
                foreach ($object->getProductsAndServices() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['productsAndServices'] = $values_2;
            }
            if ($object->isInitialized('payerCountryCode') && null !== $object->getPayerCountryCode()) {
                $data['payerCountryCode'] = $object->getPayerCountryCode();
            }
            $data['plannedShippingDateAndTime'] = $object->getPlannedShippingDateAndTime();
            $data['unitOfMeasurement'] = $object->getUnitOfMeasurement();
            $data['isCustomsDeclarable'] = $object->getIsCustomsDeclarable();
            if ($object->isInitialized('monetaryAmount') && null !== $object->getMonetaryAmount()) {
                $values_3 = [];
                foreach ($object->getMonetaryAmount() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['monetaryAmount'] = $values_3;
            }
            if ($object->isInitialized('requestAllValueAddedServices') && null !== $object->getRequestAllValueAddedServices()) {
                $data['requestAllValueAddedServices'] = $object->getRequestAllValueAddedServices();
            }
            if ($object->isInitialized('estimatedDeliveryDate') && null !== $object->getEstimatedDeliveryDate()) {
                $data['estimatedDeliveryDate'] = $this->normalizer->normalize($object->getEstimatedDeliveryDate(), 'json', $context);
            }
            if ($object->isInitialized('getAdditionalInformation') && null !== $object->getGetAdditionalInformation()) {
                $values_4 = [];
                foreach ($object->getGetAdditionalInformation() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['getAdditionalInformation'] = $values_4;
            }
            if ($object->isInitialized('returnStandardProductsOnly') && null !== $object->getReturnStandardProductsOnly()) {
                $data['returnStandardProductsOnly'] = $object->getReturnStandardProductsOnly();
            }
            if ($object->isInitialized('nextBusinessDay') && null !== $object->getNextBusinessDay()) {
                $data['nextBusinessDay'] = $object->getNextBusinessDay();
            }
            if ($object->isInitialized('productTypeCode') && null !== $object->getProductTypeCode()) {
                $data['productTypeCode'] = $object->getProductTypeCode();
            }
            $values_5 = [];
            foreach ($object->getPackages() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['packages'] = $values_5;
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequest::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressRateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequest::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('customerDetails', $data)) {
                $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestCustomerDetails::class, 'json', $context));
            }
            if (\array_key_exists('accounts', $data)) {
                $values = [];
                foreach ($data['accounts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAccount::class, 'json', $context);
                }
                $object->setAccounts($values);
            }
            if (\array_key_exists('productCode', $data)) {
                $object->setProductCode($data['productCode']);
            }
            if (\array_key_exists('localProductCode', $data)) {
                $object->setLocalProductCode($data['localProductCode']);
            }
            if (\array_key_exists('valueAddedServices', $data)) {
                $values_1 = [];
                foreach ($data['valueAddedServices'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesRates::class, 'json', $context);
                }
                $object->setValueAddedServices($values_1);
            }
            if (\array_key_exists('productsAndServices', $data)) {
                $values_2 = [];
                foreach ($data['productsAndServices'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem::class, 'json', $context);
                }
                $object->setProductsAndServices($values_2);
            }
            if (\array_key_exists('payerCountryCode', $data)) {
                $object->setPayerCountryCode($data['payerCountryCode']);
            }
            if (\array_key_exists('plannedShippingDateAndTime', $data)) {
                $object->setPlannedShippingDateAndTime($data['plannedShippingDateAndTime']);
            }
            if (\array_key_exists('unitOfMeasurement', $data)) {
                $object->setUnitOfMeasurement($data['unitOfMeasurement']);
            }
            if (\array_key_exists('isCustomsDeclarable', $data)) {
                $object->setIsCustomsDeclarable($data['isCustomsDeclarable']);
            }
            if (\array_key_exists('monetaryAmount', $data)) {
                $values_3 = [];
                foreach ($data['monetaryAmount'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem::class, 'json', $context);
                }
                $object->setMonetaryAmount($values_3);
            }
            if (\array_key_exists('requestAllValueAddedServices', $data)) {
                $object->setRequestAllValueAddedServices($data['requestAllValueAddedServices']);
            }
            if (\array_key_exists('estimatedDeliveryDate', $data)) {
                $object->setEstimatedDeliveryDate($this->denormalizer->denormalize($data['estimatedDeliveryDate'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate::class, 'json', $context));
            }
            if (\array_key_exists('getAdditionalInformation', $data)) {
                $values_4 = [];
                foreach ($data['getAdditionalInformation'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem::class, 'json', $context);
                }
                $object->setGetAdditionalInformation($values_4);
            }
            if (\array_key_exists('returnStandardProductsOnly', $data)) {
                $object->setReturnStandardProductsOnly($data['returnStandardProductsOnly']);
            }
            if (\array_key_exists('nextBusinessDay', $data)) {
                $object->setNextBusinessDay($data['nextBusinessDay']);
            }
            if (\array_key_exists('productTypeCode', $data)) {
                $object->setProductTypeCode($data['productTypeCode']);
            }
            if (\array_key_exists('packages', $data)) {
                $values_5 = [];
                foreach ($data['packages'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageRR::class, 'json', $context);
                }
                $object->setPackages($values_5);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['customerDetails'] = $this->normalizer->normalize($object->getCustomerDetails(), 'json', $context);
            if ($object->isInitialized('accounts') && null !== $object->getAccounts()) {
                $values = [];
                foreach ($object->getAccounts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['accounts'] = $values;
            }
            if ($object->isInitialized('productCode') && null !== $object->getProductCode()) {
                $data['productCode'] = $object->getProductCode();
            }
            if ($object->isInitialized('localProductCode') && null !== $object->getLocalProductCode()) {
                $data['localProductCode'] = $object->getLocalProductCode();
            }
            if ($object->isInitialized('valueAddedServices') && null !== $object->getValueAddedServices()) {
                $values_1 = [];
                foreach ($object->getValueAddedServices() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['valueAddedServices'] = $values_1;
            }
            if ($object->isInitialized('productsAndServices') && null !== $object->getProductsAndServices()) {
                $values_2 = [];
                foreach ($object->getProductsAndServices() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['productsAndServices'] = $values_2;
            }
            if ($object->isInitialized('payerCountryCode') && null !== $object->getPayerCountryCode()) {
                $data['payerCountryCode'] = $object->getPayerCountryCode();
            }
            $data['plannedShippingDateAndTime'] = $object->getPlannedShippingDateAndTime();
            $data['unitOfMeasurement'] = $object->getUnitOfMeasurement();
            $data['isCustomsDeclarable'] = $object->getIsCustomsDeclarable();
            if ($object->isInitialized('monetaryAmount') && null !== $object->getMonetaryAmount()) {
                $values_3 = [];
                foreach ($object->getMonetaryAmount() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['monetaryAmount'] = $values_3;
            }
            if ($object->isInitialized('requestAllValueAddedServices') && null !== $object->getRequestAllValueAddedServices()) {
                $data['requestAllValueAddedServices'] = $object->getRequestAllValueAddedServices();
            }
            if ($object->isInitialized('estimatedDeliveryDate') && null !== $object->getEstimatedDeliveryDate()) {
                $data['estimatedDeliveryDate'] = $this->normalizer->normalize($object->getEstimatedDeliveryDate(), 'json', $context);
            }
            if ($object->isInitialized('getAdditionalInformation') && null !== $object->getGetAdditionalInformation()) {
                $values_4 = [];
                foreach ($object->getGetAdditionalInformation() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['getAdditionalInformation'] = $values_4;
            }
            if ($object->isInitialized('returnStandardProductsOnly') && null !== $object->getReturnStandardProductsOnly()) {
                $data['returnStandardProductsOnly'] = $object->getReturnStandardProductsOnly();
            }
            if ($object->isInitialized('nextBusinessDay') && null !== $object->getNextBusinessDay()) {
                $data['nextBusinessDay'] = $object->getNextBusinessDay();
            }
            if ($object->isInitialized('productTypeCode') && null !== $object->getProductTypeCode()) {
                $data['productTypeCode'] = $object->getProductTypeCode();
            }
            $values_5 = [];
            foreach ($object->getPackages() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['packages'] = $values_5;
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequest::class => false];
        }
    }
}