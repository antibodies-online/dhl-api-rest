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
    class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem();
            if (\array_key_exists('price', $data) && \is_int($data['price'])) {
                $data['price'] = (double) $data['price'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('currencyType', $data)) {
                $object->setCurrencyType($data['currencyType']);
            }
            if (\array_key_exists('priceCurrency', $data)) {
                $object->setPriceCurrency($data['priceCurrency']);
            }
            if (\array_key_exists('price', $data)) {
                $object->setPrice($data['price']);
            }
            if (\array_key_exists('serviceBreakdown', $data)) {
                $values = [];
                foreach ($data['serviceBreakdown'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem::class, 'json', $context);
                }
                $object->setServiceBreakdown($values);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['currencyType'] = $object->getCurrencyType();
            $data['priceCurrency'] = $object->getPriceCurrency();
            $data['price'] = $object->getPrice();
            if ($object->isInitialized('serviceBreakdown') && null !== $object->getServiceBreakdown()) {
                $values = [];
                foreach ($object->getServiceBreakdown() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['serviceBreakdown'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem();
            if (\array_key_exists('price', $data) && \is_int($data['price'])) {
                $data['price'] = (double) $data['price'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('currencyType', $data)) {
                $object->setCurrencyType($data['currencyType']);
            }
            if (\array_key_exists('priceCurrency', $data)) {
                $object->setPriceCurrency($data['priceCurrency']);
            }
            if (\array_key_exists('price', $data)) {
                $object->setPrice($data['price']);
            }
            if (\array_key_exists('serviceBreakdown', $data)) {
                $values = [];
                foreach ($data['serviceBreakdown'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem::class, 'json', $context);
                }
                $object->setServiceBreakdown($values);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['currencyType'] = $object->getCurrencyType();
            $data['priceCurrency'] = $object->getPriceCurrency();
            $data['price'] = $object->getPrice();
            if ($object->isInitialized('serviceBreakdown') && null !== $object->getServiceBreakdown()) {
                $values = [];
                foreach ($object->getServiceBreakdown() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['serviceBreakdown'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem::class => false];
        }
    }
}