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
    class SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem();
            if (\array_key_exists('declaredValue', $data) && \is_int($data['declaredValue'])) {
                $data['declaredValue'] = (double) $data['declaredValue'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('productCode', $data)) {
                $object->setProductCode($data['productCode']);
            }
            if (\array_key_exists('localProductCode', $data)) {
                $object->setLocalProductCode($data['localProductCode']);
            }
            if (\array_key_exists('accounts', $data)) {
                $values = [];
                foreach ($data['accounts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAccount::class, 'json', $context);
                }
                $object->setAccounts($values);
            }
            if (\array_key_exists('valueAddedServices', $data)) {
                $values_1 = [];
                foreach ($data['valueAddedServices'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesRates::class, 'json', $context);
                }
                $object->setValueAddedServices($values_1);
            }
            if (\array_key_exists('isCustomsDeclarable', $data)) {
                $object->setIsCustomsDeclarable($data['isCustomsDeclarable']);
            }
            if (\array_key_exists('declaredValue', $data)) {
                $object->setDeclaredValue($data['declaredValue']);
            }
            if (\array_key_exists('declaredValueCurrency', $data)) {
                $object->setDeclaredValueCurrency($data['declaredValueCurrency']);
            }
            if (\array_key_exists('unitOfMeasurement', $data)) {
                $object->setUnitOfMeasurement($data['unitOfMeasurement']);
            }
            if (\array_key_exists('shipmentTrackingNumber', $data)) {
                $object->setShipmentTrackingNumber($data['shipmentTrackingNumber']);
            }
            if (\array_key_exists('packages', $data)) {
                $values_2 = [];
                foreach ($data['packages'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageRR::class, 'json', $context);
                }
                $object->setPackages($values_2);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['productCode'] = $object->getProductCode();
            if ($object->isInitialized('localProductCode') && null !== $object->getLocalProductCode()) {
                $data['localProductCode'] = $object->getLocalProductCode();
            }
            if ($object->isInitialized('accounts') && null !== $object->getAccounts()) {
                $values = [];
                foreach ($object->getAccounts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['accounts'] = $values;
            }
            if ($object->isInitialized('valueAddedServices') && null !== $object->getValueAddedServices()) {
                $values_1 = [];
                foreach ($object->getValueAddedServices() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['valueAddedServices'] = $values_1;
            }
            $data['isCustomsDeclarable'] = $object->getIsCustomsDeclarable();
            if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
                $data['declaredValue'] = $object->getDeclaredValue();
            }
            if ($object->isInitialized('declaredValueCurrency') && null !== $object->getDeclaredValueCurrency()) {
                $data['declaredValueCurrency'] = $object->getDeclaredValueCurrency();
            }
            $data['unitOfMeasurement'] = $object->getUnitOfMeasurement();
            if ($object->isInitialized('shipmentTrackingNumber') && null !== $object->getShipmentTrackingNumber()) {
                $data['shipmentTrackingNumber'] = $object->getShipmentTrackingNumber();
            }
            $values_2 = [];
            foreach ($object->getPackages() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['packages'] = $values_2;
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem();
            if (\array_key_exists('declaredValue', $data) && \is_int($data['declaredValue'])) {
                $data['declaredValue'] = (double) $data['declaredValue'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('productCode', $data)) {
                $object->setProductCode($data['productCode']);
            }
            if (\array_key_exists('localProductCode', $data)) {
                $object->setLocalProductCode($data['localProductCode']);
            }
            if (\array_key_exists('accounts', $data)) {
                $values = [];
                foreach ($data['accounts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAccount::class, 'json', $context);
                }
                $object->setAccounts($values);
            }
            if (\array_key_exists('valueAddedServices', $data)) {
                $values_1 = [];
                foreach ($data['valueAddedServices'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesRates::class, 'json', $context);
                }
                $object->setValueAddedServices($values_1);
            }
            if (\array_key_exists('isCustomsDeclarable', $data)) {
                $object->setIsCustomsDeclarable($data['isCustomsDeclarable']);
            }
            if (\array_key_exists('declaredValue', $data)) {
                $object->setDeclaredValue($data['declaredValue']);
            }
            if (\array_key_exists('declaredValueCurrency', $data)) {
                $object->setDeclaredValueCurrency($data['declaredValueCurrency']);
            }
            if (\array_key_exists('unitOfMeasurement', $data)) {
                $object->setUnitOfMeasurement($data['unitOfMeasurement']);
            }
            if (\array_key_exists('shipmentTrackingNumber', $data)) {
                $object->setShipmentTrackingNumber($data['shipmentTrackingNumber']);
            }
            if (\array_key_exists('packages', $data)) {
                $values_2 = [];
                foreach ($data['packages'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPackageRR::class, 'json', $context);
                }
                $object->setPackages($values_2);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['productCode'] = $object->getProductCode();
            if ($object->isInitialized('localProductCode') && null !== $object->getLocalProductCode()) {
                $data['localProductCode'] = $object->getLocalProductCode();
            }
            if ($object->isInitialized('accounts') && null !== $object->getAccounts()) {
                $values = [];
                foreach ($object->getAccounts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['accounts'] = $values;
            }
            if ($object->isInitialized('valueAddedServices') && null !== $object->getValueAddedServices()) {
                $values_1 = [];
                foreach ($object->getValueAddedServices() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['valueAddedServices'] = $values_1;
            }
            $data['isCustomsDeclarable'] = $object->getIsCustomsDeclarable();
            if ($object->isInitialized('declaredValue') && null !== $object->getDeclaredValue()) {
                $data['declaredValue'] = $object->getDeclaredValue();
            }
            if ($object->isInitialized('declaredValueCurrency') && null !== $object->getDeclaredValueCurrency()) {
                $data['declaredValueCurrency'] = $object->getDeclaredValueCurrency();
            }
            $data['unitOfMeasurement'] = $object->getUnitOfMeasurement();
            if ($object->isInitialized('shipmentTrackingNumber') && null !== $object->getShipmentTrackingNumber()) {
                $data['shipmentTrackingNumber'] = $object->getShipmentTrackingNumber();
            }
            $values_2 = [];
            foreach ($object->getPackages() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['packages'] = $values_2;
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem::class => false];
        }
    }
}