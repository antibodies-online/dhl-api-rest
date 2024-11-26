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
    class AddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\Address::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\Address::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\Address();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('addressLine1', $data)) {
                $object->setAddressLine1($data['addressLine1']);
                unset($data['addressLine1']);
            }
            if (\array_key_exists('addressLine2', $data)) {
                $object->setAddressLine2($data['addressLine2']);
                unset($data['addressLine2']);
            }
            if (\array_key_exists('addressLine3', $data)) {
                $object->setAddressLine3($data['addressLine3']);
                unset($data['addressLine3']);
            }
            if (\array_key_exists('street', $data)) {
                $object->setStreet($data['street']);
                unset($data['street']);
            }
            if (\array_key_exists('houseNumber', $data)) {
                $object->setHouseNumber($data['houseNumber']);
                unset($data['houseNumber']);
            }
            if (\array_key_exists('additionalInfo', $data)) {
                $object->setAdditionalInfo($data['additionalInfo']);
                unset($data['additionalInfo']);
            }
            if (\array_key_exists('city', $data)) {
                $object->setCity($data['city']);
                unset($data['city']);
            }
            if (\array_key_exists('zipCode', $data)) {
                $object->setZipCode($data['zipCode']);
                unset($data['zipCode']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('country', $data)) {
                $object->setCountry($data['country']);
                unset($data['country']);
            }
            if (\array_key_exists('dhlCountry', $data)) {
                $object->setDhlCountry($data['dhlCountry']);
                unset($data['dhlCountry']);
            }
            if (\array_key_exists('countryDivisionCode', $data)) {
                $object->setCountryDivisionCode($data['countryDivisionCode']);
                unset($data['countryDivisionCode']);
            }
            if (\array_key_exists('countryDivisionCodeType', $data)) {
                $object->setCountryDivisionCodeType($data['countryDivisionCodeType']);
                unset($data['countryDivisionCodeType']);
            }
            if (\array_key_exists('html', $data)) {
                $object->setHtml($data['html']);
                unset($data['html']);
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
            if ($object->isInitialized('addressLine1') && null !== $object->getAddressLine1()) {
                $data['addressLine1'] = $object->getAddressLine1();
            }
            if ($object->isInitialized('addressLine2') && null !== $object->getAddressLine2()) {
                $data['addressLine2'] = $object->getAddressLine2();
            }
            if ($object->isInitialized('addressLine3') && null !== $object->getAddressLine3()) {
                $data['addressLine3'] = $object->getAddressLine3();
            }
            if ($object->isInitialized('street') && null !== $object->getStreet()) {
                $data['street'] = $object->getStreet();
            }
            if ($object->isInitialized('houseNumber') && null !== $object->getHouseNumber()) {
                $data['houseNumber'] = $object->getHouseNumber();
            }
            if ($object->isInitialized('additionalInfo') && null !== $object->getAdditionalInfo()) {
                $data['additionalInfo'] = $object->getAdditionalInfo();
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('zipCode') && null !== $object->getZipCode()) {
                $data['zipCode'] = $object->getZipCode();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('country') && null !== $object->getCountry()) {
                $data['country'] = $object->getCountry();
            }
            if ($object->isInitialized('dhlCountry') && null !== $object->getDhlCountry()) {
                $data['dhlCountry'] = $object->getDhlCountry();
            }
            if ($object->isInitialized('countryDivisionCode') && null !== $object->getCountryDivisionCode()) {
                $data['countryDivisionCode'] = $object->getCountryDivisionCode();
            }
            if ($object->isInitialized('countryDivisionCodeType') && null !== $object->getCountryDivisionCodeType()) {
                $data['countryDivisionCodeType'] = $object->getCountryDivisionCodeType();
            }
            if ($object->isInitialized('html') && null !== $object->getHtml()) {
                $data['html'] = $object->getHtml();
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
            return [\AntibodiesOnline\DHL\Api\Model\Address::class => false];
        }
    }
} else {
    class AddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\Address::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\Address::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\Address();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('addressLine1', $data)) {
                $object->setAddressLine1($data['addressLine1']);
                unset($data['addressLine1']);
            }
            if (\array_key_exists('addressLine2', $data)) {
                $object->setAddressLine2($data['addressLine2']);
                unset($data['addressLine2']);
            }
            if (\array_key_exists('addressLine3', $data)) {
                $object->setAddressLine3($data['addressLine3']);
                unset($data['addressLine3']);
            }
            if (\array_key_exists('street', $data)) {
                $object->setStreet($data['street']);
                unset($data['street']);
            }
            if (\array_key_exists('houseNumber', $data)) {
                $object->setHouseNumber($data['houseNumber']);
                unset($data['houseNumber']);
            }
            if (\array_key_exists('additionalInfo', $data)) {
                $object->setAdditionalInfo($data['additionalInfo']);
                unset($data['additionalInfo']);
            }
            if (\array_key_exists('city', $data)) {
                $object->setCity($data['city']);
                unset($data['city']);
            }
            if (\array_key_exists('zipCode', $data)) {
                $object->setZipCode($data['zipCode']);
                unset($data['zipCode']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('country', $data)) {
                $object->setCountry($data['country']);
                unset($data['country']);
            }
            if (\array_key_exists('dhlCountry', $data)) {
                $object->setDhlCountry($data['dhlCountry']);
                unset($data['dhlCountry']);
            }
            if (\array_key_exists('countryDivisionCode', $data)) {
                $object->setCountryDivisionCode($data['countryDivisionCode']);
                unset($data['countryDivisionCode']);
            }
            if (\array_key_exists('countryDivisionCodeType', $data)) {
                $object->setCountryDivisionCodeType($data['countryDivisionCodeType']);
                unset($data['countryDivisionCodeType']);
            }
            if (\array_key_exists('html', $data)) {
                $object->setHtml($data['html']);
                unset($data['html']);
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
            if ($object->isInitialized('addressLine1') && null !== $object->getAddressLine1()) {
                $data['addressLine1'] = $object->getAddressLine1();
            }
            if ($object->isInitialized('addressLine2') && null !== $object->getAddressLine2()) {
                $data['addressLine2'] = $object->getAddressLine2();
            }
            if ($object->isInitialized('addressLine3') && null !== $object->getAddressLine3()) {
                $data['addressLine3'] = $object->getAddressLine3();
            }
            if ($object->isInitialized('street') && null !== $object->getStreet()) {
                $data['street'] = $object->getStreet();
            }
            if ($object->isInitialized('houseNumber') && null !== $object->getHouseNumber()) {
                $data['houseNumber'] = $object->getHouseNumber();
            }
            if ($object->isInitialized('additionalInfo') && null !== $object->getAdditionalInfo()) {
                $data['additionalInfo'] = $object->getAdditionalInfo();
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('zipCode') && null !== $object->getZipCode()) {
                $data['zipCode'] = $object->getZipCode();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('country') && null !== $object->getCountry()) {
                $data['country'] = $object->getCountry();
            }
            if ($object->isInitialized('dhlCountry') && null !== $object->getDhlCountry()) {
                $data['dhlCountry'] = $object->getDhlCountry();
            }
            if ($object->isInitialized('countryDivisionCode') && null !== $object->getCountryDivisionCode()) {
                $data['countryDivisionCode'] = $object->getCountryDivisionCode();
            }
            if ($object->isInitialized('countryDivisionCodeType') && null !== $object->getCountryDivisionCodeType()) {
                $data['countryDivisionCodeType'] = $object->getCountryDivisionCodeType();
            }
            if ($object->isInitialized('html') && null !== $object->getHtml()) {
                $data['html'] = $object->getHtml();
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
            return [\AntibodiesOnline\DHL\Api\Model\Address::class => false];
        }
    }
}