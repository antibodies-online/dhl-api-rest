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
    class SupermodelIoLogisticsExpressRatesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRates::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRates::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRates();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('products', $data)) {
                $values = [];
                foreach ($data['products'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class, 'json', $context);
                }
                $object->setProducts($values);
            }
            if (\array_key_exists('exchangeRates', $data)) {
                $values_1 = [];
                foreach ($data['exchangeRates'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesExchangeRatesItem::class, 'json', $context);
                }
                $object->setExchangeRates($values_1);
            }
            if (\array_key_exists('warnings', $data)) {
                $values_2 = [];
                foreach ($data['warnings'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setWarnings($values_2);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $values = [];
            foreach ($object->getProducts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['products'] = $values;
            if ($object->isInitialized('exchangeRates') && null !== $object->getExchangeRates()) {
                $values_1 = [];
                foreach ($object->getExchangeRates() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['exchangeRates'] = $values_1;
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values_2 = [];
                foreach ($object->getWarnings() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['warnings'] = $values_2;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRates::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressRatesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRates::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRates::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRates();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('products', $data)) {
                $values = [];
                foreach ($data['products'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class, 'json', $context);
                }
                $object->setProducts($values);
            }
            if (\array_key_exists('exchangeRates', $data)) {
                $values_1 = [];
                foreach ($data['exchangeRates'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRatesExchangeRatesItem::class, 'json', $context);
                }
                $object->setExchangeRates($values_1);
            }
            if (\array_key_exists('warnings', $data)) {
                $values_2 = [];
                foreach ($data['warnings'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setWarnings($values_2);
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
            foreach ($object->getProducts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['products'] = $values;
            if ($object->isInitialized('exchangeRates') && null !== $object->getExchangeRates()) {
                $values_1 = [];
                foreach ($object->getExchangeRates() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['exchangeRates'] = $values_1;
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values_2 = [];
                foreach ($object->getWarnings() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['warnings'] = $values_2;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRates::class => false];
        }
    }
}