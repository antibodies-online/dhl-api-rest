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
    class SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValuesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues();
            if (\array_key_exists('importCustomsDutyValue', $data) && \is_int($data['importCustomsDutyValue'])) {
                $data['importCustomsDutyValue'] = (double) $data['importCustomsDutyValue'];
            }
            if (\array_key_exists('importTaxesValue', $data) && \is_int($data['importTaxesValue'])) {
                $data['importTaxesValue'] = (double) $data['importTaxesValue'];
            }
            if (\array_key_exists('totalWithImportDutiesAndTaxes', $data) && \is_int($data['totalWithImportDutiesAndTaxes'])) {
                $data['totalWithImportDutiesAndTaxes'] = (double) $data['totalWithImportDutiesAndTaxes'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('importCustomsDutyValue', $data)) {
                $object->setImportCustomsDutyValue($data['importCustomsDutyValue']);
            }
            if (\array_key_exists('importTaxesValue', $data)) {
                $object->setImportTaxesValue($data['importTaxesValue']);
            }
            if (\array_key_exists('totalWithImportDutiesAndTaxes', $data)) {
                $object->setTotalWithImportDutiesAndTaxes($data['totalWithImportDutiesAndTaxes']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('importCustomsDutyValue') && null !== $object->getImportCustomsDutyValue()) {
                $data['importCustomsDutyValue'] = $object->getImportCustomsDutyValue();
            }
            if ($object->isInitialized('importTaxesValue') && null !== $object->getImportTaxesValue()) {
                $data['importTaxesValue'] = $object->getImportTaxesValue();
            }
            if ($object->isInitialized('totalWithImportDutiesAndTaxes') && null !== $object->getTotalWithImportDutiesAndTaxes()) {
                $data['totalWithImportDutiesAndTaxes'] = $object->getTotalWithImportDutiesAndTaxes();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValuesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues();
            if (\array_key_exists('importCustomsDutyValue', $data) && \is_int($data['importCustomsDutyValue'])) {
                $data['importCustomsDutyValue'] = (double) $data['importCustomsDutyValue'];
            }
            if (\array_key_exists('importTaxesValue', $data) && \is_int($data['importTaxesValue'])) {
                $data['importTaxesValue'] = (double) $data['importTaxesValue'];
            }
            if (\array_key_exists('totalWithImportDutiesAndTaxes', $data) && \is_int($data['totalWithImportDutiesAndTaxes'])) {
                $data['totalWithImportDutiesAndTaxes'] = (double) $data['totalWithImportDutiesAndTaxes'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('importCustomsDutyValue', $data)) {
                $object->setImportCustomsDutyValue($data['importCustomsDutyValue']);
            }
            if (\array_key_exists('importTaxesValue', $data)) {
                $object->setImportTaxesValue($data['importTaxesValue']);
            }
            if (\array_key_exists('totalWithImportDutiesAndTaxes', $data)) {
                $object->setTotalWithImportDutiesAndTaxes($data['totalWithImportDutiesAndTaxes']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('importCustomsDutyValue') && null !== $object->getImportCustomsDutyValue()) {
                $data['importCustomsDutyValue'] = $object->getImportCustomsDutyValue();
            }
            if ($object->isInitialized('importTaxesValue') && null !== $object->getImportTaxesValue()) {
                $data['importTaxesValue'] = $object->getImportTaxesValue();
            }
            if ($object->isInitialized('totalWithImportDutiesAndTaxes') && null !== $object->getTotalWithImportDutiesAndTaxes()) {
                $data['totalWithImportDutiesAndTaxes'] = $object->getTotalWithImportDutiesAndTaxes();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues::class => false];
        }
    }
}