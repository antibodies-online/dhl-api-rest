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
    class RestResponseStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\RestResponseStatus::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\RestResponseStatus::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\DHL\Api\Model\RestResponseStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('statusCode', $data)) {
                $object->setStatusCode($data['statusCode']);
                unset($data['statusCode']);
            }
            if (\array_key_exists('statusMessage', $data)) {
                $object->setStatusMessage($data['statusMessage']);
                unset($data['statusMessage']);
            }
            if (\array_key_exists('ok', $data)) {
                $object->setOk($data['ok']);
                unset($data['ok']);
            }
            if (\array_key_exists('warning', $data)) {
                $object->setWarning($data['warning']);
                unset($data['warning']);
            }
            if (\array_key_exists('errorStatus', $data)) {
                $object->setErrorStatus($data['errorStatus']);
                unset($data['errorStatus']);
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
            if ($object->isInitialized('statusCode') && null !== $object->getStatusCode()) {
                $data['statusCode'] = $object->getStatusCode();
            }
            if ($object->isInitialized('statusMessage') && null !== $object->getStatusMessage()) {
                $data['statusMessage'] = $object->getStatusMessage();
            }
            if ($object->isInitialized('ok') && null !== $object->getOk()) {
                $data['ok'] = $object->getOk();
            }
            if ($object->isInitialized('warning') && null !== $object->getWarning()) {
                $data['warning'] = $object->getWarning();
            }
            if ($object->isInitialized('errorStatus') && null !== $object->getErrorStatus()) {
                $data['errorStatus'] = $object->getErrorStatus();
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
            return [\AntibodiesOnline\DHL\Api\Model\RestResponseStatus::class => false];
        }
    }
} else {
    class RestResponseStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\DHL\Api\Model\RestResponseStatus::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \AntibodiesOnline\DHL\Api\Model\RestResponseStatus::class;
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
            $object = new \AntibodiesOnline\DHL\Api\Model\RestResponseStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('statusCode', $data)) {
                $object->setStatusCode($data['statusCode']);
                unset($data['statusCode']);
            }
            if (\array_key_exists('statusMessage', $data)) {
                $object->setStatusMessage($data['statusMessage']);
                unset($data['statusMessage']);
            }
            if (\array_key_exists('ok', $data)) {
                $object->setOk($data['ok']);
                unset($data['ok']);
            }
            if (\array_key_exists('warning', $data)) {
                $object->setWarning($data['warning']);
                unset($data['warning']);
            }
            if (\array_key_exists('errorStatus', $data)) {
                $object->setErrorStatus($data['errorStatus']);
                unset($data['errorStatus']);
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
            if ($object->isInitialized('statusCode') && null !== $object->getStatusCode()) {
                $data['statusCode'] = $object->getStatusCode();
            }
            if ($object->isInitialized('statusMessage') && null !== $object->getStatusMessage()) {
                $data['statusMessage'] = $object->getStatusMessage();
            }
            if ($object->isInitialized('ok') && null !== $object->getOk()) {
                $data['ok'] = $object->getOk();
            }
            if ($object->isInitialized('warning') && null !== $object->getWarning()) {
                $data['warning'] = $object->getWarning();
            }
            if ($object->isInitialized('errorStatus') && null !== $object->getErrorStatus()) {
                $data['errorStatus'] = $object->getErrorStatus();
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
            return [\AntibodiesOnline\DHL\Api\Model\RestResponseStatus::class => false];
        }
    }
}