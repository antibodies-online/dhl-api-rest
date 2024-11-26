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
    class SupermodelIoLogisticsExpressCreateShipmentRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('plannedShippingDateAndTime', $data)) {
                $object->setPlannedShippingDateAndTime($data['plannedShippingDateAndTime']);
            }
            if (\array_key_exists('pickup', $data)) {
                $object->setPickup($this->denormalizer->denormalize($data['pickup'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class, 'json', $context));
            }
            if (\array_key_exists('productCode', $data)) {
                $object->setProductCode($data['productCode']);
            }
            if (\array_key_exists('localProductCode', $data)) {
                $object->setLocalProductCode($data['localProductCode']);
            }
            if (\array_key_exists('getRateEstimates', $data)) {
                $object->setGetRateEstimates($data['getRateEstimates']);
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
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServices::class, 'json', $context);
                }
                $object->setValueAddedServices($values_1);
            }
            if (\array_key_exists('outputImageProperties', $data)) {
                $object->setOutputImageProperties($this->denormalizer->denormalize($data['outputImageProperties'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class, 'json', $context));
            }
            if (\array_key_exists('customerReferences', $data)) {
                $values_2 = [];
                foreach ($data['customerReferences'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReference::class, 'json', $context);
                }
                $object->setCustomerReferences($values_2);
            }
            if (\array_key_exists('identifiers', $data)) {
                $values_3 = [];
                foreach ($data['identifiers'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressIdentifier::class, 'json', $context);
                }
                $object->setIdentifiers($values_3);
            }
            if (\array_key_exists('customerDetails', $data)) {
                $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails::class, 'json', $context));
            }
            if (\array_key_exists('content', $data)) {
                $object->setContent($this->denormalizer->denormalize($data['content'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class, 'json', $context));
            }
            if (\array_key_exists('documentImages', $data)) {
                $values_4 = [];
                foreach ($data['documentImages'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDocumentImagesItem::class, 'json', $context);
                }
                $object->setDocumentImages($values_4);
            }
            if (\array_key_exists('onDemandDelivery', $data)) {
                $object->setOnDemandDelivery($this->denormalizer->denormalize($data['onDemandDelivery'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class, 'json', $context));
            }
            if (\array_key_exists('requestOndemandDeliveryURL', $data)) {
                $object->setRequestOndemandDeliveryURL($data['requestOndemandDeliveryURL']);
            }
            if (\array_key_exists('shipmentNotification', $data)) {
                $values_5 = [];
                foreach ($data['shipmentNotification'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem::class, 'json', $context);
                }
                $object->setShipmentNotification($values_5);
            }
            if (\array_key_exists('prepaidCharges', $data)) {
                $values_6 = [];
                foreach ($data['prepaidCharges'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItem::class, 'json', $context);
                }
                $object->setPrepaidCharges($values_6);
            }
            if (\array_key_exists('getTransliteratedResponse', $data)) {
                $object->setGetTransliteratedResponse($data['getTransliteratedResponse']);
            }
            if (\array_key_exists('estimatedDeliveryDate', $data)) {
                $object->setEstimatedDeliveryDate($this->denormalizer->denormalize($data['estimatedDeliveryDate'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDate::class, 'json', $context));
            }
            if (\array_key_exists('getAdditionalInformation', $data)) {
                $values_7 = [];
                foreach ($data['getAdditionalInformation'] as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItem::class, 'json', $context);
                }
                $object->setGetAdditionalInformation($values_7);
            }
            if (\array_key_exists('parentShipment', $data)) {
                $object->setParentShipment($this->denormalizer->denormalize($data['parentShipment'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['plannedShippingDateAndTime'] = $object->getPlannedShippingDateAndTime();
            $data['pickup'] = $this->normalizer->normalize($object->getPickup(), 'json', $context);
            $data['productCode'] = $object->getProductCode();
            if ($object->isInitialized('localProductCode') && null !== $object->getLocalProductCode()) {
                $data['localProductCode'] = $object->getLocalProductCode();
            }
            if ($object->isInitialized('getRateEstimates') && null !== $object->getGetRateEstimates()) {
                $data['getRateEstimates'] = $object->getGetRateEstimates();
            }
            $values = [];
            foreach ($object->getAccounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['accounts'] = $values;
            if ($object->isInitialized('valueAddedServices') && null !== $object->getValueAddedServices()) {
                $values_1 = [];
                foreach ($object->getValueAddedServices() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['valueAddedServices'] = $values_1;
            }
            if ($object->isInitialized('outputImageProperties') && null !== $object->getOutputImageProperties()) {
                $data['outputImageProperties'] = $this->normalizer->normalize($object->getOutputImageProperties(), 'json', $context);
            }
            if ($object->isInitialized('customerReferences') && null !== $object->getCustomerReferences()) {
                $values_2 = [];
                foreach ($object->getCustomerReferences() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['customerReferences'] = $values_2;
            }
            if ($object->isInitialized('identifiers') && null !== $object->getIdentifiers()) {
                $values_3 = [];
                foreach ($object->getIdentifiers() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['identifiers'] = $values_3;
            }
            $data['customerDetails'] = $this->normalizer->normalize($object->getCustomerDetails(), 'json', $context);
            $data['content'] = $this->normalizer->normalize($object->getContent(), 'json', $context);
            if ($object->isInitialized('documentImages') && null !== $object->getDocumentImages()) {
                $values_4 = [];
                foreach ($object->getDocumentImages() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['documentImages'] = $values_4;
            }
            if ($object->isInitialized('onDemandDelivery') && null !== $object->getOnDemandDelivery()) {
                $data['onDemandDelivery'] = $this->normalizer->normalize($object->getOnDemandDelivery(), 'json', $context);
            }
            if ($object->isInitialized('requestOndemandDeliveryURL') && null !== $object->getRequestOndemandDeliveryURL()) {
                $data['requestOndemandDeliveryURL'] = $object->getRequestOndemandDeliveryURL();
            }
            if ($object->isInitialized('shipmentNotification') && null !== $object->getShipmentNotification()) {
                $values_5 = [];
                foreach ($object->getShipmentNotification() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['shipmentNotification'] = $values_5;
            }
            if ($object->isInitialized('prepaidCharges') && null !== $object->getPrepaidCharges()) {
                $values_6 = [];
                foreach ($object->getPrepaidCharges() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }
                $data['prepaidCharges'] = $values_6;
            }
            if ($object->isInitialized('getTransliteratedResponse') && null !== $object->getGetTransliteratedResponse()) {
                $data['getTransliteratedResponse'] = $object->getGetTransliteratedResponse();
            }
            if ($object->isInitialized('estimatedDeliveryDate') && null !== $object->getEstimatedDeliveryDate()) {
                $data['estimatedDeliveryDate'] = $this->normalizer->normalize($object->getEstimatedDeliveryDate(), 'json', $context);
            }
            if ($object->isInitialized('getAdditionalInformation') && null !== $object->getGetAdditionalInformation()) {
                $values_7 = [];
                foreach ($object->getGetAdditionalInformation() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $data['getAdditionalInformation'] = $values_7;
            }
            if ($object->isInitialized('parentShipment') && null !== $object->getParentShipment()) {
                $data['parentShipment'] = $this->normalizer->normalize($object->getParentShipment(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressCreateShipmentRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('plannedShippingDateAndTime', $data)) {
                $object->setPlannedShippingDateAndTime($data['plannedShippingDateAndTime']);
            }
            if (\array_key_exists('pickup', $data)) {
                $object->setPickup($this->denormalizer->denormalize($data['pickup'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class, 'json', $context));
            }
            if (\array_key_exists('productCode', $data)) {
                $object->setProductCode($data['productCode']);
            }
            if (\array_key_exists('localProductCode', $data)) {
                $object->setLocalProductCode($data['localProductCode']);
            }
            if (\array_key_exists('getRateEstimates', $data)) {
                $object->setGetRateEstimates($data['getRateEstimates']);
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
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressValueAddedServices::class, 'json', $context);
                }
                $object->setValueAddedServices($values_1);
            }
            if (\array_key_exists('outputImageProperties', $data)) {
                $object->setOutputImageProperties($this->denormalizer->denormalize($data['outputImageProperties'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class, 'json', $context));
            }
            if (\array_key_exists('customerReferences', $data)) {
                $values_2 = [];
                foreach ($data['customerReferences'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReference::class, 'json', $context);
                }
                $object->setCustomerReferences($values_2);
            }
            if (\array_key_exists('identifiers', $data)) {
                $values_3 = [];
                foreach ($data['identifiers'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressIdentifier::class, 'json', $context);
                }
                $object->setIdentifiers($values_3);
            }
            if (\array_key_exists('customerDetails', $data)) {
                $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails::class, 'json', $context));
            }
            if (\array_key_exists('content', $data)) {
                $object->setContent($this->denormalizer->denormalize($data['content'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class, 'json', $context));
            }
            if (\array_key_exists('documentImages', $data)) {
                $values_4 = [];
                foreach ($data['documentImages'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDocumentImagesItem::class, 'json', $context);
                }
                $object->setDocumentImages($values_4);
            }
            if (\array_key_exists('onDemandDelivery', $data)) {
                $object->setOnDemandDelivery($this->denormalizer->denormalize($data['onDemandDelivery'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class, 'json', $context));
            }
            if (\array_key_exists('requestOndemandDeliveryURL', $data)) {
                $object->setRequestOndemandDeliveryURL($data['requestOndemandDeliveryURL']);
            }
            if (\array_key_exists('shipmentNotification', $data)) {
                $values_5 = [];
                foreach ($data['shipmentNotification'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem::class, 'json', $context);
                }
                $object->setShipmentNotification($values_5);
            }
            if (\array_key_exists('prepaidCharges', $data)) {
                $values_6 = [];
                foreach ($data['prepaidCharges'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItem::class, 'json', $context);
                }
                $object->setPrepaidCharges($values_6);
            }
            if (\array_key_exists('getTransliteratedResponse', $data)) {
                $object->setGetTransliteratedResponse($data['getTransliteratedResponse']);
            }
            if (\array_key_exists('estimatedDeliveryDate', $data)) {
                $object->setEstimatedDeliveryDate($this->denormalizer->denormalize($data['estimatedDeliveryDate'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDate::class, 'json', $context));
            }
            if (\array_key_exists('getAdditionalInformation', $data)) {
                $values_7 = [];
                foreach ($data['getAdditionalInformation'] as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItem::class, 'json', $context);
                }
                $object->setGetAdditionalInformation($values_7);
            }
            if (\array_key_exists('parentShipment', $data)) {
                $object->setParentShipment($this->denormalizer->denormalize($data['parentShipment'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment::class, 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['plannedShippingDateAndTime'] = $object->getPlannedShippingDateAndTime();
            $data['pickup'] = $this->normalizer->normalize($object->getPickup(), 'json', $context);
            $data['productCode'] = $object->getProductCode();
            if ($object->isInitialized('localProductCode') && null !== $object->getLocalProductCode()) {
                $data['localProductCode'] = $object->getLocalProductCode();
            }
            if ($object->isInitialized('getRateEstimates') && null !== $object->getGetRateEstimates()) {
                $data['getRateEstimates'] = $object->getGetRateEstimates();
            }
            $values = [];
            foreach ($object->getAccounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['accounts'] = $values;
            if ($object->isInitialized('valueAddedServices') && null !== $object->getValueAddedServices()) {
                $values_1 = [];
                foreach ($object->getValueAddedServices() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['valueAddedServices'] = $values_1;
            }
            if ($object->isInitialized('outputImageProperties') && null !== $object->getOutputImageProperties()) {
                $data['outputImageProperties'] = $this->normalizer->normalize($object->getOutputImageProperties(), 'json', $context);
            }
            if ($object->isInitialized('customerReferences') && null !== $object->getCustomerReferences()) {
                $values_2 = [];
                foreach ($object->getCustomerReferences() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['customerReferences'] = $values_2;
            }
            if ($object->isInitialized('identifiers') && null !== $object->getIdentifiers()) {
                $values_3 = [];
                foreach ($object->getIdentifiers() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['identifiers'] = $values_3;
            }
            $data['customerDetails'] = $this->normalizer->normalize($object->getCustomerDetails(), 'json', $context);
            $data['content'] = $this->normalizer->normalize($object->getContent(), 'json', $context);
            if ($object->isInitialized('documentImages') && null !== $object->getDocumentImages()) {
                $values_4 = [];
                foreach ($object->getDocumentImages() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['documentImages'] = $values_4;
            }
            if ($object->isInitialized('onDemandDelivery') && null !== $object->getOnDemandDelivery()) {
                $data['onDemandDelivery'] = $this->normalizer->normalize($object->getOnDemandDelivery(), 'json', $context);
            }
            if ($object->isInitialized('requestOndemandDeliveryURL') && null !== $object->getRequestOndemandDeliveryURL()) {
                $data['requestOndemandDeliveryURL'] = $object->getRequestOndemandDeliveryURL();
            }
            if ($object->isInitialized('shipmentNotification') && null !== $object->getShipmentNotification()) {
                $values_5 = [];
                foreach ($object->getShipmentNotification() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['shipmentNotification'] = $values_5;
            }
            if ($object->isInitialized('prepaidCharges') && null !== $object->getPrepaidCharges()) {
                $values_6 = [];
                foreach ($object->getPrepaidCharges() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }
                $data['prepaidCharges'] = $values_6;
            }
            if ($object->isInitialized('getTransliteratedResponse') && null !== $object->getGetTransliteratedResponse()) {
                $data['getTransliteratedResponse'] = $object->getGetTransliteratedResponse();
            }
            if ($object->isInitialized('estimatedDeliveryDate') && null !== $object->getEstimatedDeliveryDate()) {
                $data['estimatedDeliveryDate'] = $this->normalizer->normalize($object->getEstimatedDeliveryDate(), 'json', $context);
            }
            if ($object->isInitialized('getAdditionalInformation') && null !== $object->getGetAdditionalInformation()) {
                $values_7 = [];
                foreach ($object->getGetAdditionalInformation() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $data['getAdditionalInformation'] = $values_7;
            }
            if ($object->isInitialized('parentShipment') && null !== $object->getParentShipment()) {
                $data['parentShipment'] = $this->normalizer->normalize($object->getParentShipment(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest::class => false];
        }
    }
}