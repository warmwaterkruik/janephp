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
class ContentDirectoryItemLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\ContentDirectoryItemLinks';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ContentDirectoryItemLinks';
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
        $object = new \Github\Model\ContentDirectoryItemLinks();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ContentDirectoryItemLinksConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('git', $data) && $data['git'] !== null) {
            $object->setGit($data['git']);
        }
        elseif (\array_key_exists('git', $data) && $data['git'] === null) {
            $object->setGit(null);
        }
        if (\array_key_exists('html', $data) && $data['html'] !== null) {
            $object->setHtml($data['html']);
        }
        elseif (\array_key_exists('html', $data) && $data['html'] === null) {
            $object->setHtml(null);
        }
        if (\array_key_exists('self', $data)) {
            $object->setSelf($data['self']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['git'] = $object->getGit();
        $data['html'] = $object->getHtml();
        $data['self'] = $object->getSelf();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ContentDirectoryItemLinksConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}