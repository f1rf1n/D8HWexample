<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloController.
 */
namespace Drupal\km_pricing\Controller;
class KmPricingController {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hier komen de instellingen voor de prijsberekening!'),
    );
  }
}