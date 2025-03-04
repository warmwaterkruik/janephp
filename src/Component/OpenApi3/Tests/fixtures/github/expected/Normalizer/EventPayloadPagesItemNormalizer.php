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
class EventPayloadPagesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\EventPayloadPagesItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\EventPayloadPagesItem';
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
        $object = new \Github\Model\EventPayloadPagesItem();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\EventPayloadPagesItemConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('page_name', $data)) {
            $object->setPageName($data['page_name']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('summary', $data) && $data['summary'] !== null) {
            $object->setSummary($data['summary']);
        }
        elseif (\array_key_exists('summary', $data) && $data['summary'] === null) {
            $object->setSummary(null);
        }
        if (\array_key_exists('action', $data)) {
            $object->setAction($data['action']);
        }
        if (\array_key_exists('sha', $data)) {
            $object->setSha($data['sha']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPageName()) {
            $data['page_name'] = $object->getPageName();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getSummary()) {
            $data['summary'] = $object->getSummary();
        }
        if (null !== $object->getAction()) {
            $data['action'] = $object->getAction();
        }
        if (null !== $object->getSha()) {
            $data['sha'] = $object->getSha();
        }
        if (null !== $object->getHtmlUrl()) {
            $data['html_url'] = $object->getHtmlUrl();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\EventPayloadPagesItemConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}