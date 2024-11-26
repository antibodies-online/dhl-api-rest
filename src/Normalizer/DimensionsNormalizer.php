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
    class DimensionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\Dimensions::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\Dimensions::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\Dimensions();
            if (\array_key_exists('l', $data) && \is_int($data['l'])) {
                $data['l'] = (double) $data['l'];
            }
            if (\array_key_exists('w', $data) && \is_int($data['w'])) {
                $data['w'] = (double) $data['w'];
            }
            if (\array_key_exists('h', $data) && \is_int($data['h'])) {
                $data['h'] = (double) $data['h'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('l', $data)) {
                $object->setL($data['l']);
                unset($data['l']);
            }
            if (\array_key_exists('w', $data)) {
                $object->setW($data['w']);
                unset($data['w']);
            }
            if (\array_key_exists('h', $data)) {
                $object->setH($data['h']);
                unset($data['h']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('l') && null !== $object->getL()) {
                $data['l'] = $object->getL();
            }
            if ($object->isInitialized('w') && null !== $object->getW()) {
                $data['w'] = $object->getW();
            }
            if ($object->isInitialized('h') && null !== $object->getH()) {
                $data['h'] = $object->getH();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\Dimensions::class => false];
        }
    }
} else {
    class DimensionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\Dimensions::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\Dimensions::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\Dimensions();
            if (\array_key_exists('l', $data) && \is_int($data['l'])) {
                $data['l'] = (double) $data['l'];
            }
            if (\array_key_exists('w', $data) && \is_int($data['w'])) {
                $data['w'] = (double) $data['w'];
            }
            if (\array_key_exists('h', $data) && \is_int($data['h'])) {
                $data['h'] = (double) $data['h'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('l', $data)) {
                $object->setL($data['l']);
                unset($data['l']);
            }
            if (\array_key_exists('w', $data)) {
                $object->setW($data['w']);
                unset($data['w']);
            }
            if (\array_key_exists('h', $data)) {
                $object->setH($data['h']);
                unset($data['h']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('l') && null !== $object->getL()) {
                $data['l'] = $object->getL();
            }
            if ($object->isInitialized('w') && null !== $object->getW()) {
                $data['w'] = $object->getW();
            }
            if ($object->isInitialized('h') && null !== $object->getH()) {
                $data['h'] = $object->getH();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\Dimensions::class => false];
        }
    }
}