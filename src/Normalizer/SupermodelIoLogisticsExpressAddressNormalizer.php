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
    class SupermodelIoLogisticsExpressAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddress::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddress::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('postalCode', $data)) {
                $object->setPostalCode($data['postalCode']);
            }
            if (\array_key_exists('cityName', $data)) {
                $object->setCityName($data['cityName']);
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
            }
            if (\array_key_exists('provinceCode', $data)) {
                $object->setProvinceCode($data['provinceCode']);
            }
            if (\array_key_exists('addressLine1', $data)) {
                $object->setAddressLine1($data['addressLine1']);
            }
            if (\array_key_exists('addressLine2', $data)) {
                $object->setAddressLine2($data['addressLine2']);
            }
            if (\array_key_exists('addressLine3', $data)) {
                $object->setAddressLine3($data['addressLine3']);
            }
            if (\array_key_exists('countyName', $data)) {
                $object->setCountyName($data['countyName']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['postalCode'] = $object->getPostalCode();
            $data['cityName'] = $object->getCityName();
            $data['countryCode'] = $object->getCountryCode();
            if ($object->isInitialized('provinceCode') && null !== $object->getProvinceCode()) {
                $data['provinceCode'] = $object->getProvinceCode();
            }
            $data['addressLine1'] = $object->getAddressLine1();
            if ($object->isInitialized('addressLine2') && null !== $object->getAddressLine2()) {
                $data['addressLine2'] = $object->getAddressLine2();
            }
            if ($object->isInitialized('addressLine3') && null !== $object->getAddressLine3()) {
                $data['addressLine3'] = $object->getAddressLine3();
            }
            if ($object->isInitialized('countyName') && null !== $object->getCountyName()) {
                $data['countyName'] = $object->getCountyName();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddress::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddress::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddress::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('postalCode', $data)) {
                $object->setPostalCode($data['postalCode']);
            }
            if (\array_key_exists('cityName', $data)) {
                $object->setCityName($data['cityName']);
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
            }
            if (\array_key_exists('provinceCode', $data)) {
                $object->setProvinceCode($data['provinceCode']);
            }
            if (\array_key_exists('addressLine1', $data)) {
                $object->setAddressLine1($data['addressLine1']);
            }
            if (\array_key_exists('addressLine2', $data)) {
                $object->setAddressLine2($data['addressLine2']);
            }
            if (\array_key_exists('addressLine3', $data)) {
                $object->setAddressLine3($data['addressLine3']);
            }
            if (\array_key_exists('countyName', $data)) {
                $object->setCountyName($data['countyName']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['postalCode'] = $object->getPostalCode();
            $data['cityName'] = $object->getCityName();
            $data['countryCode'] = $object->getCountryCode();
            if ($object->isInitialized('provinceCode') && null !== $object->getProvinceCode()) {
                $data['provinceCode'] = $object->getProvinceCode();
            }
            $data['addressLine1'] = $object->getAddressLine1();
            if ($object->isInitialized('addressLine2') && null !== $object->getAddressLine2()) {
                $data['addressLine2'] = $object->getAddressLine2();
            }
            if ($object->isInitialized('addressLine3') && null !== $object->getAddressLine3()) {
                $data['addressLine3'] = $object->getAddressLine3();
            }
            if ($object->isInitialized('countyName') && null !== $object->getCountyName()) {
                $data['countyName'] = $object->getCountyName();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddress::class => false];
        }
    }
}