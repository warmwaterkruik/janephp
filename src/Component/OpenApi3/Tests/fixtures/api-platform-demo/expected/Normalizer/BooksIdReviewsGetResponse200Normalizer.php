<?php

namespace ApiPlatform\Demo\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ApiPlatform\Demo\Runtime\Normalizer\CheckArray;
use ApiPlatform\Demo\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BooksIdReviewsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'ApiPlatform\\Demo\\Model\\BooksIdReviewsGetResponse200';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\BooksIdReviewsGetResponse200';
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
        $object = new \ApiPlatform\Demo\Model\BooksIdReviewsGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('hydra:member', $data)) {
            $values = array();
            foreach ($data['hydra:member'] as $value) {
                $values[] = $value;
            }
            $object->setHydraMember($values);
        }
        if (\array_key_exists('hydra:totalItems', $data)) {
            $object->setHydraTotalItems($data['hydra:totalItems']);
        }
        if (\array_key_exists('hydra:view', $data)) {
            $object->setHydraView($this->denormalizer->denormalize($data['hydra:view'], 'ApiPlatform\\Demo\\Model\\BooksIdReviewsGetResponse200HydraView', 'json', $context));
        }
        if (\array_key_exists('hydra:search', $data)) {
            $object->setHydraSearch($this->denormalizer->denormalize($data['hydra:search'], 'ApiPlatform\\Demo\\Model\\BooksIdReviewsGetResponse200HydraSearch', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getHydraMember() as $value) {
            $values[] = $value;
        }
        $data['hydra:member'] = $values;
        if (null !== $object->getHydraTotalItems()) {
            $data['hydra:totalItems'] = $object->getHydraTotalItems();
        }
        if (null !== $object->getHydraView()) {
            $data['hydra:view'] = $this->normalizer->normalize($object->getHydraView(), 'json', $context);
        }
        if (null !== $object->getHydraSearch()) {
            $data['hydra:search'] = $this->normalizer->normalize($object->getHydraSearch(), 'json', $context);
        }
        return $data;
    }
}