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
class GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating';
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
        $object = new \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('commonValue', $data)) {
            $object->setCommonValue($data['commonValue']);
        }
        if (\array_key_exists('commonDescription', $data)) {
            $object->setCommonDescription($data['commonDescription']);
        }
        if (\array_key_exists('creditLimit', $data)) {
            $object->setCreditLimit($this->denormalizer->denormalize($data['creditLimit'], 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingCreditLimit', 'json', $context));
        }
        if (\array_key_exists('providerValue', $data)) {
            $object->setProviderValue($this->denormalizer->denormalize($data['providerValue'], 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingProviderValue', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCommonValue()) {
            $data['commonValue'] = $object->getCommonValue();
        }
        if (null !== $object->getCommonDescription()) {
            $data['commonDescription'] = $object->getCommonDescription();
        }
        if (null !== $object->getCreditLimit()) {
            $data['creditLimit'] = $this->normalizer->normalize($object->getCreditLimit(), 'json', $context);
        }
        if (null !== $object->getProviderValue()) {
            $data['providerValue'] = $this->normalizer->normalize($object->getProviderValue(), 'json', $context);
        }
        return $data;
    }
}