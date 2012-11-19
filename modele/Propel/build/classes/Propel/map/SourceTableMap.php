<?php



/**
 * This class defines the structure of the 'Source' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.Propel.map
 */
class SourceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Propel.map.SourceTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('Source');
        $this->setPhpName('Source');
        $this->setClassname('Source');
        $this->setPackage('Propel');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('NUMSOURCE', 'Numsource', 'INTEGER', true, null, null);
        $this->addPrimaryKey('ORIGINESOURCE', 'Originesource', 'DOUBLE', true, null, null);
        $this->addColumn('CITATIONSOURCE', 'Citationsource', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CompNutri', 'CompNutri', RelationMap::ONE_TO_MANY, array('numSource' => 'numSource', ), null, null, 'CompNutris');
    } // buildRelations()

} // SourceTableMap
