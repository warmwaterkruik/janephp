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
class ReposOwnerRepoCheckSuitesPreferencesPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\ReposOwnerRepoCheckSuitesPreferencesPatchBody';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoCheckSuitesPreferencesPatchBody';
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
        $object = new \Github\Model\ReposOwnerRepoCheckSuitesPreferencesPatchBody();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoCheckSuitesPreferencesPatchBodyConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('auto_trigger_checks', $data)) {
            $values = array();
            foreach ($data['auto_trigger_checks'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\ReposOwnerRepoCheckSuitesPreferencesPatchBodyAutoTriggerChecksItem', 'json', $context);
            }
            $object->setAutoTriggerChecks($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAutoTriggerChecks()) {
            $values = array();
            foreach ($object->getAutoTriggerChecks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['auto_trigger_checks'] = $values;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoCheckSuitesPreferencesPatchBodyConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}