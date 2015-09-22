<?php
/*------------------------------------------------------------------------------
  $Id$

  AbanteCart, Ideal OpenSource Ecommerce Solution
  http://www.AbanteCart.com

  Copyright ? 2011-2015 Belavier Commerce LLC

  This source file is subject to Open Software License (OSL 3.0)
  License details is bundled with this package in the file LICENSE.txt.
  It is also available at this URL:
  <http://www.opensource.org/licenses/OSL-3.0>

 UPGRADE NOTE:
   Do not edit or add to this file if you wish to upgrade AbanteCart to newer
   versions in the future. If you wish to customize AbanteCart for your
   needs please refer to http://www.AbanteCart.com for more information.
------------------------------------------------------------------------------*/
if (! defined ( 'DIR_CORE' )) {
    header ( 'Location: static_pages/' );
}
class ModelTotalTotalPoint extends Model {
    public function getTotal(&$total_data, &$total,&$total_point, &$taxes, &$cust_data) {
        if ($this->config->get('total_point_status')) {
            $this->load->language('total/total_point');
            $this->load->model('localisation/currency');

            $total_data[] = array(
                'id'	     => 'total_point',
                'title'      => $this->language->get('text_total_point'),
                'text'       => $this->currency->format(max(0,$total)),
                'value'      => max(0,$total),
                'sort_order' => 1000,
                'total_type' => $this->config->get('total_point_total_type')
            );

            $total_point += $this->cart->getSubTotalPoint();
        }
    }
}
?>