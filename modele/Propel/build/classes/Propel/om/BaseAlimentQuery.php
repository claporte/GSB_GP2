<?php


/**
 * Base class that represents a query for the 'Aliment' table.
 *
 *
 *
 * @method AlimentQuery orderByNumaliment($order = Criteria::ASC) Order by the numAliment column
 * @method AlimentQuery orderByNomfraliment($order = Criteria::ASC) Order by the nomFrAliment column
 * @method AlimentQuery orderByNomanaliment($order = Criteria::ASC) Order by the nomAnAliment column
 * @method AlimentQuery orderByNumgenre($order = Criteria::ASC) Order by the numGenre column
 *
 * @method AlimentQuery groupByNumaliment() Group by the numAliment column
 * @method AlimentQuery groupByNomfraliment() Group by the nomFrAliment column
 * @method AlimentQuery groupByNomanaliment() Group by the nomAnAliment column
 * @method AlimentQuery groupByNumgenre() Group by the numGenre column
 *
 * @method AlimentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AlimentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AlimentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AlimentQuery leftJoinGenre($relationAlias = null) Adds a LEFT JOIN clause to the query using the Genre relation
 * @method AlimentQuery rightJoinGenre($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Genre relation
 * @method AlimentQuery innerJoinGenre($relationAlias = null) Adds a INNER JOIN clause to the query using the Genre relation
 *
 * @method AlimentQuery leftJoinCompNutri($relationAlias = null) Adds a LEFT JOIN clause to the query using the CompNutri relation
 * @method AlimentQuery rightJoinCompNutri($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CompNutri relation
 * @method AlimentQuery innerJoinCompNutri($relationAlias = null) Adds a INNER JOIN clause to the query using the CompNutri relation
 *
 * @method Aliment findOne(PropelPDO $con = null) Return the first Aliment matching the query
 * @method Aliment findOneOrCreate(PropelPDO $con = null) Return the first Aliment matching the query, or a new Aliment object populated from the query conditions when no match is found
 *
 * @method Aliment findOneByNomfraliment(string $nomFrAliment) Return the first Aliment filtered by the nomFrAliment column
 * @method Aliment findOneByNomanaliment(string $nomAnAliment) Return the first Aliment filtered by the nomAnAliment column
 * @method Aliment findOneByNumgenre(string $numGenre) Return the first Aliment filtered by the numGenre column
 *
 * @method array findByNumaliment(double $numAliment) Return Aliment objects filtered by the numAliment column
 * @method array findByNomfraliment(string $nomFrAliment) Return Aliment objects filtered by the nomFrAliment column
 * @method array findByNomanaliment(string $nomAnAliment) Return Aliment objects filtered by the nomAnAliment column
 * @method array findByNumgenre(string $numGenre) Return Aliment objects filtered by the numGenre column
 *
 * @package    propel.generator.Propel.om
 */
abstract class BaseAlimentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAlimentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'Propel', $modelName = 'Aliment', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AlimentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     AlimentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AlimentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AlimentQuery) {
            return $criteria;
        }
        $query = new AlimentQuery();
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
     * @return   Aliment|Aliment[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AlimentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AlimentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Aliment A model object, or null if the key is not found
     * @throws   PropelException
     */
     public function findOneByNumaliment($key, $con = null)
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
     * @return   Aliment A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `NUMALIMENT`, `NOMFRALIMENT`, `NOMANALIMENT`, `NUMGENRE` FROM `Aliment` WHERE `NUMALIMENT` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Aliment();
            $obj->hydrate($row);
            AlimentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Aliment|Aliment[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Aliment[]|mixed the list of results, formatted by the current formatter
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
     * @return AlimentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AlimentPeer::NUMALIMENT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AlimentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AlimentPeer::NUMALIMENT, $keys, Criteria::IN);
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
     * @param     mixed $numaliment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlimentQuery The current query, for fluid interface
     */
    public function filterByNumaliment($numaliment = null, $comparison = null)
    {
        if (is_array($numaliment)) {
            $useMinMax = false;
            if (isset($numaliment['min'])) {
                $this->addUsingAlias(AlimentPeer::NUMALIMENT, $numaliment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numaliment['max'])) {
                $this->addUsingAlias(AlimentPeer::NUMALIMENT, $numaliment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlimentPeer::NUMALIMENT, $numaliment, $comparison);
    }

    /**
     * Filter the query on the nomFrAliment column
     *
     * Example usage:
     * <code>
     * $query->filterByNomfraliment('fooValue');   // WHERE nomFrAliment = 'fooValue'
     * $query->filterByNomfraliment('%fooValue%'); // WHERE nomFrAliment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomfraliment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlimentQuery The current query, for fluid interface
     */
    public function filterByNomfraliment($nomfraliment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomfraliment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomfraliment)) {
                $nomfraliment = str_replace('*', '%', $nomfraliment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AlimentPeer::NOMFRALIMENT, $nomfraliment, $comparison);
    }

    /**
     * Filter the query on the nomAnAliment column
     *
     * Example usage:
     * <code>
     * $query->filterByNomanaliment('fooValue');   // WHERE nomAnAliment = 'fooValue'
     * $query->filterByNomanaliment('%fooValue%'); // WHERE nomAnAliment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomanaliment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlimentQuery The current query, for fluid interface
     */
    public function filterByNomanaliment($nomanaliment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomanaliment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomanaliment)) {
                $nomanaliment = str_replace('*', '%', $nomanaliment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AlimentPeer::NOMANALIMENT, $nomanaliment, $comparison);
    }

    /**
     * Filter the query on the numGenre column
     *
     * Example usage:
     * <code>
     * $query->filterByNumgenre('fooValue');   // WHERE numGenre = 'fooValue'
     * $query->filterByNumgenre('%fooValue%'); // WHERE numGenre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numgenre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlimentQuery The current query, for fluid interface
     */
    public function filterByNumgenre($numgenre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numgenre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numgenre)) {
                $numgenre = str_replace('*', '%', $numgenre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AlimentPeer::NUMGENRE, $numgenre, $comparison);
    }

    /**
     * Filter the query by a related Genre object
     *
     * @param   Genre|PropelObjectCollection $genre The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AlimentQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByGenre($genre, $comparison = null)
    {
        if ($genre instanceof Genre) {
            return $this
                ->addUsingAlias(AlimentPeer::NUMGENRE, $genre->getNumgenre(), $comparison);
        } elseif ($genre instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AlimentPeer::NUMGENRE, $genre->toKeyValue('PrimaryKey', 'Numgenre'), $comparison);
        } else {
            throw new PropelException('filterByGenre() only accepts arguments of type Genre or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Genre relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlimentQuery The current query, for fluid interface
     */
    public function joinGenre($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Genre');

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
            $this->addJoinObject($join, 'Genre');
        }

        return $this;
    }

    /**
     * Use the Genre relation Genre object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   GenreQuery A secondary query class using the current class as primary query
     */
    public function useGenreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGenre($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Genre', 'GenreQuery');
    }

    /**
     * Filter the query by a related CompNutri object
     *
     * @param   CompNutri|PropelObjectCollection $compNutri  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AlimentQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCompNutri($compNutri, $comparison = null)
    {
        if ($compNutri instanceof CompNutri) {
            return $this
                ->addUsingAlias(AlimentPeer::NUMALIMENT, $compNutri->getNumaliment(), $comparison);
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
     * @return AlimentQuery The current query, for fluid interface
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
     * @param   Aliment $aliment Object to remove from the list of results
     *
     * @return AlimentQuery The current query, for fluid interface
     */
    public function prune($aliment = null)
    {
        if ($aliment) {
            $this->addUsingAlias(AlimentPeer::NUMALIMENT, $aliment->getNumaliment(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
