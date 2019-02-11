<?php
/*
 Plugin Name: Nexcess BigCommerce OAuth Connector
 */

if (empty(get_option('bigcommerce_client_secret', ''))) {
  add_filter('bigcommerce/oauth_connector/url', function () {
    return 'https://us-central1-orbital-bee-231121.cloudfunctions.net/nex-bc-auth-connector/v1';
  });
}
