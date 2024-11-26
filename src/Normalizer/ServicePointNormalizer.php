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
    class ServicePointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\ServicePoint::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\ServicePoint::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\ServicePoint();
            if (\array_key_exists('distanceMetric', $data) && \is_int($data['distanceMetric'])) {
                $data['distanceMetric'] = (double) $data['distanceMetric'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('facilityId', $data)) {
                $object->setFacilityId($data['facilityId']);
                unset($data['facilityId']);
            }
            if (\array_key_exists('facilityTypeCode', $data)) {
                $object->setFacilityTypeCode($data['facilityTypeCode']);
                unset($data['facilityTypeCode']);
            }
            if (\array_key_exists('serviceAreaCode', $data)) {
                $object->setServiceAreaCode($data['serviceAreaCode']);
                unset($data['serviceAreaCode']);
            }
            if (\array_key_exists('servicePointName', $data)) {
                $object->setServicePointName($data['servicePointName']);
                unset($data['servicePointName']);
            }
            if (\array_key_exists('servicePointNameFormatted', $data)) {
                $object->setServicePointNameFormatted($data['servicePointNameFormatted']);
                unset($data['servicePointNameFormatted']);
            }
            if (\array_key_exists('localName', $data)) {
                $object->setLocalName($data['localName']);
                unset($data['localName']);
            }
            if (\array_key_exists('servicePointType', $data)) {
                $object->setServicePointType($data['servicePointType']);
                unset($data['servicePointType']);
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], \AntibodiesOnline\DHL\Api\Model\Address::class, 'json', $context));
                unset($data['address']);
            }
            if (\array_key_exists('geoLocation', $data)) {
                $object->setGeoLocation($this->denormalizer->denormalize($data['geoLocation'], \AntibodiesOnline\DHL\Api\Model\GeoLocation::class, 'json', $context));
                unset($data['geoLocation']);
            }
            if (\array_key_exists('distance', $data)) {
                $object->setDistance($data['distance']);
                unset($data['distance']);
            }
            if (\array_key_exists('shippingCutOffTime', $data)) {
                $object->setShippingCutOffTime($data['shippingCutOffTime']);
                unset($data['shippingCutOffTime']);
            }
            if (\array_key_exists('openingHours', $data)) {
                $object->setOpeningHours($this->denormalizer->denormalize($data['openingHours'], \AntibodiesOnline\DHL\Api\Model\OpeningHours::class, 'json', $context));
                unset($data['openingHours']);
            }
            if (\array_key_exists('servicePointCapabilities', $data)) {
                $object->setServicePointCapabilities($this->denormalizer->denormalize($data['servicePointCapabilities'], \AntibodiesOnline\DHL\Api\Model\ServicePointCapabilities::class, 'json', $context));
                unset($data['servicePointCapabilities']);
            }
            if (\array_key_exists('contactDetails', $data)) {
                $object->setContactDetails($this->denormalizer->denormalize($data['contactDetails'], \AntibodiesOnline\DHL\Api\Model\ContactDetails::class, 'json', $context));
                unset($data['contactDetails']);
            }
            if (\array_key_exists('shippingCutOffTimeHtml', $data)) {
                $object->setShippingCutOffTimeHtml($data['shippingCutOffTimeHtml']);
                unset($data['shippingCutOffTimeHtml']);
            }
            if (\array_key_exists('distanceValue', $data)) {
                $object->setDistanceValue($data['distanceValue']);
                unset($data['distanceValue']);
            }
            if (\array_key_exists('distanceMetric', $data)) {
                $object->setDistanceMetric($data['distanceMetric']);
                unset($data['distanceMetric']);
            }
            if (\array_key_exists('language', $data)) {
                $object->setLanguage($this->denormalizer->denormalize($data['language'], \AntibodiesOnline\DHL\Api\Model\Language::class, 'json', $context));
                unset($data['language']);
            }
            if (\array_key_exists('shipmentLimitations', $data)) {
                $object->setShipmentLimitations($this->denormalizer->denormalize($data['shipmentLimitations'], \AntibodiesOnline\DHL\Api\Model\ShipmentLimitations::class, 'json', $context));
                unset($data['shipmentLimitations']);
            }
            if (\array_key_exists('shipmentLimitationsByPiece', $data)) {
                $object->setShipmentLimitationsByPiece($this->denormalizer->denormalize($data['shipmentLimitationsByPiece'], \AntibodiesOnline\DHL\Api\Model\ShipmentLimitationsByPiece::class, 'json', $context));
                unset($data['shipmentLimitationsByPiece']);
            }
            if (\array_key_exists('chargeCode', $data)) {
                $object->setChargeCode($data['chargeCode']);
                unset($data['chargeCode']);
            }
            if (\array_key_exists('partner', $data)) {
                $object->setPartner($this->denormalizer->denormalize($data['partner'], \AntibodiesOnline\DHL\Api\Model\Partner::class, 'json', $context));
                unset($data['partner']);
            }
            if (\array_key_exists('promotion', $data)) {
                $object->setPromotion($this->denormalizer->denormalize($data['promotion'], \AntibodiesOnline\DHL\Api\Model\Promotion::class, 'json', $context));
                unset($data['promotion']);
            }
            if (\array_key_exists('capacityStatus', $data)) {
                $object->setCapacityStatus($this->denormalizer->denormalize($data['capacityStatus'], \AntibodiesOnline\DHL\Api\Model\CapacityStatus::class, 'json', $context));
                unset($data['capacityStatus']);
            }
            if (\array_key_exists('svpStatus', $data)) {
                $object->setSvpStatus($data['svpStatus']);
                unset($data['svpStatus']);
            }
            if (\array_key_exists('workWeekStart', $data)) {
                $object->setWorkWeekStart($data['workWeekStart']);
                unset($data['workWeekStart']);
            }
            if (\array_key_exists('locatedAt', $data)) {
                $object->setLocatedAt($data['locatedAt']);
                unset($data['locatedAt']);
            }
            if (\array_key_exists('timeZone', $data)) {
                $object->setTimeZone($this->denormalizer->denormalize($data['timeZone'], \AntibodiesOnline\DHL\Api\Model\DateTimeZone::class, 'json', $context));
                unset($data['timeZone']);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('facilityId') && null !== $object->getFacilityId()) {
                $data['facilityId'] = $object->getFacilityId();
            }
            if ($object->isInitialized('facilityTypeCode') && null !== $object->getFacilityTypeCode()) {
                $data['facilityTypeCode'] = $object->getFacilityTypeCode();
            }
            if ($object->isInitialized('serviceAreaCode') && null !== $object->getServiceAreaCode()) {
                $data['serviceAreaCode'] = $object->getServiceAreaCode();
            }
            if ($object->isInitialized('servicePointName') && null !== $object->getServicePointName()) {
                $data['servicePointName'] = $object->getServicePointName();
            }
            if ($object->isInitialized('servicePointNameFormatted') && null !== $object->getServicePointNameFormatted()) {
                $data['servicePointNameFormatted'] = $object->getServicePointNameFormatted();
            }
            if ($object->isInitialized('localName') && null !== $object->getLocalName()) {
                $data['localName'] = $object->getLocalName();
            }
            if ($object->isInitialized('servicePointType') && null !== $object->getServicePointType()) {
                $data['servicePointType'] = $object->getServicePointType();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            if ($object->isInitialized('geoLocation') && null !== $object->getGeoLocation()) {
                $data['geoLocation'] = $this->normalizer->normalize($object->getGeoLocation(), 'json', $context);
            }
            if ($object->isInitialized('distance') && null !== $object->getDistance()) {
                $data['distance'] = $object->getDistance();
            }
            if ($object->isInitialized('shippingCutOffTime') && null !== $object->getShippingCutOffTime()) {
                $data['shippingCutOffTime'] = $object->getShippingCutOffTime();
            }
            if ($object->isInitialized('openingHours') && null !== $object->getOpeningHours()) {
                $data['openingHours'] = $this->normalizer->normalize($object->getOpeningHours(), 'json', $context);
            }
            if ($object->isInitialized('servicePointCapabilities') && null !== $object->getServicePointCapabilities()) {
                $data['servicePointCapabilities'] = $this->normalizer->normalize($object->getServicePointCapabilities(), 'json', $context);
            }
            if ($object->isInitialized('contactDetails') && null !== $object->getContactDetails()) {
                $data['contactDetails'] = $this->normalizer->normalize($object->getContactDetails(), 'json', $context);
            }
            if ($object->isInitialized('shippingCutOffTimeHtml') && null !== $object->getShippingCutOffTimeHtml()) {
                $data['shippingCutOffTimeHtml'] = $object->getShippingCutOffTimeHtml();
            }
            if ($object->isInitialized('distanceValue') && null !== $object->getDistanceValue()) {
                $data['distanceValue'] = $object->getDistanceValue();
            }
            if ($object->isInitialized('distanceMetric') && null !== $object->getDistanceMetric()) {
                $data['distanceMetric'] = $object->getDistanceMetric();
            }
            if ($object->isInitialized('language') && null !== $object->getLanguage()) {
                $data['language'] = $this->normalizer->normalize($object->getLanguage(), 'json', $context);
            }
            if ($object->isInitialized('shipmentLimitations') && null !== $object->getShipmentLimitations()) {
                $data['shipmentLimitations'] = $this->normalizer->normalize($object->getShipmentLimitations(), 'json', $context);
            }
            if ($object->isInitialized('shipmentLimitationsByPiece') && null !== $object->getShipmentLimitationsByPiece()) {
                $data['shipmentLimitationsByPiece'] = $this->normalizer->normalize($object->getShipmentLimitationsByPiece(), 'json', $context);
            }
            if ($object->isInitialized('chargeCode') && null !== $object->getChargeCode()) {
                $data['chargeCode'] = $object->getChargeCode();
            }
            if ($object->isInitialized('partner') && null !== $object->getPartner()) {
                $data['partner'] = $this->normalizer->normalize($object->getPartner(), 'json', $context);
            }
            if ($object->isInitialized('promotion') && null !== $object->getPromotion()) {
                $data['promotion'] = $this->normalizer->normalize($object->getPromotion(), 'json', $context);
            }
            if ($object->isInitialized('capacityStatus') && null !== $object->getCapacityStatus()) {
                $data['capacityStatus'] = $this->normalizer->normalize($object->getCapacityStatus(), 'json', $context);
            }
            if ($object->isInitialized('svpStatus') && null !== $object->getSvpStatus()) {
                $data['svpStatus'] = $object->getSvpStatus();
            }
            if ($object->isInitialized('workWeekStart') && null !== $object->getWorkWeekStart()) {
                $data['workWeekStart'] = $object->getWorkWeekStart();
            }
            if ($object->isInitialized('locatedAt') && null !== $object->getLocatedAt()) {
                $data['locatedAt'] = $object->getLocatedAt();
            }
            if ($object->isInitialized('timeZone') && null !== $object->getTimeZone()) {
                $data['timeZone'] = $this->normalizer->normalize($object->getTimeZone(), 'json', $context);
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
            return [\AntibodiesOnline\DHL\Api\Model\ServicePoint::class => false];
        }
    }
} else {
    class ServicePointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\ServicePoint::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\ServicePoint::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\ServicePoint();
            if (\array_key_exists('distanceMetric', $data) && \is_int($data['distanceMetric'])) {
                $data['distanceMetric'] = (double) $data['distanceMetric'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('facilityId', $data)) {
                $object->setFacilityId($data['facilityId']);
                unset($data['facilityId']);
            }
            if (\array_key_exists('facilityTypeCode', $data)) {
                $object->setFacilityTypeCode($data['facilityTypeCode']);
                unset($data['facilityTypeCode']);
            }
            if (\array_key_exists('serviceAreaCode', $data)) {
                $object->setServiceAreaCode($data['serviceAreaCode']);
                unset($data['serviceAreaCode']);
            }
            if (\array_key_exists('servicePointName', $data)) {
                $object->setServicePointName($data['servicePointName']);
                unset($data['servicePointName']);
            }
            if (\array_key_exists('servicePointNameFormatted', $data)) {
                $object->setServicePointNameFormatted($data['servicePointNameFormatted']);
                unset($data['servicePointNameFormatted']);
            }
            if (\array_key_exists('localName', $data)) {
                $object->setLocalName($data['localName']);
                unset($data['localName']);
            }
            if (\array_key_exists('servicePointType', $data)) {
                $object->setServicePointType($data['servicePointType']);
                unset($data['servicePointType']);
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], \AntibodiesOnline\DHL\Api\Model\Address::class, 'json', $context));
                unset($data['address']);
            }
            if (\array_key_exists('geoLocation', $data)) {
                $object->setGeoLocation($this->denormalizer->denormalize($data['geoLocation'], \AntibodiesOnline\DHL\Api\Model\GeoLocation::class, 'json', $context));
                unset($data['geoLocation']);
            }
            if (\array_key_exists('distance', $data)) {
                $object->setDistance($data['distance']);
                unset($data['distance']);
            }
            if (\array_key_exists('shippingCutOffTime', $data)) {
                $object->setShippingCutOffTime($data['shippingCutOffTime']);
                unset($data['shippingCutOffTime']);
            }
            if (\array_key_exists('openingHours', $data)) {
                $object->setOpeningHours($this->denormalizer->denormalize($data['openingHours'], \AntibodiesOnline\DHL\Api\Model\OpeningHours::class, 'json', $context));
                unset($data['openingHours']);
            }
            if (\array_key_exists('servicePointCapabilities', $data)) {
                $object->setServicePointCapabilities($this->denormalizer->denormalize($data['servicePointCapabilities'], \AntibodiesOnline\DHL\Api\Model\ServicePointCapabilities::class, 'json', $context));
                unset($data['servicePointCapabilities']);
            }
            if (\array_key_exists('contactDetails', $data)) {
                $object->setContactDetails($this->denormalizer->denormalize($data['contactDetails'], \AntibodiesOnline\DHL\Api\Model\ContactDetails::class, 'json', $context));
                unset($data['contactDetails']);
            }
            if (\array_key_exists('shippingCutOffTimeHtml', $data)) {
                $object->setShippingCutOffTimeHtml($data['shippingCutOffTimeHtml']);
                unset($data['shippingCutOffTimeHtml']);
            }
            if (\array_key_exists('distanceValue', $data)) {
                $object->setDistanceValue($data['distanceValue']);
                unset($data['distanceValue']);
            }
            if (\array_key_exists('distanceMetric', $data)) {
                $object->setDistanceMetric($data['distanceMetric']);
                unset($data['distanceMetric']);
            }
            if (\array_key_exists('language', $data)) {
                $object->setLanguage($this->denormalizer->denormalize($data['language'], \AntibodiesOnline\DHL\Api\Model\Language::class, 'json', $context));
                unset($data['language']);
            }
            if (\array_key_exists('shipmentLimitations', $data)) {
                $object->setShipmentLimitations($this->denormalizer->denormalize($data['shipmentLimitations'], \AntibodiesOnline\DHL\Api\Model\ShipmentLimitations::class, 'json', $context));
                unset($data['shipmentLimitations']);
            }
            if (\array_key_exists('shipmentLimitationsByPiece', $data)) {
                $object->setShipmentLimitationsByPiece($this->denormalizer->denormalize($data['shipmentLimitationsByPiece'], \AntibodiesOnline\DHL\Api\Model\ShipmentLimitationsByPiece::class, 'json', $context));
                unset($data['shipmentLimitationsByPiece']);
            }
            if (\array_key_exists('chargeCode', $data)) {
                $object->setChargeCode($data['chargeCode']);
                unset($data['chargeCode']);
            }
            if (\array_key_exists('partner', $data)) {
                $object->setPartner($this->denormalizer->denormalize($data['partner'], \AntibodiesOnline\DHL\Api\Model\Partner::class, 'json', $context));
                unset($data['partner']);
            }
            if (\array_key_exists('promotion', $data)) {
                $object->setPromotion($this->denormalizer->denormalize($data['promotion'], \AntibodiesOnline\DHL\Api\Model\Promotion::class, 'json', $context));
                unset($data['promotion']);
            }
            if (\array_key_exists('capacityStatus', $data)) {
                $object->setCapacityStatus($this->denormalizer->denormalize($data['capacityStatus'], \AntibodiesOnline\DHL\Api\Model\CapacityStatus::class, 'json', $context));
                unset($data['capacityStatus']);
            }
            if (\array_key_exists('svpStatus', $data)) {
                $object->setSvpStatus($data['svpStatus']);
                unset($data['svpStatus']);
            }
            if (\array_key_exists('workWeekStart', $data)) {
                $object->setWorkWeekStart($data['workWeekStart']);
                unset($data['workWeekStart']);
            }
            if (\array_key_exists('locatedAt', $data)) {
                $object->setLocatedAt($data['locatedAt']);
                unset($data['locatedAt']);
            }
            if (\array_key_exists('timeZone', $data)) {
                $object->setTimeZone($this->denormalizer->denormalize($data['timeZone'], \AntibodiesOnline\DHL\Api\Model\DateTimeZone::class, 'json', $context));
                unset($data['timeZone']);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('facilityId') && null !== $object->getFacilityId()) {
                $data['facilityId'] = $object->getFacilityId();
            }
            if ($object->isInitialized('facilityTypeCode') && null !== $object->getFacilityTypeCode()) {
                $data['facilityTypeCode'] = $object->getFacilityTypeCode();
            }
            if ($object->isInitialized('serviceAreaCode') && null !== $object->getServiceAreaCode()) {
                $data['serviceAreaCode'] = $object->getServiceAreaCode();
            }
            if ($object->isInitialized('servicePointName') && null !== $object->getServicePointName()) {
                $data['servicePointName'] = $object->getServicePointName();
            }
            if ($object->isInitialized('servicePointNameFormatted') && null !== $object->getServicePointNameFormatted()) {
                $data['servicePointNameFormatted'] = $object->getServicePointNameFormatted();
            }
            if ($object->isInitialized('localName') && null !== $object->getLocalName()) {
                $data['localName'] = $object->getLocalName();
            }
            if ($object->isInitialized('servicePointType') && null !== $object->getServicePointType()) {
                $data['servicePointType'] = $object->getServicePointType();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            if ($object->isInitialized('geoLocation') && null !== $object->getGeoLocation()) {
                $data['geoLocation'] = $this->normalizer->normalize($object->getGeoLocation(), 'json', $context);
            }
            if ($object->isInitialized('distance') && null !== $object->getDistance()) {
                $data['distance'] = $object->getDistance();
            }
            if ($object->isInitialized('shippingCutOffTime') && null !== $object->getShippingCutOffTime()) {
                $data['shippingCutOffTime'] = $object->getShippingCutOffTime();
            }
            if ($object->isInitialized('openingHours') && null !== $object->getOpeningHours()) {
                $data['openingHours'] = $this->normalizer->normalize($object->getOpeningHours(), 'json', $context);
            }
            if ($object->isInitialized('servicePointCapabilities') && null !== $object->getServicePointCapabilities()) {
                $data['servicePointCapabilities'] = $this->normalizer->normalize($object->getServicePointCapabilities(), 'json', $context);
            }
            if ($object->isInitialized('contactDetails') && null !== $object->getContactDetails()) {
                $data['contactDetails'] = $this->normalizer->normalize($object->getContactDetails(), 'json', $context);
            }
            if ($object->isInitialized('shippingCutOffTimeHtml') && null !== $object->getShippingCutOffTimeHtml()) {
                $data['shippingCutOffTimeHtml'] = $object->getShippingCutOffTimeHtml();
            }
            if ($object->isInitialized('distanceValue') && null !== $object->getDistanceValue()) {
                $data['distanceValue'] = $object->getDistanceValue();
            }
            if ($object->isInitialized('distanceMetric') && null !== $object->getDistanceMetric()) {
                $data['distanceMetric'] = $object->getDistanceMetric();
            }
            if ($object->isInitialized('language') && null !== $object->getLanguage()) {
                $data['language'] = $this->normalizer->normalize($object->getLanguage(), 'json', $context);
            }
            if ($object->isInitialized('shipmentLimitations') && null !== $object->getShipmentLimitations()) {
                $data['shipmentLimitations'] = $this->normalizer->normalize($object->getShipmentLimitations(), 'json', $context);
            }
            if ($object->isInitialized('shipmentLimitationsByPiece') && null !== $object->getShipmentLimitationsByPiece()) {
                $data['shipmentLimitationsByPiece'] = $this->normalizer->normalize($object->getShipmentLimitationsByPiece(), 'json', $context);
            }
            if ($object->isInitialized('chargeCode') && null !== $object->getChargeCode()) {
                $data['chargeCode'] = $object->getChargeCode();
            }
            if ($object->isInitialized('partner') && null !== $object->getPartner()) {
                $data['partner'] = $this->normalizer->normalize($object->getPartner(), 'json', $context);
            }
            if ($object->isInitialized('promotion') && null !== $object->getPromotion()) {
                $data['promotion'] = $this->normalizer->normalize($object->getPromotion(), 'json', $context);
            }
            if ($object->isInitialized('capacityStatus') && null !== $object->getCapacityStatus()) {
                $data['capacityStatus'] = $this->normalizer->normalize($object->getCapacityStatus(), 'json', $context);
            }
            if ($object->isInitialized('svpStatus') && null !== $object->getSvpStatus()) {
                $data['svpStatus'] = $object->getSvpStatus();
            }
            if ($object->isInitialized('workWeekStart') && null !== $object->getWorkWeekStart()) {
                $data['workWeekStart'] = $object->getWorkWeekStart();
            }
            if ($object->isInitialized('locatedAt') && null !== $object->getLocatedAt()) {
                $data['locatedAt'] = $object->getLocatedAt();
            }
            if ($object->isInitialized('timeZone') && null !== $object->getTimeZone()) {
                $data['timeZone'] = $this->normalizer->normalize($object->getTimeZone(), 'json', $context);
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
            return [\AntibodiesOnline\DHL\Api\Model\ServicePoint::class => false];
        }
    }
}