<?php
/*
 Plugin Name: Nexcess BigCommerce OAuth Connector
 */

add_filter('bigcommerce/oauth_connector/url', function() {
  return 'https://us-central1-orbital-bee-231121.cloudfunctions.net/nex-bc-auth-connector/v1';
});
