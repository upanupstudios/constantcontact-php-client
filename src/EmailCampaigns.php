<?php

namespace Upanupstudios\ConstantContact\Php\Client;

/**
 * The EmailCampaigns class.
 */
class EmailCampaigns extends AbstractApi {
  /**
   * Create a new email campaign.
   * https://developer.constantcontact.com/api_guide/email_campaign_create.html
   */
  public function create(array $data)
  {
    $options['body'] = json_encode($data);

    $url = $this->constantContact->getApiUrl() . '/' . 'emails';

    $response = $this->constantContact->request('POST', $url, $options);

    return $response;
  }

  /**
   * Find an email campaign.
   */
  public function find(string $email_campaign_id)
  {
    $url = $this->constantContact->getApiUrl() . '/' . 'emails/'.$email_campaign_id;

    $response = $this->constantContact->request('GET', $url);

    return $response;
  }

}
