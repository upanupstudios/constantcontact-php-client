<?php

namespace Upanupstudios\ConstantContact\Php\Client;

/**
 * The EmailCampaignActivities class.
 */
class EmailCampaignActivities extends AbstractApi {
  /**
   * Update an email campaign activity.
   * https://developer.constantcontact.com/api_guide/email_campaign_activity_update.html
   */
  public function update(string $id, array $data) {
    $options['body'] = json_encode($data);

    $url = $this->constantContact->getApiUrl() . '/emails/activities/'.$id;

    $response = $this->constantContact->request('PUT', $url, $options);

    return $response;
  }

  /**
   * Schedule an email campaign activity
   * https://developer.constantcontact.com/api_guide/email_campaign_activity_update.html
   */
  public function schedule(string $id, array $data) {
    $options['body'] = json_encode($data);

    $url = $this->constantContact->getApiUrl() . '/emails/activities/'.$id.'/schedules';

    $response = $this->constantContact->request('POST', $url, $options);

    return $response;
  }

}
