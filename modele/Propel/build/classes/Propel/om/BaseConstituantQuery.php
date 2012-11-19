<?php


/**
 * Base class that represents a query for the 'Constituant' table.
 *
 *
 *
 * @method ConstituantQuery orderByNumconst($order = Criteria::ASC) Order by the numConst column
 * @method ConstituantQuery orderByOriginefrconst($order = Criteria::ASC) Order by the origineFrConst column
 * @method ConstituantQuery orderByOrigineanconst($order = Criteria::ASC) Order by the origineAnConst column
 *
 * @method ConstituantQuery groupByNumconst() Group by the numConst column
 * @method ConstituantQuery groupByOriginefrconst() Group by the origineFrConst column
 * @method ConstituantQuery groupByOrigineanconst() Group by the origineAnConst column
 *
 * @method ConstituantQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ConstituantQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ConstituantQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ConstituantQuery leftJoinCompNutri($relationAlias = null) Adds a LEFT JOIN clause to the query using the CompNutri relation
 * @method ConstituantQuery rightJoinCompNutri($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CompNutri relation
 * @method ConstituantQuery innerJoinCompNutri($relationAlias = null) Adds a INNER JOIN clause to the query using the CompNutri relation
 *
 * @method Constituant findOne(PropelPDO $con = null) Return the first Constituant matching the query
 * @method Constituant findOneOrCreate(PropelPDO $con = null) Return the first Constituant matching the query, or a new Constituant object populated from the query conditions when no match is found
 *
 * @method Constituant findOneByOriginefrconst(string $origineFrConst) Return the first Constituant filtered by the origineFrConst column
 * @method Constituant findOneByOrigineanconst(string $origineAnConst) Return the first Constituant filtered by the origineAnConst column
 *
 * @method array findByNumconst(int $numConst) Return Constituant objects filtered by the numConst column
 * @method array findByOriginefrconst(string $origineFrConst) Return Constituant objects filtered by the origineFrConst column
 * @method array findByOrigineanconst(string $origineAnConst) Return Constituant objects filtered by the origineAnConst column
 *
 * @package    propel.generator.Propel.om
 */
abstract class BaseConstituantQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseConstituantQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'Propel', $modelName = 'Constituant', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ConstituantQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ConstituantQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ConstituantQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ConstituantQuery) {
            return $criteria;
        }
        $query = new ConstituantQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Constituant|Constituant[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ConstituantPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ConstituantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   Constituant A model object, or null if the key is not found
     * @throws   PropelException
     */
     public function findOneByNumconst($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   Constituant A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `NUMCONST`, `ORIGINEFRCONST`, `ORIGINEANCONST` FROM `Constituant` WHERE `NUMCONST` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Constituant();
            $obj->hydrate($row);
            ConstituantPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Constituant|Constituant[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Constituant[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ConstituantQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConstituantPeer::NUMCONST, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ConstituantQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConstituantPeer::NUMCONST, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the numConst column
     *
     * Example usage:
     * <code>
     * $query->filterByNumconst(1234); // WHERE numConst = 1234
     * $query->filterByNumconst(array(12, 34)); // WHERE numConst IN (12, 34)
     * $query->filterByNumconst(array('min' => 12)); // WHERE numConst > 12
     * </code>
     *
     * @param     mixed $numconst The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConstituantQuery The current query, for fluid interface
     */
    public function filterByNumconst($numconst = null, $comparison = null)
    {
        if (is_array($numconst) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ConstituantPeer::NUMCONST, $numconst, $comparison);
    }

    /**
     * Filter the query on the origineFrConst column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginefrconst('fooValue');   // WHERE origineFrConst = 'fooValue'
     * $query->filterByOriginefrconst('%fooValue%'); // WHERE origineFrConst LIKE '%fooValue%'
     * </code>
     *
     * @param     string $originefrconst The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConstituantQuery The current query, for fluid interface
     */
    public function filterByOriginefrconst($originefrconst = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($originefrconst)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $originefrconst)) {
                $originefrconst = str_replace('*', '%', $originefrconst);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConstituantPeer::ORIGINEFRCONST, $originefrconst, $comparison);
    }

    /**
     * Filter the query on the origineAnConst column
     *
     * Example usage:
     * <code>
     * $query->filterByOrigineanconst('fooValue');   // WHERE origineAnConst = 'fooValue'
     * $query->filterByOrigineanconst('%fooValue%'); // WHERE origineAnConst LIKE '%fooValue%'
     * </code>
     *
     * @param     string $origineanconst The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConstituantQuery The current query, for fluid interface
     */
    public function filterByOrigineanconst($origineanconst = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($origineanconst)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $origineanconst)) {
                $origineanconst = str_replace('*', '%', $origineanconst);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConstituantPeer::ORIGINEANCONST, $origineanconst, $comparison);
    }

    /**
     * Filter the query by a related CompNutri object
     *
     * @param   CompNutri|PropelObjectCollection $compNutri  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ConstituantQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCompNutri($compNutri, $comparison = null)
    {
        if ($compNutri instanceof CompNutri) {
            return $this
                ->addUsingAlias(ConstituantPeer::NUMCONST, $compNutri->getNumconst(), $comparison);
        } elseif ($compNutri instanceof PropelObjectCollection) {
            return $this
                ->useCompNutriQuery()
                ->filterByPrimaryKeys($compNutri->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCompNutri() only accepts arguments of type CompNutri or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CompNutri relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ConstituantQuery The current query, for fluid interface
     */
    public function joinCompNutri($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CompNutri');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CompNutri');
        }

        return $this;
    }

    /**
     * Use the CompNutri relation CompNutri object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CompNutriQuery A secondary query class using the current class as primary query
     */
    public function useCompNutriQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompNutri($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CompNutri', 'CompNutriQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Constituant $constituant Object to remove from the list of results
     *
     * @return ConstituantQuery The current query, for fluid interface
     */
    public function prune($constituant = null)
    {
        if ($constituant) {
            $this->addUsingAlias(ConstituantPeer::NUMCONST, $constituant->getNumconst(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
