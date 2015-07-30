<?php

namespace Virgil\Crypto;

class VirgilStreamSigner {
    public $_cPtr=null;
    protected $_pData=array();

    function __set($var,$value) {
        if ($var === 'thisown') return swig_virgil_php_alter_newobject($this->_cPtr,$value);
        $this->_pData[$var] = $value;
    }

    function __get($var) {
        if ($var === 'thisown') return swig_virgil_php_get_newobject($this->_cPtr);
        return $this->_pData[$var];
    }

    function __isset($var) {
        if ($var === 'thisown') return true;
        return array_key_exists($var, $this->_pData);
    }

    function __construct($hash=null) {
        if (is_resource($hash) && get_resource_type($hash) === '_p_virgil__crypto__VirgilStreamSigner') {
            $this->_cPtr=$hash;
            return;
        }
        switch (func_num_args()) {
            case 0: $this->_cPtr=new_VirgilStreamSigner(); break;
            default: $this->_cPtr=new_VirgilStreamSigner($hash);
        }
    }

    function sign($source,$privateKey,$privateKeyPassword=null) {
        switch (func_num_args()) {
            case 2: $r=VirgilStreamSigner_sign($this->_cPtr,$source,$privateKey); break;
            default: $r=VirgilStreamSigner_sign($this->_cPtr,$source,$privateKey,$privateKeyPassword);
        }
        return $r;
    }

    function verify($source,$sign,$publicKey) {
        return VirgilStreamSigner_verify($this->_cPtr,$source,$sign,$publicKey);
    }
}