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
class OrgsOrgInvitationsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\OrgsOrgInvitationsPostBody';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\OrgsOrgInvitationsPostBody';
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
        $object = new \Github\Model\OrgsOrgInvitationsPostBody();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrgsOrgInvitationsPostBodyConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('invitee_id', $data)) {
            $object->setInviteeId($data['invitee_id']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('role', $data)) {
            $object->setRole($data['role']);
        }
        if (\array_key_exists('team_ids', $data)) {
            $values = array();
            foreach ($data['team_ids'] as $value) {
                $values[] = $value;
            }
            $object->setTeamIds($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getInviteeId()) {
            $data['invitee_id'] = $object->getInviteeId();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getRole()) {
            $data['role'] = $object->getRole();
        }
        if (null !== $object->getTeamIds()) {
            $values = array();
            foreach ($object->getTeamIds() as $value) {
                $values[] = $value;
            }
            $data['team_ids'] = $values;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrgsOrgInvitationsPostBodyConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}