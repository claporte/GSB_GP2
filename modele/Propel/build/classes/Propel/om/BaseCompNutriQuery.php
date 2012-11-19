<?php


/**
 * Base class that represents a query for the 'CompNutri' table.
 *
 *
 *
 * @method CompNutriQuery orderByNumaliment($order = Criteria::ASC) Order by the numAliment column
 * @method CompNutriQuery orderByNumconst($order = Criteria::ASC) Order by the numConst column
 * @method CompNutriQuery orderByValnutri($order = Criteria::ASC) Order by the valNutri column
 * @method CompNutriQuery orderByValminnutri($order = Criteria::ASC) Order by the valMinNutri column
 * @method CompNutriQuery orderByValmaxnutri($order = Criteria::ASC) Order by the valMaxNutri column
 * @method CompNutriQuery orderByNbechantnutri($order = Criteria::ASC) Order by the nbEchantNutri column
 * @method CompNutriQuery orderByCceurnutri($order = Criteria::ASC) Order by the ccEurNutri column
 * @method CompNutriQuery orderByNumsource($order = Criteria::ASC) Order by the numSource column
 *
 * @method CompNutriQuery groupByNumaliment() Group by the numAliment column
 * @method CompNutriQuery groupByNumconst() Group by the numConst column
 * @method CompNutriQuery groupByValnutri() Group by the valNutri column
 * @method CompNutriQuery groupByValminnutri() Group by the valMinNutri column
 * @method CompNutriQuery groupByValmaxnutri() Group by the valMaxNutri column
 * @method CompNutriQuery groupByNbechantnutri() Group by the nbEchantNutri column
 * @method CompNutriQuery groupByCceurnutri() Group by the ccEurNutri column
 * @method CompNutriQuery groupByNumsource() Group by the numSource column
 *
 * @method CompNutriQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CompNutriQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CompNutriQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CompNutriQuery leftJoinAliment($relationAlias = null) Adds a LEFT JOIN clause to the query using the Aliment relation
 * @method CompNutriQuery rightJoinAliment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Aliment relation
 * @method CompNutriQuery innerJoinAliment($relationAlias = null) Adds a INNER JOIN clause to the query using the Aliment relation
 *
 * @method CompNutriQuery leftJoinConstituant($relationAlias = null) Adds a LEFT JOIN clause to the query using the Constituant relation
 * @method CompNutriQuery rightJoinConstituant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Constituant relation
 * @method CompNutriQuery innerJoinConstituant($relationAlias = null) Adds a INNER JOIN clause to the query using the Constituant relation
 *
 * @method CompNutriQuery leftJoinSource($relationAlias = null) Adds a LEFT JOIN clause to the query using the Source relation
 * @method CompNutriQuery rightJoinSource($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Source relation
 * @method CompNutriQuery innerJoinSource($relationAlias = null) Adds a INNER JOIN clause to the query using the Source relation
 *
 * @method CompNutri findOne(PropelPDO $con = null) Return the first CompNutri matching the query
 * @method CompNutri findOneOrCreate(PropelPDO $con = null) Return the first CompNutri matching the query, or a new CompNutri object populated from the query conditions when no match is found
 *
 * @method CompNutri findOneByNumaliment(double $numAliment) Return the first CompNutri filtered by the numAliment column
 * @method CompNutri findOneByNumconst(int $numConst) Return the first CompNutri filtered by the numConst column
 * @method CompNutri findOneByValnutri(string $valNutri) Return the first CompNutri filtered by the valNutri column
 * @method CompNutri findOneByValminnutri(double $valMinNutri) Return the first CompNutri filtered by the valMinNutri column
 * @method CompNutri findOneByValmaxnutri(double $valMaxNutri) Return the first CompNutri filtered by the valMaxNutri column
 * @method CompNutri findOneByNbechantnutri(double $nbEchantNutri) Return the first CompNutri filtered by the nbEchantNutri column
 * @method CompNutri findOneByCceurnutri(string $ccEurNutri) Return the first CompNutri filtered by the ccEurNutri column
 * @method CompNutri findOneByNumsource(int $numSource) Return the first CompNutri filtered by the numSource column
 *
 * @method array findByNumaliment(double $numAliment) Return CompNutri objects filtered by the numAliment column
 * @method array findByNumconst(int $numConst) Return CompNutri objects filtered by the numConst column
 * @method array findByValnutri(string $valNutri) Return CompNutri objects filtered by the valNutri column
 * @method array findByValminnutri(double $valMinNutri) Return CompNutri objects filtered by the valMinNutri column
 * @method array findByValmaxnutri(double $valMaxNutri) Return CompNutri objects filtered by the valMaxNutri column
 * @method array findByNbechantnutri(double $nbEchantNutri) Return CompNutri objects filtered by the nbEchantNutri column
 * @method array findByCceurnutri(string $ccEurNutri) Return CompNutri objects filtered by the ccEurNutri column
 * @method array findByNumsource(int $numSource) Return CompNutri objects filtered by the numSource column
 *
 * @package    propel.generator.Propel.om
 */
abstract class BaseCompNutriQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCompNutriQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'Propel', $modelName = 'CompNutri', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CompNutriQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     CompNutriQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CompNutriQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CompNutriQuery) {
            return $criteria;
        }
        $query = new CompNutriQuery();
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
                         A Primary key composition: [$numAliment, $numConst]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CompNutri|CompNutri[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CompNutriPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CompNutriPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   CompNutri A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `NUMALIMENT`, `NUMCONST`, `VALNUTRI`, `VALMINNUTRI`, `VALMAXNUTRI`, `NBECHANTNUTRI`, `CCEURNUTRI`, `NUMSOURCE` FROM `CompNutri` WHERE `NUMALIMENT` = :p0 AND `NUMCONST` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CompNutri();
            $obj->hydrate($row);
            CompNutriPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CompNutri|CompNutri[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CompNutri[]|mixed the list of results, formatted by the current formatter
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
     * @return CompNutriQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CompNutriPeer::NUMALIMENT, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CompNutriPeer::NUMCONST, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CompNutriQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CompNutriPeer::NUMALIMENT, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CompNutriPeer::NUMCONST, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the numAliment column
     *
     * Example usage:
     * <code>
     * $query->filterByNumaliment(1234); // WHERE numAliment = 1234
     * $query->filterByNumaliment(array(12, 34)); // WHERE numAliment IN (12, 34)
     * $query->filterByNumaliment(array('min' => 12)); // WHERE numAliment > 12
     * </code>
     *
     * @see       filterByAliment()
     *
     * @param     mixed $numaliment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompNutriQuery The current query, for fluid interface
     */
    public function filterByNumaliment($numaliment = null, $comparison = null)
    {
        if (is_array($numaliment)) {
            $useMinMax = false;
            if (isset($numaliment['min'])) {
                $this->addUsingAlias(CompNutriPeer::NUMALIMENT, $numaliment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numaliment['max'])) {
                $this->addUsingAlias(CompNutriPeer::NUMALIMENT, $numaliment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompNutriPeer::NUMALIMENT, $numaliment, $comparison);
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
     * @see       filterByConstituant()
     *
     * @param     mixed $numconst The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompNutriQuery The current query, for fluid interface
     */
    public function filterByNumconst($numconst = null, $comparison = null)
    {
        if (is_array($numconst) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(CompNutriPeer::NUMCONST, $numconst, $comparison);
    }

    /**
     * Filter the query on the valNutri column
     *
     * Example usage:
     * <code>
     * $query->filterByValnutri('fooValue');   // WHERE valNutri = 'fooValue'
     * $query->filterByValnutri('%fooValue%'); // WHERE valNutri LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valnutri The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompNutriQuery The current query, for fluid interface
     */
    public function filterByValnutri($valnutri = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valnutri)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valnutri)) {
                $valnutri = str_replace('*', '%', $valnutri);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CompNutriPeer::VALNUTRI, $valnutri, $comparison);
    }

    /**
     * Filter the query on the valMinNutri column
     *
     * Example usage:
     * <code>
     * $query->filterByValminnutri(1234); // WHERE valMinNutri = 1234
     * $query->filterByValminnutri(array(12, 34)); // WHERE valMinNutri IN (12, 34)
     * $query->filterByValminnutri(array('min' => 12)); // WHERE valMinNutri > 12
     * </code>
     *
     * @param     mixed $valminnutri The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompNutriQuery The current query, for fluid interface
     */
    public function filterByValminnutri($valminnutri = null, $comparison = null)
    {
        if (is_array($valminnutri)) {
            $useMinMax = false;
            if (isset($valminnutri['min'])) {
                $this->addUsingAlias(CompNutriPeer::VALMINNUTRI, $valminnutri['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valminnutri['max'])) {
                $this->addUsingAlias(CompNutriPeer::VALMINNUTRI, $valminnutri['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompNutriPeer::VALMINNUTRI, $valminnutri, $comparison);
    }

    /**
     * Filter the query on the valMaxNutri column
     *
     * Example usage:
     * <code>
     * $query->filterByValmaxnutri(1234); // WHERE valMaxNutri = 1234
     * $query->filterByValmaxnutri(array(12, 34)); // WHERE valMaxNutri IN (12, 34)
     * $query->filterByValmaxnutri(array('min' => 12)); // WHERE valMaxNutri > 12
     * </code>
     *
     * @param     mixed $valmaxnutri The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompNutriQuery The current query, for fluid interface
     */
    public function filterByValmaxnutri($valmaxnutri = null, $comparison = null)
    {
        if (is_array($valmaxnutri)) {
            $useMinMax = false;
            if (isset($valmaxnutri['min'])) {
                $this->addUsingAlias(CompNutriPeer::VALMAXNUTRI, $valmaxnutri['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valmaxnutri['max'])) {
                $this->addUsingAlias(CompNutriPeer::VALMAXNUTRI, $valmaxnutri['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompNutriPeer::VALMAXNUTRI, $valmaxnutri, $comparison);
    }

    /**
     * Filter the query on the nbEchantNutri column
     *
     * Example usage:
     * <code>
     * $query->filterByNbechantnutri(1234); // WHERE nbEchantNutri = 1234
     * $query->filterByNbechantnutri(array(12, 34)); // WHERE nbEchantNutri IN (12, 34)
     * $query->filterByNbechantnutri(array('min' => 12)); // WHERE nbEchantNutri > 12
     * </code>
     *
     * @param     mixed $nbechantnutri The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompNutriQuery The current query, for fluid interface
     */
    public function filterByNbechantnutri($nbechantnutri = null, $comparison = null)
    {
        if (is_array($nbechantnutri)) {
            $useMinMax = false;
            if (isset($nbechantnutri['min'])) {
                $this->addUsingAlias(CompNutriPeer::NBECHANTNUTRI, $nbechantnutri['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nbechantnutri['max'])) {
                $this->addUsingAlias(CompNutriPeer::NBECHANTNUTRI, $nbechantnutri['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompNutriPeer::NBECHANTNUTRI, $nbechantnutri, $comparison);
    }

    /**
     * Filter the query on the ccEurNutri column
     *
     * Example usage:
     * <code>
     * $query->filterByCceurnutri('fooValue');   // WHERE ccEurNutri = 'fooValue'
     * $query->filterByCceurnutri('%fooValue%'); // WHERE ccEurNutri LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cceurnutri The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompNutriQuery The current query, for fluid interface
     */
    public function filterByCceurnutri($cceurnutri = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cceurnutri)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cceurnutri)) {
                $cceurnutri = str_replace('*', '%', $cceurnutri);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CompNutriPeer::CCEURNUTRI, $cceurnutri, $comparison);
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
     * @see       filterBySource()
     *
     * @param     mixed $numsource The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompNutriQuery The current query, for fluid interface
     */
    public function filterByNumsource($numsource = null, $comparison = null)
    {
        if (is_array($numsource)) {
            $useMinMax = false;
            if (isset($numsource['min'])) {
                $this->addUsingAlias(CompNutriPeer::NUMSOURCE, $numsource['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numsource['max'])) {
                $this->addUsingAlias(CompNutriPeer::NUMSOURCE, $numsource['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompNutriPeer::NUMSOURCE, $numsource, $comparison);
    }

    /**
     * Filter the query by a related Aliment object
     *
     * @param   Aliment|PropelObjectCollection $aliment The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   CompNutriQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAliment($aliment, $comparison = null)
    {
        if ($aliment instanceof Aliment) {
            return $this
                ->addUsingAlias(CompNutriPeer::NUMALIMENT, $aliment->getNumaliment(), $comparison);
        } elseif ($aliment instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompNutriPeer::NUMALIMENT, $aliment->toKeyValue('PrimaryKey', 'Numaliment'), $comparison);
        } else {
            throw new PropelException('filterByAliment() only accepts arguments of type Aliment or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Aliment relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CompNutriQuery The current query, for fluid interface
     */
    public function joinAliment($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Aliment');

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
            $this->addJoinObject($join, 'Aliment');
        }

        return $this;
    }

    /**
     * Use the Aliment relation Aliment object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AlimentQuery A secondary query class using the current class as primary query
     */
    public function useAlimentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAliment($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Aliment', 'AlimentQuery');
    }

    /**
     * Filter the query by a related Constituant object
     *
     * @param   Constituant|PropelObjectCollection $constituant The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   CompNutriQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByConstituant($constituant, $comparison = null)
    {
        if ($constituant instanceof Constituant) {
            return $this
                ->addUsingAlias(CompNutriPeer::NUMCONST, $constituant->getNumconst(), $comparison);
        } elseif ($constituant instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompNutriPeer::NUMCONST, $constituant->toKeyValue('PrimaryKey', 'Numconst'), $comparison);
        } else {
            throw new PropelException('filterByConstituant() only accepts arguments of type Constituant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Constituant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CompNutriQuery The current query, for fluid interface
     */
    public function joinConstituant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Constituant');

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
            $this->addJoinObject($join, 'Constituant');
        }

        return $this;
    }

    /**
     * Use the Constituant relation Constituant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ConstituantQuery A secondary query class using the current class as primary query
     */
    public function useConstituantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinConstituant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Constituant', 'ConstituantQuery');
    }

    /**
     * Filter the query by a related Source object
     *
     * @param   Source|PropelObjectCollection $source The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   CompNutriQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBySource($source, $comparison = null)
    {
        if ($source instanceof Source) {
            return $this
                ->addUsingAlias(CompNutriPeer::NUMSOURCE, $source->getNumsource(), $comparison);
        } elseif ($source instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompNutriPeer::NUMSOURCE, $source->toKeyValue('Numsource', 'Numsource'), $comparison);
        } else {
            throw new PropelException('filterBySource() only accepts arguments of type Source or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Source relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CompNutriQuery The current query, for fluid interface
     */
    public function joinSource($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Source');

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
            $this->addJoinObject($join, 'Source');
        }

        return $this;
    }

    /**
     * Use the Source relation Source object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SourceQuery A secondary query class using the current class as primary query
     */
    public function useSourceQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSource($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Source', 'SourceQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CompNutri $compNutri Object to remove from the list of results
     *
     * @return CompNutriQuery The current query, for fluid interface
     */
    public function prune($compNutri = null)
    {
        if ($compNutri) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CompNutriPeer::NUMALIMENT), $compNutri->getNumaliment(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CompNutriPeer::NUMCONST), $compNutri->getNumconst(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
