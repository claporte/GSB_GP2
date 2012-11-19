<?php


/**
 * Base static class for performing query and update operations on the 'CompNutri' table.
 *
 *
 *
 * @package propel.generator.Propel.om
 */
abstract class BaseCompNutriPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'Propel';

    /** the table name for this class */
    const TABLE_NAME = 'CompNutri';

    /** the related Propel class for this table */
    const OM_CLASS = 'CompNutri';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CompNutriTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the NUMALIMENT field */
    const NUMALIMENT = 'CompNutri.NUMALIMENT';

    /** the column name for the NUMCONST field */
    const NUMCONST = 'CompNutri.NUMCONST';

    /** the column name for the VALNUTRI field */
    const VALNUTRI = 'CompNutri.VALNUTRI';

    /** the column name for the VALMINNUTRI field */
    const VALMINNUTRI = 'CompNutri.VALMINNUTRI';

    /** the column name for the VALMAXNUTRI field */
    const VALMAXNUTRI = 'CompNutri.VALMAXNUTRI';

    /** the column name for the NBECHANTNUTRI field */
    const NBECHANTNUTRI = 'CompNutri.NBECHANTNUTRI';

    /** the column name for the CCEURNUTRI field */
    const CCEURNUTRI = 'CompNutri.CCEURNUTRI';

    /** the column name for the NUMSOURCE field */
    const NUMSOURCE = 'CompNutri.NUMSOURCE';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of CompNutri objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CompNutri[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CompNutriPeer::$fieldNames[CompNutriPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Numaliment', 'Numconst', 'Valnutri', 'Valminnutri', 'Valmaxnutri', 'Nbechantnutri', 'Cceurnutri', 'Numsource', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('numaliment', 'numconst', 'valnutri', 'valminnutri', 'valmaxnutri', 'nbechantnutri', 'cceurnutri', 'numsource', ),
        BasePeer::TYPE_COLNAME => array (CompNutriPeer::NUMALIMENT, CompNutriPeer::NUMCONST, CompNutriPeer::VALNUTRI, CompNutriPeer::VALMINNUTRI, CompNutriPeer::VALMAXNUTRI, CompNutriPeer::NBECHANTNUTRI, CompNutriPeer::CCEURNUTRI, CompNutriPeer::NUMSOURCE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('NUMALIMENT', 'NUMCONST', 'VALNUTRI', 'VALMINNUTRI', 'VALMAXNUTRI', 'NBECHANTNUTRI', 'CCEURNUTRI', 'NUMSOURCE', ),
        BasePeer::TYPE_FIELDNAME => array ('numAliment', 'numConst', 'valNutri', 'valMinNutri', 'valMaxNutri', 'nbEchantNutri', 'ccEurNutri', 'numSource', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CompNutriPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Numaliment' => 0, 'Numconst' => 1, 'Valnutri' => 2, 'Valminnutri' => 3, 'Valmaxnutri' => 4, 'Nbechantnutri' => 5, 'Cceurnutri' => 6, 'Numsource' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('numaliment' => 0, 'numconst' => 1, 'valnutri' => 2, 'valminnutri' => 3, 'valmaxnutri' => 4, 'nbechantnutri' => 5, 'cceurnutri' => 6, 'numsource' => 7, ),
        BasePeer::TYPE_COLNAME => array (CompNutriPeer::NUMALIMENT => 0, CompNutriPeer::NUMCONST => 1, CompNutriPeer::VALNUTRI => 2, CompNutriPeer::VALMINNUTRI => 3, CompNutriPeer::VALMAXNUTRI => 4, CompNutriPeer::NBECHANTNUTRI => 5, CompNutriPeer::CCEURNUTRI => 6, CompNutriPeer::NUMSOURCE => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('NUMALIMENT' => 0, 'NUMCONST' => 1, 'VALNUTRI' => 2, 'VALMINNUTRI' => 3, 'VALMAXNUTRI' => 4, 'NBECHANTNUTRI' => 5, 'CCEURNUTRI' => 6, 'NUMSOURCE' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('numAliment' => 0, 'numConst' => 1, 'valNutri' => 2, 'valMinNutri' => 3, 'valMaxNutri' => 4, 'nbEchantNutri' => 5, 'ccEurNutri' => 6, 'numSource' => 7, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = CompNutriPeer::getFieldNames($toType);
        $key = isset(CompNutriPeer::$fieldKeys[$fromType][$name]) ? CompNutriPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CompNutriPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, CompNutriPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CompNutriPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. CompNutriPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CompNutriPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(CompNutriPeer::NUMALIMENT);
            $criteria->addSelectColumn(CompNutriPeer::NUMCONST);
            $criteria->addSelectColumn(CompNutriPeer::VALNUTRI);
            $criteria->addSelectColumn(CompNutriPeer::VALMINNUTRI);
            $criteria->addSelectColumn(CompNutriPeer::VALMAXNUTRI);
            $criteria->addSelectColumn(CompNutriPeer::NBECHANTNUTRI);
            $criteria->addSelectColumn(CompNutriPeer::CCEURNUTRI);
            $criteria->addSelectColumn(CompNutriPeer::NUMSOURCE);
        } else {
            $criteria->addSelectColumn($alias . '.NUMALIMENT');
            $criteria->addSelectColumn($alias . '.NUMCONST');
            $criteria->addSelectColumn($alias . '.VALNUTRI');
            $criteria->addSelectColumn($alias . '.VALMINNUTRI');
            $criteria->addSelectColumn($alias . '.VALMAXNUTRI');
            $criteria->addSelectColumn($alias . '.NBECHANTNUTRI');
            $criteria->addSelectColumn($alias . '.CCEURNUTRI');
            $criteria->addSelectColumn($alias . '.NUMSOURCE');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CompNutriPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompNutriPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CompNutriPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CompNutriPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 CompNutri
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CompNutriPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return CompNutriPeer::populateObjects(CompNutriPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement durirectly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CompNutriPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CompNutriPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CompNutriPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      CompNutri $obj A CompNutri object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getNumaliment(), (string) $obj->getNumconst()));
            } // if key === null
            CompNutriPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A CompNutri object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CompNutri) {
                $key = serialize(array((string) $value->getNumaliment(), (string) $value->getNumconst()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CompNutri object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CompNutriPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CompNutri Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CompNutriPeer::$instances[$key])) {
                return CompNutriPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool()
    {
        CompNutriPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to CompNutri
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null && $row[$startcol + 1] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1]));
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return array((double) $row[$startcol], (int) $row[$startcol + 1]);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = CompNutriPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CompNutriPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CompNutriPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CompNutriPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (CompNutri object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CompNutriPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CompNutriPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CompNutriPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CompNutriPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CompNutriPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Aliment table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAliment(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CompNutriPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompNutriPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CompNutriPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompNutriPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompNutriPeer::NUMALIMENT, AlimentPeer::NUMALIMENT, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Constituant table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinConstituant(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CompNutriPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompNutriPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CompNutriPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompNutriPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompNutriPeer::NUMCONST, ConstituantPeer::NUMCONST, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Source table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSource(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CompNutriPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompNutriPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CompNutriPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompNutriPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompNutriPeer::NUMSOURCE, SourcePeer::NUMSOURCE, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of CompNutri objects pre-filled with their Aliment objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CompNutri objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAliment(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompNutriPeer::DATABASE_NAME);
        }

        CompNutriPeer::addSelectColumns($criteria);
        $startcol = CompNutriPeer::NUM_HYDRATE_COLUMNS;
        AlimentPeer::addSelectColumns($criteria);

        $criteria->addJoin(CompNutriPeer::NUMALIMENT, AlimentPeer::NUMALIMENT, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompNutriPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompNutriPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CompNutriPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompNutriPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = AlimentPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = AlimentPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = AlimentPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    AlimentPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CompNutri) to $obj2 (Aliment)
                $obj2->addCompNutri($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CompNutri objects pre-filled with their Constituant objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CompNutri objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinConstituant(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompNutriPeer::DATABASE_NAME);
        }

        CompNutriPeer::addSelectColumns($criteria);
        $startcol = CompNutriPeer::NUM_HYDRATE_COLUMNS;
        ConstituantPeer::addSelectColumns($criteria);

        $criteria->addJoin(CompNutriPeer::NUMCONST, ConstituantPeer::NUMCONST, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompNutriPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompNutriPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CompNutriPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompNutriPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ConstituantPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ConstituantPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ConstituantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ConstituantPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CompNutri) to $obj2 (Constituant)
                $obj2->addCompNutri($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CompNutri objects pre-filled with their Source objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CompNutri objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSource(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompNutriPeer::DATABASE_NAME);
        }

        CompNutriPeer::addSelectColumns($criteria);
        $startcol = CompNutriPeer::NUM_HYDRATE_COLUMNS;
        SourcePeer::addSelectColumns($criteria);

        $criteria->addJoin(CompNutriPeer::NUMSOURCE, SourcePeer::NUMSOURCE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompNutriPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompNutriPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CompNutriPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompNutriPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = SourcePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = SourcePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = SourcePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    SourcePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CompNutri) to $obj2 (Source)
                $obj2->addCompNutri($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CompNutriPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompNutriPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CompNutriPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompNutriPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompNutriPeer::NUMALIMENT, AlimentPeer::NUMALIMENT, $join_behavior);

        $criteria->addJoin(CompNutriPeer::NUMCONST, ConstituantPeer::NUMCONST, $join_behavior);

        $criteria->addJoin(CompNutriPeer::NUMSOURCE, SourcePeer::NUMSOURCE, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of CompNutri objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CompNutri objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompNutriPeer::DATABASE_NAME);
        }

        CompNutriPeer::addSelectColumns($criteria);
        $startcol2 = CompNutriPeer::NUM_HYDRATE_COLUMNS;

        AlimentPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlimentPeer::NUM_HYDRATE_COLUMNS;

        ConstituantPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ConstituantPeer::NUM_HYDRATE_COLUMNS;

        SourcePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + SourcePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CompNutriPeer::NUMALIMENT, AlimentPeer::NUMALIMENT, $join_behavior);

        $criteria->addJoin(CompNutriPeer::NUMCONST, ConstituantPeer::NUMCONST, $join_behavior);

        $criteria->addJoin(CompNutriPeer::NUMSOURCE, SourcePeer::NUMSOURCE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompNutriPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompNutriPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CompNutriPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompNutriPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Aliment rows

            $key2 = AlimentPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = AlimentPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = AlimentPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AlimentPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CompNutri) to the collection in $obj2 (Aliment)
                $obj2->addCompNutri($obj1);
            } // if joined row not null

            // Add objects for joined Constituant rows

            $key3 = ConstituantPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ConstituantPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ConstituantPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ConstituantPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CompNutri) to the collection in $obj3 (Constituant)
                $obj3->addCompNutri($obj1);
            } // if joined row not null

            // Add objects for joined Source rows

            $key4 = SourcePeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = SourcePeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = SourcePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    SourcePeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (CompNutri) to the collection in $obj4 (Source)
                $obj4->addCompNutri($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Aliment table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptAliment(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CompNutriPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompNutriPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CompNutriPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompNutriPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompNutriPeer::NUMCONST, ConstituantPeer::NUMCONST, $join_behavior);

        $criteria->addJoin(CompNutriPeer::NUMSOURCE, SourcePeer::NUMSOURCE, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Constituant table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptConstituant(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CompNutriPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompNutriPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CompNutriPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompNutriPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompNutriPeer::NUMALIMENT, AlimentPeer::NUMALIMENT, $join_behavior);

        $criteria->addJoin(CompNutriPeer::NUMSOURCE, SourcePeer::NUMSOURCE, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Source table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptSource(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CompNutriPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompNutriPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CompNutriPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompNutriPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompNutriPeer::NUMALIMENT, AlimentPeer::NUMALIMENT, $join_behavior);

        $criteria->addJoin(CompNutriPeer::NUMCONST, ConstituantPeer::NUMCONST, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of CompNutri objects pre-filled with all related objects except Aliment.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CompNutri objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptAliment(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompNutriPeer::DATABASE_NAME);
        }

        CompNutriPeer::addSelectColumns($criteria);
        $startcol2 = CompNutriPeer::NUM_HYDRATE_COLUMNS;

        ConstituantPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ConstituantPeer::NUM_HYDRATE_COLUMNS;

        SourcePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + SourcePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CompNutriPeer::NUMCONST, ConstituantPeer::NUMCONST, $join_behavior);

        $criteria->addJoin(CompNutriPeer::NUMSOURCE, SourcePeer::NUMSOURCE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompNutriPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompNutriPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CompNutriPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompNutriPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Constituant rows

                $key2 = ConstituantPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ConstituantPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ConstituantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ConstituantPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CompNutri) to the collection in $obj2 (Constituant)
                $obj2->addCompNutri($obj1);

            } // if joined row is not null

                // Add objects for joined Source rows

                $key3 = SourcePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = SourcePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = SourcePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    SourcePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CompNutri) to the collection in $obj3 (Source)
                $obj3->addCompNutri($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CompNutri objects pre-filled with all related objects except Constituant.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CompNutri objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptConstituant(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompNutriPeer::DATABASE_NAME);
        }

        CompNutriPeer::addSelectColumns($criteria);
        $startcol2 = CompNutriPeer::NUM_HYDRATE_COLUMNS;

        AlimentPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlimentPeer::NUM_HYDRATE_COLUMNS;

        SourcePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + SourcePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CompNutriPeer::NUMALIMENT, AlimentPeer::NUMALIMENT, $join_behavior);

        $criteria->addJoin(CompNutriPeer::NUMSOURCE, SourcePeer::NUMSOURCE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompNutriPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompNutriPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CompNutriPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompNutriPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Aliment rows

                $key2 = AlimentPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = AlimentPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = AlimentPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AlimentPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CompNutri) to the collection in $obj2 (Aliment)
                $obj2->addCompNutri($obj1);

            } // if joined row is not null

                // Add objects for joined Source rows

                $key3 = SourcePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = SourcePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = SourcePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    SourcePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CompNutri) to the collection in $obj3 (Source)
                $obj3->addCompNutri($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CompNutri objects pre-filled with all related objects except Source.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CompNutri objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptSource(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompNutriPeer::DATABASE_NAME);
        }

        CompNutriPeer::addSelectColumns($criteria);
        $startcol2 = CompNutriPeer::NUM_HYDRATE_COLUMNS;

        AlimentPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlimentPeer::NUM_HYDRATE_COLUMNS;

        ConstituantPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ConstituantPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CompNutriPeer::NUMALIMENT, AlimentPeer::NUMALIMENT, $join_behavior);

        $criteria->addJoin(CompNutriPeer::NUMCONST, ConstituantPeer::NUMCONST, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompNutriPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompNutriPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CompNutriPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompNutriPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Aliment rows

                $key2 = AlimentPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = AlimentPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = AlimentPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AlimentPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CompNutri) to the collection in $obj2 (Aliment)
                $obj2->addCompNutri($obj1);

            } // if joined row is not null

                // Add objects for joined Constituant rows

                $key3 = ConstituantPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ConstituantPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ConstituantPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ConstituantPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CompNutri) to the collection in $obj3 (Constituant)
                $obj3->addCompNutri($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(CompNutriPeer::DATABASE_NAME)->getTable(CompNutriPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCompNutriPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCompNutriPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CompNutriTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass()
    {
        return CompNutriPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CompNutri or Criteria object.
     *
     * @param      mixed $values Criteria or CompNutri object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CompNutriPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CompNutri object
        }


        // Set the correct dbName
        $criteria->setDbName(CompNutriPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a CompNutri or Criteria object.
     *
     * @param      mixed $values Criteria or CompNutri object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CompNutriPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CompNutriPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CompNutriPeer::NUMALIMENT);
            $value = $criteria->remove(CompNutriPeer::NUMALIMENT);
            if ($value) {
                $selectCriteria->add(CompNutriPeer::NUMALIMENT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CompNutriPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CompNutriPeer::NUMCONST);
            $value = $criteria->remove(CompNutriPeer::NUMCONST);
            if ($value) {
                $selectCriteria->add(CompNutriPeer::NUMCONST, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CompNutriPeer::TABLE_NAME);
            }

        } else { // $values is CompNutri object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CompNutriPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the CompNutri table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CompNutriPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CompNutriPeer::TABLE_NAME, $con, CompNutriPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CompNutriPeer::clearInstancePool();
            CompNutriPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CompNutri or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CompNutri object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(CompNutriPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CompNutriPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CompNutri) { // it's a model object
            // invalidate the cache for this single object
            CompNutriPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CompNutriPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CompNutriPeer::NUMALIMENT, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CompNutriPeer::NUMCONST, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CompNutriPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CompNutriPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CompNutriPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CompNutri object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CompNutri $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CompNutriPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CompNutriPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(CompNutriPeer::DATABASE_NAME, CompNutriPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   double $numaliment
     * @param   int $numconst
     * @param      PropelPDO $con
     * @return   CompNutri
     */
    public static function retrieveByPK($numaliment, $numconst, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $numaliment, (string) $numconst));
         if (null !== ($obj = CompNutriPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CompNutriPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CompNutriPeer::DATABASE_NAME);
        $criteria->add(CompNutriPeer::NUMALIMENT, $numaliment);
        $criteria->add(CompNutriPeer::NUMCONST, $numconst);
        $v = CompNutriPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCompNutriPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCompNutriPeer::buildTableMap();

