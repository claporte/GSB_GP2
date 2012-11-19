<?php


/**
 * Base class that represents a query for the 'Source' table.
 *
 *
 *
 * @method SourceQuery orderByNumsource($order = Criteria::ASC) Order by the numSource column
 * @method SourceQuery orderByOriginesource($order = Criteria::ASC) Order by the origineSource column
 * @method SourceQuery orderByCitationsource($order = Criteria::ASC) Order by the citationSource column
 *
 * @method SourceQuery groupByNumsource() Group by the numSource column
 * @method SourceQuery groupByOriginesource() Group by the origineSource column
 * @method SourceQuery groupByCitationsource() Group by the citationSource column
 *
 * @method SourceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SourceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SourceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SourceQuery leftJoinCompNutri($relationAlias = null) Adds a LEFT JOIN clause to the query using the CompNutri relation
 * @method SourceQuery rightJoinCompNutri($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CompNutri relation
 * @method SourceQuery innerJoinCompNutri($relationAlias = null) Adds a INNER JOIN clause to the query using the CompNutri relation
 *
 * @method Source findOne(PropelPDO $con = null) Return the first Source matching the query
 * @method Source findOneOrCreate(PropelPDO $con = null) Return the first Source matching the query, or a new Source object populated from the query conditions when no match is found
 *
 * @method Source findOneByNumsource(int $numSource) Return the first Source filtered by the numSource column
 * @method Source findOneByOriginesource(double $origineSource) Return the first Source filtered by the origineSource column
 * @method Source findOneByCitationsource(string $citationSource) Return the first Source filtered by the citationSource column
 *
 * @method array findByNumsource(int $numSource) Return Source objects filtered by the numSource column
 * @method array findByOriginesource(double $origineSource) Return Source objects filtered by the origineSource column
 * @method array findByCitationsource(string $citationSource) Return Source objects filtered by the citationSource column
 *
 * @package    propel.generator.Propel.om
 */
abstract class BaseSourceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSourceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'Propel', $modelName = 'Source', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SourceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     SourceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SourceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SourceQuery) {
            return $criteria;
        }
        $query = new SourceQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$numSource, $origineSource]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Source|Source[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SourcePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SourcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   Source A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `NUMSOURCE`, `ORIGINESOURCE`, `CITATIONSOURCE` FROM `Source` WHERE `NUMSOURCE` = :p0 AND `ORIGINESOURCE` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Source();
            $obj->hydrate($row);
            SourcePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Source|Source[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Source[]|mixed the list of results, formatted by the current formatter
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
     * @return SourceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SourcePeer::NUMSOURCE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SourcePeer::ORIGINESOURCE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SourceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SourcePeer::NUMSOURCE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SourcePeer::ORIGINESOURCE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the numSource column
     *
     * Example usage:
     * <code>
     * $query->filterByNumsource(1234); // WHERE numSource = 1234
     * $query->filterByNumsource(array(12, 34)); // WHERE numSource IN (12, 34)
     * $query->filterByNumsource(array('min' => 12)); // WHERE numSource > 12
     * </code>
     *
     * @param     mixed $numsource The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SourceQuery The current query, for fluid interface
     */
    public function filterByNumsource($numsource = null, $comparison = null)
    {
        if (is_array($numsource) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(SourcePeer::NUMSOURCE, $numsource, $comparison);
    }

    /**
     * Filter the query on the origineSource column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginesource(1234); // WHERE origineSource = 1234
     * $query->filterByOriginesource(array(12, 34)); // WHERE origineSource IN (12, 34)
     * $query->filterByOriginesource(array('min' => 12)); // WHERE origineSource > 12
     * </code>
     *
     * @param     mixed $originesource The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SourceQuery The current query, for fluid interface
     */
    public function filterByOriginesource($originesource = null, $comparison = null)
    {
        if (is_array($originesource)) {
            $useMinMax = false;
            if (isset($originesource['min'])) {
                $this->addUsingAlias(SourcePeer::ORIGINESOURCE, $originesource['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($originesource['max'])) {
                $this->addUsingAlias(SourcePeer::ORIGINESOURCE, $originesource['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SourcePeer::ORIGINESOURCE, $originesource, $comparison);
    }

    /**
     * Filter the query on the citationSource column
     *
     * Example usage:
     * <code>
     * $query->filterByCitationsource('fooValue');   // WHERE citationSource = 'fooValue'
     * $query->filterByCitationsource('%fooValue%'); // WHERE citationSource LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citationsource The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SourceQuery The current query, for fluid interface
     */
    public function filterByCitationsource($citationsource = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citationsource)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $citationsource)) {
                $citationsource = str_replace('*', '%', $citationsource);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SourcePeer::CITATIONSOURCE, $citationsource, $comparison);
    }

    /**
     * Filter the query by a related CompNutri object
     *
     * @param   CompNutri|PropelObjectCollection $compNutri  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   SourceQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCompNutri($compNutri, $comparison = null)
    {
        if ($compNutri instanceof CompNutri) {
            return $this
                ->addUsingAlias(SourcePeer::NUMSOURCE, $compNutri->getNumsource(), $comparison);
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
     * @return SourceQuery The current query, for fluid interface
     */
    public function joinCompNutri($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useCompNutriQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCompNutri($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CompNutri', 'CompNutriQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Source $source Object to remove from the list of results
     *
     * @return SourceQuery The current query, for fluid interface
     */
    public function prune($source = null)
    {
        if ($source) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SourcePeer::NUMSOURCE), $source->getNumsource(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SourcePeer::ORIGINESOURCE), $source->getOriginesource(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
