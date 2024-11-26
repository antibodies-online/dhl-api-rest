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
    class ServicePointCapabilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\ServicePointCapabilities::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\ServicePointCapabilities::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\ServicePointCapabilities();
            if (\array_key_exists('pieceWeightLimit', $data) && \is_int($data['pieceWeightLimit'])) {
                $data['pieceWeightLimit'] = (double) $data['pieceWeightLimit'];
            }
            if (\array_key_exists('pieceCountLimit', $data) && \is_int($data['pieceCountLimit'])) {
                $data['pieceCountLimit'] = (double) $data['pieceCountLimit'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('parkingAvailable', $data)) {
                $object->setParkingAvailable($data['parkingAvailable']);
                unset($data['parkingAvailable']);
            }
            if (\array_key_exists('disabledAccess', $data)) {
                $object->setDisabledAccess($data['disabledAccess']);
                unset($data['disabledAccess']);
            }
            if (\array_key_exists('shipmentDropOff', $data)) {
                $object->setShipmentDropOff($data['shipmentDropOff']);
                unset($data['shipmentDropOff']);
            }
            if (\array_key_exists('shipmentCollection', $data)) {
                $object->setShipmentCollection($data['shipmentCollection']);
                unset($data['shipmentCollection']);
            }
            if (\array_key_exists('internationalShipping', $data)) {
                $object->setInternationalShipping($data['internationalShipping']);
                unset($data['internationalShipping']);
            }
            if (\array_key_exists('domesticShipping', $data)) {
                $object->setDomesticShipping($data['domesticShipping']);
                unset($data['domesticShipping']);
            }
            if (\array_key_exists('accountShippers', $data)) {
                $object->setAccountShippers($data['accountShippers']);
                unset($data['accountShippers']);
            }
            if (\array_key_exists('labelPrinting', $data)) {
                $object->setLabelPrinting($data['labelPrinting']);
                unset($data['labelPrinting']);
            }
            if (\array_key_exists('insurance', $data)) {
                $object->setInsurance($data['insurance']);
                unset($data['insurance']);
            }
            if (\array_key_exists('importCharges', $data)) {
                $object->setImportCharges($data['importCharges']);
                unset($data['importCharges']);
            }
            if (\array_key_exists('packaging', $data)) {
                $object->setPackaging($data['packaging']);
                unset($data['packaging']);
            }
            if (\array_key_exists('receiverPaid', $data)) {
                $object->setReceiverPaid($data['receiverPaid']);
                unset($data['receiverPaid']);
            }
            if (\array_key_exists('visaProgram', $data)) {
                $object->setVisaProgram($data['visaProgram']);
                unset($data['visaProgram']);
            }
            if (\array_key_exists('payWithCash', $data)) {
                $object->setPayWithCash($data['payWithCash']);
                unset($data['payWithCash']);
            }
            if (\array_key_exists('payWithCreditCard', $data)) {
                $object->setPayWithCreditCard($data['payWithCreditCard']);
                unset($data['payWithCreditCard']);
            }
            if (\array_key_exists('payWithCheque', $data)) {
                $object->setPayWithCheque($data['payWithCheque']);
                unset($data['payWithCheque']);
            }
            if (\array_key_exists('payWithMobile', $data)) {
                $object->setPayWithMobile($data['payWithMobile']);
                unset($data['payWithMobile']);
            }
            if (\array_key_exists('payWithPayPal', $data)) {
                $object->setPayWithPayPal($data['payWithPayPal']);
                unset($data['payWithPayPal']);
            }
            if (\array_key_exists('parkingTitle', $data)) {
                $object->setParkingTitle($data['parkingTitle']);
                unset($data['parkingTitle']);
            }
            if (\array_key_exists('disabledAccessTitle', $data)) {
                $object->setDisabledAccessTitle($data['disabledAccessTitle']);
                unset($data['disabledAccessTitle']);
            }
            if (\array_key_exists('pieceWeightLimit', $data)) {
                $object->setPieceWeightLimit($data['pieceWeightLimit']);
                unset($data['pieceWeightLimit']);
            }
            if (\array_key_exists('pieceWeightLimitUnit', $data)) {
                $object->setPieceWeightLimitUnit($data['pieceWeightLimitUnit']);
                unset($data['pieceWeightLimitUnit']);
            }
            if (\array_key_exists('pieceDimensionsLimit', $data)) {
                $object->setPieceDimensionsLimit($this->denormalizer->denormalize($data['pieceDimensionsLimit'], \AntibodiesOnline\DHL\Api\Model\Dimensions::class, 'json', $context));
                unset($data['pieceDimensionsLimit']);
            }
            if (\array_key_exists('pieceDimensionsLimitUnit', $data)) {
                $object->setPieceDimensionsLimitUnit($data['pieceDimensionsLimitUnit']);
                unset($data['pieceDimensionsLimitUnit']);
            }
            if (\array_key_exists('pieceCountLimit', $data)) {
                $object->setPieceCountLimit($data['pieceCountLimit']);
                unset($data['pieceCountLimit']);
            }
            if (\array_key_exists('accountPrepaidShippers', $data)) {
                $object->setAccountPrepaidShippers($data['accountPrepaidShippers']);
                unset($data['accountPrepaidShippers']);
            }
            if (\array_key_exists('prepaidShippers', $data)) {
                $object->setPrepaidShippers($data['prepaidShippers']);
                unset($data['prepaidShippers']);
            }
            if (\array_key_exists('prePrintReturnLabel', $data)) {
                $object->setPrePrintReturnLabel($data['prePrintReturnLabel']);
                unset($data['prePrintReturnLabel']);
            }
            if (\array_key_exists('labelFree', $data)) {
                $object->setLabelFree($data['labelFree']);
                unset($data['labelFree']);
            }
            if (\array_key_exists('ppcList', $data)) {
                $values = [];
                foreach ($data['ppcList'] as $value) {
                    $values[] = $value;
                }
                $object->setPpcList($values);
                unset($data['ppcList']);
            }
            if (\array_key_exists('html', $data)) {
                $object->setHtml($data['html']);
                unset($data['html']);
            }
            if (\array_key_exists('capabilityCodes', $data)) {
                $object->setCapabilityCodes($data['capabilityCodes']);
                unset($data['capabilityCodes']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('parkingAvailable') && null !== $object->getParkingAvailable()) {
                $data['parkingAvailable'] = $object->getParkingAvailable();
            }
            if ($object->isInitialized('disabledAccess') && null !== $object->getDisabledAccess()) {
                $data['disabledAccess'] = $object->getDisabledAccess();
            }
            if ($object->isInitialized('shipmentDropOff') && null !== $object->getShipmentDropOff()) {
                $data['shipmentDropOff'] = $object->getShipmentDropOff();
            }
            if ($object->isInitialized('shipmentCollection') && null !== $object->getShipmentCollection()) {
                $data['shipmentCollection'] = $object->getShipmentCollection();
            }
            if ($object->isInitialized('internationalShipping') && null !== $object->getInternationalShipping()) {
                $data['internationalShipping'] = $object->getInternationalShipping();
            }
            if ($object->isInitialized('domesticShipping') && null !== $object->getDomesticShipping()) {
                $data['domesticShipping'] = $object->getDomesticShipping();
            }
            if ($object->isInitialized('accountShippers') && null !== $object->getAccountShippers()) {
                $data['accountShippers'] = $object->getAccountShippers();
            }
            if ($object->isInitialized('labelPrinting') && null !== $object->getLabelPrinting()) {
                $data['labelPrinting'] = $object->getLabelPrinting();
            }
            if ($object->isInitialized('insurance') && null !== $object->getInsurance()) {
                $data['insurance'] = $object->getInsurance();
            }
            if ($object->isInitialized('importCharges') && null !== $object->getImportCharges()) {
                $data['importCharges'] = $object->getImportCharges();
            }
            if ($object->isInitialized('packaging') && null !== $object->getPackaging()) {
                $data['packaging'] = $object->getPackaging();
            }
            if ($object->isInitialized('receiverPaid') && null !== $object->getReceiverPaid()) {
                $data['receiverPaid'] = $object->getReceiverPaid();
            }
            if ($object->isInitialized('visaProgram') && null !== $object->getVisaProgram()) {
                $data['visaProgram'] = $object->getVisaProgram();
            }
            if ($object->isInitialized('payWithCash') && null !== $object->getPayWithCash()) {
                $data['payWithCash'] = $object->getPayWithCash();
            }
            if ($object->isInitialized('payWithCreditCard') && null !== $object->getPayWithCreditCard()) {
                $data['payWithCreditCard'] = $object->getPayWithCreditCard();
            }
            if ($object->isInitialized('payWithCheque') && null !== $object->getPayWithCheque()) {
                $data['payWithCheque'] = $object->getPayWithCheque();
            }
            if ($object->isInitialized('payWithMobile') && null !== $object->getPayWithMobile()) {
                $data['payWithMobile'] = $object->getPayWithMobile();
            }
            if ($object->isInitialized('payWithPayPal') && null !== $object->getPayWithPayPal()) {
                $data['payWithPayPal'] = $object->getPayWithPayPal();
            }
            if ($object->isInitialized('parkingTitle') && null !== $object->getParkingTitle()) {
                $data['parkingTitle'] = $object->getParkingTitle();
            }
            if ($object->isInitialized('disabledAccessTitle') && null !== $object->getDisabledAccessTitle()) {
                $data['disabledAccessTitle'] = $object->getDisabledAccessTitle();
            }
            if ($object->isInitialized('pieceWeightLimit') && null !== $object->getPieceWeightLimit()) {
                $data['pieceWeightLimit'] = $object->getPieceWeightLimit();
            }
            if ($object->isInitialized('pieceWeightLimitUnit') && null !== $object->getPieceWeightLimitUnit()) {
                $data['pieceWeightLimitUnit'] = $object->getPieceWeightLimitUnit();
            }
            if ($object->isInitialized('pieceDimensionsLimit') && null !== $object->getPieceDimensionsLimit()) {
                $data['pieceDimensionsLimit'] = $this->normalizer->normalize($object->getPieceDimensionsLimit(), 'json', $context);
            }
            if ($object->isInitialized('pieceDimensionsLimitUnit') && null !== $object->getPieceDimensionsLimitUnit()) {
                $data['pieceDimensionsLimitUnit'] = $object->getPieceDimensionsLimitUnit();
            }
            if ($object->isInitialized('pieceCountLimit') && null !== $object->getPieceCountLimit()) {
                $data['pieceCountLimit'] = $object->getPieceCountLimit();
            }
            if ($object->isInitialized('accountPrepaidShippers') && null !== $object->getAccountPrepaidShippers()) {
                $data['accountPrepaidShippers'] = $object->getAccountPrepaidShippers();
            }
            if ($object->isInitialized('prepaidShippers') && null !== $object->getPrepaidShippers()) {
                $data['prepaidShippers'] = $object->getPrepaidShippers();
            }
            if ($object->isInitialized('prePrintReturnLabel') && null !== $object->getPrePrintReturnLabel()) {
                $data['prePrintReturnLabel'] = $object->getPrePrintReturnLabel();
            }
            if ($object->isInitialized('labelFree') && null !== $object->getLabelFree()) {
                $data['labelFree'] = $object->getLabelFree();
            }
            if ($object->isInitialized('ppcList') && null !== $object->getPpcList()) {
                $values = [];
                foreach ($object->getPpcList() as $value) {
                    $values[] = $value;
                }
                $data['ppcList'] = $values;
            }
            if ($object->isInitialized('html') && null !== $object->getHtml()) {
                $data['html'] = $object->getHtml();
            }
            if ($object->isInitialized('capabilityCodes') && null !== $object->getCapabilityCodes()) {
                $data['capabilityCodes'] = $object->getCapabilityCodes();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\ServicePointCapabilities::class => false];
        }
    }
} else {
    class ServicePointCapabilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\ServicePointCapabilities::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\ServicePointCapabilities::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\ServicePointCapabilities();
            if (\array_key_exists('pieceWeightLimit', $data) && \is_int($data['pieceWeightLimit'])) {
                $data['pieceWeightLimit'] = (double) $data['pieceWeightLimit'];
            }
            if (\array_key_exists('pieceCountLimit', $data) && \is_int($data['pieceCountLimit'])) {
                $data['pieceCountLimit'] = (double) $data['pieceCountLimit'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('parkingAvailable', $data)) {
                $object->setParkingAvailable($data['parkingAvailable']);
                unset($data['parkingAvailable']);
            }
            if (\array_key_exists('disabledAccess', $data)) {
                $object->setDisabledAccess($data['disabledAccess']);
                unset($data['disabledAccess']);
            }
            if (\array_key_exists('shipmentDropOff', $data)) {
                $object->setShipmentDropOff($data['shipmentDropOff']);
                unset($data['shipmentDropOff']);
            }
            if (\array_key_exists('shipmentCollection', $data)) {
                $object->setShipmentCollection($data['shipmentCollection']);
                unset($data['shipmentCollection']);
            }
            if (\array_key_exists('internationalShipping', $data)) {
                $object->setInternationalShipping($data['internationalShipping']);
                unset($data['internationalShipping']);
            }
            if (\array_key_exists('domesticShipping', $data)) {
                $object->setDomesticShipping($data['domesticShipping']);
                unset($data['domesticShipping']);
            }
            if (\array_key_exists('accountShippers', $data)) {
                $object->setAccountShippers($data['accountShippers']);
                unset($data['accountShippers']);
            }
            if (\array_key_exists('labelPrinting', $data)) {
                $object->setLabelPrinting($data['labelPrinting']);
                unset($data['labelPrinting']);
            }
            if (\array_key_exists('insurance', $data)) {
                $object->setInsurance($data['insurance']);
                unset($data['insurance']);
            }
            if (\array_key_exists('importCharges', $data)) {
                $object->setImportCharges($data['importCharges']);
                unset($data['importCharges']);
            }
            if (\array_key_exists('packaging', $data)) {
                $object->setPackaging($data['packaging']);
                unset($data['packaging']);
            }
            if (\array_key_exists('receiverPaid', $data)) {
                $object->setReceiverPaid($data['receiverPaid']);
                unset($data['receiverPaid']);
            }
            if (\array_key_exists('visaProgram', $data)) {
                $object->setVisaProgram($data['visaProgram']);
                unset($data['visaProgram']);
            }
            if (\array_key_exists('payWithCash', $data)) {
                $object->setPayWithCash($data['payWithCash']);
                unset($data['payWithCash']);
            }
            if (\array_key_exists('payWithCreditCard', $data)) {
                $object->setPayWithCreditCard($data['payWithCreditCard']);
                unset($data['payWithCreditCard']);
            }
            if (\array_key_exists('payWithCheque', $data)) {
                $object->setPayWithCheque($data['payWithCheque']);
                unset($data['payWithCheque']);
            }
            if (\array_key_exists('payWithMobile', $data)) {
                $object->setPayWithMobile($data['payWithMobile']);
                unset($data['payWithMobile']);
            }
            if (\array_key_exists('payWithPayPal', $data)) {
                $object->setPayWithPayPal($data['payWithPayPal']);
                unset($data['payWithPayPal']);
            }
            if (\array_key_exists('parkingTitle', $data)) {
                $object->setParkingTitle($data['parkingTitle']);
                unset($data['parkingTitle']);
            }
            if (\array_key_exists('disabledAccessTitle', $data)) {
                $object->setDisabledAccessTitle($data['disabledAccessTitle']);
                unset($data['disabledAccessTitle']);
            }
            if (\array_key_exists('pieceWeightLimit', $data)) {
                $object->setPieceWeightLimit($data['pieceWeightLimit']);
                unset($data['pieceWeightLimit']);
            }
            if (\array_key_exists('pieceWeightLimitUnit', $data)) {
                $object->setPieceWeightLimitUnit($data['pieceWeightLimitUnit']);
                unset($data['pieceWeightLimitUnit']);
            }
            if (\array_key_exists('pieceDimensionsLimit', $data)) {
                $object->setPieceDimensionsLimit($this->denormalizer->denormalize($data['pieceDimensionsLimit'], \AntibodiesOnline\DHL\Api\Model\Dimensions::class, 'json', $context));
                unset($data['pieceDimensionsLimit']);
            }
            if (\array_key_exists('pieceDimensionsLimitUnit', $data)) {
                $object->setPieceDimensionsLimitUnit($data['pieceDimensionsLimitUnit']);
                unset($data['pieceDimensionsLimitUnit']);
            }
            if (\array_key_exists('pieceCountLimit', $data)) {
                $object->setPieceCountLimit($data['pieceCountLimit']);
                unset($data['pieceCountLimit']);
            }
            if (\array_key_exists('accountPrepaidShippers', $data)) {
                $object->setAccountPrepaidShippers($data['accountPrepaidShippers']);
                unset($data['accountPrepaidShippers']);
            }
            if (\array_key_exists('prepaidShippers', $data)) {
                $object->setPrepaidShippers($data['prepaidShippers']);
                unset($data['prepaidShippers']);
            }
            if (\array_key_exists('prePrintReturnLabel', $data)) {
                $object->setPrePrintReturnLabel($data['prePrintReturnLabel']);
                unset($data['prePrintReturnLabel']);
            }
            if (\array_key_exists('labelFree', $data)) {
                $object->setLabelFree($data['labelFree']);
                unset($data['labelFree']);
            }
            if (\array_key_exists('ppcList', $data)) {
                $values = [];
                foreach ($data['ppcList'] as $value) {
                    $values[] = $value;
                }
                $object->setPpcList($values);
                unset($data['ppcList']);
            }
            if (\array_key_exists('html', $data)) {
                $object->setHtml($data['html']);
                unset($data['html']);
            }
            if (\array_key_exists('capabilityCodes', $data)) {
                $object->setCapabilityCodes($data['capabilityCodes']);
                unset($data['capabilityCodes']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('parkingAvailable') && null !== $object->getParkingAvailable()) {
                $data['parkingAvailable'] = $object->getParkingAvailable();
            }
            if ($object->isInitialized('disabledAccess') && null !== $object->getDisabledAccess()) {
                $data['disabledAccess'] = $object->getDisabledAccess();
            }
            if ($object->isInitialized('shipmentDropOff') && null !== $object->getShipmentDropOff()) {
                $data['shipmentDropOff'] = $object->getShipmentDropOff();
            }
            if ($object->isInitialized('shipmentCollection') && null !== $object->getShipmentCollection()) {
                $data['shipmentCollection'] = $object->getShipmentCollection();
            }
            if ($object->isInitialized('internationalShipping') && null !== $object->getInternationalShipping()) {
                $data['internationalShipping'] = $object->getInternationalShipping();
            }
            if ($object->isInitialized('domesticShipping') && null !== $object->getDomesticShipping()) {
                $data['domesticShipping'] = $object->getDomesticShipping();
            }
            if ($object->isInitialized('accountShippers') && null !== $object->getAccountShippers()) {
                $data['accountShippers'] = $object->getAccountShippers();
            }
            if ($object->isInitialized('labelPrinting') && null !== $object->getLabelPrinting()) {
                $data['labelPrinting'] = $object->getLabelPrinting();
            }
            if ($object->isInitialized('insurance') && null !== $object->getInsurance()) {
                $data['insurance'] = $object->getInsurance();
            }
            if ($object->isInitialized('importCharges') && null !== $object->getImportCharges()) {
                $data['importCharges'] = $object->getImportCharges();
            }
            if ($object->isInitialized('packaging') && null !== $object->getPackaging()) {
                $data['packaging'] = $object->getPackaging();
            }
            if ($object->isInitialized('receiverPaid') && null !== $object->getReceiverPaid()) {
                $data['receiverPaid'] = $object->getReceiverPaid();
            }
            if ($object->isInitialized('visaProgram') && null !== $object->getVisaProgram()) {
                $data['visaProgram'] = $object->getVisaProgram();
            }
            if ($object->isInitialized('payWithCash') && null !== $object->getPayWithCash()) {
                $data['payWithCash'] = $object->getPayWithCash();
            }
            if ($object->isInitialized('payWithCreditCard') && null !== $object->getPayWithCreditCard()) {
                $data['payWithCreditCard'] = $object->getPayWithCreditCard();
            }
            if ($object->isInitialized('payWithCheque') && null !== $object->getPayWithCheque()) {
                $data['payWithCheque'] = $object->getPayWithCheque();
            }
            if ($object->isInitialized('payWithMobile') && null !== $object->getPayWithMobile()) {
                $data['payWithMobile'] = $object->getPayWithMobile();
            }
            if ($object->isInitialized('payWithPayPal') && null !== $object->getPayWithPayPal()) {
                $data['payWithPayPal'] = $object->getPayWithPayPal();
            }
            if ($object->isInitialized('parkingTitle') && null !== $object->getParkingTitle()) {
                $data['parkingTitle'] = $object->getParkingTitle();
            }
            if ($object->isInitialized('disabledAccessTitle') && null !== $object->getDisabledAccessTitle()) {
                $data['disabledAccessTitle'] = $object->getDisabledAccessTitle();
            }
            if ($object->isInitialized('pieceWeightLimit') && null !== $object->getPieceWeightLimit()) {
                $data['pieceWeightLimit'] = $object->getPieceWeightLimit();
            }
            if ($object->isInitialized('pieceWeightLimitUnit') && null !== $object->getPieceWeightLimitUnit()) {
                $data['pieceWeightLimitUnit'] = $object->getPieceWeightLimitUnit();
            }
            if ($object->isInitialized('pieceDimensionsLimit') && null !== $object->getPieceDimensionsLimit()) {
                $data['pieceDimensionsLimit'] = $this->normalizer->normalize($object->getPieceDimensionsLimit(), 'json', $context);
            }
            if ($object->isInitialized('pieceDimensionsLimitUnit') && null !== $object->getPieceDimensionsLimitUnit()) {
                $data['pieceDimensionsLimitUnit'] = $object->getPieceDimensionsLimitUnit();
            }
            if ($object->isInitialized('pieceCountLimit') && null !== $object->getPieceCountLimit()) {
                $data['pieceCountLimit'] = $object->getPieceCountLimit();
            }
            if ($object->isInitialized('accountPrepaidShippers') && null !== $object->getAccountPrepaidShippers()) {
                $data['accountPrepaidShippers'] = $object->getAccountPrepaidShippers();
            }
            if ($object->isInitialized('prepaidShippers') && null !== $object->getPrepaidShippers()) {
                $data['prepaidShippers'] = $object->getPrepaidShippers();
            }
            if ($object->isInitialized('prePrintReturnLabel') && null !== $object->getPrePrintReturnLabel()) {
                $data['prePrintReturnLabel'] = $object->getPrePrintReturnLabel();
            }
            if ($object->isInitialized('labelFree') && null !== $object->getLabelFree()) {
                $data['labelFree'] = $object->getLabelFree();
            }
            if ($object->isInitialized('ppcList') && null !== $object->getPpcList()) {
                $values = [];
                foreach ($object->getPpcList() as $value) {
                    $values[] = $value;
                }
                $data['ppcList'] = $values;
            }
            if ($object->isInitialized('html') && null !== $object->getHtml()) {
                $data['html'] = $object->getHtml();
            }
            if ($object->isInitialized('capabilityCodes') && null !== $object->getCapabilityCodes()) {
                $data['capabilityCodes'] = $object->getCapabilityCodes();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\ServicePointCapabilities::class => false];
        }
    }
}