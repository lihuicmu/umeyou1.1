ALTER TABLE `ac_customers`
ADD COLUMN `available_point` int(11) NOT NULL DEFAULT '0' AFTER `date_modified`,
ADD COLUMN `point_startdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER `available_point`,
ADD COLUMN `point_enddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER `point_startdate`;


ALTER TABLE `ac_products`
ADD COLUMN `point` int(3) NOT NULL DEFAULT '0' AFTER `price`;


ALTER TABLE `ac_orders`
ADD COLUMN `order_point` int(11) NOT NULL  DEFAULT '0' AFTER `total`;


ALTER TABLE `ac_order_products`
ADD COLUMN `total_point` int(11) NOT NULL DEFAULT '0' AFTER `total`;


ALTER TABLE `ac_order_totals`
ADD COLUMN `final_point` int(11) NOT NULL DEFAULT '0' AFTER `value`;
