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
class OrganizationInvitationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\OrganizationInvitation';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\OrganizationInvitation';
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
        $object = new \Github\Model\OrganizationInvitation();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrganizationInvitationConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('login', $data) && $data['login'] !== null) {
            $object->setLogin($data['login']);
        }
        elseif (\array_key_exists('login', $data) && $data['login'] === null) {
            $object->setLogin(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('role', $data)) {
            $object->setRole($data['role']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('inviter', $data) && $data['inviter'] !== null) {
            $object->setInviter($this->denormalizer->denormalize($data['inviter'], 'Github\\Model\\SimpleUser', 'json', $context));
        }
        elseif (\array_key_exists('inviter', $data) && $data['inviter'] === null) {
            $object->setInviter(null);
        }
        if (\array_key_exists('team_count', $data)) {
            $object->setTeamCount($data['team_count']);
        }
        if (\array_key_exists('invitation_team_url', $data)) {
            $object->setInvitationTeamUrl($data['invitation_team_url']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('invitation_teams_url', $data)) {
            $object->setInvitationTeamsUrl($data['invitation_teams_url']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getLogin()) {
            $data['login'] = $object->getLogin();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getRole()) {
            $data['role'] = $object->getRole();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (null !== $object->getInviter()) {
            $data['inviter'] = $this->normalizer->normalize($object->getInviter(), 'json', $context);
        }
        if (null !== $object->getTeamCount()) {
            $data['team_count'] = $object->getTeamCount();
        }
        if (null !== $object->getInvitationTeamUrl()) {
            $data['invitation_team_url'] = $object->getInvitationTeamUrl();
        }
        if (null !== $object->getNodeId()) {
            $data['node_id'] = $object->getNodeId();
        }
        if (null !== $object->getInvitationTeamsUrl()) {
            $data['invitation_teams_url'] = $object->getInvitationTeamsUrl();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrganizationInvitationConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}