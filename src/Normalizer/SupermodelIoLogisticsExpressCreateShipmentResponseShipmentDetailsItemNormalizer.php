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
    class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem();
            if (\array_key_exists('volumetricWeight', $data) && \is_int($data['volumetricWeight'])) {
                $data['volumetricWeight'] = (double) $data['volumetricWeight'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceHandlingFeatureCodes', $data)) {
                $values = [];
                foreach ($data['serviceHandlingFeatureCodes'] as $value) {
                    $values[] = $value;
                }
                $object->setServiceHandlingFeatureCodes($values);
            }
            if (\array_key_exists('volumetricWeight', $data)) {
                $object->setVolumetricWeight($data['volumetricWeight']);
            }
            if (\array_key_exists('billingCode', $data)) {
                $object->setBillingCode($data['billingCode']);
            }
            if (\array_key_exists('serviceContentCode', $data)) {
                $object->setServiceContentCode($data['serviceContentCode']);
            }
            if (\array_key_exists('customerDetails', $data)) {
                $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails::class, 'json', $context));
            }
            if (\array_key_exists('originServiceArea', $data)) {
                $object->setOriginServiceArea($this->denormalizer->denormalize($data['originServiceArea'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea::class, 'json', $context));
            }
            if (\array_key_exists('destinationServiceArea', $data)) {
                $object->setDestinationServiceArea($this->denormalizer->denormalize($data['destinationServiceArea'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea::class, 'json', $context));
            }
            if (\array_key_exists('dhlRoutingCode', $data)) {
                $object->setDhlRoutingCode($data['dhlRoutingCode']);
            }
            if (\array_key_exists('dhlRoutingDataId', $data)) {
                $object->setDhlRoutingDataId($data['dhlRoutingDataId']);
            }
            if (\array_key_exists('deliveryDateCode', $data)) {
                $object->setDeliveryDateCode($data['deliveryDateCode']);
            }
            if (\array_key_exists('deliveryTimeCode', $data)) {
                $object->setDeliveryTimeCode($data['deliveryTimeCode']);
            }
            if (\array_key_exists('productShortName', $data)) {
                $object->setProductShortName($data['productShortName']);
            }
            if (\array_key_exists('valueAddedServices', $data)) {
                $values_1 = [];
                foreach ($data['valueAddedServices'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItem::class, 'json', $context);
                }
                $object->setValueAddedServices($values_1);
            }
            if (\array_key_exists('pickupDetails', $data)) {
                $object->setPickupDetails($this->denormalizer->denormalize($data['pickupDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('serviceHandlingFeatureCodes') && null !== $object->getServiceHandlingFeatureCodes()) {
                $values = [];
                foreach ($object->getServiceHandlingFeatureCodes() as $value) {
                    $values[] = $value;
                }
                $data['serviceHandlingFeatureCodes'] = $values;
            }
            if ($object->isInitialized('volumetricWeight') && null !== $object->getVolumetricWeight()) {
                $data['volumetricWeight'] = $object->getVolumetricWeight();
            }
            if ($object->isInitialized('billingCode') && null !== $object->getBillingCode()) {
                $data['billingCode'] = $object->getBillingCode();
            }
            if ($object->isInitialized('serviceContentCode') && null !== $object->getServiceContentCode()) {
                $data['serviceContentCode'] = $object->getServiceContentCode();
            }
            if ($object->isInitialized('customerDetails') && null !== $object->getCustomerDetails()) {
                $data['customerDetails'] = $this->normalizer->normalize($object->getCustomerDetails(), 'json', $context);
            }
            if ($object->isInitialized('originServiceArea') && null !== $object->getOriginServiceArea()) {
                $data['originServiceArea'] = $this->normalizer->normalize($object->getOriginServiceArea(), 'json', $context);
            }
            if ($object->isInitialized('destinationServiceArea') && null !== $object->getDestinationServiceArea()) {
                $data['destinationServiceArea'] = $this->normalizer->normalize($object->getDestinationServiceArea(), 'json', $context);
            }
            if ($object->isInitialized('dhlRoutingCode') && null !== $object->getDhlRoutingCode()) {
                $data['dhlRoutingCode'] = $object->getDhlRoutingCode();
            }
            if ($object->isInitialized('dhlRoutingDataId') && null !== $object->getDhlRoutingDataId()) {
                $data['dhlRoutingDataId'] = $object->getDhlRoutingDataId();
            }
            if ($object->isInitialized('deliveryDateCode') && null !== $object->getDeliveryDateCode()) {
                $data['deliveryDateCode'] = $object->getDeliveryDateCode();
            }
            if ($object->isInitialized('deliveryTimeCode') && null !== $object->getDeliveryTimeCode()) {
                $data['deliveryTimeCode'] = $object->getDeliveryTimeCode();
            }
            if ($object->isInitialized('productShortName') && null !== $object->getProductShortName()) {
                $data['productShortName'] = $object->getProductShortName();
            }
            if ($object->isInitialized('valueAddedServices') && null !== $object->getValueAddedServices()) {
                $values_1 = [];
                foreach ($object->getValueAddedServices() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['valueAddedServices'] = $values_1;
            }
            if ($object->isInitialized('pickupDetails') && null !== $object->getPickupDetails()) {
                $data['pickupDetails'] = $this->normalizer->normalize($object->getPickupDetails(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem();
            if (\array_key_exists('volumetricWeight', $data) && \is_int($data['volumetricWeight'])) {
                $data['volumetricWeight'] = (double) $data['volumetricWeight'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('serviceHandlingFeatureCodes', $data)) {
                $values = [];
                foreach ($data['serviceHandlingFeatureCodes'] as $value) {
                    $values[] = $value;
                }
                $object->setServiceHandlingFeatureCodes($values);
            }
            if (\array_key_exists('volumetricWeight', $data)) {
                $object->setVolumetricWeight($data['volumetricWeight']);
            }
            if (\array_key_exists('billingCode', $data)) {
                $object->setBillingCode($data['billingCode']);
            }
            if (\array_key_exists('serviceContentCode', $data)) {
                $object->setServiceContentCode($data['serviceContentCode']);
            }
            if (\array_key_exists('customerDetails', $data)) {
                $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails::class, 'json', $context));
            }
            if (\array_key_exists('originServiceArea', $data)) {
                $object->setOriginServiceArea($this->denormalizer->denormalize($data['originServiceArea'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea::class, 'json', $context));
            }
            if (\array_key_exists('destinationServiceArea', $data)) {
                $object->setDestinationServiceArea($this->denormalizer->denormalize($data['destinationServiceArea'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea::class, 'json', $context));
            }
            if (\array_key_exists('dhlRoutingCode', $data)) {
                $object->setDhlRoutingCode($data['dhlRoutingCode']);
            }
            if (\array_key_exists('dhlRoutingDataId', $data)) {
                $object->setDhlRoutingDataId($data['dhlRoutingDataId']);
            }
            if (\array_key_exists('deliveryDateCode', $data)) {
                $object->setDeliveryDateCode($data['deliveryDateCode']);
            }
            if (\array_key_exists('deliveryTimeCode', $data)) {
                $object->setDeliveryTimeCode($data['deliveryTimeCode']);
            }
            if (\array_key_exists('productShortName', $data)) {
                $object->setProductShortName($data['productShortName']);
            }
            if (\array_key_exists('valueAddedServices', $data)) {
                $values_1 = [];
                foreach ($data['valueAddedServices'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItem::class, 'json', $context);
                }
                $object->setValueAddedServices($values_1);
            }
            if (\array_key_exists('pickupDetails', $data)) {
                $object->setPickupDetails($this->denormalizer->denormalize($data['pickupDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails::class, 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('serviceHandlingFeatureCodes') && null !== $object->getServiceHandlingFeatureCodes()) {
                $values = [];
                foreach ($object->getServiceHandlingFeatureCodes() as $value) {
                    $values[] = $value;
                }
                $data['serviceHandlingFeatureCodes'] = $values;
            }
            if ($object->isInitialized('volumetricWeight') && null !== $object->getVolumetricWeight()) {
                $data['volumetricWeight'] = $object->getVolumetricWeight();
            }
            if ($object->isInitialized('billingCode') && null !== $object->getBillingCode()) {
                $data['billingCode'] = $object->getBillingCode();
            }
            if ($object->isInitialized('serviceContentCode') && null !== $object->getServiceContentCode()) {
                $data['serviceContentCode'] = $object->getServiceContentCode();
            }
            if ($object->isInitialized('customerDetails') && null !== $object->getCustomerDetails()) {
                $data['customerDetails'] = $this->normalizer->normalize($object->getCustomerDetails(), 'json', $context);
            }
            if ($object->isInitialized('originServiceArea') && null !== $object->getOriginServiceArea()) {
                $data['originServiceArea'] = $this->normalizer->normalize($object->getOriginServiceArea(), 'json', $context);
            }
            if ($object->isInitialized('destinationServiceArea') && null !== $object->getDestinationServiceArea()) {
                $data['destinationServiceArea'] = $this->normalizer->normalize($object->getDestinationServiceArea(), 'json', $context);
            }
            if ($object->isInitialized('dhlRoutingCode') && null !== $object->getDhlRoutingCode()) {
                $data['dhlRoutingCode'] = $object->getDhlRoutingCode();
            }
            if ($object->isInitialized('dhlRoutingDataId') && null !== $object->getDhlRoutingDataId()) {
                $data['dhlRoutingDataId'] = $object->getDhlRoutingDataId();
            }
            if ($object->isInitialized('deliveryDateCode') && null !== $object->getDeliveryDateCode()) {
                $data['deliveryDateCode'] = $object->getDeliveryDateCode();
            }
            if ($object->isInitialized('deliveryTimeCode') && null !== $object->getDeliveryTimeCode()) {
                $data['deliveryTimeCode'] = $object->getDeliveryTimeCode();
            }
            if ($object->isInitialized('productShortName') && null !== $object->getProductShortName()) {
                $data['productShortName'] = $object->getProductShortName();
            }
            if ($object->isInitialized('valueAddedServices') && null !== $object->getValueAddedServices()) {
                $values_1 = [];
                foreach ($object->getValueAddedServices() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['valueAddedServices'] = $values_1;
            }
            if ($object->isInitialized('pickupDetails') && null !== $object->getPickupDetails()) {
                $data['pickupDetails'] = $this->normalizer->normalize($object->getPickupDetails(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class => false];
        }
    }
}