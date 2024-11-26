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
    class SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dependencyRuleName', $data)) {
                $object->setDependencyRuleName($data['dependencyRuleName']);
            }
            if (\array_key_exists('dependencyDescription', $data)) {
                $object->setDependencyDescription($data['dependencyDescription']);
            }
            if (\array_key_exists('dependencyCondition', $data)) {
                $object->setDependencyCondition($data['dependencyCondition']);
            }
            if (\array_key_exists('requiredServiceCodes', $data)) {
                $values = [];
                foreach ($data['requiredServiceCodes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem::class, 'json', $context);
                }
                $object->setRequiredServiceCodes($values);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('dependencyRuleName') && null !== $object->getDependencyRuleName()) {
                $data['dependencyRuleName'] = $object->getDependencyRuleName();
            }
            if ($object->isInitialized('dependencyDescription') && null !== $object->getDependencyDescription()) {
                $data['dependencyDescription'] = $object->getDependencyDescription();
            }
            if ($object->isInitialized('dependencyCondition') && null !== $object->getDependencyCondition()) {
                $data['dependencyCondition'] = $object->getDependencyCondition();
            }
            if ($object->isInitialized('requiredServiceCodes') && null !== $object->getRequiredServiceCodes()) {
                $values = [];
                foreach ($object->getRequiredServiceCodes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['requiredServiceCodes'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dependencyRuleName', $data)) {
                $object->setDependencyRuleName($data['dependencyRuleName']);
            }
            if (\array_key_exists('dependencyDescription', $data)) {
                $object->setDependencyDescription($data['dependencyDescription']);
            }
            if (\array_key_exists('dependencyCondition', $data)) {
                $object->setDependencyCondition($data['dependencyCondition']);
            }
            if (\array_key_exists('requiredServiceCodes', $data)) {
                $values = [];
                foreach ($data['requiredServiceCodes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem::class, 'json', $context);
                }
                $object->setRequiredServiceCodes($values);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('dependencyRuleName') && null !== $object->getDependencyRuleName()) {
                $data['dependencyRuleName'] = $object->getDependencyRuleName();
            }
            if ($object->isInitialized('dependencyDescription') && null !== $object->getDependencyDescription()) {
                $data['dependencyDescription'] = $object->getDependencyDescription();
            }
            if ($object->isInitialized('dependencyCondition') && null !== $object->getDependencyCondition()) {
                $data['dependencyCondition'] = $object->getDependencyCondition();
            }
            if ($object->isInitialized('requiredServiceCodes') && null !== $object->getRequiredServiceCodes()) {
                $values = [];
                foreach ($object->getRequiredServiceCodes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['requiredServiceCodes'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class => false];
        }
    }
}