<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ReleaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\Release';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\Release';
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
        $object = new \Github\Model\Release();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReleaseConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('assets_url', $data)) {
            $object->setAssetsUrl($data['assets_url']);
        }
        if (\array_key_exists('upload_url', $data)) {
            $object->setUploadUrl($data['upload_url']);
        }
        if (\array_key_exists('tarball_url', $data) && $data['tarball_url'] !== null) {
            $object->setTarballUrl($data['tarball_url']);
        }
        elseif (\array_key_exists('tarball_url', $data) && $data['tarball_url'] === null) {
            $object->setTarballUrl(null);
        }
        if (\array_key_exists('zipball_url', $data) && $data['zipball_url'] !== null) {
            $object->setZipballUrl($data['zipball_url']);
        }
        elseif (\array_key_exists('zipball_url', $data) && $data['zipball_url'] === null) {
            $object->setZipballUrl(null);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('tag_name', $data)) {
            $object->setTagName($data['tag_name']);
        }
        if (\array_key_exists('target_commitish', $data)) {
            $object->setTargetCommitish($data['target_commitish']);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('body', $data) && $data['body'] !== null) {
            $object->setBody($data['body']);
        }
        elseif (\array_key_exists('body', $data) && $data['body'] === null) {
            $object->setBody(null);
        }
        if (\array_key_exists('draft', $data)) {
            $object->setDraft($data['draft']);
        }
        if (\array_key_exists('prerelease', $data)) {
            $object->setPrerelease($data['prerelease']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('published_at', $data) && $data['published_at'] !== null) {
            $object->setPublishedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['published_at']));
        }
        elseif (\array_key_exists('published_at', $data) && $data['published_at'] === null) {
            $object->setPublishedAt(null);
        }
        if (\array_key_exists('author', $data) && $data['author'] !== null) {
            $object->setAuthor($this->denormalizer->denormalize($data['author'], 'Github\\Model\\SimpleUser', 'json', $context));
        }
        elseif (\array_key_exists('author', $data) && $data['author'] === null) {
            $object->setAuthor(null);
        }
        if (\array_key_exists('assets', $data)) {
            $values = array();
            foreach ($data['assets'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\ReleaseAsset', 'json', $context);
            }
            $object->setAssets($values);
        }
        if (\array_key_exists('body_html', $data)) {
            $object->setBodyHtml($data['body_html']);
        }
        if (\array_key_exists('body_text', $data)) {
            $object->setBodyText($data['body_text']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['url'] = $object->getUrl();
        $data['html_url'] = $object->getHtmlUrl();
        $data['assets_url'] = $object->getAssetsUrl();
        $data['upload_url'] = $object->getUploadUrl();
        $data['tarball_url'] = $object->getTarballUrl();
        $data['zipball_url'] = $object->getZipballUrl();
        $data['id'] = $object->getId();
        $data['node_id'] = $object->getNodeId();
        $data['tag_name'] = $object->getTagName();
        $data['target_commitish'] = $object->getTargetCommitish();
        $data['name'] = $object->getName();
        if (null !== $object->getBody()) {
            $data['body'] = $object->getBody();
        }
        $data['draft'] = $object->getDraft();
        $data['prerelease'] = $object->getPrerelease();
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        $data['published_at'] = $object->getPublishedAt()->format('Y-m-d\\TH:i:sP');
        $data['author'] = $this->normalizer->normalize($object->getAuthor(), 'json', $context);
        $values = array();
        foreach ($object->getAssets() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['assets'] = $values;
        if (null !== $object->getBodyHtml()) {
            $data['body_html'] = $object->getBodyHtml();
        }
        if (null !== $object->getBodyText()) {
            $data['body_text'] = $object->getBodyText();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReleaseConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}