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
    class SupermodelIoLogisticsExpressPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackage::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackage::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackage();
            if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
                $data['weight'] = (double) $data['weight'];
            }
            if (\array_key_exists('referenceNumber', $data) && \is_int($data['referenceNumber'])) {
                $data['referenceNumber'] = (double) $data['referenceNumber'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('typeCode', $data)) {
                $object->setTypeCode($data['typeCode']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($data['weight']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageDimensions::class, 'json', $context));
            }
            if (\array_key_exists('customerReferences', $data)) {
                $values = [];
                foreach ($data['customerReferences'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageReference::class, 'json', $context);
                }
                $object->setCustomerReferences($values);
            }
            if (\array_key_exists('identifiers', $data)) {
                $values_1 = [];
                foreach ($data['identifiers'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressIdentifier::class, 'json', $context);
                }
                $object->setIdentifiers($values_1);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('labelBarcodes', $data)) {
                $values_2 = [];
                foreach ($data['labelBarcodes'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageLabelBarcodesItem::class, 'json', $context);
                }
                $object->setLabelBarcodes($values_2);
            }
            if (\array_key_exists('labelText', $data)) {
                $values_3 = [];
                foreach ($data['labelText'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageLabelTextItem::class, 'json', $context);
                }
                $object->setLabelText($values_3);
            }
            if (\array_key_exists('labelDescription', $data)) {
                $object->setLabelDescription($data['labelDescription']);
            }
            if (\array_key_exists('referenceNumber', $data)) {
                $object->setReferenceNumber($data['referenceNumber']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('typeCode') && null !== $object->getTypeCode()) {
                $data['typeCode'] = $object->getTypeCode();
            }
            $data['weight'] = $object->getWeight();
            $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            if ($object->isInitialized('customerReferences') && null !== $object->getCustomerReferences()) {
                $values = [];
                foreach ($object->getCustomerReferences() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['customerReferences'] = $values;
            }
            if ($object->isInitialized('identifiers') && null !== $object->getIdentifiers()) {
                $values_1 = [];
                foreach ($object->getIdentifiers() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['identifiers'] = $values_1;
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('labelBarcodes') && null !== $object->getLabelBarcodes()) {
                $values_2 = [];
                foreach ($object->getLabelBarcodes() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['labelBarcodes'] = $values_2;
            }
            if ($object->isInitialized('labelText') && null !== $object->getLabelText()) {
                $values_3 = [];
                foreach ($object->getLabelText() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['labelText'] = $values_3;
            }
            if ($object->isInitialized('labelDescription') && null !== $object->getLabelDescription()) {
                $data['labelDescription'] = $object->getLabelDescription();
            }
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $data['referenceNumber'] = $object->getReferenceNumber();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackage::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackage::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackage::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackage();
            if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
                $data['weight'] = (double) $data['weight'];
            }
            if (\array_key_exists('referenceNumber', $data) && \is_int($data['referenceNumber'])) {
                $data['referenceNumber'] = (double) $data['referenceNumber'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('typeCode', $data)) {
                $object->setTypeCode($data['typeCode']);
            }
            if (\array_key_exists('weight', $data)) {
                $object->setWeight($data['weight']);
            }
            if (\array_key_exists('dimensions', $data)) {
                $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageDimensions::class, 'json', $context));
            }
            if (\array_key_exists('customerReferences', $data)) {
                $values = [];
                foreach ($data['customerReferences'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageReference::class, 'json', $context);
                }
                $object->setCustomerReferences($values);
            }
            if (\array_key_exists('identifiers', $data)) {
                $values_1 = [];
                foreach ($data['identifiers'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressIdentifier::class, 'json', $context);
                }
                $object->setIdentifiers($values_1);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('labelBarcodes', $data)) {
                $values_2 = [];
                foreach ($data['labelBarcodes'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageLabelBarcodesItem::class, 'json', $context);
                }
                $object->setLabelBarcodes($values_2);
            }
            if (\array_key_exists('labelText', $data)) {
                $values_3 = [];
                foreach ($data['labelText'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageLabelTextItem::class, 'json', $context);
                }
                $object->setLabelText($values_3);
            }
            if (\array_key_exists('labelDescription', $data)) {
                $object->setLabelDescription($data['labelDescription']);
            }
            if (\array_key_exists('referenceNumber', $data)) {
                $object->setReferenceNumber($data['referenceNumber']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('typeCode') && null !== $object->getTypeCode()) {
                $data['typeCode'] = $object->getTypeCode();
            }
            $data['weight'] = $object->getWeight();
            $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
            if ($object->isInitialized('customerReferences') && null !== $object->getCustomerReferences()) {
                $values = [];
                foreach ($object->getCustomerReferences() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['customerReferences'] = $values;
            }
            if ($object->isInitialized('identifiers') && null !== $object->getIdentifiers()) {
                $values_1 = [];
                foreach ($object->getIdentifiers() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['identifiers'] = $values_1;
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('labelBarcodes') && null !== $object->getLabelBarcodes()) {
                $values_2 = [];
                foreach ($object->getLabelBarcodes() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['labelBarcodes'] = $values_2;
            }
            if ($object->isInitialized('labelText') && null !== $object->getLabelText()) {
                $values_3 = [];
                foreach ($object->getLabelText() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['labelText'] = $values_3;
            }
            if ($object->isInitialized('labelDescription') && null !== $object->getLabelDescription()) {
                $data['labelDescription'] = $object->getLabelDescription();
            }
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $data['referenceNumber'] = $object->getReferenceNumber();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackage::class => false];
        }
    }
}