<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ComplianceSearchResultDataBodySearchResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResult';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResult';
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
        $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('records', $data)) {
            $values = array();
            foreach ($data['records'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\ComplianceSearchResultDataBodySearchResultRecordsItem', 'json', $context);
            }
            $object->setRecords($values);
        }
        if (\array_key_exists('searchEngineVersion', $data)) {
            $object->setSearchEngineVersion($data['searchEngineVersion']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRecords()) {
            $values = array();
            foreach ($object->getRecords() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['records'] = $values;
        }
        if (null !== $object->getSearchEngineVersion()) {
            $data['searchEngineVersion'] = $object->getSearchEngineVersion();
        }
        return $data;
    }
}