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
class GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem';
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
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem();
        if (\array_key_exists('ccjAmount', $data) && \is_int($data['ccjAmount'])) {
            $data['ccjAmount'] = (double) $data['ccjAmount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ccjDate', $data)) {
            $object->setCcjDate($data['ccjDate']);
        }
        if (\array_key_exists('court', $data)) {
            $object->setCourt($data['court']);
        }
        if (\array_key_exists('ccjAmount', $data)) {
            $object->setCcjAmount($data['ccjAmount']);
        }
        if (\array_key_exists('caseNumber', $data)) {
            $object->setCaseNumber($data['caseNumber']);
        }
        if (\array_key_exists('ccjStatus', $data)) {
            $object->setCcjStatus($data['ccjStatus']);
        }
        if (\array_key_exists('incomingRecordDetails', $data)) {
            $object->setIncomingRecordDetails($data['incomingRecordDetails']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCcjDate()) {
            $data['ccjDate'] = $object->getCcjDate();
        }
        if (null !== $object->getCourt()) {
            $data['court'] = $object->getCourt();
        }
        if (null !== $object->getCcjAmount()) {
            $data['ccjAmount'] = $object->getCcjAmount();
        }
        if (null !== $object->getCaseNumber()) {
            $data['caseNumber'] = $object->getCaseNumber();
        }
        if (null !== $object->getCcjStatus()) {
            $data['ccjStatus'] = $object->getCcjStatus();
        }
        if (null !== $object->getIncomingRecordDetails()) {
            $data['incomingRecordDetails'] = $object->getIncomingRecordDetails();
        }
        return $data;
    }
}