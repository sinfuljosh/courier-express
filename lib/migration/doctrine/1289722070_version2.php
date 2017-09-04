<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version2 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('payout', 'payout_payment_id_payment_id', array(
             'name' => 'payout_payment_id_payment_id',
             'local' => 'payment_id',
             'foreign' => 'id',
             'foreignTable' => 'payment',
             ));
        $this->createForeignKey('payout', 'payout_courier_id_courier_id', array(
             'name' => 'payout_courier_id_courier_id',
             'local' => 'courier_id',
             'foreign' => 'id',
             'foreignTable' => 'courier',
             ));
        $this->createForeignKey('zone_price', 'zone_price_service_level_id_service_level_id', array(
             'name' => 'zone_price_service_level_id_service_level_id',
             'local' => 'service_level_id',
             'foreign' => 'id',
             'foreignTable' => 'service_level',
             ));
        $this->createForeignKey('zone_price', 'zone_price_from_zone_id_zone_id', array(
             'name' => 'zone_price_from_zone_id_zone_id',
             'local' => 'from_zone_id',
             'foreign' => 'id',
             'foreignTable' => 'zone',
             ));
        $this->createForeignKey('zone_price', 'zone_price_to_zone_id_zone_id', array(
             'name' => 'zone_price_to_zone_id_zone_id',
             'local' => 'to_zone_id',
             'foreign' => 'id',
             'foreignTable' => 'zone',
             ));
        $this->createForeignKey('zone_set', 'zone_set_zone_id_zone_id', array(
             'name' => 'zone_set_zone_id_zone_id',
             'local' => 'zone_id',
             'foreign' => 'id',
             'foreignTable' => 'zone',
             ));
        $this->addIndex('payout', 'payout_payment_id', array(
             'fields' => 
             array(
              0 => 'payment_id',
             ),
             ));
        $this->addIndex('payout', 'payout_courier_id', array(
             'fields' => 
             array(
              0 => 'courier_id',
             ),
             ));
        $this->addIndex('zone_price', 'zone_price_service_level_id', array(
             'fields' => 
             array(
              0 => 'service_level_id',
             ),
             ));
        $this->addIndex('zone_price', 'zone_price_from_zone_id', array(
             'fields' => 
             array(
              0 => 'from_zone_id',
             ),
             ));
        $this->addIndex('zone_price', 'zone_price_to_zone_id', array(
             'fields' => 
             array(
              0 => 'to_zone_id',
             ),
             ));
        $this->addIndex('zone_set', 'zone_set_zone_id', array(
             'fields' => 
             array(
              0 => 'zone_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('payout', 'payout_payment_id_payment_id');
        $this->dropForeignKey('payout', 'payout_courier_id_courier_id');
        $this->dropForeignKey('zone_price', 'zone_price_service_level_id_service_level_id');
        $this->dropForeignKey('zone_price', 'zone_price_from_zone_id_zone_id');
        $this->dropForeignKey('zone_price', 'zone_price_to_zone_id_zone_id');
        $this->dropForeignKey('zone_set', 'zone_set_zone_id_zone_id');
        $this->removeIndex('payout', 'payout_payment_id', array(
             'fields' => 
             array(
              0 => 'payment_id',
             ),
             ));
        $this->removeIndex('payout', 'payout_courier_id', array(
             'fields' => 
             array(
              0 => 'courier_id',
             ),
             ));
        $this->removeIndex('zone_price', 'zone_price_service_level_id', array(
             'fields' => 
             array(
              0 => 'service_level_id',
             ),
             ));
        $this->removeIndex('zone_price', 'zone_price_from_zone_id', array(
             'fields' => 
             array(
              0 => 'from_zone_id',
             ),
             ));
        $this->removeIndex('zone_price', 'zone_price_to_zone_id', array(
             'fields' => 
             array(
              0 => 'to_zone_id',
             ),
             ));
        $this->removeIndex('zone_set', 'zone_set_zone_id', array(
             'fields' => 
             array(
              0 => 'zone_id',
             ),
             ));
    }
}