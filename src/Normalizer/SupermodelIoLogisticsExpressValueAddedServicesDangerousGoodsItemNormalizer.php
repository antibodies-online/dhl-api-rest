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
    class SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem();
            if (\array_key_exists('dryIceTotalNetWeight', $data) && \is_int($data['dryIceTotalNetWeight'])) {
                $data['dryIceTotalNetWeight'] = (double) $data['dryIceTotalNetWeight'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contentId', $data)) {
                $object->setContentId($data['contentId']);
            }
            if (\array_key_exists('dryIceTotalNetWeight', $data)) {
                $object->setDryIceTotalNetWeight($data['dryIceTotalNetWeight']);
            }
            if (\array_key_exists('customDescription', $data)) {
                $object->setCustomDescription($data['customDescription']);
            }
            if (\array_key_exists('unCodes', $data)) {
                $values = [];
                foreach ($data['unCodes'] as $value) {
                    $values[] = $value;
                }
                $object->setUnCodes($values);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['contentId'] = $object->getContentId();
            if ($object->isInitialized('dryIceTotalNetWeight') && null !== $object->getDryIceTotalNetWeight()) {
                $data['dryIceTotalNetWeight'] = $object->getDryIceTotalNetWeight();
            }
            if ($object->isInitialized('customDescription') && null !== $object->getCustomDescription()) {
                $data['customDescription'] = $object->getCustomDescription();
            }
            if ($object->isInitialized('unCodes') && null !== $object->getUnCodes()) {
                $values = [];
                foreach ($object->getUnCodes() as $value) {
                    $values[] = $value;
                }
                $data['unCodes'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem();
            if (\array_key_exists('dryIceTotalNetWeight', $data) && \is_int($data['dryIceTotalNetWeight'])) {
                $data['dryIceTotalNetWeight'] = (double) $data['dryIceTotalNetWeight'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contentId', $data)) {
                $object->setContentId($data['contentId']);
            }
            if (\array_key_exists('dryIceTotalNetWeight', $data)) {
                $object->setDryIceTotalNetWeight($data['dryIceTotalNetWeight']);
            }
            if (\array_key_exists('customDescription', $data)) {
                $object->setCustomDescription($data['customDescription']);
            }
            if (\array_key_exists('unCodes', $data)) {
                $values = [];
                foreach ($data['unCodes'] as $value) {
                    $values[] = $value;
                }
                $object->setUnCodes($values);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['contentId'] = $object->getContentId();
            if ($object->isInitialized('dryIceTotalNetWeight') && null !== $object->getDryIceTotalNetWeight()) {
                $data['dryIceTotalNetWeight'] = $object->getDryIceTotalNetWeight();
            }
            if ($object->isInitialized('customDescription') && null !== $object->getCustomDescription()) {
                $data['customDescription'] = $object->getCustomDescription();
            }
            if ($object->isInitialized('unCodes') && null !== $object->getUnCodes()) {
                $values = [];
                foreach ($object->getUnCodes() as $value) {
                    $values[] = $value;
                }
                $data['unCodes'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class => false];
        }
    }
}