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
class GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem';
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
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('statementDate', $data)) {
            $object->setStatementDate($data['statementDate']);
        }
        if (\array_key_exists('registrationNumber', $data)) {
            $object->setRegistrationNumber($data['registrationNumber']);
        }
        if (\array_key_exists('companyName', $data)) {
            $object->setCompanyName($data['companyName']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($this->denormalizer->denormalize($data['amount'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemAmount', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getStatementDate()) {
            $data['statementDate'] = $object->getStatementDate();
        }
        if (null !== $object->getRegistrationNumber()) {
            $data['registrationNumber'] = $object->getRegistrationNumber();
        }
        if (null !== $object->getCompanyName()) {
            $data['companyName'] = $object->getCompanyName();
        }
        if (null !== $object->getAmount()) {
            $data['amount'] = $this->normalizer->normalize($object->getAmount(), 'json', $context);
        }
        return $data;
    }
}