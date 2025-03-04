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
class DeploymentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\Deployment';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\Deployment';
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
        $object = new \Github\Model\Deployment();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\DeploymentConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('sha', $data)) {
            $object->setSha($data['sha']);
        }
        if (\array_key_exists('ref', $data)) {
            $object->setRef($data['ref']);
        }
        if (\array_key_exists('task', $data)) {
            $object->setTask($data['task']);
        }
        if (\array_key_exists('payload', $data)) {
            $object->setPayload($this->denormalizer->denormalize($data['payload'], 'Github\\Model\\DeploymentPayload', 'json', $context));
        }
        if (\array_key_exists('original_environment', $data)) {
            $object->setOriginalEnvironment($data['original_environment']);
        }
        if (\array_key_exists('environment', $data)) {
            $object->setEnvironment($data['environment']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('creator', $data) && $data['creator'] !== null) {
            $object->setCreator($this->denormalizer->denormalize($data['creator'], 'Github\\Model\\DeploymentCreator', 'json', $context));
        }
        elseif (\array_key_exists('creator', $data) && $data['creator'] === null) {
            $object->setCreator(null);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        if (\array_key_exists('statuses_url', $data)) {
            $object->setStatusesUrl($data['statuses_url']);
        }
        if (\array_key_exists('repository_url', $data)) {
            $object->setRepositoryUrl($data['repository_url']);
        }
        if (\array_key_exists('transient_environment', $data)) {
            $object->setTransientEnvironment($data['transient_environment']);
        }
        if (\array_key_exists('production_environment', $data)) {
            $object->setProductionEnvironment($data['production_environment']);
        }
        if (\array_key_exists('performed_via_github_app', $data) && $data['performed_via_github_app'] !== null) {
            $object->setPerformedViaGithubApp($this->denormalizer->denormalize($data['performed_via_github_app'], 'Github\\Model\\DeploymentPerformedViaGithubApp', 'json', $context));
        }
        elseif (\array_key_exists('performed_via_github_app', $data) && $data['performed_via_github_app'] === null) {
            $object->setPerformedViaGithubApp(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['url'] = $object->getUrl();
        $data['id'] = $object->getId();
        $data['node_id'] = $object->getNodeId();
        $data['sha'] = $object->getSha();
        $data['ref'] = $object->getRef();
        $data['task'] = $object->getTask();
        $data['payload'] = $this->normalizer->normalize($object->getPayload(), 'json', $context);
        if (null !== $object->getOriginalEnvironment()) {
            $data['original_environment'] = $object->getOriginalEnvironment();
        }
        $data['environment'] = $object->getEnvironment();
        $data['description'] = $object->getDescription();
        $data['creator'] = $this->normalizer->normalize($object->getCreator(), 'json', $context);
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        $data['statuses_url'] = $object->getStatusesUrl();
        $data['repository_url'] = $object->getRepositoryUrl();
        if (null !== $object->getTransientEnvironment()) {
            $data['transient_environment'] = $object->getTransientEnvironment();
        }
        if (null !== $object->getProductionEnvironment()) {
            $data['production_environment'] = $object->getProductionEnvironment();
        }
        if (null !== $object->getPerformedViaGithubApp()) {
            $data['performed_via_github_app'] = $this->normalizer->normalize($object->getPerformedViaGithubApp(), 'json', $context);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\DeploymentConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}