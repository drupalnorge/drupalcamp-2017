<?php

namespace DrupalNorge\Drupalcamp\Tests\Context;

use Drupal\DrupalExtension\Context\DrupalContext;

class FeatureContext extends DrupalContext {

  /**
   * @Then append :arg1 to the URL
   */
  public function appendToTheUrl($arg1)
  {
    $url = $this->getSession()->getCurrentUrl();
    $this->getSession()->visit($this->locatePath($url . $arg1));
  }

}
