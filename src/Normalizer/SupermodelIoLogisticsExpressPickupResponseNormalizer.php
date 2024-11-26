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
    class SupermodelIoLogisticsExpressPickupResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupResponse::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupResponse::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dispatchConfirmationNumbers', $data)) {
                $values = [];
                foreach ($data['dispatchConfirmationNumbers'] as $value) {
                    $values[] = $value;
                }
                $object->setDispatchConfirmationNumbers($values);
            }
            if (\array_key_exists('readyByTime', $data)) {
                $object->setReadyByTime($data['readyByTime']);
            }
            if (\array_key_exists('nextPickupDate', $data)) {
                $object->setNextPickupDate($data['nextPickupDate']);
            }
            if (\array_key_exists('warnings', $data)) {
                $values_1 = [];
                foreach ($data['warnings'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setWarnings($values_1);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('dispatchConfirmationNumbers') && null !== $object->getDispatchConfirmationNumbers()) {
                $values = [];
                foreach ($object->getDispatchConfirmationNumbers() as $value) {
                    $values[] = $value;
                }
                $data['dispatchConfirmationNumbers'] = $values;
            }
            if ($object->isInitialized('readyByTime') && null !== $object->getReadyByTime()) {
                $data['readyByTime'] = $object->getReadyByTime();
            }
            if ($object->isInitialized('nextPickupDate') && null !== $object->getNextPickupDate()) {
                $data['nextPickupDate'] = $object->getNextPickupDate();
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values_1 = [];
                foreach ($object->getWarnings() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['warnings'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupResponse::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressPickupResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupResponse::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupResponse::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dispatchConfirmationNumbers', $data)) {
                $values = [];
                foreach ($data['dispatchConfirmationNumbers'] as $value) {
                    $values[] = $value;
                }
                $object->setDispatchConfirmationNumbers($values);
            }
            if (\array_key_exists('readyByTime', $data)) {
                $object->setReadyByTime($data['readyByTime']);
            }
            if (\array_key_exists('nextPickupDate', $data)) {
                $object->setNextPickupDate($data['nextPickupDate']);
            }
            if (\array_key_exists('warnings', $data)) {
                $values_1 = [];
                foreach ($data['warnings'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setWarnings($values_1);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('dispatchConfirmationNumbers') && null !== $object->getDispatchConfirmationNumbers()) {
                $values = [];
                foreach ($object->getDispatchConfirmationNumbers() as $value) {
                    $values[] = $value;
                }
                $data['dispatchConfirmationNumbers'] = $values;
            }
            if ($object->isInitialized('readyByTime') && null !== $object->getReadyByTime()) {
                $data['readyByTime'] = $object->getReadyByTime();
            }
            if ($object->isInitialized('nextPickupDate') && null !== $object->getNextPickupDate()) {
                $data['nextPickupDate'] = $object->getNextPickupDate();
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values_1 = [];
                foreach ($object->getWarnings() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['warnings'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupResponse::class => false];
        }
    }
}