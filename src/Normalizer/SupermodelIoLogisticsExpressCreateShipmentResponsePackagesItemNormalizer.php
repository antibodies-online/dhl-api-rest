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
    class SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem();
            if (\array_key_exists('referenceNumber', $data) && \is_int($data['referenceNumber'])) {
                $data['referenceNumber'] = (double) $data['referenceNumber'];
            }
            if (\array_key_exists('volumetricWeight', $data) && \is_int($data['volumetricWeight'])) {
                $data['volumetricWeight'] = (double) $data['volumetricWeight'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('referenceNumber', $data)) {
                $object->setReferenceNumber($data['referenceNumber']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
            }
            if (\array_key_exists('trackingUrl', $data)) {
                $object->setTrackingUrl($data['trackingUrl']);
            }
            if (\array_key_exists('volumetricWeight', $data)) {
                $object->setVolumetricWeight($data['volumetricWeight']);
            }
            if (\array_key_exists('documents', $data)) {
                $values = [];
                foreach ($data['documents'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem::class, 'json', $context);
                }
                $object->setDocuments($values);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $data['referenceNumber'] = $object->getReferenceNumber();
            }
            $data['trackingNumber'] = $object->getTrackingNumber();
            if ($object->isInitialized('trackingUrl') && null !== $object->getTrackingUrl()) {
                $data['trackingUrl'] = $object->getTrackingUrl();
            }
            if ($object->isInitialized('volumetricWeight') && null !== $object->getVolumetricWeight()) {
                $data['volumetricWeight'] = $object->getVolumetricWeight();
            }
            if ($object->isInitialized('documents') && null !== $object->getDocuments()) {
                $values = [];
                foreach ($object->getDocuments() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['documents'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem();
            if (\array_key_exists('referenceNumber', $data) && \is_int($data['referenceNumber'])) {
                $data['referenceNumber'] = (double) $data['referenceNumber'];
            }
            if (\array_key_exists('volumetricWeight', $data) && \is_int($data['volumetricWeight'])) {
                $data['volumetricWeight'] = (double) $data['volumetricWeight'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('referenceNumber', $data)) {
                $object->setReferenceNumber($data['referenceNumber']);
            }
            if (\array_key_exists('trackingNumber', $data)) {
                $object->setTrackingNumber($data['trackingNumber']);
            }
            if (\array_key_exists('trackingUrl', $data)) {
                $object->setTrackingUrl($data['trackingUrl']);
            }
            if (\array_key_exists('volumetricWeight', $data)) {
                $object->setVolumetricWeight($data['volumetricWeight']);
            }
            if (\array_key_exists('documents', $data)) {
                $values = [];
                foreach ($data['documents'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem::class, 'json', $context);
                }
                $object->setDocuments($values);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
                $data['referenceNumber'] = $object->getReferenceNumber();
            }
            $data['trackingNumber'] = $object->getTrackingNumber();
            if ($object->isInitialized('trackingUrl') && null !== $object->getTrackingUrl()) {
                $data['trackingUrl'] = $object->getTrackingUrl();
            }
            if ($object->isInitialized('volumetricWeight') && null !== $object->getVolumetricWeight()) {
                $data['volumetricWeight'] = $object->getVolumetricWeight();
            }
            if ($object->isInitialized('documents') && null !== $object->getDocuments()) {
                $values = [];
                foreach ($object->getDocuments() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['documents'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem::class => false];
        }
    }
}