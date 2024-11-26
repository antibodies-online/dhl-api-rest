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
    class LocalTimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\LocalTime::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\LocalTime::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\LocalTime();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('chronology', $data)) {
                $object->setChronology($this->denormalizer->denormalize($data['chronology'], \AntibodiesOnline\DHL\Api\Model\Chronology::class, 'json', $context));
                unset($data['chronology']);
            }
            if (\array_key_exists('hourOfDay', $data)) {
                $object->setHourOfDay($data['hourOfDay']);
                unset($data['hourOfDay']);
            }
            if (\array_key_exists('minuteOfHour', $data)) {
                $object->setMinuteOfHour($data['minuteOfHour']);
                unset($data['minuteOfHour']);
            }
            if (\array_key_exists('secondOfMinute', $data)) {
                $object->setSecondOfMinute($data['secondOfMinute']);
                unset($data['secondOfMinute']);
            }
            if (\array_key_exists('millisOfSecond', $data)) {
                $object->setMillisOfSecond($data['millisOfSecond']);
                unset($data['millisOfSecond']);
            }
            if (\array_key_exists('millisOfDay', $data)) {
                $object->setMillisOfDay($data['millisOfDay']);
                unset($data['millisOfDay']);
            }
            if (\array_key_exists('fields', $data)) {
                $values = [];
                foreach ($data['fields'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\DateTimeField::class, 'json', $context);
                }
                $object->setFields($values);
                unset($data['fields']);
            }
            if (\array_key_exists('values', $data)) {
                $values_1 = [];
                foreach ($data['values'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setValues($values_1);
                unset($data['values']);
            }
            if (\array_key_exists('fieldTypes', $data)) {
                $values_2 = [];
                foreach ($data['fieldTypes'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\DateTimeFieldType::class, 'json', $context);
                }
                $object->setFieldTypes($values_2);
                unset($data['fieldTypes']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('chronology') && null !== $object->getChronology()) {
                $data['chronology'] = $this->normalizer->normalize($object->getChronology(), 'json', $context);
            }
            if ($object->isInitialized('hourOfDay') && null !== $object->getHourOfDay()) {
                $data['hourOfDay'] = $object->getHourOfDay();
            }
            if ($object->isInitialized('minuteOfHour') && null !== $object->getMinuteOfHour()) {
                $data['minuteOfHour'] = $object->getMinuteOfHour();
            }
            if ($object->isInitialized('secondOfMinute') && null !== $object->getSecondOfMinute()) {
                $data['secondOfMinute'] = $object->getSecondOfMinute();
            }
            if ($object->isInitialized('millisOfSecond') && null !== $object->getMillisOfSecond()) {
                $data['millisOfSecond'] = $object->getMillisOfSecond();
            }
            if ($object->isInitialized('millisOfDay') && null !== $object->getMillisOfDay()) {
                $data['millisOfDay'] = $object->getMillisOfDay();
            }
            if ($object->isInitialized('fields') && null !== $object->getFields()) {
                $values = [];
                foreach ($object->getFields() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['fields'] = $values;
            }
            if ($object->isInitialized('values') && null !== $object->getValues()) {
                $values_1 = [];
                foreach ($object->getValues() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['values'] = $values_1;
            }
            if ($object->isInitialized('fieldTypes') && null !== $object->getFieldTypes()) {
                $values_2 = [];
                foreach ($object->getFieldTypes() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['fieldTypes'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\LocalTime::class => false];
        }
    }
} else {
    class LocalTimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\LocalTime::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\LocalTime::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\LocalTime();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('chronology', $data)) {
                $object->setChronology($this->denormalizer->denormalize($data['chronology'], \AntibodiesOnline\DHL\Api\Model\Chronology::class, 'json', $context));
                unset($data['chronology']);
            }
            if (\array_key_exists('hourOfDay', $data)) {
                $object->setHourOfDay($data['hourOfDay']);
                unset($data['hourOfDay']);
            }
            if (\array_key_exists('minuteOfHour', $data)) {
                $object->setMinuteOfHour($data['minuteOfHour']);
                unset($data['minuteOfHour']);
            }
            if (\array_key_exists('secondOfMinute', $data)) {
                $object->setSecondOfMinute($data['secondOfMinute']);
                unset($data['secondOfMinute']);
            }
            if (\array_key_exists('millisOfSecond', $data)) {
                $object->setMillisOfSecond($data['millisOfSecond']);
                unset($data['millisOfSecond']);
            }
            if (\array_key_exists('millisOfDay', $data)) {
                $object->setMillisOfDay($data['millisOfDay']);
                unset($data['millisOfDay']);
            }
            if (\array_key_exists('fields', $data)) {
                $values = [];
                foreach ($data['fields'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\DateTimeField::class, 'json', $context);
                }
                $object->setFields($values);
                unset($data['fields']);
            }
            if (\array_key_exists('values', $data)) {
                $values_1 = [];
                foreach ($data['values'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setValues($values_1);
                unset($data['values']);
            }
            if (\array_key_exists('fieldTypes', $data)) {
                $values_2 = [];
                foreach ($data['fieldTypes'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\DateTimeFieldType::class, 'json', $context);
                }
                $object->setFieldTypes($values_2);
                unset($data['fieldTypes']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('chronology') && null !== $object->getChronology()) {
                $data['chronology'] = $this->normalizer->normalize($object->getChronology(), 'json', $context);
            }
            if ($object->isInitialized('hourOfDay') && null !== $object->getHourOfDay()) {
                $data['hourOfDay'] = $object->getHourOfDay();
            }
            if ($object->isInitialized('minuteOfHour') && null !== $object->getMinuteOfHour()) {
                $data['minuteOfHour'] = $object->getMinuteOfHour();
            }
            if ($object->isInitialized('secondOfMinute') && null !== $object->getSecondOfMinute()) {
                $data['secondOfMinute'] = $object->getSecondOfMinute();
            }
            if ($object->isInitialized('millisOfSecond') && null !== $object->getMillisOfSecond()) {
                $data['millisOfSecond'] = $object->getMillisOfSecond();
            }
            if ($object->isInitialized('millisOfDay') && null !== $object->getMillisOfDay()) {
                $data['millisOfDay'] = $object->getMillisOfDay();
            }
            if ($object->isInitialized('fields') && null !== $object->getFields()) {
                $values = [];
                foreach ($object->getFields() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['fields'] = $values;
            }
            if ($object->isInitialized('values') && null !== $object->getValues()) {
                $values_1 = [];
                foreach ($object->getValues() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['values'] = $values_1;
            }
            if ($object->isInitialized('fieldTypes') && null !== $object->getFieldTypes()) {
                $values_2 = [];
                foreach ($object->getFieldTypes() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['fieldTypes'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\LocalTime::class => false];
        }
    }
}