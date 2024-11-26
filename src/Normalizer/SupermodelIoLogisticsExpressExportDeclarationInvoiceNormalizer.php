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
    class SupermodelIoLogisticsExpressExportDeclarationInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('number', $data)) {
                $object->setNumber($data['number']);
            }
            if (\array_key_exists('date', $data)) {
                $object->setDate($data['date']);
            }
            if (\array_key_exists('function', $data)) {
                $object->setFunction($data['function']);
            }
            if (\array_key_exists('customerReferences', $data)) {
                $values = [];
                foreach ($data['customerReferences'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem::class, 'json', $context);
                }
                $object->setCustomerReferences($values);
            }
            if (\array_key_exists('indicativeCustomsValues', $data)) {
                $object->setIndicativeCustomsValues($this->denormalizer->denormalize($data['indicativeCustomsValues'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues::class, 'json', $context));
            }
            if (\array_key_exists('preCalculatedTotalValues', $data)) {
                $object->setPreCalculatedTotalValues($this->denormalizer->denormalize($data['preCalculatedTotalValues'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoicePreCalculatedTotalValues::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['number'] = $object->getNumber();
            $data['date'] = $object->getDate();
            $data['function'] = $object->getFunction();
            if ($object->isInitialized('customerReferences') && null !== $object->getCustomerReferences()) {
                $values = [];
                foreach ($object->getCustomerReferences() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['customerReferences'] = $values;
            }
            if ($object->isInitialized('indicativeCustomsValues') && null !== $object->getIndicativeCustomsValues()) {
                $data['indicativeCustomsValues'] = $this->normalizer->normalize($object->getIndicativeCustomsValues(), 'json', $context);
            }
            if ($object->isInitialized('preCalculatedTotalValues') && null !== $object->getPreCalculatedTotalValues()) {
                $data['preCalculatedTotalValues'] = $this->normalizer->normalize($object->getPreCalculatedTotalValues(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressExportDeclarationInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('number', $data)) {
                $object->setNumber($data['number']);
            }
            if (\array_key_exists('date', $data)) {
                $object->setDate($data['date']);
            }
            if (\array_key_exists('function', $data)) {
                $object->setFunction($data['function']);
            }
            if (\array_key_exists('customerReferences', $data)) {
                $values = [];
                foreach ($data['customerReferences'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem::class, 'json', $context);
                }
                $object->setCustomerReferences($values);
            }
            if (\array_key_exists('indicativeCustomsValues', $data)) {
                $object->setIndicativeCustomsValues($this->denormalizer->denormalize($data['indicativeCustomsValues'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues::class, 'json', $context));
            }
            if (\array_key_exists('preCalculatedTotalValues', $data)) {
                $object->setPreCalculatedTotalValues($this->denormalizer->denormalize($data['preCalculatedTotalValues'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoicePreCalculatedTotalValues::class, 'json', $context));
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
            $data['date'] = $object->getDate();
            $data['function'] = $object->getFunction();
            if ($object->isInitialized('customerReferences') && null !== $object->getCustomerReferences()) {
                $values = [];
                foreach ($object->getCustomerReferences() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['customerReferences'] = $values;
            }
            if ($object->isInitialized('indicativeCustomsValues') && null !== $object->getIndicativeCustomsValues()) {
                $data['indicativeCustomsValues'] = $this->normalizer->normalize($object->getIndicativeCustomsValues(), 'json', $context);
            }
            if ($object->isInitialized('preCalculatedTotalValues') && null !== $object->getPreCalculatedTotalValues()) {
                $data['preCalculatedTotalValues'] = $this->normalizer->normalize($object->getPreCalculatedTotalValues(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice::class => false];
        }
    }
}