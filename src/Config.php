<?php

namespace Upanupstudios\ConstantContact\Php\Client;

final class Config
{
  private $apiKey;

  private $secret;

  public function __construct(string $apiKey, string $secret)
  {
    $this->apiKey = $apiKey;
    $this->secret = $secret;
  }

  /**
   * Get API Key.
   */
  public function getApiKey(): string
  {
    return $this->apiKey;
  }

  /**
   * Get Secret.
   */
  public function getSecret(): string
  {
    return $this->secret;
  }
}
