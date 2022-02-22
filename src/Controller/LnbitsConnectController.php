<?php

namespace Drupal\lnbits_connect\Controller;


use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\OpenModalDialogCommand;
use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for lnbits connect routes.
 */
class LnbitsConnectController extends ControllerBase {

  /**
   * Builds the response.
   */
public function modal() {
    $options = [
      'dialogClass' => 'popup-dialog-class',
      'width' => '50%',
    ];
    $response = new AjaxResponse();
    $response->addCommand(new OpenModalDialogCommand(t('Bitcoin Lightning Invoice'), t('Here we need to see the invoice as hash and QR Code. Maybe the amount need to be set therefore?<br><div id="balanceSat">0</div>
   <div id="balanceEur">0</div>'), $options));
 
  
      
    return $response;
  }

}
