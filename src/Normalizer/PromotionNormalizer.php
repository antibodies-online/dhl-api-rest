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
    class PromotionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\Promotion::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\Promotion::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\Promotion();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            if (\array_key_exists('partnerTypeCode', $data)) {
                $object->setPartnerTypeCode($data['partnerTypeCode']);
                unset($data['partnerTypeCode']);
            }
            if (\array_key_exists('servicePointId', $data)) {
                $object->setServicePointId($data['servicePointId']);
                unset($data['servicePointId']);
            }
            if (\array_key_exists('clientId', $data)) {
                $object->setClientId($data['clientId']);
                unset($data['clientId']);
            }
            if (\array_key_exists('capability', $data)) {
                $object->setCapability($data['capability']);
                unset($data['capability']);
            }
            if (\array_key_exists('startDate', $data)) {
                $object->setStartDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['startDate']));
                unset($data['startDate']);
            }
            if (\array_key_exists('endDate', $data)) {
                $object->setEndDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['endDate']));
                unset($data['endDate']);
            }
            if (\array_key_exists('dayOfWeek', $data)) {
                $object->setDayOfWeek($data['dayOfWeek']);
                unset($data['dayOfWeek']);
            }
            if (\array_key_exists('text', $data)) {
                $object->setText($data['text']);
                unset($data['text']);
            }
            if (\array_key_exists('buttonText', $data)) {
                $object->setButtonText($data['buttonText']);
                unset($data['buttonText']);
            }
            if (\array_key_exists('languageCode1', $data)) {
                $object->setLanguageCode1($data['languageCode1']);
                unset($data['languageCode1']);
            }
            if (\array_key_exists('text1', $data)) {
                $object->setText1($data['text1']);
                unset($data['text1']);
            }
            if (\array_key_exists('buttonText1', $data)) {
                $object->setButtonText1($data['buttonText1']);
                unset($data['buttonText1']);
            }
            if (\array_key_exists('languageCode2', $data)) {
                $object->setLanguageCode2($data['languageCode2']);
                unset($data['languageCode2']);
            }
            if (\array_key_exists('text2', $data)) {
                $object->setText2($data['text2']);
                unset($data['text2']);
            }
            if (\array_key_exists('buttonText2', $data)) {
                $object->setButtonText2($data['buttonText2']);
                unset($data['buttonText2']);
            }
            if (\array_key_exists('languageCode3', $data)) {
                $object->setLanguageCode3($data['languageCode3']);
                unset($data['languageCode3']);
            }
            if (\array_key_exists('text3', $data)) {
                $object->setText3($data['text3']);
                unset($data['text3']);
            }
            if (\array_key_exists('buttonText3', $data)) {
                $object->setButtonText3($data['buttonText3']);
                unset($data['buttonText3']);
            }
            if (\array_key_exists('hyperlink', $data)) {
                $object->setHyperlink($data['hyperlink']);
                unset($data['hyperlink']);
            }
            if (\array_key_exists('created', $data)) {
                $object->setCreated(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created']));
                unset($data['created']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['countryCode'] = $object->getCountryCode();
            }
            if ($object->isInitialized('partnerTypeCode') && null !== $object->getPartnerTypeCode()) {
                $data['partnerTypeCode'] = $object->getPartnerTypeCode();
            }
            if ($object->isInitialized('servicePointId') && null !== $object->getServicePointId()) {
                $data['servicePointId'] = $object->getServicePointId();
            }
            $data['clientId'] = $object->getClientId();
            $data['capability'] = $object->getCapability();
            $data['startDate'] = $object->getStartDate()?->format('Y-m-d\TH:i:sP');
            $data['endDate'] = $object->getEndDate()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('dayOfWeek') && null !== $object->getDayOfWeek()) {
                $data['dayOfWeek'] = $object->getDayOfWeek();
            }
            $data['text'] = $object->getText();
            if ($object->isInitialized('buttonText') && null !== $object->getButtonText()) {
                $data['buttonText'] = $object->getButtonText();
            }
            if ($object->isInitialized('languageCode1') && null !== $object->getLanguageCode1()) {
                $data['languageCode1'] = $object->getLanguageCode1();
            }
            if ($object->isInitialized('text1') && null !== $object->getText1()) {
                $data['text1'] = $object->getText1();
            }
            if ($object->isInitialized('buttonText1') && null !== $object->getButtonText1()) {
                $data['buttonText1'] = $object->getButtonText1();
            }
            if ($object->isInitialized('languageCode2') && null !== $object->getLanguageCode2()) {
                $data['languageCode2'] = $object->getLanguageCode2();
            }
            if ($object->isInitialized('text2') && null !== $object->getText2()) {
                $data['text2'] = $object->getText2();
            }
            if ($object->isInitialized('buttonText2') && null !== $object->getButtonText2()) {
                $data['buttonText2'] = $object->getButtonText2();
            }
            if ($object->isInitialized('languageCode3') && null !== $object->getLanguageCode3()) {
                $data['languageCode3'] = $object->getLanguageCode3();
            }
            if ($object->isInitialized('text3') && null !== $object->getText3()) {
                $data['text3'] = $object->getText3();
            }
            if ($object->isInitialized('buttonText3') && null !== $object->getButtonText3()) {
                $data['buttonText3'] = $object->getButtonText3();
            }
            if ($object->isInitialized('hyperlink') && null !== $object->getHyperlink()) {
                $data['hyperlink'] = $object->getHyperlink();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['created'] = $object->getCreated()?->format('Y-m-d\TH:i:sP');
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\Promotion::class => false];
        }
    }
} else {
    class PromotionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\Promotion::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\Promotion::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\Promotion();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('countryCode', $data)) {
                $object->setCountryCode($data['countryCode']);
                unset($data['countryCode']);
            }
            if (\array_key_exists('partnerTypeCode', $data)) {
                $object->setPartnerTypeCode($data['partnerTypeCode']);
                unset($data['partnerTypeCode']);
            }
            if (\array_key_exists('servicePointId', $data)) {
                $object->setServicePointId($data['servicePointId']);
                unset($data['servicePointId']);
            }
            if (\array_key_exists('clientId', $data)) {
                $object->setClientId($data['clientId']);
                unset($data['clientId']);
            }
            if (\array_key_exists('capability', $data)) {
                $object->setCapability($data['capability']);
                unset($data['capability']);
            }
            if (\array_key_exists('startDate', $data)) {
                $object->setStartDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['startDate']));
                unset($data['startDate']);
            }
            if (\array_key_exists('endDate', $data)) {
                $object->setEndDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['endDate']));
                unset($data['endDate']);
            }
            if (\array_key_exists('dayOfWeek', $data)) {
                $object->setDayOfWeek($data['dayOfWeek']);
                unset($data['dayOfWeek']);
            }
            if (\array_key_exists('text', $data)) {
                $object->setText($data['text']);
                unset($data['text']);
            }
            if (\array_key_exists('buttonText', $data)) {
                $object->setButtonText($data['buttonText']);
                unset($data['buttonText']);
            }
            if (\array_key_exists('languageCode1', $data)) {
                $object->setLanguageCode1($data['languageCode1']);
                unset($data['languageCode1']);
            }
            if (\array_key_exists('text1', $data)) {
                $object->setText1($data['text1']);
                unset($data['text1']);
            }
            if (\array_key_exists('buttonText1', $data)) {
                $object->setButtonText1($data['buttonText1']);
                unset($data['buttonText1']);
            }
            if (\array_key_exists('languageCode2', $data)) {
                $object->setLanguageCode2($data['languageCode2']);
                unset($data['languageCode2']);
            }
            if (\array_key_exists('text2', $data)) {
                $object->setText2($data['text2']);
                unset($data['text2']);
            }
            if (\array_key_exists('buttonText2', $data)) {
                $object->setButtonText2($data['buttonText2']);
                unset($data['buttonText2']);
            }
            if (\array_key_exists('languageCode3', $data)) {
                $object->setLanguageCode3($data['languageCode3']);
                unset($data['languageCode3']);
            }
            if (\array_key_exists('text3', $data)) {
                $object->setText3($data['text3']);
                unset($data['text3']);
            }
            if (\array_key_exists('buttonText3', $data)) {
                $object->setButtonText3($data['buttonText3']);
                unset($data['buttonText3']);
            }
            if (\array_key_exists('hyperlink', $data)) {
                $object->setHyperlink($data['hyperlink']);
                unset($data['hyperlink']);
            }
            if (\array_key_exists('created', $data)) {
                $object->setCreated(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created']));
                unset($data['created']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            $data['id'] = $object->getId();
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['countryCode'] = $object->getCountryCode();
            }
            if ($object->isInitialized('partnerTypeCode') && null !== $object->getPartnerTypeCode()) {
                $data['partnerTypeCode'] = $object->getPartnerTypeCode();
            }
            if ($object->isInitialized('servicePointId') && null !== $object->getServicePointId()) {
                $data['servicePointId'] = $object->getServicePointId();
            }
            $data['clientId'] = $object->getClientId();
            $data['capability'] = $object->getCapability();
            $data['startDate'] = $object->getStartDate()?->format('Y-m-d\TH:i:sP');
            $data['endDate'] = $object->getEndDate()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('dayOfWeek') && null !== $object->getDayOfWeek()) {
                $data['dayOfWeek'] = $object->getDayOfWeek();
            }
            $data['text'] = $object->getText();
            if ($object->isInitialized('buttonText') && null !== $object->getButtonText()) {
                $data['buttonText'] = $object->getButtonText();
            }
            if ($object->isInitialized('languageCode1') && null !== $object->getLanguageCode1()) {
                $data['languageCode1'] = $object->getLanguageCode1();
            }
            if ($object->isInitialized('text1') && null !== $object->getText1()) {
                $data['text1'] = $object->getText1();
            }
            if ($object->isInitialized('buttonText1') && null !== $object->getButtonText1()) {
                $data['buttonText1'] = $object->getButtonText1();
            }
            if ($object->isInitialized('languageCode2') && null !== $object->getLanguageCode2()) {
                $data['languageCode2'] = $object->getLanguageCode2();
            }
            if ($object->isInitialized('text2') && null !== $object->getText2()) {
                $data['text2'] = $object->getText2();
            }
            if ($object->isInitialized('buttonText2') && null !== $object->getButtonText2()) {
                $data['buttonText2'] = $object->getButtonText2();
            }
            if ($object->isInitialized('languageCode3') && null !== $object->getLanguageCode3()) {
                $data['languageCode3'] = $object->getLanguageCode3();
            }
            if ($object->isInitialized('text3') && null !== $object->getText3()) {
                $data['text3'] = $object->getText3();
            }
            if ($object->isInitialized('buttonText3') && null !== $object->getButtonText3()) {
                $data['buttonText3'] = $object->getButtonText3();
            }
            if ($object->isInitialized('hyperlink') && null !== $object->getHyperlink()) {
                $data['hyperlink'] = $object->getHyperlink();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['created'] = $object->getCreated()?->format('Y-m-d\TH:i:sP');
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\DHL\Api\Model\Promotion::class => false];
        }
    }
}