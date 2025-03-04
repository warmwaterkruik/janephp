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
class BankMatchValidateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\BankMatchValidate';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\BankMatchValidate';
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
        $object = new \CreditSafe\API\Model\BankMatchValidate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('accountNumber', $data)) {
            $object->setAccountNumber($data['accountNumber']);
        }
        if (\array_key_exists('iban', $data)) {
            $object->setIban($data['iban']);
        }
        if (\array_key_exists('ibanResult', $data)) {
            $object->setIbanResult($data['ibanResult']);
        }
        if (\array_key_exists('ibanText', $data)) {
            $object->setIbanText($data['ibanText']);
        }
        if (\array_key_exists('logDate', $data)) {
            $object->setLogDate($data['logDate']);
        }
        if (\array_key_exists('safeNumber', $data)) {
            $object->setSafeNumber($data['safeNumber']);
        }
        if (\array_key_exists('scanResult', $data)) {
            $object->setScanResult($data['scanResult']);
        }
        if (\array_key_exists('scanText', $data)) {
            $object->setScanText($data['scanText']);
        }
        if (\array_key_exists('sortCode', $data)) {
            $object->setSortCode($data['sortCode']);
        }
        if (\array_key_exists('statusResult', $data)) {
            $object->setStatusResult($data['statusResult']);
        }
        if (\array_key_exists('statusText', $data)) {
            $object->setStatusText($data['statusText']);
        }
        if (\array_key_exists('vatResult', $data)) {
            $object->setVatResult($data['vatResult']);
        }
        if (\array_key_exists('vatText', $data)) {
            $object->setVatText($data['vatText']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAccountNumber()) {
            $data['accountNumber'] = $object->getAccountNumber();
        }
        if (null !== $object->getIban()) {
            $data['iban'] = $object->getIban();
        }
        if (null !== $object->getIbanResult()) {
            $data['ibanResult'] = $object->getIbanResult();
        }
        if (null !== $object->getIbanText()) {
            $data['ibanText'] = $object->getIbanText();
        }
        if (null !== $object->getLogDate()) {
            $data['logDate'] = $object->getLogDate();
        }
        if (null !== $object->getSafeNumber()) {
            $data['safeNumber'] = $object->getSafeNumber();
        }
        if (null !== $object->getScanResult()) {
            $data['scanResult'] = $object->getScanResult();
        }
        if (null !== $object->getScanText()) {
            $data['scanText'] = $object->getScanText();
        }
        if (null !== $object->getSortCode()) {
            $data['sortCode'] = $object->getSortCode();
        }
        if (null !== $object->getStatusResult()) {
            $data['statusResult'] = $object->getStatusResult();
        }
        if (null !== $object->getStatusText()) {
            $data['statusText'] = $object->getStatusText();
        }
        if (null !== $object->getVatResult()) {
            $data['vatResult'] = $object->getVatResult();
        }
        if (null !== $object->getVatText()) {
            $data['vatText'] = $object->getVatText();
        }
        return $data;
    }
}