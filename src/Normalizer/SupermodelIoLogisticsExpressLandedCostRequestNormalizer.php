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
    class SupermodelIoLogisticsExpressLandedCostRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('customerDetails', $data)) {
                $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails::class, 'json', $context));
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
            if (\array_key_exists('unitOfMeasurement', $data)) {
                $object->setUnitOfMeasurement($data['unitOfMeasurement']);
            }
            if (\array_key_exists('currencyCode', $data)) {
                $object->setCurrencyCode($data['currencyCode']);
            }
            if (\array_key_exists('isCustomsDeclarable', $data)) {
                $object->setIsCustomsDeclarable($data['isCustomsDeclarable']);
            }
            if (\array_key_exists('isDTPRequested', $data)) {
                $object->setIsDTPRequested($data['isDTPRequested']);
            }
            if (\array_key_exists('isInsuranceRequested', $data)) {
                $object->setIsInsuranceRequested($data['isInsuranceRequested']);
            }
            if (\array_key_exists('getCostBreakdown', $data)) {
                $object->setGetCostBreakdown($data['getCostBreakdown']);
            }
            if (\array_key_exists('charges', $data)) {
                $values_1 = [];
                foreach ($data['charges'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestChargesItem::class, 'json', $context);
                }
                $object->setCharges($values_1);
            }
            if (\array_key_exists('shipmentPurpose', $data)) {
                $object->setShipmentPurpose($data['shipmentPurpose']);
            }
            if (\array_key_exists('transportationMode', $data)) {
                $object->setTransportationMode($data['transportationMode']);
            }
            if (\array_key_exists('merchantSelectedCarrierName', $data)) {
                $object->setMerchantSelectedCarrierName($data['merchantSelectedCarrierName']);
            }
            if (\array_key_exists('packages', $data)) {
                $values_2 = [];
                foreach ($data['packages'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageRR::class, 'json', $context);
                }
                $object->setPackages($values_2);
            }
            if (\array_key_exists('items', $data)) {
                $values_3 = [];
                foreach ($data['items'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class, 'json', $context);
                }
                $object->setItems($values_3);
            }
            if (\array_key_exists('getTariffFormula', $data)) {
                $object->setGetTariffFormula($data['getTariffFormula']);
            }
            if (\array_key_exists('getQuotationID', $data)) {
                $object->setGetQuotationID($data['getQuotationID']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['customerDetails'] = $this->normalizer->normalize($object->getCustomerDetails(), 'json', $context);
            $values = [];
            foreach ($object->getAccounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['accounts'] = $values;
            if ($object->isInitialized('productCode') && null !== $object->getProductCode()) {
                $data['productCode'] = $object->getProductCode();
            }
            if ($object->isInitialized('localProductCode') && null !== $object->getLocalProductCode()) {
                $data['localProductCode'] = $object->getLocalProductCode();
            }
            $data['unitOfMeasurement'] = $object->getUnitOfMeasurement();
            $data['currencyCode'] = $object->getCurrencyCode();
            $data['isCustomsDeclarable'] = $object->getIsCustomsDeclarable();
            if ($object->isInitialized('isDTPRequested') && null !== $object->getIsDTPRequested()) {
                $data['isDTPRequested'] = $object->getIsDTPRequested();
            }
            if ($object->isInitialized('isInsuranceRequested') && null !== $object->getIsInsuranceRequested()) {
                $data['isInsuranceRequested'] = $object->getIsInsuranceRequested();
            }
            $data['getCostBreakdown'] = $object->getGetCostBreakdown();
            if ($object->isInitialized('charges') && null !== $object->getCharges()) {
                $values_1 = [];
                foreach ($object->getCharges() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['charges'] = $values_1;
            }
            if ($object->isInitialized('shipmentPurpose') && null !== $object->getShipmentPurpose()) {
                $data['shipmentPurpose'] = $object->getShipmentPurpose();
            }
            if ($object->isInitialized('transportationMode') && null !== $object->getTransportationMode()) {
                $data['transportationMode'] = $object->getTransportationMode();
            }
            if ($object->isInitialized('merchantSelectedCarrierName') && null !== $object->getMerchantSelectedCarrierName()) {
                $data['merchantSelectedCarrierName'] = $object->getMerchantSelectedCarrierName();
            }
            $values_2 = [];
            foreach ($object->getPackages() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['packages'] = $values_2;
            $values_3 = [];
            foreach ($object->getItems() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['items'] = $values_3;
            if ($object->isInitialized('getTariffFormula') && null !== $object->getGetTariffFormula()) {
                $data['getTariffFormula'] = $object->getGetTariffFormula();
            }
            if ($object->isInitialized('getQuotationID') && null !== $object->getGetQuotationID()) {
                $data['getQuotationID'] = $object->getGetQuotationID();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressLandedCostRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('customerDetails', $data)) {
                $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails::class, 'json', $context));
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
            if (\array_key_exists('unitOfMeasurement', $data)) {
                $object->setUnitOfMeasurement($data['unitOfMeasurement']);
            }
            if (\array_key_exists('currencyCode', $data)) {
                $object->setCurrencyCode($data['currencyCode']);
            }
            if (\array_key_exists('isCustomsDeclarable', $data)) {
                $object->setIsCustomsDeclarable($data['isCustomsDeclarable']);
            }
            if (\array_key_exists('isDTPRequested', $data)) {
                $object->setIsDTPRequested($data['isDTPRequested']);
            }
            if (\array_key_exists('isInsuranceRequested', $data)) {
                $object->setIsInsuranceRequested($data['isInsuranceRequested']);
            }
            if (\array_key_exists('getCostBreakdown', $data)) {
                $object->setGetCostBreakdown($data['getCostBreakdown']);
            }
            if (\array_key_exists('charges', $data)) {
                $values_1 = [];
                foreach ($data['charges'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestChargesItem::class, 'json', $context);
                }
                $object->setCharges($values_1);
            }
            if (\array_key_exists('shipmentPurpose', $data)) {
                $object->setShipmentPurpose($data['shipmentPurpose']);
            }
            if (\array_key_exists('transportationMode', $data)) {
                $object->setTransportationMode($data['transportationMode']);
            }
            if (\array_key_exists('merchantSelectedCarrierName', $data)) {
                $object->setMerchantSelectedCarrierName($data['merchantSelectedCarrierName']);
            }
            if (\array_key_exists('packages', $data)) {
                $values_2 = [];
                foreach ($data['packages'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageRR::class, 'json', $context);
                }
                $object->setPackages($values_2);
            }
            if (\array_key_exists('items', $data)) {
                $values_3 = [];
                foreach ($data['items'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class, 'json', $context);
                }
                $object->setItems($values_3);
            }
            if (\array_key_exists('getTariffFormula', $data)) {
                $object->setGetTariffFormula($data['getTariffFormula']);
            }
            if (\array_key_exists('getQuotationID', $data)) {
                $object->setGetQuotationID($data['getQuotationID']);
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
            $values = [];
            foreach ($object->getAccounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['accounts'] = $values;
            if ($object->isInitialized('productCode') && null !== $object->getProductCode()) {
                $data['productCode'] = $object->getProductCode();
            }
            if ($object->isInitialized('localProductCode') && null !== $object->getLocalProductCode()) {
                $data['localProductCode'] = $object->getLocalProductCode();
            }
            $data['unitOfMeasurement'] = $object->getUnitOfMeasurement();
            $data['currencyCode'] = $object->getCurrencyCode();
            $data['isCustomsDeclarable'] = $object->getIsCustomsDeclarable();
            if ($object->isInitialized('isDTPRequested') && null !== $object->getIsDTPRequested()) {
                $data['isDTPRequested'] = $object->getIsDTPRequested();
            }
            if ($object->isInitialized('isInsuranceRequested') && null !== $object->getIsInsuranceRequested()) {
                $data['isInsuranceRequested'] = $object->getIsInsuranceRequested();
            }
            $data['getCostBreakdown'] = $object->getGetCostBreakdown();
            if ($object->isInitialized('charges') && null !== $object->getCharges()) {
                $values_1 = [];
                foreach ($object->getCharges() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['charges'] = $values_1;
            }
            if ($object->isInitialized('shipmentPurpose') && null !== $object->getShipmentPurpose()) {
                $data['shipmentPurpose'] = $object->getShipmentPurpose();
            }
            if ($object->isInitialized('transportationMode') && null !== $object->getTransportationMode()) {
                $data['transportationMode'] = $object->getTransportationMode();
            }
            if ($object->isInitialized('merchantSelectedCarrierName') && null !== $object->getMerchantSelectedCarrierName()) {
                $data['merchantSelectedCarrierName'] = $object->getMerchantSelectedCarrierName();
            }
            $values_2 = [];
            foreach ($object->getPackages() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['packages'] = $values_2;
            $values_3 = [];
            foreach ($object->getItems() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['items'] = $values_3;
            if ($object->isInitialized('getTariffFormula') && null !== $object->getGetTariffFormula()) {
                $data['getTariffFormula'] = $object->getGetTariffFormula();
            }
            if ($object->isInitialized('getQuotationID') && null !== $object->getGetQuotationID()) {
                $data['getQuotationID'] = $object->getGetQuotationID();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest::class => false];
        }
    }
}