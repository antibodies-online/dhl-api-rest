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
    class OpeningHoursNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\OpeningHours::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\OpeningHours::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\OpeningHours();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('openingHours', $data)) {
                $values = [];
                foreach ($data['openingHours'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\OpeningTime::class, 'json', $context);
                }
                $object->setOpeningHours($values);
                unset($data['openingHours']);
            }
            if (\array_key_exists('holidayDates', $data)) {
                $values_1 = [];
                foreach ($data['holidayDates'] as $value_1) {
                    $values_1[] = \DateTime::createFromFormat('Y-m-d', $value_1)->setTime(0, 0, 0);
                }
                $object->setHolidayDates($values_1);
                unset($data['holidayDates']);
            }
            if (\array_key_exists('holidaysDates', $data)) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['holidaysDates'] as $key => $value_2) {
                    $values_3 = [];
                    foreach ($value_2 as $value_3) {
                        $values_3[] = \DateTime::createFromFormat('Y-m-d', $value_3)->setTime(0, 0, 0);
                    }
                    $values_2[$key] = $values_3;
                }
                $object->setHolidaysDates($values_2);
                unset($data['holidaysDates']);
            }
            if (\array_key_exists('html', $data)) {
                $object->setHtml($data['html']);
                unset($data['html']);
            }
            if (\array_key_exists('holidayOpeningHoursHtml', $data)) {
                $object->setHolidayOpeningHoursHtml($data['holidayOpeningHoursHtml']);
                unset($data['holidayOpeningHoursHtml']);
            }
            if (\array_key_exists('holidays', $data)) {
                $object->setHolidays($this->denormalizer->denormalize($data['holidays'], \AntibodiesOnline\DHL\Api\Model\Holidays::class, 'json', $context));
                unset($data['holidays']);
            }
            foreach ($data as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_4;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $values = [];
            foreach ($object->getOpeningHours() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['openingHours'] = $values;
            if ($object->isInitialized('holidayDates') && null !== $object->getHolidayDates()) {
                $values_1 = [];
                foreach ($object->getHolidayDates() as $value_1) {
                    $values_1[] = $value_1?->format('Y-m-d');
                }
                $data['holidayDates'] = $values_1;
            }
            if ($object->isInitialized('holidaysDates') && null !== $object->getHolidaysDates()) {
                $values_2 = [];
                foreach ($object->getHolidaysDates() as $key => $value_2) {
                    $values_3 = [];
                    foreach ($value_2 as $value_3) {
                        $values_3[] = $value_3?->format('Y-m-d');
                    }
                    $values_2[$key] = $values_3;
                }
                $data['holidaysDates'] = $values_2;
            }
            if ($object->isInitialized('html') && null !== $object->getHtml()) {
                $data['html'] = $object->getHtml();
            }
            if ($object->isInitialized('holidayOpeningHoursHtml') && null !== $object->getHolidayOpeningHoursHtml()) {
                $data['holidayOpeningHoursHtml'] = $object->getHolidayOpeningHoursHtml();
            }
            if ($object->isInitialized('holidays') && null !== $object->getHolidays()) {
                $data['holidays'] = $this->normalizer->normalize($object->getHolidays(), 'json', $context);
            }
            foreach ($object as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\OpeningHours::class => false];
        }
    }
} else {
    class OpeningHoursNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\OpeningHours::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\OpeningHours::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\OpeningHours();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('openingHours', $data)) {
                $values = [];
                foreach ($data['openingHours'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\OpeningTime::class, 'json', $context);
                }
                $object->setOpeningHours($values);
                unset($data['openingHours']);
            }
            if (\array_key_exists('holidayDates', $data)) {
                $values_1 = [];
                foreach ($data['holidayDates'] as $value_1) {
                    $values_1[] = \DateTime::createFromFormat('Y-m-d', $value_1)->setTime(0, 0, 0);
                }
                $object->setHolidayDates($values_1);
                unset($data['holidayDates']);
            }
            if (\array_key_exists('holidaysDates', $data)) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['holidaysDates'] as $key => $value_2) {
                    $values_3 = [];
                    foreach ($value_2 as $value_3) {
                        $values_3[] = \DateTime::createFromFormat('Y-m-d', $value_3)->setTime(0, 0, 0);
                    }
                    $values_2[$key] = $values_3;
                }
                $object->setHolidaysDates($values_2);
                unset($data['holidaysDates']);
            }
            if (\array_key_exists('html', $data)) {
                $object->setHtml($data['html']);
                unset($data['html']);
            }
            if (\array_key_exists('holidayOpeningHoursHtml', $data)) {
                $object->setHolidayOpeningHoursHtml($data['holidayOpeningHoursHtml']);
                unset($data['holidayOpeningHoursHtml']);
            }
            if (\array_key_exists('holidays', $data)) {
                $object->setHolidays($this->denormalizer->denormalize($data['holidays'], \AntibodiesOnline\DHL\Api\Model\Holidays::class, 'json', $context));
                unset($data['holidays']);
            }
            foreach ($data as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_4;
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
            $values = [];
            foreach ($object->getOpeningHours() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['openingHours'] = $values;
            if ($object->isInitialized('holidayDates') && null !== $object->getHolidayDates()) {
                $values_1 = [];
                foreach ($object->getHolidayDates() as $value_1) {
                    $values_1[] = $value_1?->format('Y-m-d');
                }
                $data['holidayDates'] = $values_1;
            }
            if ($object->isInitialized('holidaysDates') && null !== $object->getHolidaysDates()) {
                $values_2 = [];
                foreach ($object->getHolidaysDates() as $key => $value_2) {
                    $values_3 = [];
                    foreach ($value_2 as $value_3) {
                        $values_3[] = $value_3?->format('Y-m-d');
                    }
                    $values_2[$key] = $values_3;
                }
                $data['holidaysDates'] = $values_2;
            }
            if ($object->isInitialized('html') && null !== $object->getHtml()) {
                $data['html'] = $object->getHtml();
            }
            if ($object->isInitialized('holidayOpeningHoursHtml') && null !== $object->getHolidayOpeningHoursHtml()) {
                $data['holidayOpeningHoursHtml'] = $object->getHolidayOpeningHoursHtml();
            }
            if ($object->isInitialized('holidays') && null !== $object->getHolidays()) {
                $data['holidays'] = $this->normalizer->normalize($object->getHolidays(), 'json', $context);
            }
            foreach ($object as $key_1 => $value_4) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\OpeningHours::class => false];
        }
    }
}