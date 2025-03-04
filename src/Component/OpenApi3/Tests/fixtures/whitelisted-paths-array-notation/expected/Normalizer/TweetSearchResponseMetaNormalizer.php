<?php

namespace Jane\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TweetSearchResponseMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetSearchResponseMeta';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetSearchResponseMeta';
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
        $object = new \Jane\OpenApi3\Tests\Expected\Model\TweetSearchResponseMeta();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('newest_id', $data)) {
            $object->setNewestId($data['newest_id']);
        }
        if (\array_key_exists('oldest_id', $data)) {
            $object->setOldestId($data['oldest_id']);
        }
        if (\array_key_exists('next_token', $data)) {
            $object->setNextToken($data['next_token']);
        }
        if (\array_key_exists('result_count', $data)) {
            $object->setResultCount($data['result_count']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNewestId()) {
            $data['newest_id'] = $object->getNewestId();
        }
        if (null !== $object->getOldestId()) {
            $data['oldest_id'] = $object->getOldestId();
        }
        if (null !== $object->getNextToken()) {
            $data['next_token'] = $object->getNextToken();
        }
        if (null !== $object->getResultCount()) {
            $data['result_count'] = $object->getResultCount();
        }
        return $data;
    }
}