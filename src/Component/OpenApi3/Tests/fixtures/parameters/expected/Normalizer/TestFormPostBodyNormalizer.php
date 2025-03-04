<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TestFormPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TestFormPostBody';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TestFormPostBody';
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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\TestFormPostBody();
        if (\array_key_exists('testFloat', $data) && \is_int($data['testFloat'])) {
            $data['testFloat'] = (double) $data['testFloat'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('testString', $data)) {
            $object->setTestString($data['testString']);
        }
        if (\array_key_exists('testInteger', $data)) {
            $object->setTestInteger($data['testInteger']);
        }
        if (\array_key_exists('testFloat', $data)) {
            $object->setTestFloat($data['testFloat']);
        }
        if (\array_key_exists('testArray', $data)) {
            $values = array();
            foreach ($data['testArray'] as $value) {
                $values[] = $value;
            }
            $object->setTestArray($values);
        }
        if (\array_key_exists('testRequired', $data)) {
            $object->setTestRequired($data['testRequired']);
        }
        if (\array_key_exists('testDefault', $data)) {
            $object->setTestDefault($data['testDefault']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTestString()) {
            $data['testString'] = $object->getTestString();
        }
        if (null !== $object->getTestInteger()) {
            $data['testInteger'] = $object->getTestInteger();
        }
        if (null !== $object->getTestFloat()) {
            $data['testFloat'] = $object->getTestFloat();
        }
        if (null !== $object->getTestArray()) {
            $values = array();
            foreach ($object->getTestArray() as $value) {
                $values[] = $value;
            }
            $data['testArray'] = $values;
        }
        $data['testRequired'] = $object->getTestRequired();
        if (null !== $object->getTestDefault()) {
            $data['testDefault'] = $object->getTestDefault();
        }
        return $data;
    }
}