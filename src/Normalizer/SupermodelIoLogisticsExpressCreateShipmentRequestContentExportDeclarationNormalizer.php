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
    class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('lineItems', $data)) {
                $values = [];
                foreach ($data['lineItems'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem::class, 'json', $context);
                }
                $object->setLineItems($values);
            }
            if (\array_key_exists('invoice', $data)) {
                $object->setInvoice($this->denormalizer->denormalize($data['invoice'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class, 'json', $context));
            }
            if (\array_key_exists('remarks', $data)) {
                $values_1 = [];
                foreach ($data['remarks'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItem::class, 'json', $context);
                }
                $object->setRemarks($values_1);
            }
            if (\array_key_exists('additionalCharges', $data)) {
                $values_2 = [];
                foreach ($data['additionalCharges'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItem::class, 'json', $context);
                }
                $object->setAdditionalCharges($values_2);
            }
            if (\array_key_exists('destinationPortName', $data)) {
                $object->setDestinationPortName($data['destinationPortName']);
            }
            if (\array_key_exists('placeOfIncoterm', $data)) {
                $object->setPlaceOfIncoterm($data['placeOfIncoterm']);
            }
            if (\array_key_exists('payerVATNumber', $data)) {
                $object->setPayerVATNumber($data['payerVATNumber']);
            }
            if (\array_key_exists('recipientReference', $data)) {
                $object->setRecipientReference($data['recipientReference']);
            }
            if (\array_key_exists('exporter', $data)) {
                $object->setExporter($this->denormalizer->denormalize($data['exporter'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter::class, 'json', $context));
            }
            if (\array_key_exists('packageMarks', $data)) {
                $object->setPackageMarks($data['packageMarks']);
            }
            if (\array_key_exists('declarationNotes', $data)) {
                $values_3 = [];
                foreach ($data['declarationNotes'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItem::class, 'json', $context);
                }
                $object->setDeclarationNotes($values_3);
            }
            if (\array_key_exists('exportReference', $data)) {
                $object->setExportReference($data['exportReference']);
            }
            if (\array_key_exists('exportReason', $data)) {
                $object->setExportReason($data['exportReason']);
            }
            if (\array_key_exists('exportReasonType', $data)) {
                $object->setExportReasonType($data['exportReasonType']);
            }
            if (\array_key_exists('licenses', $data)) {
                $values_4 = [];
                foreach ($data['licenses'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItem::class, 'json', $context);
                }
                $object->setLicenses($values_4);
            }
            if (\array_key_exists('shipmentType', $data)) {
                $object->setShipmentType($data['shipmentType']);
            }
            if (\array_key_exists('customsDocuments', $data)) {
                $values_5 = [];
                foreach ($data['customsDocuments'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItem::class, 'json', $context);
                }
                $object->setCustomsDocuments($values_5);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $values = [];
            foreach ($object->getLineItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['lineItems'] = $values;
            if ($object->isInitialized('invoice') && null !== $object->getInvoice()) {
                $data['invoice'] = $this->normalizer->normalize($object->getInvoice(), 'json', $context);
            }
            if ($object->isInitialized('remarks') && null !== $object->getRemarks()) {
                $values_1 = [];
                foreach ($object->getRemarks() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['remarks'] = $values_1;
            }
            if ($object->isInitialized('additionalCharges') && null !== $object->getAdditionalCharges()) {
                $values_2 = [];
                foreach ($object->getAdditionalCharges() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['additionalCharges'] = $values_2;
            }
            if ($object->isInitialized('destinationPortName') && null !== $object->getDestinationPortName()) {
                $data['destinationPortName'] = $object->getDestinationPortName();
            }
            if ($object->isInitialized('placeOfIncoterm') && null !== $object->getPlaceOfIncoterm()) {
                $data['placeOfIncoterm'] = $object->getPlaceOfIncoterm();
            }
            if ($object->isInitialized('payerVATNumber') && null !== $object->getPayerVATNumber()) {
                $data['payerVATNumber'] = $object->getPayerVATNumber();
            }
            if ($object->isInitialized('recipientReference') && null !== $object->getRecipientReference()) {
                $data['recipientReference'] = $object->getRecipientReference();
            }
            if ($object->isInitialized('exporter') && null !== $object->getExporter()) {
                $data['exporter'] = $this->normalizer->normalize($object->getExporter(), 'json', $context);
            }
            if ($object->isInitialized('packageMarks') && null !== $object->getPackageMarks()) {
                $data['packageMarks'] = $object->getPackageMarks();
            }
            if ($object->isInitialized('declarationNotes') && null !== $object->getDeclarationNotes()) {
                $values_3 = [];
                foreach ($object->getDeclarationNotes() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['declarationNotes'] = $values_3;
            }
            if ($object->isInitialized('exportReference') && null !== $object->getExportReference()) {
                $data['exportReference'] = $object->getExportReference();
            }
            if ($object->isInitialized('exportReason') && null !== $object->getExportReason()) {
                $data['exportReason'] = $object->getExportReason();
            }
            if ($object->isInitialized('exportReasonType') && null !== $object->getExportReasonType()) {
                $data['exportReasonType'] = $object->getExportReasonType();
            }
            if ($object->isInitialized('licenses') && null !== $object->getLicenses()) {
                $values_4 = [];
                foreach ($object->getLicenses() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['licenses'] = $values_4;
            }
            if ($object->isInitialized('shipmentType') && null !== $object->getShipmentType()) {
                $data['shipmentType'] = $object->getShipmentType();
            }
            if ($object->isInitialized('customsDocuments') && null !== $object->getCustomsDocuments()) {
                $values_5 = [];
                foreach ($object->getCustomsDocuments() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['customsDocuments'] = $values_5;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class => false];
        }
    }
} else {
    class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('lineItems', $data)) {
                $values = [];
                foreach ($data['lineItems'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem::class, 'json', $context);
                }
                $object->setLineItems($values);
            }
            if (\array_key_exists('invoice', $data)) {
                $object->setInvoice($this->denormalizer->denormalize($data['invoice'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class, 'json', $context));
            }
            if (\array_key_exists('remarks', $data)) {
                $values_1 = [];
                foreach ($data['remarks'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItem::class, 'json', $context);
                }
                $object->setRemarks($values_1);
            }
            if (\array_key_exists('additionalCharges', $data)) {
                $values_2 = [];
                foreach ($data['additionalCharges'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItem::class, 'json', $context);
                }
                $object->setAdditionalCharges($values_2);
            }
            if (\array_key_exists('destinationPortName', $data)) {
                $object->setDestinationPortName($data['destinationPortName']);
            }
            if (\array_key_exists('placeOfIncoterm', $data)) {
                $object->setPlaceOfIncoterm($data['placeOfIncoterm']);
            }
            if (\array_key_exists('payerVATNumber', $data)) {
                $object->setPayerVATNumber($data['payerVATNumber']);
            }
            if (\array_key_exists('recipientReference', $data)) {
                $object->setRecipientReference($data['recipientReference']);
            }
            if (\array_key_exists('exporter', $data)) {
                $object->setExporter($this->denormalizer->denormalize($data['exporter'], \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter::class, 'json', $context));
            }
            if (\array_key_exists('packageMarks', $data)) {
                $object->setPackageMarks($data['packageMarks']);
            }
            if (\array_key_exists('declarationNotes', $data)) {
                $values_3 = [];
                foreach ($data['declarationNotes'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItem::class, 'json', $context);
                }
                $object->setDeclarationNotes($values_3);
            }
            if (\array_key_exists('exportReference', $data)) {
                $object->setExportReference($data['exportReference']);
            }
            if (\array_key_exists('exportReason', $data)) {
                $object->setExportReason($data['exportReason']);
            }
            if (\array_key_exists('exportReasonType', $data)) {
                $object->setExportReasonType($data['exportReasonType']);
            }
            if (\array_key_exists('licenses', $data)) {
                $values_4 = [];
                foreach ($data['licenses'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItem::class, 'json', $context);
                }
                $object->setLicenses($values_4);
            }
            if (\array_key_exists('shipmentType', $data)) {
                $object->setShipmentType($data['shipmentType']);
            }
            if (\array_key_exists('customsDocuments', $data)) {
                $values_5 = [];
                foreach ($data['customsDocuments'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItem::class, 'json', $context);
                }
                $object->setCustomsDocuments($values_5);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $values = [];
            foreach ($object->getLineItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['lineItems'] = $values;
            if ($object->isInitialized('invoice') && null !== $object->getInvoice()) {
                $data['invoice'] = $this->normalizer->normalize($object->getInvoice(), 'json', $context);
            }
            if ($object->isInitialized('remarks') && null !== $object->getRemarks()) {
                $values_1 = [];
                foreach ($object->getRemarks() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['remarks'] = $values_1;
            }
            if ($object->isInitialized('additionalCharges') && null !== $object->getAdditionalCharges()) {
                $values_2 = [];
                foreach ($object->getAdditionalCharges() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['additionalCharges'] = $values_2;
            }
            if ($object->isInitialized('destinationPortName') && null !== $object->getDestinationPortName()) {
                $data['destinationPortName'] = $object->getDestinationPortName();
            }
            if ($object->isInitialized('placeOfIncoterm') && null !== $object->getPlaceOfIncoterm()) {
                $data['placeOfIncoterm'] = $object->getPlaceOfIncoterm();
            }
            if ($object->isInitialized('payerVATNumber') && null !== $object->getPayerVATNumber()) {
                $data['payerVATNumber'] = $object->getPayerVATNumber();
            }
            if ($object->isInitialized('recipientReference') && null !== $object->getRecipientReference()) {
                $data['recipientReference'] = $object->getRecipientReference();
            }
            if ($object->isInitialized('exporter') && null !== $object->getExporter()) {
                $data['exporter'] = $this->normalizer->normalize($object->getExporter(), 'json', $context);
            }
            if ($object->isInitialized('packageMarks') && null !== $object->getPackageMarks()) {
                $data['packageMarks'] = $object->getPackageMarks();
            }
            if ($object->isInitialized('declarationNotes') && null !== $object->getDeclarationNotes()) {
                $values_3 = [];
                foreach ($object->getDeclarationNotes() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['declarationNotes'] = $values_3;
            }
            if ($object->isInitialized('exportReference') && null !== $object->getExportReference()) {
                $data['exportReference'] = $object->getExportReference();
            }
            if ($object->isInitialized('exportReason') && null !== $object->getExportReason()) {
                $data['exportReason'] = $object->getExportReason();
            }
            if ($object->isInitialized('exportReasonType') && null !== $object->getExportReasonType()) {
                $data['exportReasonType'] = $object->getExportReasonType();
            }
            if ($object->isInitialized('licenses') && null !== $object->getLicenses()) {
                $values_4 = [];
                foreach ($object->getLicenses() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['licenses'] = $values_4;
            }
            if ($object->isInitialized('shipmentType') && null !== $object->getShipmentType()) {
                $data['shipmentType'] = $object->getShipmentType();
            }
            if ($object->isInitialized('customsDocuments') && null !== $object->getCustomsDocuments()) {
                $values_5 = [];
                foreach ($object->getCustomsDocuments() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['customsDocuments'] = $values_5;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class => false];
        }
    }
}