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
class AuthorizationsAuthorizationIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\AuthorizationsAuthorizationIdPatchBody';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\AuthorizationsAuthorizationIdPatchBody';
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
        $object = new \Github\Model\AuthorizationsAuthorizationIdPatchBody();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\AuthorizationsAuthorizationIdPatchBodyConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('scopes', $data) && $data['scopes'] !== null) {
            $values = array();
            foreach ($data['scopes'] as $value) {
                $values[] = $value;
            }
            $object->setScopes($values);
        }
        elseif (\array_key_exists('scopes', $data) && $data['scopes'] === null) {
            $object->setScopes(null);
        }
        if (\array_key_exists('add_scopes', $data)) {
            $values_1 = array();
            foreach ($data['add_scopes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAddScopes($values_1);
        }
        if (\array_key_exists('remove_scopes', $data)) {
            $values_2 = array();
            foreach ($data['remove_scopes'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setRemoveScopes($values_2);
        }
        if (\array_key_exists('note', $data)) {
            $object->setNote($data['note']);
        }
        if (\array_key_exists('note_url', $data)) {
            $object->setNoteUrl($data['note_url']);
        }
        if (\array_key_exists('fingerprint', $data)) {
            $object->setFingerprint($data['fingerprint']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getScopes()) {
            $values = array();
            foreach ($object->getScopes() as $value) {
                $values[] = $value;
            }
            $data['scopes'] = $values;
        }
        if (null !== $object->getAddScopes()) {
            $values_1 = array();
            foreach ($object->getAddScopes() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['add_scopes'] = $values_1;
        }
        if (null !== $object->getRemoveScopes()) {
            $values_2 = array();
            foreach ($object->getRemoveScopes() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['remove_scopes'] = $values_2;
        }
        if (null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if (null !== $object->getNoteUrl()) {
            $data['note_url'] = $object->getNoteUrl();
        }
        if (null !== $object->getFingerprint()) {
            $data['fingerprint'] = $object->getFingerprint();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\AuthorizationsAuthorizationIdPatchBodyConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}