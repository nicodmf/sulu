<?php

/*
 * This file is part of the Sulu.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Component\Content\Compat\Structure;

class SnippetBridge extends StructureBridge
{
    /**
     * @var boolean
     */
    private $isShadow;

    /**
     * @var string
     */
    private $shadowBaseLanguage;

    /**
     * {@inheritdoc}
     */
    public function getIsShadow()
    {
        return $this->isShadow;
    }

    /**
     * @param boolean $isShadow
     */
    public function setIsShadow($isShadow)
    {
        $this->isShadow = $isShadow;
    }

    /**
     * {@inheritdoc}
     */
    public function getShadowBaseLanguage()
    {
        return $this->shadowBaseLanguage;
    }

    /**
     * @param string $shadowBaseLanguage
     */
    public function setShadowBaseLanguage($shadowBaseLanguage)
    {
        $this->shadowBaseLanguage = $shadowBaseLanguage;
    }
}
