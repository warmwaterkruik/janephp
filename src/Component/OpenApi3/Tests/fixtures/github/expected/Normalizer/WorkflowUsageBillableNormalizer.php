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
class WorkflowUsageBillableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\WorkflowUsageBillable';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\WorkflowUsageBillable';
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
        $object = new \Github\Model\WorkflowUsageBillable();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\WorkflowUsageBillableConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('UBUNTU', $data)) {
            $object->setUBUNTU($this->denormalizer->denormalize($data['UBUNTU'], 'Github\\Model\\WorkflowUsageBillableUBUNTU', 'json', $context));
        }
        if (\array_key_exists('MACOS', $data)) {
            $object->setMACOS($this->denormalizer->denormalize($data['MACOS'], 'Github\\Model\\WorkflowUsageBillableMACOS', 'json', $context));
        }
        if (\array_key_exists('WINDOWS', $data)) {
            $object->setWINDOWS($this->denormalizer->denormalize($data['WINDOWS'], 'Github\\Model\\WorkflowUsageBillableWINDOWS', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUBUNTU()) {
            $data['UBUNTU'] = $this->normalizer->normalize($object->getUBUNTU(), 'json', $context);
        }
        if (null !== $object->getMACOS()) {
            $data['MACOS'] = $this->normalizer->normalize($object->getMACOS(), 'json', $context);
        }
        if (null !== $object->getWINDOWS()) {
            $data['WINDOWS'] = $this->normalizer->normalize($object->getWINDOWS(), 'json', $context);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\WorkflowUsageBillableConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}