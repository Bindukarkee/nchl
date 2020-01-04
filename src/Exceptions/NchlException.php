<?php

namespace YubarajShrestha\NCHL\Exceptions;

use Exception;
use YubarajShrestha\NCHL\Nchl;

class NchlException extends Exception
{
    /**
     * @var Nchl $subject
     */
    public $subject;

    /**
     * @param Nchl $subject
     * @param $field
     * @return NchlException
     */
    public static function missingField(Nchl $subject, $field) {
        return (new static("Field `{$field}` is required"))->withSubject($subject);
    }

    /**
     * @param Nchl $subject
     * @param $field
     * @return NchlException
     */
    public static function certificateError(Nchl $subject, $field) {
        return (new static($field))->withSubject($subject);
    }

    /**
     * @param Nchl $subject
     * @param $field
     * @return NchlException
     */
    public static function propertyMissing(Nchl $subject, $field) {
        return (new static($field))->withSubject($subject);
    }

    /**
     * @return NchlException
     */
    protected function withSubject() : NchlException {
        $this->subject;
        return $this;
    }
}