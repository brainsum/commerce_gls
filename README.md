[![Build Status](https://travis-ci.org/brainsum/commerce_gls.svg?branch=master)](https://travis-ci.org/brainsum/commerce_gls)

Commerce GLS HU Shipping for Commerce 2 (Drupal 8)


CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Installation
 * Configuration
 * Maintainers
 * Supporting organisation


INTRODUCTION
------------

The Commerce GLS HU Shipping module provides GLS shipping points’ functionality
for Drupal 8 Commerce sites with locations in Hungary.

This module creates a new shipment type and a new field to the Order: GLS Point
Destination which stores selected GLS Point address.
The module uses the GLS Hungary API which is based on Google map including every available GLS
point.

After the proper configuration you can choose the GLS Point option as a form
of delivery and select a GLS Point from the map where you want to pick up the
ordered products in the checkout process.
By changing the GLS API’s database you can customise the module for your own
country.

The module is available for Drupal 7 Commerce as well:
https://www.drupal.org/project/commerce_gls_hu.

REQUIREMENTS
------------

This module requires the following modules:

 * Drupal Commerce (https://www.drupal.org/project/commerce)
 * Commerce Shipping (https://www.drupal.org/project/commerce_shipping)


INSTALLATION
------------

Install this module in the usual way.
See: https://www.drupal.org/documentation/install/modules-themes/modules-8 for
further information.
Also see the module’s previous version for Drupal 7:
https://www.drupal.org/project/commerce_gls_hu.

CONFIGURATION
-------------

- On the admin/config/commerce_gls_hu/glshuadmin page need to be set the GLS map
API key.
- On the admin/commerce/config/shipping-methods page create a new
shipping-method: ex.: GLS Point.


MAINTAINERS
-----------

Current maintainer:
 * József Dudás (dj1999) - https://www.drupal.org/u/dj1999
 * Kósa Ilma - https://www.drupal.org/u/kosa-ilma


SUPPORTING ORGANISATION
-----------------------

Brainsum - www.brainsum.com
