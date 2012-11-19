<?php



/**
 * This class defines the structure of the 'Genre' table.
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
class GenreTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Propel.map.GenreTableMap';

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
        $this->setName('Genre');
        $this->setPhpName('Genre');
        $this->setClassname('Genre');
        $this->setPackage('Propel');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('NUMGENRE', 'Numgenre', 'VARCHAR', true, 4, null);
        $this->addColumn('NOMANGENRE', 'Nomangenre', 'VARCHAR', true, 128, null);
        $this->addColumn('NOMFRGENRE', 'Nomfrgenre', 'VARCHAR', true, 128, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Aliment', 'Aliment', RelationMap::ONE_TO_MANY, array('numGenre' => 'numGenre', ), null, null, 'Aliments');
    } // buildRelations()

} // GenreTableMap
