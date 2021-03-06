<?php

/**
 * BaseCorMessageTaxonInv
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_message_inv
 * @property integer $id_nom
 * @property BibNoms $BibNoms
 * @property BibMessagesInv $BibMessagesInv
 * 
 * @method integer            get()               Returns the current record's "id_message_inv" value
 * @method integer            get()               Returns the current record's "id_nom" value
 * @method BibNoms            get()               Returns the current record's "BibNoms" value
 * @method BibMessagesInv     get()               Returns the current record's "BibMessagesInv" value
 * @method CorMessageTaxonInv set()               Sets the current record's "id_message_inv" value
 * @method CorMessageTaxonInv set()               Sets the current record's "id_nom" value
 * @method CorMessageTaxonInv set()               Sets the current record's "BibNoms" value
 * @method CorMessageTaxonInv set()               Sets the current record's "BibMessagesInv" value
 * 
 * @package    geonature
 * @subpackage model
 * @author     Gil Deluermoz
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCorMessageTaxonInv extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('contactinv.cor_message_taxon');
        $this->hasColumn('id_message_inv', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('id_nom', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('BibNoms', array(
             'local' => 'id_nom',
             'foreign' => 'id_nom'));

        $this->hasOne('BibMessagesInv', array(
             'local' => 'id_message_inv',
             'foreign' => 'id_message_inv'));
    }
}