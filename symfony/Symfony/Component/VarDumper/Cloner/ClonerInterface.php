<?php namespace Symfony\Component\VarDumper\Cloner;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface ClonerInterface
{
    /**
     * Clones a PHP variable.
     *
     * @param mixed $var Any PHP variable.
     *
     * @return Data The cloned variable represented by a Data object.
     */
    public function cloneVar($var);
}
