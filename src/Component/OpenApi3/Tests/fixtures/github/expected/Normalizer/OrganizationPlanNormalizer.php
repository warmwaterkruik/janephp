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
class OrganizationPlanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\OrganizationPlan';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\OrganizationPlan';
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
        $object = new \Github\Model\OrganizationPlan();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrganizationPlanConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('space', $data)) {
            $object->setSpace($data['space']);
        }
        if (\array_key_exists('private_repos', $data)) {
            $object->setPrivateRepos($data['private_repos']);
        }
        if (\array_key_exists('filled_seats', $data)) {
            $object->setFilledSeats($data['filled_seats']);
        }
        if (\array_key_exists('seats', $data)) {
            $object->setSeats($data['seats']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getSpace()) {
            $data['space'] = $object->getSpace();
        }
        if (null !== $object->getPrivateRepos()) {
            $data['private_repos'] = $object->getPrivateRepos();
        }
        if (null !== $object->getFilledSeats()) {
            $data['filled_seats'] = $object->getFilledSeats();
        }
        if (null !== $object->getSeats()) {
            $data['seats'] = $object->getSeats();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrganizationPlanConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}