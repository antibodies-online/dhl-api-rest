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
    class SupermodelIoLogisticsExpressAddressValidateResponseAddressItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
            }
            if (\array_key_exists('postalCode', $data)) {
                $object->setPostalCode($data['postalCode']);
            }
            if (\array_key_exists('cityName', $data)) {
                $object->setCityName($data['cityName']);
            }
            if (\array_key_exists('countyName', $data)) {
                $object->setCountyName($data['countyName']);
            }
            if (\array_key_exists('serviceArea', $data)) {
                $object->setServiceArea($this->denormalizer->denormalize($data['serviceArea'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['countryCode'] = $object->getCountryCode();
            $data['postalCode'] = $object->getPostalCode();
            if ($object->isInitialized('cityName') && null !== $object->getCityName()) {
                $data['cityName'] = $object->getCityName();
            }
            if ($object->isInitialized('countyName') && null !== $object->getCountyName()) {
                $data['countyName'] = $object->getCountyName();
            }
            if ($object->isInitialized('serviceArea') && null !== $object->getServiceArea()) {
                $data['serviceArea'] = $this->normalizer->normalize($object->getServiceArea(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressAddressValidateResponseAddressItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
            }
            if (\array_key_exists('postalCode', $data)) {
                $object->setPostalCode($data['postalCode']);
            }
            if (\array_key_exists('cityName', $data)) {
                $object->setCityName($data['cityName']);
            }
            if (\array_key_exists('countyName', $data)) {
                $object->setCountyName($data['countyName']);
            }
            if (\array_key_exists('serviceArea', $data)) {
                $object->setServiceArea($this->denormalizer->denormalize($data['serviceArea'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea::class, 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['countryCode'] = $object->getCountryCode();
            $data['postalCode'] = $object->getPostalCode();
            if ($object->isInitialized('cityName') && null !== $object->getCityName()) {
                $data['cityName'] = $object->getCityName();
            }
            if ($object->isInitialized('countyName') && null !== $object->getCountyName()) {
                $data['countyName'] = $object->getCountyName();
            }
            if ($object->isInitialized('serviceArea') && null !== $object->getServiceArea()) {
                $data['serviceArea'] = $this->normalizer->normalize($object->getServiceArea(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem::class => false];
        }
    }
}