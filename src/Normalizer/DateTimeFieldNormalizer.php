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
    class DateTimeFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\DateTimeField::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\DateTimeField::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\DateTimeField();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($this->denormalizer->denormalize($data['type'], \AntibodiesOnline\DHL\Api\Model\DateTimeFieldType::class, 'json', $context));
                unset($data['type']);
            }
            if (\array_key_exists('supported', $data)) {
                $object->setSupported($data['supported']);
                unset($data['supported']);
            }
            if (\array_key_exists('lenient', $data)) {
                $object->setLenient($data['lenient']);
                unset($data['lenient']);
            }
            if (\array_key_exists('minimumValue', $data)) {
                $object->setMinimumValue($data['minimumValue']);
                unset($data['minimumValue']);
            }
            if (\array_key_exists('maximumValue', $data)) {
                $object->setMaximumValue($data['maximumValue']);
                unset($data['maximumValue']);
            }
            if (\array_key_exists('durationField', $data)) {
                $object->setDurationField($this->denormalizer->denormalize($data['durationField'], \AntibodiesOnline\DHL\Api\Model\DurationField::class, 'json', $context));
                unset($data['durationField']);
            }
            if (\array_key_exists('rangeDurationField', $data)) {
                $object->setRangeDurationField($this->denormalizer->denormalize($data['rangeDurationField'], \AntibodiesOnline\DHL\Api\Model\DurationField::class, 'json', $context));
                unset($data['rangeDurationField']);
            }
            if (\array_key_exists('leapDurationField', $data)) {
                $object->setLeapDurationField($this->denormalizer->denormalize($data['leapDurationField'], \AntibodiesOnline\DHL\Api\Model\DurationField::class, 'json', $context));
                unset($data['leapDurationField']);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $this->normalizer->normalize($object->getType(), 'json', $context);
            }
            if ($object->isInitialized('supported') && null !== $object->getSupported()) {
                $data['supported'] = $object->getSupported();
            }
            if ($object->isInitialized('lenient') && null !== $object->getLenient()) {
                $data['lenient'] = $object->getLenient();
            }
            if ($object->isInitialized('minimumValue') && null !== $object->getMinimumValue()) {
                $data['minimumValue'] = $object->getMinimumValue();
            }
            if ($object->isInitialized('maximumValue') && null !== $object->getMaximumValue()) {
                $data['maximumValue'] = $object->getMaximumValue();
            }
            if ($object->isInitialized('durationField') && null !== $object->getDurationField()) {
                $data['durationField'] = $this->normalizer->normalize($object->getDurationField(), 'json', $context);
            }
            if ($object->isInitialized('rangeDurationField') && null !== $object->getRangeDurationField()) {
                $data['rangeDurationField'] = $this->normalizer->normalize($object->getRangeDurationField(), 'json', $context);
            }
            if ($object->isInitialized('leapDurationField') && null !== $object->getLeapDurationField()) {
                $data['leapDurationField'] = $this->normalizer->normalize($object->getLeapDurationField(), 'json', $context);
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
            return [\AntibodiesOnline\DHL\Api\Model\DateTimeField::class => false];
        }
    }
} else {
    class DateTimeFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\DateTimeField::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\DateTimeField::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\DateTimeField();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($this->denormalizer->denormalize($data['type'], \AntibodiesOnline\DHL\Api\Model\DateTimeFieldType::class, 'json', $context));
                unset($data['type']);
            }
            if (\array_key_exists('supported', $data)) {
                $object->setSupported($data['supported']);
                unset($data['supported']);
            }
            if (\array_key_exists('lenient', $data)) {
                $object->setLenient($data['lenient']);
                unset($data['lenient']);
            }
            if (\array_key_exists('minimumValue', $data)) {
                $object->setMinimumValue($data['minimumValue']);
                unset($data['minimumValue']);
            }
            if (\array_key_exists('maximumValue', $data)) {
                $object->setMaximumValue($data['maximumValue']);
                unset($data['maximumValue']);
            }
            if (\array_key_exists('durationField', $data)) {
                $object->setDurationField($this->denormalizer->denormalize($data['durationField'], \AntibodiesOnline\DHL\Api\Model\DurationField::class, 'json', $context));
                unset($data['durationField']);
            }
            if (\array_key_exists('rangeDurationField', $data)) {
                $object->setRangeDurationField($this->denormalizer->denormalize($data['rangeDurationField'], \AntibodiesOnline\DHL\Api\Model\DurationField::class, 'json', $context));
                unset($data['rangeDurationField']);
            }
            if (\array_key_exists('leapDurationField', $data)) {
                $object->setLeapDurationField($this->denormalizer->denormalize($data['leapDurationField'], \AntibodiesOnline\DHL\Api\Model\DurationField::class, 'json', $context));
                unset($data['leapDurationField']);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $this->normalizer->normalize($object->getType(), 'json', $context);
            }
            if ($object->isInitialized('supported') && null !== $object->getSupported()) {
                $data['supported'] = $object->getSupported();
            }
            if ($object->isInitialized('lenient') && null !== $object->getLenient()) {
                $data['lenient'] = $object->getLenient();
            }
            if ($object->isInitialized('minimumValue') && null !== $object->getMinimumValue()) {
                $data['minimumValue'] = $object->getMinimumValue();
            }
            if ($object->isInitialized('maximumValue') && null !== $object->getMaximumValue()) {
                $data['maximumValue'] = $object->getMaximumValue();
            }
            if ($object->isInitialized('durationField') && null !== $object->getDurationField()) {
                $data['durationField'] = $this->normalizer->normalize($object->getDurationField(), 'json', $context);
            }
            if ($object->isInitialized('rangeDurationField') && null !== $object->getRangeDurationField()) {
                $data['rangeDurationField'] = $this->normalizer->normalize($object->getRangeDurationField(), 'json', $context);
            }
            if ($object->isInitialized('leapDurationField') && null !== $object->getLeapDurationField()) {
                $data['leapDurationField'] = $this->normalizer->normalize($object->getLeapDurationField(), 'json', $context);
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
            return [\AntibodiesOnline\DHL\Api\Model\DateTimeField::class => false];
        }
    }
}