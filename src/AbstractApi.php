<?php

namespace Upanupstudios\ConstantContact\Php\Client;

/**
 * The AbstractApi class.
 */
abstract class AbstractApi {

  /**
   * The ConstantContact object.
   *
   * @var ConstantContact
   */
  protected $constantContact;

  /**
   * {@inheritdoc}
   */
  public function __construct(ConstantContact $constantContact) {
    $this->constantContact = $constantContact;
  }

}
