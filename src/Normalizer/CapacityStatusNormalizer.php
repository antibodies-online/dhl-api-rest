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
    class CapacityStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\CapacityStatus::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\CapacityStatus::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\CapacityStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sev', $data)) {
                $object->setSev($data['sev']);
                unset($data['sev']);
            }
            if (\array_key_exists('msgClg', $data)) {
                $object->setMsgClg($data['msgClg']);
                unset($data['msgClg']);
            }
            if (\array_key_exists('msgCIgd', $data)) {
                $object->setMsgCIgd($data['msgCIgd']);
                unset($data['msgCIgd']);
            }
            if (\array_key_exists('dsc', $data)) {
                $object->setDsc($data['dsc']);
                unset($data['dsc']);
            }
            if (\array_key_exists('dtlDsc', $data)) {
                $object->setDtlDsc($data['dtlDsc']);
                unset($data['dtlDsc']);
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
            if ($object->isInitialized('sev') && null !== $object->getSev()) {
                $data['sev'] = $object->getSev();
            }
            if ($object->isInitialized('msgClg') && null !== $object->getMsgClg()) {
                $data['msgClg'] = $object->getMsgClg();
            }
            if ($object->isInitialized('msgCIgd') && null !== $object->getMsgCIgd()) {
                $data['msgCIgd'] = $object->getMsgCIgd();
            }
            if ($object->isInitialized('dsc') && null !== $object->getDsc()) {
                $data['dsc'] = $object->getDsc();
            }
            if ($object->isInitialized('dtlDsc') && null !== $object->getDtlDsc()) {
                $data['dtlDsc'] = $object->getDtlDsc();
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
            return [\AntibodiesOnline\DHL\Api\Model\CapacityStatus::class => false];
        }
    }
} else {
    class CapacityStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\CapacityStatus::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\CapacityStatus::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\CapacityStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sev', $data)) {
                $object->setSev($data['sev']);
                unset($data['sev']);
            }
            if (\array_key_exists('msgClg', $data)) {
                $object->setMsgClg($data['msgClg']);
                unset($data['msgClg']);
            }
            if (\array_key_exists('msgCIgd', $data)) {
                $object->setMsgCIgd($data['msgCIgd']);
                unset($data['msgCIgd']);
            }
            if (\array_key_exists('dsc', $data)) {
                $object->setDsc($data['dsc']);
                unset($data['dsc']);
            }
            if (\array_key_exists('dtlDsc', $data)) {
                $object->setDtlDsc($data['dtlDsc']);
                unset($data['dtlDsc']);
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
            if ($object->isInitialized('sev') && null !== $object->getSev()) {
                $data['sev'] = $object->getSev();
            }
            if ($object->isInitialized('msgClg') && null !== $object->getMsgClg()) {
                $data['msgClg'] = $object->getMsgClg();
            }
            if ($object->isInitialized('msgCIgd') && null !== $object->getMsgCIgd()) {
                $data['msgCIgd'] = $object->getMsgCIgd();
            }
            if ($object->isInitialized('dsc') && null !== $object->getDsc()) {
                $data['dsc'] = $object->getDsc();
            }
            if ($object->isInitialized('dtlDsc') && null !== $object->getDtlDsc()) {
                $data['dtlDsc'] = $object->getDtlDsc();
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
            return [\AntibodiesOnline\DHL\Api\Model\CapacityStatus::class => false];
        }
    }
}