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
    class SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            if (\array_key_exists('parameters', $data)) {
                $values = [];
                foreach ($data['parameters'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemParametersItem::class, 'json', $context);
                }
                $object->setParameters($values);
            }
            if (\array_key_exists('servicePointURL', $data)) {
                $object->setServicePointURL($data['servicePointURL']);
            }
            if (\array_key_exists('deliveryWindows', $data)) {
                $values_1 = [];
                foreach ($data['deliveryWindows'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemDeliveryWindowsItem::class, 'json', $context);
                }
                $object->setDeliveryWindows($values_1);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['type'] = $object->getType();
            $values = [];
            foreach ($object->getParameters() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['parameters'] = $values;
            if ($object->isInitialized('servicePointURL') && null !== $object->getServicePointURL()) {
                $data['servicePointURL'] = $object->getServicePointURL();
            }
            if ($object->isInitialized('deliveryWindows') && null !== $object->getDeliveryWindows()) {
                $values_1 = [];
                foreach ($object->getDeliveryWindows() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['deliveryWindows'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItem::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItem::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            if (\array_key_exists('parameters', $data)) {
                $values = [];
                foreach ($data['parameters'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemParametersItem::class, 'json', $context);
                }
                $object->setParameters($values);
            }
            if (\array_key_exists('servicePointURL', $data)) {
                $object->setServicePointURL($data['servicePointURL']);
            }
            if (\array_key_exists('deliveryWindows', $data)) {
                $values_1 = [];
                foreach ($data['deliveryWindows'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemDeliveryWindowsItem::class, 'json', $context);
                }
                $object->setDeliveryWindows($values_1);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['type'] = $object->getType();
            $values = [];
            foreach ($object->getParameters() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['parameters'] = $values;
            if ($object->isInitialized('servicePointURL') && null !== $object->getServicePointURL()) {
                $data['servicePointURL'] = $object->getServicePointURL();
            }
            if ($object->isInitialized('deliveryWindows') && null !== $object->getDeliveryWindows()) {
                $values_1 = [];
                foreach ($object->getDeliveryWindows() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['deliveryWindows'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItem::class => false];
        }
    }
}