<?php


/**
 * Base class that represents a query for the 'Genre' table.
 *
 *
 *
 * @method GenreQuery orderByNumgenre($order = Criteria::ASC) Order by the numGenre column
 * @method GenreQuery orderByNomangenre($order = Criteria::ASC) Order by the nomAnGenre column
 * @method GenreQuery orderByNomfrgenre($order = Criteria::ASC) Order by the nomFrGenre column
 *
 * @method GenreQuery groupByNumgenre() Group by the numGenre column
 * @method GenreQuery groupByNomangenre() Group by the nomAnGenre column
 * @method GenreQuery groupByNomfrgenre() Group by the nomFrGenre column
 *
 * @method GenreQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GenreQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GenreQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GenreQuery leftJoinAliment($relationAlias = null) Adds a LEFT JOIN clause to the query using the Aliment relation
 * @method GenreQuery rightJoinAliment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Aliment relation
 * @method GenreQuery innerJoinAliment($relationAlias = null) Adds a INNER JOIN clause to the query using the Aliment relation
 *
 * @method Genre findOne(PropelPDO $con = null) Return the first Genre matching the query
 * @method Genre findOneOrCreate(PropelPDO $con = null) Return the first Genre matching the query, or a new Genre object populated from the query conditions when no match is found
 *
 * @method Genre findOneByNomangenre(string $nomAnGenre) Return the first Genre filtered by the nomAnGenre column
 * @method Genre findOneByNomfrgenre(string $nomFrGenre) Return the first Genre filtered by the nomFrGenre column
 *
 * @method array findByNumgenre(string $numGenre) Return Genre objects filtered by the numGenre column
 * @method array findByNomangenre(string $nomAnGenre) Return Genre objects filtered by the nomAnGenre column
 * @method array findByNomfrgenre(string $nomFrGenre) Return Genre objects filtered by the nomFrGenre column
 *
 * @package    propel.generator.Propel.om
 */
abstract class BaseGenreQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGenreQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'Propel', $modelName = 'Genre', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GenreQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     GenreQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GenreQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GenreQuery) {
            return $criteria;
        }
        $query = new GenreQuery();
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
     * @return   Genre|Genre[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GenrePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GenrePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Genre A model object, or null if the key is not found
     * @throws   PropelException
     */
     public function findOneByNumgenre($key, $con = null)
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
     * @return   Genre A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `NUMGENRE`, `NOMANGENRE`, `NOMFRGENRE` FROM `Genre` WHERE `NUMGENRE` = :p0';
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
            $obj = new Genre();
            $obj->hydrate($row);
            GenrePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Genre|Genre[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Genre[]|mixed the list of results, formatted by the current formatter
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
     * @return GenreQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GenrePeer::NUMGENRE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GenreQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GenrePeer::NUMGENRE, $keys, Criteria::IN);
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
     * @return GenreQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GenrePeer::NUMGENRE, $numgenre, $comparison);
    }

    /**
     * Filter the query on the nomAnGenre column
     *
     * Example usage:
     * <code>
     * $query->filterByNomangenre('fooValue');   // WHERE nomAnGenre = 'fooValue'
     * $query->filterByNomangenre('%fooValue%'); // WHERE nomAnGenre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomangenre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GenreQuery The current query, for fluid interface
     */
    public function filterByNomangenre($nomangenre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomangenre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomangenre)) {
                $nomangenre = str_replace('*', '%', $nomangenre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GenrePeer::NOMANGENRE, $nomangenre, $comparison);
    }

    /**
     * Filter the query on the nomFrGenre column
     *
     * Example usage:
     * <code>
     * $query->filterByNomfrgenre('fooValue');   // WHERE nomFrGenre = 'fooValue'
     * $query->filterByNomfrgenre('%fooValue%'); // WHERE nomFrGenre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomfrgenre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GenreQuery The current query, for fluid interface
     */
    public function filterByNomfrgenre($nomfrgenre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomfrgenre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomfrgenre)) {
                $nomfrgenre = str_replace('*', '%', $nomfrgenre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GenrePeer::NOMFRGENRE, $nomfrgenre, $comparison);
    }

    /**
     * Filter the query by a related Aliment object
     *
     * @param   Aliment|PropelObjectCollection $aliment  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   GenreQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAliment($aliment, $comparison = null)
    {
        if ($aliment instanceof Aliment) {
            return $this
                ->addUsingAlias(GenrePeer::NUMGENRE, $aliment->getNumgenre(), $comparison);
        } elseif ($aliment instanceof PropelObjectCollection) {
            return $this
                ->useAlimentQuery()
                ->filterByPrimaryKeys($aliment->getPrimaryKeys())
                ->endUse();
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
     * @return GenreQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Genre $genre Object to remove from the list of results
     *
     * @return GenreQuery The current query, for fluid interface
     */
    public function prune($genre = null)
    {
        if ($genre) {
            $this->addUsingAlias(GenrePeer::NUMGENRE, $genre->getNumgenre(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
