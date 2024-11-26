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
    class ServicePointsRestResponseV3Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\ServicePointsRestResponseV3::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\ServicePointsRestResponseV3::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\ServicePointsRestResponseV3();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($this->denormalizer->denormalize($data['status'], \AntibodiesOnline\DHL\Api\Model\RestResponseStatus::class, 'json', $context));
                unset($data['status']);
            }
            if (\array_key_exists('searchAddress', $data)) {
                $object->setSearchAddress($data['searchAddress']);
                unset($data['searchAddress']);
            }
            if (\array_key_exists('searchLocation', $data)) {
                $object->setSearchLocation($this->denormalizer->denormalize($data['searchLocation'], \AntibodiesOnline\DHL\Api\Model\GeoLocation::class, 'json', $context));
                unset($data['searchLocation']);
            }
            if (\array_key_exists('mapCulture', $data)) {
                $object->setMapCulture($data['mapCulture']);
                unset($data['mapCulture']);
            }
            if (\array_key_exists('mapLanguage', $data)) {
                $object->setMapLanguage($data['mapLanguage']);
                unset($data['mapLanguage']);
            }
            if (\array_key_exists('servicePoints', $data)) {
                $values = [];
                foreach ($data['servicePoints'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\ServicePoint::class, 'json', $context);
                }
                $object->setServicePoints($values);
                unset($data['servicePoints']);
            }
            if (\array_key_exists('messages', $data)) {
                $values_1 = [];
                foreach ($data['messages'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setMessages($values_1);
                unset($data['messages']);
            }
            if (\array_key_exists('translations', $data)) {
                $object->setTranslations($this->denormalizer->denormalize($data['translations'], \AntibodiesOnline\DHL\Api\Model\Translations::class, 'json', $context));
                unset($data['translations']);
            }
            if (\array_key_exists('liteMode', $data)) {
                $object->setLiteMode($data['liteMode']);
                unset($data['liteMode']);
            }
            if (\array_key_exists('promotion', $data)) {
                $object->setPromotion($this->denormalizer->denormalize($data['promotion'], \AntibodiesOnline\DHL\Api\Model\Promotion::class, 'json', $context));
                unset($data['promotion']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
            }
            if ($object->isInitialized('searchAddress') && null !== $object->getSearchAddress()) {
                $data['searchAddress'] = $object->getSearchAddress();
            }
            if ($object->isInitialized('searchLocation') && null !== $object->getSearchLocation()) {
                $data['searchLocation'] = $this->normalizer->normalize($object->getSearchLocation(), 'json', $context);
            }
            if ($object->isInitialized('mapCulture') && null !== $object->getMapCulture()) {
                $data['mapCulture'] = $object->getMapCulture();
            }
            if ($object->isInitialized('mapLanguage') && null !== $object->getMapLanguage()) {
                $data['mapLanguage'] = $object->getMapLanguage();
            }
            if ($object->isInitialized('servicePoints') && null !== $object->getServicePoints()) {
                $values = [];
                foreach ($object->getServicePoints() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['servicePoints'] = $values;
            }
            if ($object->isInitialized('messages') && null !== $object->getMessages()) {
                $values_1 = [];
                foreach ($object->getMessages() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['messages'] = $values_1;
            }
            if ($object->isInitialized('translations') && null !== $object->getTranslations()) {
                $data['translations'] = $this->normalizer->normalize($object->getTranslations(), 'json', $context);
            }
            if ($object->isInitialized('liteMode') && null !== $object->getLiteMode()) {
                $data['liteMode'] = $object->getLiteMode();
            }
            if ($object->isInitialized('promotion') && null !== $object->getPromotion()) {
                $data['promotion'] = $this->normalizer->normalize($object->getPromotion(), 'json', $context);
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\ServicePointsRestResponseV3::class => false];
        }
    }
} else {
    class ServicePointsRestResponseV3Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\ServicePointsRestResponseV3::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\ServicePointsRestResponseV3::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\ServicePointsRestResponseV3();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($this->denormalizer->denormalize($data['status'], \AntibodiesOnline\DHL\Api\Model\RestResponseStatus::class, 'json', $context));
                unset($data['status']);
            }
            if (\array_key_exists('searchAddress', $data)) {
                $object->setSearchAddress($data['searchAddress']);
                unset($data['searchAddress']);
            }
            if (\array_key_exists('searchLocation', $data)) {
                $object->setSearchLocation($this->denormalizer->denormalize($data['searchLocation'], \AntibodiesOnline\DHL\Api\Model\GeoLocation::class, 'json', $context));
                unset($data['searchLocation']);
            }
            if (\array_key_exists('mapCulture', $data)) {
                $object->setMapCulture($data['mapCulture']);
                unset($data['mapCulture']);
            }
            if (\array_key_exists('mapLanguage', $data)) {
                $object->setMapLanguage($data['mapLanguage']);
                unset($data['mapLanguage']);
            }
            if (\array_key_exists('servicePoints', $data)) {
                $values = [];
                foreach ($data['servicePoints'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\ServicePoint::class, 'json', $context);
                }
                $object->setServicePoints($values);
                unset($data['servicePoints']);
            }
            if (\array_key_exists('messages', $data)) {
                $values_1 = [];
                foreach ($data['messages'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setMessages($values_1);
                unset($data['messages']);
            }
            if (\array_key_exists('translations', $data)) {
                $object->setTranslations($this->denormalizer->denormalize($data['translations'], \AntibodiesOnline\DHL\Api\Model\Translations::class, 'json', $context));
                unset($data['translations']);
            }
            if (\array_key_exists('liteMode', $data)) {
                $object->setLiteMode($data['liteMode']);
                unset($data['liteMode']);
            }
            if (\array_key_exists('promotion', $data)) {
                $object->setPromotion($this->denormalizer->denormalize($data['promotion'], \AntibodiesOnline\DHL\Api\Model\Promotion::class, 'json', $context));
                unset($data['promotion']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $this->normalizer->normalize($object->getStatus(), 'json', $context);
            }
            if ($object->isInitialized('searchAddress') && null !== $object->getSearchAddress()) {
                $data['searchAddress'] = $object->getSearchAddress();
            }
            if ($object->isInitialized('searchLocation') && null !== $object->getSearchLocation()) {
                $data['searchLocation'] = $this->normalizer->normalize($object->getSearchLocation(), 'json', $context);
            }
            if ($object->isInitialized('mapCulture') && null !== $object->getMapCulture()) {
                $data['mapCulture'] = $object->getMapCulture();
            }
            if ($object->isInitialized('mapLanguage') && null !== $object->getMapLanguage()) {
                $data['mapLanguage'] = $object->getMapLanguage();
            }
            if ($object->isInitialized('servicePoints') && null !== $object->getServicePoints()) {
                $values = [];
                foreach ($object->getServicePoints() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['servicePoints'] = $values;
            }
            if ($object->isInitialized('messages') && null !== $object->getMessages()) {
                $values_1 = [];
                foreach ($object->getMessages() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['messages'] = $values_1;
            }
            if ($object->isInitialized('translations') && null !== $object->getTranslations()) {
                $data['translations'] = $this->normalizer->normalize($object->getTranslations(), 'json', $context);
            }
            if ($object->isInitialized('liteMode') && null !== $object->getLiteMode()) {
                $data['liteMode'] = $object->getLiteMode();
            }
            if ($object->isInitialized('promotion') && null !== $object->getPromotion()) {
                $data['promotion'] = $this->normalizer->normalize($object->getPromotion(), 'json', $context);
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\ServicePointsRestResponseV3::class => false];
        }
    }
}