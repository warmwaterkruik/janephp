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
class TweetWithheldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetWithheld';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetWithheld';
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
        $object = new \Jane\OpenApi3\Tests\Expected\Model\TweetWithheld();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('copyright', $data)) {
            $object->setCopyright($data['copyright']);
        }
        if (\array_key_exists('country_codes', $data)) {
            $values = array();
            foreach ($data['country_codes'] as $value) {
                $values[] = $value;
            }
            $object->setCountryCodes($values);
        }
        if (\array_key_exists('scope', $data)) {
            $object->setScope($data['scope']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['copyright'] = $object->getCopyright();
        $values = array();
        foreach ($object->getCountryCodes() as $value) {
            $values[] = $value;
        }
        $data['country_codes'] = $values;
        if (null !== $object->getScope()) {
            $data['scope'] = $object->getScope();
        }
        return $data;
    }
}