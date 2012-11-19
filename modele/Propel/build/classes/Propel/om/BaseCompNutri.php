<?php


/**
 * Base class that represents a row from the 'CompNutri' table.
 *
 *
 *
 * @package    propel.generator.Propel.om
 */
abstract class BaseCompNutri extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CompNutriPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CompNutriPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the numaliment field.
     * @var        double
     */
    protected $numaliment;

    /**
     * The value for the numconst field.
     * @var        int
     */
    protected $numconst;

    /**
     * The value for the valnutri field.
     * @var        string
     */
    protected $valnutri;

    /**
     * The value for the valminnutri field.
     * @var        double
     */
    protected $valminnutri;

    /**
     * The value for the valmaxnutri field.
     * @var        double
     */
    protected $valmaxnutri;

    /**
     * The value for the nbechantnutri field.
     * @var        double
     */
    protected $nbechantnutri;

    /**
     * The value for the cceurnutri field.
     * @var        string
     */
    protected $cceurnutri;

    /**
     * The value for the numsource field.
     * @var        int
     */
    protected $numsource;

    /**
     * @var        Aliment
     */
    protected $aAliment;

    /**
     * @var        Constituant
     */
    protected $aConstituant;

    /**
     * @var        Source
     */
    protected $aSource;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Get the [numaliment] column value.
     *
     * @return double
     */
    public function getNumaliment()
    {
        return $this->numaliment;
    }

    /**
     * Get the [numconst] column value.
     *
     * @return int
     */
    public function getNumconst()
    {
        return $this->numconst;
    }

    /**
     * Get the [valnutri] column value.
     *
     * @return string
     */
    public function getValnutri()
    {
        return $this->valnutri;
    }

    /**
     * Get the [valminnutri] column value.
     *
     * @return double
     */
    public function getValminnutri()
    {
        return $this->valminnutri;
    }

    /**
     * Get the [valmaxnutri] column value.
     *
     * @return double
     */
    public function getValmaxnutri()
    {
        return $this->valmaxnutri;
    }

    /**
     * Get the [nbechantnutri] column value.
     *
     * @return double
     */
    public function getNbechantnutri()
    {
        return $this->nbechantnutri;
    }

    /**
     * Get the [cceurnutri] column value.
     *
     * @return string
     */
    public function getCceurnutri()
    {
        return $this->cceurnutri;
    }

    /**
     * Get the [numsource] column value.
     *
     * @return int
     */
    public function getNumsource()
    {
        return $this->numsource;
    }

    /**
     * Set the value of [numaliment] column.
     *
     * @param double $v new value
     * @return CompNutri The current object (for fluent API support)
     */
    public function setNumaliment($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->numaliment !== $v) {
            $this->numaliment = $v;
            $this->modifiedColumns[] = CompNutriPeer::NUMALIMENT;
        }

        if ($this->aAliment !== null && $this->aAliment->getNumaliment() !== $v) {
            $this->aAliment = null;
        }


        return $this;
    } // setNumaliment()

    /**
     * Set the value of [numconst] column.
     *
     * @param int $v new value
     * @return CompNutri The current object (for fluent API support)
     */
    public function setNumconst($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->numconst !== $v) {
            $this->numconst = $v;
            $this->modifiedColumns[] = CompNutriPeer::NUMCONST;
        }

        if ($this->aConstituant !== null && $this->aConstituant->getNumconst() !== $v) {
            $this->aConstituant = null;
        }


        return $this;
    } // setNumconst()

    /**
     * Set the value of [valnutri] column.
     *
     * @param string $v new value
     * @return CompNutri The current object (for fluent API support)
     */
    public function setValnutri($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->valnutri !== $v) {
            $this->valnutri = $v;
            $this->modifiedColumns[] = CompNutriPeer::VALNUTRI;
        }


        return $this;
    } // setValnutri()

    /**
     * Set the value of [valminnutri] column.
     *
     * @param double $v new value
     * @return CompNutri The current object (for fluent API support)
     */
    public function setValminnutri($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->valminnutri !== $v) {
            $this->valminnutri = $v;
            $this->modifiedColumns[] = CompNutriPeer::VALMINNUTRI;
        }


        return $this;
    } // setValminnutri()

    /**
     * Set the value of [valmaxnutri] column.
     *
     * @param double $v new value
     * @return CompNutri The current object (for fluent API support)
     */
    public function setValmaxnutri($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->valmaxnutri !== $v) {
            $this->valmaxnutri = $v;
            $this->modifiedColumns[] = CompNutriPeer::VALMAXNUTRI;
        }


        return $this;
    } // setValmaxnutri()

    /**
     * Set the value of [nbechantnutri] column.
     *
     * @param double $v new value
     * @return CompNutri The current object (for fluent API support)
     */
    public function setNbechantnutri($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->nbechantnutri !== $v) {
            $this->nbechantnutri = $v;
            $this->modifiedColumns[] = CompNutriPeer::NBECHANTNUTRI;
        }


        return $this;
    } // setNbechantnutri()

    /**
     * Set the value of [cceurnutri] column.
     *
     * @param string $v new value
     * @return CompNutri The current object (for fluent API support)
     */
    public function setCceurnutri($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cceurnutri !== $v) {
            $this->cceurnutri = $v;
            $this->modifiedColumns[] = CompNutriPeer::CCEURNUTRI;
        }


        return $this;
    } // setCceurnutri()

    /**
     * Set the value of [numsource] column.
     *
     * @param int $v new value
     * @return CompNutri The current object (for fluent API support)
     */
    public function setNumsource($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->numsource !== $v) {
            $this->numsource = $v;
            $this->modifiedColumns[] = CompNutriPeer::NUMSOURCE;
        }

        if ($this->aSource !== null && $this->aSource->getNumsource() !== $v) {
            $this->aSource = null;
        }


        return $this;
    } // setNumsource()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->numaliment = ($row[$startcol + 0] !== null) ? (double) $row[$startcol + 0] : null;
            $this->numconst = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->valnutri = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->valminnutri = ($row[$startcol + 3] !== null) ? (double) $row[$startcol + 3] : null;
            $this->valmaxnutri = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->nbechantnutri = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->cceurnutri = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->numsource = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 8; // 8 = CompNutriPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CompNutri object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aAliment !== null && $this->numaliment !== $this->aAliment->getNumaliment()) {
            $this->aAliment = null;
        }
        if ($this->aConstituant !== null && $this->numconst !== $this->aConstituant->getNumconst()) {
            $this->aConstituant = null;
        }
        if ($this->aSource !== null && $this->numsource !== $this->aSource->getNumsource()) {
            $this->aSource = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CompNutriPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CompNutriPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aAliment = null;
            $this->aConstituant = null;
            $this->aSource = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CompNutriPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CompNutriQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CompNutriPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                CompNutriPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aAliment !== null) {
                if ($this->aAliment->isModified() || $this->aAliment->isNew()) {
                    $affectedRows += $this->aAliment->save($con);
                }
                $this->setAliment($this->aAliment);
            }

            if ($this->aConstituant !== null) {
                if ($this->aConstituant->isModified() || $this->aConstituant->isNew()) {
                    $affectedRows += $this->aConstituant->save($con);
                }
                $this->setConstituant($this->aConstituant);
            }

            if ($this->aSource !== null) {
                if ($this->aSource->isModified() || $this->aSource->isNew()) {
                    $affectedRows += $this->aSource->save($con);
                }
                $this->setSource($this->aSource);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CompNutriPeer::NUMALIMENT)) {
            $modifiedColumns[':p' . $index++]  = '`NUMALIMENT`';
        }
        if ($this->isColumnModified(CompNutriPeer::NUMCONST)) {
            $modifiedColumns[':p' . $index++]  = '`NUMCONST`';
        }
        if ($this->isColumnModified(CompNutriPeer::VALNUTRI)) {
            $modifiedColumns[':p' . $index++]  = '`VALNUTRI`';
        }
        if ($this->isColumnModified(CompNutriPeer::VALMINNUTRI)) {
            $modifiedColumns[':p' . $index++]  = '`VALMINNUTRI`';
        }
        if ($this->isColumnModified(CompNutriPeer::VALMAXNUTRI)) {
            $modifiedColumns[':p' . $index++]  = '`VALMAXNUTRI`';
        }
        if ($this->isColumnModified(CompNutriPeer::NBECHANTNUTRI)) {
            $modifiedColumns[':p' . $index++]  = '`NBECHANTNUTRI`';
        }
        if ($this->isColumnModified(CompNutriPeer::CCEURNUTRI)) {
            $modifiedColumns[':p' . $index++]  = '`CCEURNUTRI`';
        }
        if ($this->isColumnModified(CompNutriPeer::NUMSOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`NUMSOURCE`';
        }

        $sql = sprintf(
            'INSERT INTO `CompNutri` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`NUMALIMENT`':
                        $stmt->bindValue($identifier, $this->numaliment, PDO::PARAM_STR);
                        break;
                    case '`NUMCONST`':
                        $stmt->bindValue($identifier, $this->numconst, PDO::PARAM_INT);
                        break;
                    case '`VALNUTRI`':
                        $stmt->bindValue($identifier, $this->valnutri, PDO::PARAM_STR);
                        break;
                    case '`VALMINNUTRI`':
                        $stmt->bindValue($identifier, $this->valminnutri, PDO::PARAM_STR);
                        break;
                    case '`VALMAXNUTRI`':
                        $stmt->bindValue($identifier, $this->valmaxnutri, PDO::PARAM_STR);
                        break;
                    case '`NBECHANTNUTRI`':
                        $stmt->bindValue($identifier, $this->nbechantnutri, PDO::PARAM_STR);
                        break;
                    case '`CCEURNUTRI`':
                        $stmt->bindValue($identifier, $this->cceurnutri, PDO::PARAM_STR);
                        break;
                    case '`NUMSOURCE`':
                        $stmt->bindValue($identifier, $this->numsource, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        } else {
            $this->validationFailures = $res;

            return false;
        }
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aAliment !== null) {
                if (!$this->aAliment->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aAliment->getValidationFailures());
                }
            }

            if ($this->aConstituant !== null) {
                if (!$this->aConstituant->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aConstituant->getValidationFailures());
                }
            }

            if ($this->aSource !== null) {
                if (!$this->aSource->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSource->getValidationFailures());
                }
            }


            if (($retval = CompNutriPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = CompNutriPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getNumaliment();
                break;
            case 1:
                return $this->getNumconst();
                break;
            case 2:
                return $this->getValnutri();
                break;
            case 3:
                return $this->getValminnutri();
                break;
            case 4:
                return $this->getValmaxnutri();
                break;
            case 5:
                return $this->getNbechantnutri();
                break;
            case 6:
                return $this->getCceurnutri();
                break;
            case 7:
                return $this->getNumsource();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['CompNutri'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CompNutri'][serialize($this->getPrimaryKey())] = true;
        $keys = CompNutriPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getNumaliment(),
            $keys[1] => $this->getNumconst(),
            $keys[2] => $this->getValnutri(),
            $keys[3] => $this->getValminnutri(),
            $keys[4] => $this->getValmaxnutri(),
            $keys[5] => $this->getNbechantnutri(),
            $keys[6] => $this->getCceurnutri(),
            $keys[7] => $this->getNumsource(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aAliment) {
                $result['Aliment'] = $this->aAliment->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aConstituant) {
                $result['Constituant'] = $this->aConstituant->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSource) {
                $result['Source'] = $this->aSource->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = CompNutriPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setNumaliment($value);
                break;
            case 1:
                $this->setNumconst($value);
                break;
            case 2:
                $this->setValnutri($value);
                break;
            case 3:
                $this->setValminnutri($value);
                break;
            case 4:
                $this->setValmaxnutri($value);
                break;
            case 5:
                $this->setNbechantnutri($value);
                break;
            case 6:
                $this->setCceurnutri($value);
                break;
            case 7:
                $this->setNumsource($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = CompNutriPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setNumaliment($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNumconst($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setValnutri($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setValminnutri($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setValmaxnutri($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNbechantnutri($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCceurnutri($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNumsource($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CompNutriPeer::DATABASE_NAME);

        if ($this->isColumnModified(CompNutriPeer::NUMALIMENT)) $criteria->add(CompNutriPeer::NUMALIMENT, $this->numaliment);
        if ($this->isColumnModified(CompNutriPeer::NUMCONST)) $criteria->add(CompNutriPeer::NUMCONST, $this->numconst);
        if ($this->isColumnModified(CompNutriPeer::VALNUTRI)) $criteria->add(CompNutriPeer::VALNUTRI, $this->valnutri);
        if ($this->isColumnModified(CompNutriPeer::VALMINNUTRI)) $criteria->add(CompNutriPeer::VALMINNUTRI, $this->valminnutri);
        if ($this->isColumnModified(CompNutriPeer::VALMAXNUTRI)) $criteria->add(CompNutriPeer::VALMAXNUTRI, $this->valmaxnutri);
        if ($this->isColumnModified(CompNutriPeer::NBECHANTNUTRI)) $criteria->add(CompNutriPeer::NBECHANTNUTRI, $this->nbechantnutri);
        if ($this->isColumnModified(CompNutriPeer::CCEURNUTRI)) $criteria->add(CompNutriPeer::CCEURNUTRI, $this->cceurnutri);
        if ($this->isColumnModified(CompNutriPeer::NUMSOURCE)) $criteria->add(CompNutriPeer::NUMSOURCE, $this->numsource);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(CompNutriPeer::DATABASE_NAME);
        $criteria->add(CompNutriPeer::NUMALIMENT, $this->numaliment);
        $criteria->add(CompNutriPeer::NUMCONST, $this->numconst);

        return $criteria;
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getNumaliment();
        $pks[1] = $this->getNumconst();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setNumaliment($keys[0]);
        $this->setNumconst($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getNumaliment()) && (null === $this->getNumconst());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CompNutri (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNumaliment($this->getNumaliment());
        $copyObj->setNumconst($this->getNumconst());
        $copyObj->setValnutri($this->getValnutri());
        $copyObj->setValminnutri($this->getValminnutri());
        $copyObj->setValmaxnutri($this->getValmaxnutri());
        $copyObj->setNbechantnutri($this->getNbechantnutri());
        $copyObj->setCceurnutri($this->getCceurnutri());
        $copyObj->setNumsource($this->getNumsource());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return CompNutri Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return CompNutriPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CompNutriPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Aliment object.
     *
     * @param             Aliment $v
     * @return CompNutri The current object (for fluent API support)
     * @throws PropelException
     */
    public function setAliment(Aliment $v = null)
    {
        if ($v === null) {
            $this->setNumaliment(NULL);
        } else {
            $this->setNumaliment($v->getNumaliment());
        }

        $this->aAliment = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Aliment object, it will not be re-added.
        if ($v !== null) {
            $v->addCompNutri($this);
        }


        return $this;
    }


    /**
     * Get the associated Aliment object
     *
     * @param PropelPDO $con Optional Connection object.
     * @return Aliment The associated Aliment object.
     * @throws PropelException
     */
    public function getAliment(PropelPDO $con = null)
    {
        if ($this->aAliment === null && ($this->numaliment != 0)) {
            $this->aAliment = AlimentQuery::create()->findPk($this->numaliment, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aAliment->addCompNutris($this);
             */
        }

        return $this->aAliment;
    }

    /**
     * Declares an association between this object and a Constituant object.
     *
     * @param             Constituant $v
     * @return CompNutri The current object (for fluent API support)
     * @throws PropelException
     */
    public function setConstituant(Constituant $v = null)
    {
        if ($v === null) {
            $this->setNumconst(NULL);
        } else {
            $this->setNumconst($v->getNumconst());
        }

        $this->aConstituant = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Constituant object, it will not be re-added.
        if ($v !== null) {
            $v->addCompNutri($this);
        }


        return $this;
    }


    /**
     * Get the associated Constituant object
     *
     * @param PropelPDO $con Optional Connection object.
     * @return Constituant The associated Constituant object.
     * @throws PropelException
     */
    public function getConstituant(PropelPDO $con = null)
    {
        if ($this->aConstituant === null && ($this->numconst !== null)) {
            $this->aConstituant = ConstituantQuery::create()->findPk($this->numconst, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aConstituant->addCompNutris($this);
             */
        }

        return $this->aConstituant;
    }

    /**
     * Declares an association between this object and a Source object.
     *
     * @param             Source $v
     * @return CompNutri The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSource(Source $v = null)
    {
        if ($v === null) {
            $this->setNumsource(NULL);
        } else {
            $this->setNumsource($v->getNumsource());
        }

        $this->aSource = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Source object, it will not be re-added.
        if ($v !== null) {
            $v->addCompNutri($this);
        }


        return $this;
    }


    /**
     * Get the associated Source object
     *
     * @param PropelPDO $con Optional Connection object.
     * @return Source The associated Source object.
     * @throws PropelException
     */
    public function getSource(PropelPDO $con = null)
    {
        if ($this->aSource === null && ($this->numsource !== null)) {
            $this->aSource = SourceQuery::create()
                ->filterByCompNutri($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSource->addCompNutris($this);
             */
        }

        return $this->aSource;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->numaliment = null;
        $this->numconst = null;
        $this->valnutri = null;
        $this->valminnutri = null;
        $this->valmaxnutri = null;
        $this->nbechantnutri = null;
        $this->cceurnutri = null;
        $this->numsource = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
        } // if ($deep)

        $this->aAliment = null;
        $this->aConstituant = null;
        $this->aSource = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CompNutriPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
