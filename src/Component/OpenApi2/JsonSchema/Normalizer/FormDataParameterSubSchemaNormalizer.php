<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\Component\OpenApi2\JsonSchema\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\JsonSchema\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class FormDataParameterSubSchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\FormDataParameterSubSchema';
    }

    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \Jane\Component\OpenApi2\JsonSchema\Model\FormDataParameterSubSchema;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi2\JsonSchema\Model\FormDataParameterSubSchema();
        if (\array_key_exists('required', $data) && $data['required'] !== null) {
            $object->setRequired($data['required']);
            unset($data['required']);
        } elseif (\array_key_exists('required', $data) && $data['required'] === null) {
            $object->setRequired(null);
        }
        if (\array_key_exists('in', $data) && $data['in'] !== null) {
            $object->setIn($data['in']);
            unset($data['in']);
        } elseif (\array_key_exists('in', $data) && $data['in'] === null) {
            $object->setIn(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('allowEmptyValue', $data) && $data['allowEmptyValue'] !== null) {
            $object->setAllowEmptyValue($data['allowEmptyValue']);
            unset($data['allowEmptyValue']);
        } elseif (\array_key_exists('allowEmptyValue', $data) && $data['allowEmptyValue'] === null) {
            $object->setAllowEmptyValue(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $object->setFormat($data['format']);
            unset($data['format']);
        } elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->setFormat(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $object->setItems($this->denormalizer->denormalize($data['items'], 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\PrimitivesItems', 'json', $context));
            unset($data['items']);
        } elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('collectionFormat', $data) && $data['collectionFormat'] !== null) {
            $object->setCollectionFormat($data['collectionFormat']);
            unset($data['collectionFormat']);
        } elseif (\array_key_exists('collectionFormat', $data) && $data['collectionFormat'] === null) {
            $object->setCollectionFormat(null);
        }
        if (\array_key_exists('default', $data) && $data['default'] !== null) {
            $object->setDefault($data['default']);
            unset($data['default']);
        } elseif (\array_key_exists('default', $data) && $data['default'] === null) {
            $object->setDefault(null);
        }
        if (\array_key_exists('maximum', $data) && $data['maximum'] !== null) {
            $object->setMaximum($data['maximum']);
            unset($data['maximum']);
        } elseif (\array_key_exists('maximum', $data) && $data['maximum'] === null) {
            $object->setMaximum(null);
        }
        if (\array_key_exists('exclusiveMaximum', $data) && $data['exclusiveMaximum'] !== null) {
            $object->setExclusiveMaximum($data['exclusiveMaximum']);
            unset($data['exclusiveMaximum']);
        } elseif (\array_key_exists('exclusiveMaximum', $data) && $data['exclusiveMaximum'] === null) {
            $object->setExclusiveMaximum(null);
        }
        if (\array_key_exists('minimum', $data) && $data['minimum'] !== null) {
            $object->setMinimum($data['minimum']);
            unset($data['minimum']);
        } elseif (\array_key_exists('minimum', $data) && $data['minimum'] === null) {
            $object->setMinimum(null);
        }
        if (\array_key_exists('exclusiveMinimum', $data) && $data['exclusiveMinimum'] !== null) {
            $object->setExclusiveMinimum($data['exclusiveMinimum']);
            unset($data['exclusiveMinimum']);
        } elseif (\array_key_exists('exclusiveMinimum', $data) && $data['exclusiveMinimum'] === null) {
            $object->setExclusiveMinimum(null);
        }
        if (\array_key_exists('maxLength', $data) && $data['maxLength'] !== null) {
            $object->setMaxLength($data['maxLength']);
            unset($data['maxLength']);
        } elseif (\array_key_exists('maxLength', $data) && $data['maxLength'] === null) {
            $object->setMaxLength(null);
        }
        if (\array_key_exists('minLength', $data) && $data['minLength'] !== null) {
            $object->setMinLength($data['minLength']);
            unset($data['minLength']);
        } elseif (\array_key_exists('minLength', $data) && $data['minLength'] === null) {
            $object->setMinLength(null);
        }
        if (\array_key_exists('pattern', $data) && $data['pattern'] !== null) {
            $object->setPattern($data['pattern']);
            unset($data['pattern']);
        } elseif (\array_key_exists('pattern', $data) && $data['pattern'] === null) {
            $object->setPattern(null);
        }
        if (\array_key_exists('maxItems', $data) && $data['maxItems'] !== null) {
            $object->setMaxItems($data['maxItems']);
            unset($data['maxItems']);
        } elseif (\array_key_exists('maxItems', $data) && $data['maxItems'] === null) {
            $object->setMaxItems(null);
        }
        if (\array_key_exists('minItems', $data) && $data['minItems'] !== null) {
            $object->setMinItems($data['minItems']);
            unset($data['minItems']);
        } elseif (\array_key_exists('minItems', $data) && $data['minItems'] === null) {
            $object->setMinItems(null);
        }
        if (\array_key_exists('uniqueItems', $data) && $data['uniqueItems'] !== null) {
            $object->setUniqueItems($data['uniqueItems']);
            unset($data['uniqueItems']);
        } elseif (\array_key_exists('uniqueItems', $data) && $data['uniqueItems'] === null) {
            $object->setUniqueItems(null);
        }
        if (\array_key_exists('enum', $data) && $data['enum'] !== null) {
            $values = [];
            foreach ($data['enum'] as $value) {
                $values[] = $value;
            }
            $object->setEnum($values);
            unset($data['enum']);
        } elseif (\array_key_exists('enum', $data) && $data['enum'] === null) {
            $object->setEnum(null);
        }
        if (\array_key_exists('multipleOf', $data) && $data['multipleOf'] !== null) {
            $object->setMultipleOf($data['multipleOf']);
            unset($data['multipleOf']);
        } elseif (\array_key_exists('multipleOf', $data) && $data['multipleOf'] === null) {
            $object->setMultipleOf(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/^x-/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getRequired()) {
            $data['required'] = $object->getRequired();
        } else {
            $data['required'] = null;
        }
        if (null !== $object->getIn()) {
            $data['in'] = $object->getIn();
        } else {
            $data['in'] = null;
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        } else {
            $data['description'] = null;
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        } else {
            $data['name'] = null;
        }
        if (null !== $object->getAllowEmptyValue()) {
            $data['allowEmptyValue'] = $object->getAllowEmptyValue();
        } else {
            $data['allowEmptyValue'] = null;
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        } else {
            $data['type'] = null;
        }
        if (null !== $object->getFormat()) {
            $data['format'] = $object->getFormat();
        } else {
            $data['format'] = null;
        }
        if (null !== $object->getItems()) {
            $data['items'] = $this->normalizer->normalize($object->getItems(), 'json', $context);
        } else {
            $data['items'] = null;
        }
        if (null !== $object->getCollectionFormat()) {
            $data['collectionFormat'] = $object->getCollectionFormat();
        } else {
            $data['collectionFormat'] = null;
        }
        if (null !== $object->getDefault()) {
            $data['default'] = $object->getDefault();
        } else {
            $data['default'] = null;
        }
        if (null !== $object->getMaximum()) {
            $data['maximum'] = $object->getMaximum();
        } else {
            $data['maximum'] = null;
        }
        if (null !== $object->getExclusiveMaximum()) {
            $data['exclusiveMaximum'] = $object->getExclusiveMaximum();
        } else {
            $data['exclusiveMaximum'] = null;
        }
        if (null !== $object->getMinimum()) {
            $data['minimum'] = $object->getMinimum();
        } else {
            $data['minimum'] = null;
        }
        if (null !== $object->getExclusiveMinimum()) {
            $data['exclusiveMinimum'] = $object->getExclusiveMinimum();
        } else {
            $data['exclusiveMinimum'] = null;
        }
        if (null !== $object->getMaxLength()) {
            $data['maxLength'] = $object->getMaxLength();
        } else {
            $data['maxLength'] = null;
        }
        if (null !== $object->getMinLength()) {
            $data['minLength'] = $object->getMinLength();
        } else {
            $data['minLength'] = null;
        }
        if (null !== $object->getPattern()) {
            $data['pattern'] = $object->getPattern();
        } else {
            $data['pattern'] = null;
        }
        if (null !== $object->getMaxItems()) {
            $data['maxItems'] = $object->getMaxItems();
        } else {
            $data['maxItems'] = null;
        }
        if (null !== $object->getMinItems()) {
            $data['minItems'] = $object->getMinItems();
        } else {
            $data['minItems'] = null;
        }
        if (null !== $object->getUniqueItems()) {
            $data['uniqueItems'] = $object->getUniqueItems();
        } else {
            $data['uniqueItems'] = null;
        }
        if (null !== $object->getEnum()) {
            $values = [];
            foreach ($object->getEnum() as $value) {
                $values[] = $value;
            }
            $data['enum'] = $values;
        } else {
            $data['enum'] = null;
        }
        if (null !== $object->getMultipleOf()) {
            $data['multipleOf'] = $object->getMultipleOf();
        } else {
            $data['multipleOf'] = null;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/^x-/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }
}
