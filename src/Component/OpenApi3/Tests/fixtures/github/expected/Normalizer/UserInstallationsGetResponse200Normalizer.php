<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class UserInstallationsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\UserInstallationsGetResponse200';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\UserInstallationsGetResponse200';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\UserInstallationsGetResponse200();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\UserInstallationsGetResponse200Constraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('total_count', $data)) {
            $object->setTotalCount($data['total_count']);
        }
        if (\array_key_exists('installations', $data)) {
            $values = array();
            foreach ($data['installations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\Installation', 'json', $context);
            }
            $object->setInstallations($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTotalCount()) {
            $data['total_count'] = $object->getTotalCount();
        }
        if (null !== $object->getInstallations()) {
            $values = array();
            foreach ($object->getInstallations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['installations'] = $values;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\UserInstallationsGetResponse200Constraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}