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
    class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sellerDetails', $data)) {
                $object->setSellerDetails($this->denormalizer->denormalize($data['sellerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails::class, 'json', $context));
            }
            if (\array_key_exists('buyerDetails', $data)) {
                $object->setBuyerDetails($this->denormalizer->denormalize($data['buyerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails::class, 'json', $context));
            }
            if (\array_key_exists('importerDetails', $data)) {
                $object->setImporterDetails($this->denormalizer->denormalize($data['importerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails::class, 'json', $context));
            }
            if (\array_key_exists('exporterDetails', $data)) {
                $object->setExporterDetails($this->denormalizer->denormalize($data['exporterDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails::class, 'json', $context));
            }
            if (\array_key_exists('manufacturerDetails', $data)) {
                $object->setManufacturerDetails($this->denormalizer->denormalize($data['manufacturerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails::class, 'json', $context));
            }
            if (\array_key_exists('ultimateConsigneeDetails', $data)) {
                $object->setUltimateConsigneeDetails($this->denormalizer->denormalize($data['ultimateConsigneeDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails::class, 'json', $context));
            }
            if (\array_key_exists('brokerDetails', $data)) {
                $object->setBrokerDetails($this->denormalizer->denormalize($data['brokerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBrokerDetails::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('sellerDetails') && null !== $object->getSellerDetails()) {
                $data['sellerDetails'] = $this->normalizer->normalize($object->getSellerDetails(), 'json', $context);
            }
            if ($object->isInitialized('buyerDetails') && null !== $object->getBuyerDetails()) {
                $data['buyerDetails'] = $this->normalizer->normalize($object->getBuyerDetails(), 'json', $context);
            }
            if ($object->isInitialized('importerDetails') && null !== $object->getImporterDetails()) {
                $data['importerDetails'] = $this->normalizer->normalize($object->getImporterDetails(), 'json', $context);
            }
            if ($object->isInitialized('exporterDetails') && null !== $object->getExporterDetails()) {
                $data['exporterDetails'] = $this->normalizer->normalize($object->getExporterDetails(), 'json', $context);
            }
            if ($object->isInitialized('manufacturerDetails') && null !== $object->getManufacturerDetails()) {
                $data['manufacturerDetails'] = $this->normalizer->normalize($object->getManufacturerDetails(), 'json', $context);
            }
            if ($object->isInitialized('ultimateConsigneeDetails') && null !== $object->getUltimateConsigneeDetails()) {
                $data['ultimateConsigneeDetails'] = $this->normalizer->normalize($object->getUltimateConsigneeDetails(), 'json', $context);
            }
            if ($object->isInitialized('brokerDetails') && null !== $object->getBrokerDetails()) {
                $data['brokerDetails'] = $this->normalizer->normalize($object->getBrokerDetails(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('sellerDetails', $data)) {
                $object->setSellerDetails($this->denormalizer->denormalize($data['sellerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails::class, 'json', $context));
            }
            if (\array_key_exists('buyerDetails', $data)) {
                $object->setBuyerDetails($this->denormalizer->denormalize($data['buyerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails::class, 'json', $context));
            }
            if (\array_key_exists('importerDetails', $data)) {
                $object->setImporterDetails($this->denormalizer->denormalize($data['importerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails::class, 'json', $context));
            }
            if (\array_key_exists('exporterDetails', $data)) {
                $object->setExporterDetails($this->denormalizer->denormalize($data['exporterDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails::class, 'json', $context));
            }
            if (\array_key_exists('manufacturerDetails', $data)) {
                $object->setManufacturerDetails($this->denormalizer->denormalize($data['manufacturerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails::class, 'json', $context));
            }
            if (\array_key_exists('ultimateConsigneeDetails', $data)) {
                $object->setUltimateConsigneeDetails($this->denormalizer->denormalize($data['ultimateConsigneeDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails::class, 'json', $context));
            }
            if (\array_key_exists('brokerDetails', $data)) {
                $object->setBrokerDetails($this->denormalizer->denormalize($data['brokerDetails'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBrokerDetails::class, 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('sellerDetails') && null !== $object->getSellerDetails()) {
                $data['sellerDetails'] = $this->normalizer->normalize($object->getSellerDetails(), 'json', $context);
            }
            if ($object->isInitialized('buyerDetails') && null !== $object->getBuyerDetails()) {
                $data['buyerDetails'] = $this->normalizer->normalize($object->getBuyerDetails(), 'json', $context);
            }
            if ($object->isInitialized('importerDetails') && null !== $object->getImporterDetails()) {
                $data['importerDetails'] = $this->normalizer->normalize($object->getImporterDetails(), 'json', $context);
            }
            if ($object->isInitialized('exporterDetails') && null !== $object->getExporterDetails()) {
                $data['exporterDetails'] = $this->normalizer->normalize($object->getExporterDetails(), 'json', $context);
            }
            if ($object->isInitialized('manufacturerDetails') && null !== $object->getManufacturerDetails()) {
                $data['manufacturerDetails'] = $this->normalizer->normalize($object->getManufacturerDetails(), 'json', $context);
            }
            if ($object->isInitialized('ultimateConsigneeDetails') && null !== $object->getUltimateConsigneeDetails()) {
                $data['ultimateConsigneeDetails'] = $this->normalizer->normalize($object->getUltimateConsigneeDetails(), 'json', $context);
            }
            if ($object->isInitialized('brokerDetails') && null !== $object->getBrokerDetails()) {
                $data['brokerDetails'] = $this->normalizer->normalize($object->getBrokerDetails(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails::class => false];
        }
    }
}