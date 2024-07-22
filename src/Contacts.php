<?php

namespace Upanupstudios\ConstantContact\Php\Client;

/**
 * The Contacts class.
 */
class Contacts extends AbstractApi {
  /**
   * Create or Update contacts.
   * Only use this method when a contact gives you their explicit permission to send them emails.
   * https://developer.constantcontact.com/api_guide/contacts_create_or_update.html
   */
  public function signup(array $data)
  {
    $options['body'] = json_encode($data);

    $url = $this->constantContact->getApiUrl() . '/contacts/sign_up_form';

    $response = $this->constantContact->request('POST', $url, $options);

    return $response;
  }

}
