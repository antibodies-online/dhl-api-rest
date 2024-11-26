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
    class SupermodelIoLogisticsExpressExportDeclarationLineItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem();
            if (\array_key_exists('price', $data) && \is_int($data['price'])) {
                $data['price'] = (double) $data['price'];
            }
            if (\array_key_exists('preCalculatedLineItemTotalValue', $data) && \is_int($data['preCalculatedLineItemTotalValue'])) {
                $data['preCalculatedLineItemTotalValue'] = (double) $data['preCalculatedLineItemTotalValue'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('number', $data)) {
                $object->setNumber($data['number']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('price', $data)) {
                $object->setPrice($data['price']);
            }
            if (\array_key_exists('quantity', $data)) {
                $object->setQuantity($this->denormalizer->denormalize($data['quantity'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity::class, 'json', $context));
            }
            if (\array_key_exists('commodityCodes', $data)) {
                $values = [];
                foreach ($data['commodityCodes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem::class, 'json', $context);
                }
                $object->setCommodityCodes($values);
            }
            if (\array_key_exists('exportReasonType', $data)) {
                $object->setExportReasonType($data['exportReasonType']);
            }
            if (\array_key_exists('manufacturerCountry', $data)) {
                $object->setManufacturerCountry($data['manufacturerCountry']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight::class, 'json', $context));
            }
            if (\array_key_exists('isTaxesPaid', $data)) {
                $object->setIsTaxesPaid($data['isTaxesPaid']);
            }
            if (\array_key_exists('customerReferences', $data)) {
                $values_1 = [];
                foreach ($data['customerReferences'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItem::class, 'json', $context);
                }
                $object->setCustomerReferences($values_1);
            }
            if (\array_key_exists('customsDocuments', $data)) {
                $values_2 = [];
                foreach ($data['customsDocuments'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem::class, 'json', $context);
                }
                $object->setCustomsDocuments($values_2);
            }
            if (\array_key_exists('preCalculatedLineItemTotalValue', $data)) {
                $object->setPreCalculatedLineItemTotalValue($data['preCalculatedLineItemTotalValue']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['number'] = $object->getNumber();
            $data['description'] = $object->getDescription();
            $data['price'] = $object->getPrice();
            $data['quantity'] = $this->normalizer->normalize($object->getQuantity(), 'json', $context);
            if ($object->isInitialized('commodityCodes') && null !== $object->getCommodityCodes()) {
                $values = [];
                foreach ($object->getCommodityCodes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['commodityCodes'] = $values;
            }
            if ($object->isInitialized('exportReasonType') && null !== $object->getExportReasonType()) {
                $data['exportReasonType'] = $object->getExportReasonType();
            }
            $data['manufacturerCountry'] = $object->getManufacturerCountry();
            $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            if ($object->isInitialized('isTaxesPaid') && null !== $object->getIsTaxesPaid()) {
                $data['isTaxesPaid'] = $object->getIsTaxesPaid();
            }
            if ($object->isInitialized('customerReferences') && null !== $object->getCustomerReferences()) {
                $values_1 = [];
                foreach ($object->getCustomerReferences() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['customerReferences'] = $values_1;
            }
            if ($object->isInitialized('customsDocuments') && null !== $object->getCustomsDocuments()) {
                $values_2 = [];
                foreach ($object->getCustomsDocuments() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['customsDocuments'] = $values_2;
            }
            if ($object->isInitialized('preCalculatedLineItemTotalValue') && null !== $object->getPreCalculatedLineItemTotalValue()) {
                $data['preCalculatedLineItemTotalValue'] = $object->getPreCalculatedLineItemTotalValue();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressExportDeclarationLineItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem();
            if (\array_key_exists('price', $data) && \is_int($data['price'])) {
                $data['price'] = (double) $data['price'];
            }
            if (\array_key_exists('preCalculatedLineItemTotalValue', $data) && \is_int($data['preCalculatedLineItemTotalValue'])) {
                $data['preCalculatedLineItemTotalValue'] = (double) $data['preCalculatedLineItemTotalValue'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('number', $data)) {
                $object->setNumber($data['number']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('price', $data)) {
                $object->setPrice($data['price']);
            }
            if (\array_key_exists('quantity', $data)) {
                $object->setQuantity($this->denormalizer->denormalize($data['quantity'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity::class, 'json', $context));
            }
            if (\array_key_exists('commodityCodes', $data)) {
                $values = [];
                foreach ($data['commodityCodes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem::class, 'json', $context);
                }
                $object->setCommodityCodes($values);
            }
            if (\array_key_exists('exportReasonType', $data)) {
                $object->setExportReasonType($data['exportReasonType']);
            }
            if (\array_key_exists('manufacturerCountry', $data)) {
                $object->setManufacturerCountry($data['manufacturerCountry']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($this->denormalizer->denormalize($data['weight'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight::class, 'json', $context));
            }
            if (\array_key_exists('isTaxesPaid', $data)) {
                $object->setIsTaxesPaid($data['isTaxesPaid']);
            }
            if (\array_key_exists('customerReferences', $data)) {
                $values_1 = [];
                foreach ($data['customerReferences'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItem::class, 'json', $context);
                }
                $object->setCustomerReferences($values_1);
            }
            if (\array_key_exists('customsDocuments', $data)) {
                $values_2 = [];
                foreach ($data['customsDocuments'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem::class, 'json', $context);
                }
                $object->setCustomsDocuments($values_2);
            }
            if (\array_key_exists('preCalculatedLineItemTotalValue', $data)) {
                $object->setPreCalculatedLineItemTotalValue($data['preCalculatedLineItemTotalValue']);
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
            $data['description'] = $object->getDescription();
            $data['price'] = $object->getPrice();
            $data['quantity'] = $this->normalizer->normalize($object->getQuantity(), 'json', $context);
            if ($object->isInitialized('commodityCodes') && null !== $object->getCommodityCodes()) {
                $values = [];
                foreach ($object->getCommodityCodes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['commodityCodes'] = $values;
            }
            if ($object->isInitialized('exportReasonType') && null !== $object->getExportReasonType()) {
                $data['exportReasonType'] = $object->getExportReasonType();
            }
            $data['manufacturerCountry'] = $object->getManufacturerCountry();
            $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
            if ($object->isInitialized('isTaxesPaid') && null !== $object->getIsTaxesPaid()) {
                $data['isTaxesPaid'] = $object->getIsTaxesPaid();
            }
            if ($object->isInitialized('customerReferences') && null !== $object->getCustomerReferences()) {
                $values_1 = [];
                foreach ($object->getCustomerReferences() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['customerReferences'] = $values_1;
            }
            if ($object->isInitialized('customsDocuments') && null !== $object->getCustomsDocuments()) {
                $values_2 = [];
                foreach ($object->getCustomsDocuments() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['customsDocuments'] = $values_2;
            }
            if ($object->isInitialized('preCalculatedLineItemTotalValue') && null !== $object->getPreCalculatedLineItemTotalValue()) {
                $data['preCalculatedLineItemTotalValue'] = $object->getPreCalculatedLineItemTotalValue();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem::class => false];
        }
    }
}