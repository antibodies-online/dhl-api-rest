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
    class SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem();
            if (\array_key_exists('packageReferenceNumber', $data) && \is_int($data['packageReferenceNumber'])) {
                $data['packageReferenceNumber'] = (double) $data['packageReferenceNumber'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('imageFormat', $data)) {
                $object->setImageFormat($data['imageFormat']);
            }
            if (\array_key_exists('content', $data)) {
                $object->setContent($data['content']);
            }
            if (\array_key_exists('typeCode', $data)) {
                $object->setTypeCode($data['typeCode']);
            }
            if (\array_key_exists('packageReferenceNumber', $data)) {
                $object->setPackageReferenceNumber($data['packageReferenceNumber']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['imageFormat'] = $object->getImageFormat();
            $data['content'] = $object->getContent();
            $data['typeCode'] = $object->getTypeCode();
            if ($object->isInitialized('packageReferenceNumber') && null !== $object->getPackageReferenceNumber()) {
                $data['packageReferenceNumber'] = $object->getPackageReferenceNumber();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem();
            if (\array_key_exists('packageReferenceNumber', $data) && \is_int($data['packageReferenceNumber'])) {
                $data['packageReferenceNumber'] = (double) $data['packageReferenceNumber'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('imageFormat', $data)) {
                $object->setImageFormat($data['imageFormat']);
            }
            if (\array_key_exists('content', $data)) {
                $object->setContent($data['content']);
            }
            if (\array_key_exists('typeCode', $data)) {
                $object->setTypeCode($data['typeCode']);
            }
            if (\array_key_exists('packageReferenceNumber', $data)) {
                $object->setPackageReferenceNumber($data['packageReferenceNumber']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['imageFormat'] = $object->getImageFormat();
            $data['content'] = $object->getContent();
            $data['typeCode'] = $object->getTypeCode();
            if ($object->isInitialized('packageReferenceNumber') && null !== $object->getPackageReferenceNumber()) {
                $data['packageReferenceNumber'] = $object->getPackageReferenceNumber();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem::class => false];
        }
    }
}