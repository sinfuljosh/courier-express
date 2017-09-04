<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClientLogin', 'doctrine');

/**
 * BaseClientLogin
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $email
 * @property string $password_hash
 * @property string $password
 * @property Doctrine_Collection $Client
 * @property Doctrine_Collection $Client_8
 * 
 * @method integer             getId()            Returns the current record's "id" value
 * @method string              getEmail()         Returns the current record's "email" value
 * @method string              getPasswordHash()  Returns the current record's "password_hash" value
 * @method string              getPassword()      Returns the current record's "password" value
 * @method Doctrine_Collection getClient()        Returns the current record's "Client" collection
 * @method Doctrine_Collection getClient8()       Returns the current record's "Client_8" collection
 * @method ClientLogin         setId()            Sets the current record's "id" value
 * @method ClientLogin         setEmail()         Sets the current record's "email" value
 * @method ClientLogin         setPasswordHash()  Sets the current record's "password_hash" value
 * @method ClientLogin         setPassword()      Sets the current record's "password" value
 * @method ClientLogin         setClient()        Sets the current record's "Client" collection
 * @method ClientLogin         setClient8()       Sets the current record's "Client_8" collection
 * 
 * @package    cexp
 * @subpackage model
 * @author     Courier Express
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseClientLogin extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('client_login');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('email', 'string', 80, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 80,
             ));
        $this->hasColumn('password_hash', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('password', 'string', 80, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 80,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Client', array(
             'local' => 'id',
             'foreign' => 'login_id'));

        $this->hasMany('Client as Client_8', array(
             'local' => 'id',
             'foreign' => 'login_id'));
    }
}