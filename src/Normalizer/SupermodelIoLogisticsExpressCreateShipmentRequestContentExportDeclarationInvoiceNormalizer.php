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
    class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice();
            if (\array_key_exists('totalNetWeight', $data) && \is_int($data['totalNetWeight'])) {
                $data['totalNetWeight'] = (double) $data['totalNetWeight'];
            }
            if (\array_key_exists('totalGrossWeight', $data) && \is_int($data['totalGrossWeight'])) {
                $data['totalGrossWeight'] = (double) $data['totalGrossWeight'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('number', $data)) {
                $object->setNumber($data['number']);
            }
            if (\array_key_exists('date', $data)) {
                $object->setDate(\DateTime::createFromFormat('Y-m-d', $data['date'])->setTime(0, 0, 0));
            }
            if (\array_key_exists('signatureName', $data)) {
                $object->setSignatureName($data['signatureName']);
            }
            if (\array_key_exists('signatureTitle', $data)) {
                $object->setSignatureTitle($data['signatureTitle']);
            }
            if (\array_key_exists('signatureImage', $data)) {
                $object->setSignatureImage($data['signatureImage']);
            }
            if (\array_key_exists('instructions', $data)) {
                $values = [];
                foreach ($data['instructions'] as $value) {
                    $values[] = $value;
                }
                $object->setInstructions($values);
            }
            if (\array_key_exists('customerDataTextEntries', $data)) {
                $values_1 = [];
                foreach ($data['customerDataTextEntries'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setCustomerDataTextEntries($values_1);
            }
            if (\array_key_exists('totalNetWeight', $data)) {
                $object->setTotalNetWeight($data['totalNetWeight']);
            }
            if (\array_key_exists('totalGrossWeight', $data)) {
                $object->setTotalGrossWeight($data['totalGrossWeight']);
            }
            if (\array_key_exists('customerReferences', $data)) {
                $values_2 = [];
                foreach ($data['customerReferences'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItem::class, 'json', $context);
                }
                $object->setCustomerReferences($values_2);
            }
            if (\array_key_exists('termsOfPayment', $data)) {
                $object->setTermsOfPayment($data['termsOfPayment']);
            }
            if (\array_key_exists('indicativeCustomsValues', $data)) {
                $object->setIndicativeCustomsValues($this->denormalizer->denormalize($data['indicativeCustomsValues'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues::class, 'json', $context));
            }
            if (\array_key_exists('preCalculatedTotalValues', $data)) {
                $object->setPreCalculatedTotalValues($this->denormalizer->denormalize($data['preCalculatedTotalValues'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoicePreCalculatedTotalValues::class, 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['number'] = $object->getNumber();
            $data['date'] = $object->getDate()?->format('Y-m-d');
            if ($object->isInitialized('signatureName') && null !== $object->getSignatureName()) {
                $data['signatureName'] = $object->getSignatureName();
            }
            if ($object->isInitialized('signatureTitle') && null !== $object->getSignatureTitle()) {
                $data['signatureTitle'] = $object->getSignatureTitle();
            }
            if ($object->isInitialized('signatureImage') && null !== $object->getSignatureImage()) {
                $data['signatureImage'] = $object->getSignatureImage();
            }
            if ($object->isInitialized('instructions') && null !== $object->getInstructions()) {
                $values = [];
                foreach ($object->getInstructions() as $value) {
                    $values[] = $value;
                }
                $data['instructions'] = $values;
            }
            if ($object->isInitialized('customerDataTextEntries') && null !== $object->getCustomerDataTextEntries()) {
                $values_1 = [];
                foreach ($object->getCustomerDataTextEntries() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['customerDataTextEntries'] = $values_1;
            }
            if ($object->isInitialized('totalNetWeight') && null !== $object->getTotalNetWeight()) {
                $data['totalNetWeight'] = $object->getTotalNetWeight();
            }
            if ($object->isInitialized('totalGrossWeight') && null !== $object->getTotalGrossWeight()) {
                $data['totalGrossWeight'] = $object->getTotalGrossWeight();
            }
            if ($object->isInitialized('customerReferences') && null !== $object->getCustomerReferences()) {
                $values_2 = [];
                foreach ($object->getCustomerReferences() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['customerReferences'] = $values_2;
            }
            if ($object->isInitialized('termsOfPayment') && null !== $object->getTermsOfPayment()) {
                $data['termsOfPayment'] = $object->getTermsOfPayment();
            }
            if ($object->isInitialized('indicativeCustomsValues') && null !== $object->getIndicativeCustomsValues()) {
                $data['indicativeCustomsValues'] = $this->normalizer->normalize($object->getIndicativeCustomsValues(), 'json', $context);
            }
            if ($object->isInitialized('preCalculatedTotalValues') && null !== $object->getPreCalculatedTotalValues()) {
                $data['preCalculatedTotalValues'] = $this->normalizer->normalize($object->getPreCalculatedTotalValues(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice();
            if (\array_key_exists('totalNetWeight', $data) && \is_int($data['totalNetWeight'])) {
                $data['totalNetWeight'] = (double) $data['totalNetWeight'];
            }
            if (\array_key_exists('totalGrossWeight', $data) && \is_int($data['totalGrossWeight'])) {
                $data['totalGrossWeight'] = (double) $data['totalGrossWeight'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('number', $data)) {
                $object->setNumber($data['number']);
            }
            if (\array_key_exists('date', $data)) {
                $object->setDate(\DateTime::createFromFormat('Y-m-d', $data['date'])->setTime(0, 0, 0));
            }
            if (\array_key_exists('signatureName', $data)) {
                $object->setSignatureName($data['signatureName']);
            }
            if (\array_key_exists('signatureTitle', $data)) {
                $object->setSignatureTitle($data['signatureTitle']);
            }
            if (\array_key_exists('signatureImage', $data)) {
                $object->setSignatureImage($data['signatureImage']);
            }
            if (\array_key_exists('instructions', $data)) {
                $values = [];
                foreach ($data['instructions'] as $value) {
                    $values[] = $value;
                }
                $object->setInstructions($values);
            }
            if (\array_key_exists('customerDataTextEntries', $data)) {
                $values_1 = [];
                foreach ($data['customerDataTextEntries'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setCustomerDataTextEntries($values_1);
            }
            if (\array_key_exists('totalNetWeight', $data)) {
                $object->setTotalNetWeight($data['totalNetWeight']);
            }
            if (\array_key_exists('totalGrossWeight', $data)) {
                $object->setTotalGrossWeight($data['totalGrossWeight']);
            }
            if (\array_key_exists('customerReferences', $data)) {
                $values_2 = [];
                foreach ($data['customerReferences'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItem::class, 'json', $context);
                }
                $object->setCustomerReferences($values_2);
            }
            if (\array_key_exists('termsOfPayment', $data)) {
                $object->setTermsOfPayment($data['termsOfPayment']);
            }
            if (\array_key_exists('indicativeCustomsValues', $data)) {
                $object->setIndicativeCustomsValues($this->denormalizer->denormalize($data['indicativeCustomsValues'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues::class, 'json', $context));
            }
            if (\array_key_exists('preCalculatedTotalValues', $data)) {
                $object->setPreCalculatedTotalValues($this->denormalizer->denormalize($data['preCalculatedTotalValues'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoicePreCalculatedTotalValues::class, 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['number'] = $object->getNumber();
            $data['date'] = $object->getDate()?->format('Y-m-d');
            if ($object->isInitialized('signatureName') && null !== $object->getSignatureName()) {
                $data['signatureName'] = $object->getSignatureName();
            }
            if ($object->isInitialized('signatureTitle') && null !== $object->getSignatureTitle()) {
                $data['signatureTitle'] = $object->getSignatureTitle();
            }
            if ($object->isInitialized('signatureImage') && null !== $object->getSignatureImage()) {
                $data['signatureImage'] = $object->getSignatureImage();
            }
            if ($object->isInitialized('instructions') && null !== $object->getInstructions()) {
                $values = [];
                foreach ($object->getInstructions() as $value) {
                    $values[] = $value;
                }
                $data['instructions'] = $values;
            }
            if ($object->isInitialized('customerDataTextEntries') && null !== $object->getCustomerDataTextEntries()) {
                $values_1 = [];
                foreach ($object->getCustomerDataTextEntries() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['customerDataTextEntries'] = $values_1;
            }
            if ($object->isInitialized('totalNetWeight') && null !== $object->getTotalNetWeight()) {
                $data['totalNetWeight'] = $object->getTotalNetWeight();
            }
            if ($object->isInitialized('totalGrossWeight') && null !== $object->getTotalGrossWeight()) {
                $data['totalGrossWeight'] = $object->getTotalGrossWeight();
            }
            if ($object->isInitialized('customerReferences') && null !== $object->getCustomerReferences()) {
                $values_2 = [];
                foreach ($object->getCustomerReferences() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['customerReferences'] = $values_2;
            }
            if ($object->isInitialized('termsOfPayment') && null !== $object->getTermsOfPayment()) {
                $data['termsOfPayment'] = $object->getTermsOfPayment();
            }
            if ($object->isInitialized('indicativeCustomsValues') && null !== $object->getIndicativeCustomsValues()) {
                $data['indicativeCustomsValues'] = $this->normalizer->normalize($object->getIndicativeCustomsValues(), 'json', $context);
            }
            if ($object->isInitialized('preCalculatedTotalValues') && null !== $object->getPreCalculatedTotalValues()) {
                $data['preCalculatedTotalValues'] = $this->normalizer->normalize($object->getPreCalculatedTotalValues(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class => false];
        }
    }
}