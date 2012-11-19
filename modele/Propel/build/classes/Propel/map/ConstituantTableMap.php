<?php



/**
 * This class defines the structure of the 'Constituant' table.
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
class ConstituantTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Propel.map.ConstituantTableMap';

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
        $this->setName('Constituant');
        $this->setPhpName('Constituant');
        $this->setClassname('Constituant');
        $this->setPackage('Propel');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('NUMCONST', 'Numconst', 'INTEGER', true, null, null);
        $this->addColumn('ORIGINEFRCONST', 'Originefrconst', 'VARCHAR', false, 80, null);
        $this->addColumn('ORIGINEANCONST', 'Origineanconst', 'VARCHAR', false, 80, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CompNutri', 'CompNutri', RelationMap::ONE_TO_MANY, array('numConst' => 'numConst', ), null, null, 'CompNutris');
    } // buildRelations()

} // ConstituantTableMap
