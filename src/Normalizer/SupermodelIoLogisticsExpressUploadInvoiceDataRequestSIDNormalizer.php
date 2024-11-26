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
    class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipmentTrackingNumber', $data)) {
                $object->setShipmentTrackingNumber($data['shipmentTrackingNumber']);
            }
            if (\array_key_exists('plannedShipDate', $data)) {
                $object->setPlannedShipDate($data['plannedShipDate']);
            }
            if (\array_key_exists('accounts', $data)) {
                $values = [];
                foreach ($data['accounts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAccount::class, 'json', $context);
                }
                $object->setAccounts($values);
            }
            if (\array_key_exists('content', $data)) {
                $object->setContent($this->denormalizer->denormalize($data['content'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContent::class, 'json', $context));
            }
            if (\array_key_exists('outputImageProperties', $data)) {
                $object->setOutputImageProperties($this->denormalizer->denormalize($data['outputImageProperties'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImageProperties::class, 'json', $context));
            }
            if (\array_key_exists('customerDetails', $data)) {
                $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('shipmentTrackingNumber') && null !== $object->getShipmentTrackingNumber()) {
                $data['shipmentTrackingNumber'] = $object->getShipmentTrackingNumber();
            }
            if ($object->isInitialized('plannedShipDate') && null !== $object->getPlannedShipDate()) {
                $data['plannedShipDate'] = $object->getPlannedShipDate();
            }
            if ($object->isInitialized('accounts') && null !== $object->getAccounts()) {
                $values = [];
                foreach ($object->getAccounts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['accounts'] = $values;
            }
            $data['content'] = $this->normalizer->normalize($object->getContent(), 'json', $context);
            if ($object->isInitialized('outputImageProperties') && null !== $object->getOutputImageProperties()) {
                $data['outputImageProperties'] = $this->normalizer->normalize($object->getOutputImageProperties(), 'json', $context);
            }
            if ($object->isInitialized('customerDetails') && null !== $object->getCustomerDetails()) {
                $data['customerDetails'] = $this->normalizer->normalize($object->getCustomerDetails(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('shipmentTrackingNumber', $data)) {
                $object->setShipmentTrackingNumber($data['shipmentTrackingNumber']);
            }
            if (\array_key_exists('plannedShipDate', $data)) {
                $object->setPlannedShipDate($data['plannedShipDate']);
            }
            if (\array_key_exists('accounts', $data)) {
                $values = [];
                foreach ($data['accounts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAccount::class, 'json', $context);
                }
                $object->setAccounts($values);
            }
            if (\array_key_exists('content', $data)) {
                $object->setContent($this->denormalizer->denormalize($data['content'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContent::class, 'json', $context));
            }
            if (\array_key_exists('outputImageProperties', $data)) {
                $object->setOutputImageProperties($this->denormalizer->denormalize($data['outputImageProperties'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImageProperties::class, 'json', $context));
            }
            if (\array_key_exists('customerDetails', $data)) {
                $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails::class, 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('shipmentTrackingNumber') && null !== $object->getShipmentTrackingNumber()) {
                $data['shipmentTrackingNumber'] = $object->getShipmentTrackingNumber();
            }
            if ($object->isInitialized('plannedShipDate') && null !== $object->getPlannedShipDate()) {
                $data['plannedShipDate'] = $object->getPlannedShipDate();
            }
            if ($object->isInitialized('accounts') && null !== $object->getAccounts()) {
                $values = [];
                foreach ($object->getAccounts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['accounts'] = $values;
            }
            $data['content'] = $this->normalizer->normalize($object->getContent(), 'json', $context);
            if ($object->isInitialized('outputImageProperties') && null !== $object->getOutputImageProperties()) {
                $data['outputImageProperties'] = $this->normalizer->normalize($object->getOutputImageProperties(), 'json', $context);
            }
            if ($object->isInitialized('customerDetails') && null !== $object->getCustomerDetails()) {
                $data['customerDetails'] = $this->normalizer->normalize($object->getCustomerDetails(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID::class => false];
        }
    }
}