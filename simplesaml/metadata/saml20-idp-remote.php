<?php
/**
 * SAML 2.0 remote IdP metadata for simpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote 
 */

$metadata['http://idp.example.dev/simplesaml/saml2/idp/metadata.php'] = array (
  'metadata-set' => 'saml20-idp-remote',
  'entityid' => 'http://idp.example.dev/simplesaml/saml2/idp/metadata.php',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://idp.example.dev/simplesaml/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://idp.example.dev/simplesaml/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'certData' => 'MIIDfDCCAmSgAwIBAgIFAI9JgIwwDQYJKoZIhvcNAQELBQAwWDEYMBYGA1UEAwwPaWRwLmV4YW1wbGUuZGV2MQswCQYDVQQIDAJ2bjELMAkGA1UEBhMCVk4xDDAKBgNVBAoMA0lkUDEUMBIGA1UEBwwLaG8gY2hpIG1pbmgwHhcNMTUwOTI1MTAzMDM3WhcNMTYwOTI0MTAzMDM3WjBYMRgwFgYDVQQDDA9pZHAuZXhhbXBsZS5kZXYxCzAJBgNVBAgMAnZuMQswCQYDVQQGEwJWTjEMMAoGA1UECgwDSWRQMRQwEgYDVQQHDAtobyBjaGkgbWluaDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBALYcf6XR3+NuDIZYc8pLLGDemG/uR/Q8+vJkHPOef9V9OyuJeZA6NuJg0XXPa/fV4kdXEevhA1FVqh/JHkgQE/ibdqpP0D++/3l337My/SQsqIp7TupM6SnvKG6XWqkWC0CL/fzDIQCfJvIsk3KSjWu5uNVkBDUD36vD2cfITFJuHPVHtGSL0KA8Fto1mN1GFrRFZC1N/SelFaJkJsPiji6aOvg/mQdXKXrKV8K7x+HelGLl25GxPlatrA4YEPkKcdmShYXA/YQopcoqVjBvSZqpw2tjVzWQEU2dKMtcWmHWCHnDJGlcvzEylEu5fmE5d0iocJPvToVCTzttb9BrQWMCAwEAAaNNMEswHQYDVR0OBBYEFFd/6dCAw10AnhYyKJHuAEOZKSYrMB8GA1UdIwQYMBaAFFd/6dCAw10AnhYyKJHuAEOZKSYrMAkGA1UdEwQCMAAwDQYJKoZIhvcNAQELBQADggEBAB+oeeQiIQtm7j+fZbCs6nE7AcraQNGUILrhMRa2EIC8egzI9vIX7mGNijaOR2al0SF52l7kF+VMBHl+/EGP7GB0q4yQ2Y7DjKt0WL3AjhrV7BiX9GBvOZD5y0m3tI2OzAtjaOiEGbcPIQHzcVKqzXvGixBj3LEPH1TCgU2XJcYVQAPbr7mYpFQUBweAPu9V0ssf32P6VzXltW4svsQgE67JXl6TGH4/NQfIjhTeAOORqpvfqeLvEzWR6oMIkBbcLbAbPVyDsCviRUAZfOEI4DSI/d98Do2h9dCOUQj6MnR0hfdbZZ5TT07JtUM+Lw/DHeUc//uGIm6k5TVlvQfHNlU=',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
);