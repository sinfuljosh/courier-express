<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Country', 'doctrine');

/**
 * BaseCountry
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $code2
 * @property string $code3
 * @property Doctrine_Collection $Address
 * 
 * @method integer             getId()      Returns the current record's "id" value
 * @method string              getName()    Returns the current record's "name" value
 * @method string              getCode2()   Returns the current record's "code2" value
 * @method string              getCode3()   Returns the current record's "code3" value
 * @method Doctrine_Collection getAddress() Returns the current record's "Address" collection
 * @method Country             setId()      Sets the current record's "id" value
 * @method Country             setName()    Sets the current record's "name" value
 * @method Country             setCode2()   Sets the current record's "code2" value
 * @method Country             setCode3()   Sets the current record's "code3" value
 * @method Country             setAddress() Sets the current record's "Address" collection
 * 
 * @package    cexp
 * @subpackage model
 * @author     Courier Express
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCountry extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('country');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('name', 'string', 64, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 64,
             ));
        $this->hasColumn('code2', 'string', 2, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('code3', 'string', 3, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 3,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Address', array(
             'local' => 'id',
             'foreign' => 'country_id'));
    }
}