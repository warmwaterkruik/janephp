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
class ScimUserNameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\ScimUserName';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ScimUserName';
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
        $object = new \Github\Model\ScimUserName();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ScimUserNameConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('givenName', $data) && $data['givenName'] !== null) {
            $object->setGivenName($data['givenName']);
        }
        elseif (\array_key_exists('givenName', $data) && $data['givenName'] === null) {
            $object->setGivenName(null);
        }
        if (\array_key_exists('familyName', $data) && $data['familyName'] !== null) {
            $object->setFamilyName($data['familyName']);
        }
        elseif (\array_key_exists('familyName', $data) && $data['familyName'] === null) {
            $object->setFamilyName(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['givenName'] = $object->getGivenName();
        $data['familyName'] = $object->getFamilyName();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ScimUserNameConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}