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
    class SupermodelIoLogisticsExpressLandedCostRequestItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem();
            if (\array_key_exists('number', $data) && \is_int($data['number'])) {
                $data['number'] = (double) $data['number'];
            }
            if (\array_key_exists('quantity', $data) && \is_int($data['quantity'])) {
                $data['quantity'] = (double) $data['quantity'];
            }
            if (\array_key_exists('unitPrice', $data) && \is_int($data['unitPrice'])) {
                $data['unitPrice'] = (double) $data['unitPrice'];
            }
            if (\array_key_exists('customsValue', $data) && \is_int($data['customsValue'])) {
                $data['customsValue'] = (double) $data['customsValue'];
            }
            if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
                $data['weight'] = (double) $data['weight'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('number', $data)) {
                $object->setNumber($data['number']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('manufacturerCountry', $data)) {
                $object->setManufacturerCountry($data['manufacturerCountry']);
            }
            if (\array_key_exists('partNumber', $data)) {
                $object->setPartNumber($data['partNumber']);
            }
            if (\array_key_exists('quantity', $data)) {
                $object->setQuantity($data['quantity']);
            }
            if (\array_key_exists('quantityType', $data)) {
                $object->setQuantityType($data['quantityType']);
            }
            if (\array_key_exists('unitPrice', $data)) {
                $object->setUnitPrice($data['unitPrice']);
            }
            if (\array_key_exists('unitPriceCurrencyCode', $data)) {
                $object->setUnitPriceCurrencyCode($data['unitPriceCurrencyCode']);
            }
            if (\array_key_exists('customsValue', $data)) {
                $object->setCustomsValue($data['customsValue']);
            }
            if (\array_key_exists('customsValueCurrencyCode', $data)) {
                $object->setCustomsValueCurrencyCode($data['customsValueCurrencyCode']);
            }
            if (\array_key_exists('commodityCode', $data)) {
                $object->setCommodityCode($data['commodityCode']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($data['weight']);
            }
            if (\array_key_exists('weightUnitOfMeasurement', $data)) {
                $object->setWeightUnitOfMeasurement($data['weightUnitOfMeasurement']);
            }
            if (\array_key_exists('category', $data)) {
                $object->setCategory($data['category']);
            }
            if (\array_key_exists('brand', $data)) {
                $object->setBrand($data['brand']);
            }
            if (\array_key_exists('goodsCharacteristics', $data)) {
                $values = [];
                foreach ($data['goodsCharacteristics'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem::class, 'json', $context);
                }
                $object->setGoodsCharacteristics($values);
            }
            if (\array_key_exists('additionalQuantityDefinitions', $data)) {
                $values_1 = [];
                foreach ($data['additionalQuantityDefinitions'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem::class, 'json', $context);
                }
                $object->setAdditionalQuantityDefinitions($values_1);
            }
            if (\array_key_exists('estimatedTariffRateType', $data)) {
                $object->setEstimatedTariffRateType($data['estimatedTariffRateType']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['number'] = $object->getNumber();
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('manufacturerCountry') && null !== $object->getManufacturerCountry()) {
                $data['manufacturerCountry'] = $object->getManufacturerCountry();
            }
            if ($object->isInitialized('partNumber') && null !== $object->getPartNumber()) {
                $data['partNumber'] = $object->getPartNumber();
            }
            $data['quantity'] = $object->getQuantity();
            if ($object->isInitialized('quantityType') && null !== $object->getQuantityType()) {
                $data['quantityType'] = $object->getQuantityType();
            }
            $data['unitPrice'] = $object->getUnitPrice();
            $data['unitPriceCurrencyCode'] = $object->getUnitPriceCurrencyCode();
            if ($object->isInitialized('customsValue') && null !== $object->getCustomsValue()) {
                $data['customsValue'] = $object->getCustomsValue();
            }
            if ($object->isInitialized('customsValueCurrencyCode') && null !== $object->getCustomsValueCurrencyCode()) {
                $data['customsValueCurrencyCode'] = $object->getCustomsValueCurrencyCode();
            }
            if ($object->isInitialized('commodityCode') && null !== $object->getCommodityCode()) {
                $data['commodityCode'] = $object->getCommodityCode();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $object->getWeight();
            }
            if ($object->isInitialized('weightUnitOfMeasurement') && null !== $object->getWeightUnitOfMeasurement()) {
                $data['weightUnitOfMeasurement'] = $object->getWeightUnitOfMeasurement();
            }
            if ($object->isInitialized('category') && null !== $object->getCategory()) {
                $data['category'] = $object->getCategory();
            }
            if ($object->isInitialized('brand') && null !== $object->getBrand()) {
                $data['brand'] = $object->getBrand();
            }
            if ($object->isInitialized('goodsCharacteristics') && null !== $object->getGoodsCharacteristics()) {
                $values = [];
                foreach ($object->getGoodsCharacteristics() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['goodsCharacteristics'] = $values;
            }
            if ($object->isInitialized('additionalQuantityDefinitions') && null !== $object->getAdditionalQuantityDefinitions()) {
                $values_1 = [];
                foreach ($object->getAdditionalQuantityDefinitions() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['additionalQuantityDefinitions'] = $values_1;
            }
            if ($object->isInitialized('estimatedTariffRateType') && null !== $object->getEstimatedTariffRateType()) {
                $data['estimatedTariffRateType'] = $object->getEstimatedTariffRateType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressLandedCostRequestItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem();
            if (\array_key_exists('number', $data) && \is_int($data['number'])) {
                $data['number'] = (double) $data['number'];
            }
            if (\array_key_exists('quantity', $data) && \is_int($data['quantity'])) {
                $data['quantity'] = (double) $data['quantity'];
            }
            if (\array_key_exists('unitPrice', $data) && \is_int($data['unitPrice'])) {
                $data['unitPrice'] = (double) $data['unitPrice'];
            }
            if (\array_key_exists('customsValue', $data) && \is_int($data['customsValue'])) {
                $data['customsValue'] = (double) $data['customsValue'];
            }
            if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
                $data['weight'] = (double) $data['weight'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('number', $data)) {
                $object->setNumber($data['number']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('manufacturerCountry', $data)) {
                $object->setManufacturerCountry($data['manufacturerCountry']);
            }
            if (\array_key_exists('partNumber', $data)) {
                $object->setPartNumber($data['partNumber']);
            }
            if (\array_key_exists('quantity', $data)) {
                $object->setQuantity($data['quantity']);
            }
            if (\array_key_exists('quantityType', $data)) {
                $object->setQuantityType($data['quantityType']);
            }
            if (\array_key_exists('unitPrice', $data)) {
                $object->setUnitPrice($data['unitPrice']);
            }
            if (\array_key_exists('unitPriceCurrencyCode', $data)) {
                $object->setUnitPriceCurrencyCode($data['unitPriceCurrencyCode']);
            }
            if (\array_key_exists('customsValue', $data)) {
                $object->setCustomsValue($data['customsValue']);
            }
            if (\array_key_exists('customsValueCurrencyCode', $data)) {
                $object->setCustomsValueCurrencyCode($data['customsValueCurrencyCode']);
            }
            if (\array_key_exists('commodityCode', $data)) {
                $object->setCommodityCode($data['commodityCode']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($data['weight']);
            }
            if (\array_key_exists('weightUnitOfMeasurement', $data)) {
                $object->setWeightUnitOfMeasurement($data['weightUnitOfMeasurement']);
            }
            if (\array_key_exists('category', $data)) {
                $object->setCategory($data['category']);
            }
            if (\array_key_exists('brand', $data)) {
                $object->setBrand($data['brand']);
            }
            if (\array_key_exists('goodsCharacteristics', $data)) {
                $values = [];
                foreach ($data['goodsCharacteristics'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem::class, 'json', $context);
                }
                $object->setGoodsCharacteristics($values);
            }
            if (\array_key_exists('additionalQuantityDefinitions', $data)) {
                $values_1 = [];
                foreach ($data['additionalQuantityDefinitions'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem::class, 'json', $context);
                }
                $object->setAdditionalQuantityDefinitions($values_1);
            }
            if (\array_key_exists('estimatedTariffRateType', $data)) {
                $object->setEstimatedTariffRateType($data['estimatedTariffRateType']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['number'] = $object->getNumber();
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('manufacturerCountry') && null !== $object->getManufacturerCountry()) {
                $data['manufacturerCountry'] = $object->getManufacturerCountry();
            }
            if ($object->isInitialized('partNumber') && null !== $object->getPartNumber()) {
                $data['partNumber'] = $object->getPartNumber();
            }
            $data['quantity'] = $object->getQuantity();
            if ($object->isInitialized('quantityType') && null !== $object->getQuantityType()) {
                $data['quantityType'] = $object->getQuantityType();
            }
            $data['unitPrice'] = $object->getUnitPrice();
            $data['unitPriceCurrencyCode'] = $object->getUnitPriceCurrencyCode();
            if ($object->isInitialized('customsValue') && null !== $object->getCustomsValue()) {
                $data['customsValue'] = $object->getCustomsValue();
            }
            if ($object->isInitialized('customsValueCurrencyCode') && null !== $object->getCustomsValueCurrencyCode()) {
                $data['customsValueCurrencyCode'] = $object->getCustomsValueCurrencyCode();
            }
            if ($object->isInitialized('commodityCode') && null !== $object->getCommodityCode()) {
                $data['commodityCode'] = $object->getCommodityCode();
            }
            if ($object->isInitialized('weight') && null !== $object->getWeight()) {
                $data['weight'] = $object->getWeight();
            }
            if ($object->isInitialized('weightUnitOfMeasurement') && null !== $object->getWeightUnitOfMeasurement()) {
                $data['weightUnitOfMeasurement'] = $object->getWeightUnitOfMeasurement();
            }
            if ($object->isInitialized('category') && null !== $object->getCategory()) {
                $data['category'] = $object->getCategory();
            }
            if ($object->isInitialized('brand') && null !== $object->getBrand()) {
                $data['brand'] = $object->getBrand();
            }
            if ($object->isInitialized('goodsCharacteristics') && null !== $object->getGoodsCharacteristics()) {
                $values = [];
                foreach ($object->getGoodsCharacteristics() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['goodsCharacteristics'] = $values;
            }
            if ($object->isInitialized('additionalQuantityDefinitions') && null !== $object->getAdditionalQuantityDefinitions()) {
                $values_1 = [];
                foreach ($object->getAdditionalQuantityDefinitions() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['additionalQuantityDefinitions'] = $values_1;
            }
            if ($object->isInitialized('estimatedTariffRateType') && null !== $object->getEstimatedTariffRateType()) {
                $data['estimatedTariffRateType'] = $object->getEstimatedTariffRateType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class => false];
        }
    }
}