<?php



/**
 * This class defines the structure of the 'Aliment' table.
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
class AlimentTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Propel.map.AlimentTableMap';

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
        $this->setName('Aliment');
        $this->setPhpName('Aliment');
        $this->setClassname('Aliment');
        $this->setPackage('Propel');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('NUMALIMENT', 'Numaliment', 'DOUBLE', true, null, null);
        $this->addColumn('NOMFRALIMENT', 'Nomfraliment', 'VARCHAR', true, 255, null);
        $this->addColumn('NOMANALIMENT', 'Nomanaliment', 'VARCHAR', true, 24, null);
        $this->addForeignKey('NUMGENRE', 'Numgenre', 'VARCHAR', 'Genre', 'NUMGENRE', true, 4, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Genre', 'Genre', RelationMap::MANY_TO_ONE, array('numGenre' => 'numGenre', ), null, null);
        $this->addRelation('CompNutri', 'CompNutri', RelationMap::ONE_TO_MANY, array('numAliment' => 'numAliment', ), null, null, 'CompNutris');
    } // buildRelations()

} // AlimentTableMap
