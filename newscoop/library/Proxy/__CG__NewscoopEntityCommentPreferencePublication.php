<?php

namespace Proxy\__CG__\Newscoop\Entity\Comment\Preference;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Publication extends \Newscoop\Entity\Comment\Preference\Publication implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setId(\Newscoop\Entity\Publication $p_id)
    {
        $this->__load();
        return parent::setId($p_id);
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setEnabled($p_enabled)
    {
        $this->__load();
        return parent::setEnabled($p_enabled);
    }

    public function getEnabled()
    {
        $this->__load();
        return parent::getEnabled();
    }

    public function setArticleDefaultEnabled($p_article_default_enabled)
    {
        $this->__load();
        return parent::setArticleDefaultEnabled($p_article_default_enabled);
    }

    public function getArticleDefaultEnabled()
    {
        $this->__load();
        return parent::getArticleDefaultEnabled();
    }

    public function setSubscribersModerated($p_subscribers_moderated)
    {
        $this->__load();
        return parent::setSubscribersModerated($p_subscribers_moderated);
    }

    public function getSubscribersModerated()
    {
        $this->__load();
        return parent::getSubscribersModerated();
    }

    public function setPublicModerated($p_public_moderated)
    {
        $this->__load();
        return parent::setPublicModerated($p_public_moderated);
    }

    public function getPublicModerated()
    {
        $this->__load();
        return parent::getPublicModerated();
    }

    public function setCaptchaEnabled($p_captcha_enabled)
    {
        $this->__load();
        return parent::setCaptchaEnabled($p_captcha_enabled);
    }

    public function getCaptchaEnabled()
    {
        $this->__load();
        return parent::getCaptchaEnabled();
    }

    public function setSpamBlockingEnabled($p_spam_blocking_enabled)
    {
        $this->__load();
        return parent::setSpamBlockingEnabled($p_spam_blocking_enabled);
    }

    public function getSpamBlockingEnabled()
    {
        $this->__load();
        return parent::getSpamBlockingEnabled();
    }

    public function setModeratorTo($p_moderator_to)
    {
        $this->__load();
        return parent::setModeratorTo($p_moderator_to);
    }

    public function getModeratorTo()
    {
        $this->__load();
        return parent::getModeratorTo();
    }

    public function setModeratorFrom($p_moderator_from)
    {
        $this->__load();
        return parent::setModeratorFrom($p_moderator_from);
    }

    public function getModeratorFrom()
    {
        $this->__load();
        return parent::getModeratorFrom();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'enabled', 'article_default_enabled', 'subscribers_moderated', 'public_moderated', 'public_enabled', 'captcha_enabled', 'spam_blocking_enabled', 'moderator_to', 'moderator_from', 'id');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}