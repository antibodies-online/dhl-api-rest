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
    class SupermodelIoLogisticsExpressCreateShipmentRequestContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent();
            if (\array_key_exists('declaredValue', $data) && \is_int($data['declaredValue'])) {
                $data['declaredValue'] = (double) $data['declaredValue'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('packages', $data)) {
                $values = [];
                foreach ($data['packages'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackage::class, 'json', $context);
                }
                $object->setPackages($values);
            }
            if (\array_key_exists('isCustomsDeclarable', $data)) {
                $object->setIsCustomsDeclarable($data['isCustomsDeclarable']);
            }
            if (\array_key_exists('declaredValue', $data)) {
                $object->setDeclaredValue($data['declaredValue']);
            }
            if (\array_key_exists('declaredValueCurrency', $data)) {
                $object->setDeclaredValueCurrency($data['declaredValueCurrency']);
            }
            if (\array_key_exists('exportDeclaration', $data)) {
                $object->setExportDeclaration($this->denormalizer->denormalize($data['exportDeclaration'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class, 'json', $context));
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('USFilingTypeValue', $data)) {
                $object->setUSFilingTypeValue($data['USFilingTypeValue']);
            }
            if (\array_key_exists('incoterm', $data)) {
                $object->setIncoterm($data['incoterm']);
            }
            if (\array_key_exists('unitOfMeasurement', $data)) {
                $object->setUnitOfMeasurement($data['unitOfMeasurement']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $values = [];
            foreach ($object->getPackages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['packages'] = $values;
            $data['isCustomsDeclarable'] = $object->getIsCustomsDeclarable();
            if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
                $data['declaredValue'] = $object->getDeclaredValue();
            }
            if ($object->isInitialized('declaredValueCurrency') && null !== $object->getDeclaredValueCurrency()) {
                $data['declaredValueCurrency'] = $object->getDeclaredValueCurrency();
            }
            if ($object->isInitialized('exportDeclaration') && null !== $object->getExportDeclaration()) {
                $data['exportDeclaration'] = $this->normalizer->normalize($object->getExportDeclaration(), 'json', $context);
            }
            $data['description'] = $object->getDescription();
            if ($object->isInitialized('uSFilingTypeValue') && null !== $object->getUSFilingTypeValue()) {
                $data['USFilingTypeValue'] = $object->getUSFilingTypeValue();
            }
            $data['incoterm'] = $object->getIncoterm();
            $data['unitOfMeasurement'] = $object->getUnitOfMeasurement();
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressCreateShipmentRequestContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent();
            if (\array_key_exists('declaredValue', $data) && \is_int($data['declaredValue'])) {
                $data['declaredValue'] = (double) $data['declaredValue'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('packages', $data)) {
                $values = [];
                foreach ($data['packages'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackage::class, 'json', $context);
                }
                $object->setPackages($values);
            }
            if (\array_key_exists('isCustomsDeclarable', $data)) {
                $object->setIsCustomsDeclarable($data['isCustomsDeclarable']);
            }
            if (\array_key_exists('declaredValue', $data)) {
                $object->setDeclaredValue($data['declaredValue']);
            }
            if (\array_key_exists('declaredValueCurrency', $data)) {
                $object->setDeclaredValueCurrency($data['declaredValueCurrency']);
            }
            if (\array_key_exists('exportDeclaration', $data)) {
                $object->setExportDeclaration($this->denormalizer->denormalize($data['exportDeclaration'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class, 'json', $context));
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('USFilingTypeValue', $data)) {
                $object->setUSFilingTypeValue($data['USFilingTypeValue']);
            }
            if (\array_key_exists('incoterm', $data)) {
                $object->setIncoterm($data['incoterm']);
            }
            if (\array_key_exists('unitOfMeasurement', $data)) {
                $object->setUnitOfMeasurement($data['unitOfMeasurement']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $values = [];
            foreach ($object->getPackages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['packages'] = $values;
            $data['isCustomsDeclarable'] = $object->getIsCustomsDeclarable();
            if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
                $data['declaredValue'] = $object->getDeclaredValue();
            }
            if ($object->isInitialized('declaredValueCurrency') && null !== $object->getDeclaredValueCurrency()) {
                $data['declaredValueCurrency'] = $object->getDeclaredValueCurrency();
            }
            if ($object->isInitialized('exportDeclaration') && null !== $object->getExportDeclaration()) {
                $data['exportDeclaration'] = $this->normalizer->normalize($object->getExportDeclaration(), 'json', $context);
            }
            $data['description'] = $object->getDescription();
            if ($object->isInitialized('uSFilingTypeValue') && null !== $object->getUSFilingTypeValue()) {
                $data['USFilingTypeValue'] = $object->getUSFilingTypeValue();
            }
            $data['incoterm'] = $object->getIncoterm();
            $data['unitOfMeasurement'] = $object->getUnitOfMeasurement();
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class => false];
        }
    }
}