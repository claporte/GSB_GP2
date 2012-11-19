<?php



/**
 * This class defines the structure of the 'CompNutri' table.
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
class CompNutriTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Propel.map.CompNutriTableMap';

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
        $this->setName('CompNutri');
        $this->setPhpName('CompNutri');
        $this->setClassname('CompNutri');
        $this->setPackage('Propel');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('NUMALIMENT', 'Numaliment', 'DOUBLE' , 'Aliment', 'NUMALIMENT', true, null, null);
        $this->addForeignPrimaryKey('NUMCONST', 'Numconst', 'INTEGER' , 'Constituant', 'NUMCONST', true, null, null);
        $this->addColumn('VALNUTRI', 'Valnutri', 'VARCHAR', false, 255, null);
        $this->addColumn('VALMINNUTRI', 'Valminnutri', 'DOUBLE', false, null, null);
        $this->addColumn('VALMAXNUTRI', 'Valmaxnutri', 'DOUBLE', false, null, null);
        $this->addColumn('NBECHANTNUTRI', 'Nbechantnutri', 'DOUBLE', false, null, null);
        $this->addColumn('CCEURNUTRI', 'Cceurnutri', 'VARCHAR', false, 255, null);
        $this->addForeignKey('NUMSOURCE', 'Numsource', 'INTEGER', 'Source', 'NUMSOURCE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Aliment', 'Aliment', RelationMap::MANY_TO_ONE, array('numAliment' => 'numAliment', ), null, null);
        $this->addRelation('Constituant', 'Constituant', RelationMap::MANY_TO_ONE, array('numConst' => 'numConst', ), null, null);
        $this->addRelation('Source', 'Source', RelationMap::MANY_TO_ONE, array('numSource' => 'numSource', ), null, null);
    } // buildRelations()

} // CompNutriTableMap
