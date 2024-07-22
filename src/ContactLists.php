<?php

namespace Upanupstudios\ConstantContact\Php\Client;

/**
 * The ContactLists class.
 */
class ContactLists extends AbstractApi {

  /**
   * Retrieve a paginated list of groups.
   * https://developer.constantcontact.com/api_guide/lists_get_all.html
   */
  public function getAll($params = []) {
    // NOTE: limit - The amount of results per page (max: 1000) Default: 1000.
    $url = $this->constantContact->getApiUrl() . '/contact_lists';

    if (!empty($params)) {
      $url .= '?' . http_build_query($params);
    }

    $response = $this->constantContact->request('GET', $url);

    return $response;
  }

  /**
   * Retrieve a specific group by title.
   */
  public function findByName($name) {
    $contact_lists = $this->getAll();

    if (!empty($contact_lists['lists'])) {
      foreach ($contact_lists['lists'] as $contact_list) {
        if ($contact_list['name'] == $name) {
          return $contact_list;
        }
      }
    }

    return FALSE;
  }

  /**
   * Add a group.
   */
  public function add(array $data) {
    $url = $this->constantContact->getApiUrl() . '/contact_lists';

    $options['body'] = json_encode($data);

    $response = $this->constantContact->request('POST', $url, $options);

    return $response;
  }

}
