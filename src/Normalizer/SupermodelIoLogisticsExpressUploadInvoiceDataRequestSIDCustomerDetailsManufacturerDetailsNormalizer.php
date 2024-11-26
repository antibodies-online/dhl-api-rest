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
    class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('postalAddress', $data)) {
                $object->setPostalAddress($this->denormalizer->denormalize($data['postalAddress'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddress::class, 'json', $context));
            }
            if (\array_key_exists('contactInformation', $data)) {
                $object->setContactInformation($this->denormalizer->denormalize($data['contactInformation'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressContact::class, 'json', $context));
            }
            if (\array_key_exists('registrationNumbers', $data)) {
                $values = [];
                foreach ($data['registrationNumbers'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRegistrationNumbers::class, 'json', $context);
                }
                $object->setRegistrationNumbers($values);
            }
            if (\array_key_exists('typeCode', $data)) {
                $object->setTypeCode($data['typeCode']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['postalAddress'] = $this->normalizer->normalize($object->getPostalAddress(), 'json', $context);
            $data['contactInformation'] = $this->normalizer->normalize($object->getContactInformation(), 'json', $context);
            if ($object->isInitialized('registrationNumbers') && null !== $object->getRegistrationNumbers()) {
                $values = [];
                foreach ($object->getRegistrationNumbers() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['registrationNumbers'] = $values;
            }
            if ($object->isInitialized('typeCode') && null !== $object->getTypeCode()) {
                $data['typeCode'] = $object->getTypeCode();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('postalAddress', $data)) {
                $object->setPostalAddress($this->denormalizer->denormalize($data['postalAddress'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddress::class, 'json', $context));
            }
            if (\array_key_exists('contactInformation', $data)) {
                $object->setContactInformation($this->denormalizer->denormalize($data['contactInformation'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressContact::class, 'json', $context));
            }
            if (\array_key_exists('registrationNumbers', $data)) {
                $values = [];
                foreach ($data['registrationNumbers'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRegistrationNumbers::class, 'json', $context);
                }
                $object->setRegistrationNumbers($values);
            }
            if (\array_key_exists('typeCode', $data)) {
                $object->setTypeCode($data['typeCode']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['postalAddress'] = $this->normalizer->normalize($object->getPostalAddress(), 'json', $context);
            $data['contactInformation'] = $this->normalizer->normalize($object->getContactInformation(), 'json', $context);
            if ($object->isInitialized('registrationNumbers') && null !== $object->getRegistrationNumbers()) {
                $values = [];
                foreach ($object->getRegistrationNumbers() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['registrationNumbers'] = $values;
            }
            if ($object->isInitialized('typeCode') && null !== $object->getTypeCode()) {
                $data['typeCode'] = $object->getTypeCode();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails::class => false];
        }
    }
}