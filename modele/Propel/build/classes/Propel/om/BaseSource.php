<?php


/**
 * Base class that represents a row from the 'Source' table.
 *
 *
 *
 * @package    propel.generator.Propel.om
 */
abstract class BaseSource extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SourcePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SourcePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the numsource field.
     * @var        int
     */
    protected $numsource;

    /**
     * The value for the originesource field.
     * @var        double
     */
    protected $originesource;

    /**
     * The value for the citationsource field.
     * @var        string
     */
    protected $citationsource;

    /**
     * @var        PropelObjectCollection|CompNutri[] Collection to store aggregation of CompNutri objects.
     */
    protected $collCompNutris;
    protected $collCompNutrisPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $compNutrisScheduledForDeletion = null;

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
     * Get the [originesource] column value.
     *
     * @return double
     */
    public function getOriginesource()
    {
        return $this->originesource;
    }

    /**
     * Get the [citationsource] column value.
     *
     * @return string
     */
    public function getCitationsource()
    {
        return $this->citationsource;
    }

    /**
     * Set the value of [numsource] column.
     *
     * @param int $v new value
     * @return Source The current object (for fluent API support)
     */
    public function setNumsource($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->numsource !== $v) {
            $this->numsource = $v;
            $this->modifiedColumns[] = SourcePeer::NUMSOURCE;
        }


        return $this;
    } // setNumsource()

    /**
     * Set the value of [originesource] column.
     *
     * @param double $v new value
     * @return Source The current object (for fluent API support)
     */
    public function setOriginesource($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->originesource !== $v) {
            $this->originesource = $v;
            $this->modifiedColumns[] = SourcePeer::ORIGINESOURCE;
        }


        return $this;
    } // setOriginesource()

    /**
     * Set the value of [citationsource] column.
     *
     * @param string $v new value
     * @return Source The current object (for fluent API support)
     */
    public function setCitationsource($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->citationsource !== $v) {
            $this->citationsource = $v;
            $this->modifiedColumns[] = SourcePeer::CITATIONSOURCE;
        }


        return $this;
    } // setCitationsource()

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

            $this->numsource = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->originesource = ($row[$startcol + 1] !== null) ? (double) $row[$startcol + 1] : null;
            $this->citationsource = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 3; // 3 = SourcePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Source object", $e);
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
            $con = Propel::getConnection(SourcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SourcePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCompNutris = null;

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
            $con = Propel::getConnection(SourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SourceQuery::create()
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
            $con = Propel::getConnection(SourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                SourcePeer::addInstanceToPool($this);
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

            if ($this->compNutrisScheduledForDeletion !== null) {
                if (!$this->compNutrisScheduledForDeletion->isEmpty()) {
                    foreach ($this->compNutrisScheduledForDeletion as $compNutri) {
                        // need to save related object because we set the relation to null
                        $compNutri->save($con);
                    }
                    $this->compNutrisScheduledForDeletion = null;
                }
            }

            if ($this->collCompNutris !== null) {
                foreach ($this->collCompNutris as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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
        if ($this->isColumnModified(SourcePeer::NUMSOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`NUMSOURCE`';
        }
        if ($this->isColumnModified(SourcePeer::ORIGINESOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`ORIGINESOURCE`';
        }
        if ($this->isColumnModified(SourcePeer::CITATIONSOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`CITATIONSOURCE`';
        }

        $sql = sprintf(
            'INSERT INTO `Source` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`NUMSOURCE`':
                        $stmt->bindValue($identifier, $this->numsource, PDO::PARAM_INT);
                        break;
                    case '`ORIGINESOURCE`':
                        $stmt->bindValue($identifier, $this->originesource, PDO::PARAM_STR);
                        break;
                    case '`CITATIONSOURCE`':
                        $stmt->bindValue($identifier, $this->citationsource, PDO::PARAM_STR);
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


            if (($retval = SourcePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCompNutris !== null) {
                    foreach ($this->collCompNutris as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = SourcePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getNumsource();
                break;
            case 1:
                return $this->getOriginesource();
                break;
            case 2:
                return $this->getCitationsource();
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
        if (isset($alreadyDumpedObjects['Source'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Source'][serialize($this->getPrimaryKey())] = true;
        $keys = SourcePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getNumsource(),
            $keys[1] => $this->getOriginesource(),
            $keys[2] => $this->getCitationsource(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collCompNutris) {
                $result['CompNutris'] = $this->collCompNutris->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = SourcePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setNumsource($value);
                break;
            case 1:
                $this->setOriginesource($value);
                break;
            case 2:
                $this->setCitationsource($value);
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
        $keys = SourcePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setNumsource($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOriginesource($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCitationsource($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SourcePeer::DATABASE_NAME);

        if ($this->isColumnModified(SourcePeer::NUMSOURCE)) $criteria->add(SourcePeer::NUMSOURCE, $this->numsource);
        if ($this->isColumnModified(SourcePeer::ORIGINESOURCE)) $criteria->add(SourcePeer::ORIGINESOURCE, $this->originesource);
        if ($this->isColumnModified(SourcePeer::CITATIONSOURCE)) $criteria->add(SourcePeer::CITATIONSOURCE, $this->citationsource);

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
        $criteria = new Criteria(SourcePeer::DATABASE_NAME);
        $criteria->add(SourcePeer::NUMSOURCE, $this->numsource);
        $criteria->add(SourcePeer::ORIGINESOURCE, $this->originesource);

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
        $pks[0] = $this->getNumsource();
        $pks[1] = $this->getOriginesource();

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
        $this->setNumsource($keys[0]);
        $this->setOriginesource($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getNumsource()) && (null === $this->getOriginesource());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Source (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNumsource($this->getNumsource());
        $copyObj->setOriginesource($this->getOriginesource());
        $copyObj->setCitationsource($this->getCitationsource());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCompNutris() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCompNutri($relObj->copy($deepCopy));
                }
            }

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
     * @return Source Clone of current object.
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
     * @return SourcePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SourcePeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('CompNutri' == $relationName) {
            $this->initCompNutris();
        }
    }

    /**
     * Clears out the collCompNutris collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addCompNutris()
     */
    public function clearCompNutris()
    {
        $this->collCompNutris = null; // important to set this to null since that means it is uninitialized
        $this->collCompNutrisPartial = null;
    }

    /**
     * reset is the collCompNutris collection loaded partially
     *
     * @return void
     */
    public function resetPartialCompNutris($v = true)
    {
        $this->collCompNutrisPartial = $v;
    }

    /**
     * Initializes the collCompNutris collection.
     *
     * By default this just sets the collCompNutris collection to an empty array (like clearcollCompNutris());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCompNutris($overrideExisting = true)
    {
        if (null !== $this->collCompNutris && !$overrideExisting) {
            return;
        }
        $this->collCompNutris = new PropelObjectCollection();
        $this->collCompNutris->setModel('CompNutri');
    }

    /**
     * Gets an array of CompNutri objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Source is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CompNutri[] List of CompNutri objects
     * @throws PropelException
     */
    public function getCompNutris($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCompNutrisPartial && !$this->isNew();
        if (null === $this->collCompNutris || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCompNutris) {
                // return empty collection
                $this->initCompNutris();
            } else {
                $collCompNutris = CompNutriQuery::create(null, $criteria)
                    ->filterBySource($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCompNutrisPartial && count($collCompNutris)) {
                      $this->initCompNutris(false);

                      foreach($collCompNutris as $obj) {
                        if (false == $this->collCompNutris->contains($obj)) {
                          $this->collCompNutris->append($obj);
                        }
                      }

                      $this->collCompNutrisPartial = true;
                    }

                    return $collCompNutris;
                }

                if($partial && $this->collCompNutris) {
                    foreach($this->collCompNutris as $obj) {
                        if($obj->isNew()) {
                            $collCompNutris[] = $obj;
                        }
                    }
                }

                $this->collCompNutris = $collCompNutris;
                $this->collCompNutrisPartial = false;
            }
        }

        return $this->collCompNutris;
    }

    /**
     * Sets a collection of CompNutri objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $compNutris A Propel collection.
     * @param PropelPDO $con Optional connection object
     */
    public function setCompNutris(PropelCollection $compNutris, PropelPDO $con = null)
    {
        $this->compNutrisScheduledForDeletion = $this->getCompNutris(new Criteria(), $con)->diff($compNutris);

        foreach ($this->compNutrisScheduledForDeletion as $compNutriRemoved) {
            $compNutriRemoved->setSource(null);
        }

        $this->collCompNutris = null;
        foreach ($compNutris as $compNutri) {
            $this->addCompNutri($compNutri);
        }

        $this->collCompNutris = $compNutris;
        $this->collCompNutrisPartial = false;
    }

    /**
     * Returns the number of related CompNutri objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CompNutri objects.
     * @throws PropelException
     */
    public function countCompNutris(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCompNutrisPartial && !$this->isNew();
        if (null === $this->collCompNutris || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCompNutris) {
                return 0;
            } else {
                if($partial && !$criteria) {
                    return count($this->getCompNutris());
                }
                $query = CompNutriQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterBySource($this)
                    ->count($con);
            }
        } else {
            return count($this->collCompNutris);
        }
    }

    /**
     * Method called to associate a CompNutri object to this object
     * through the CompNutri foreign key attribute.
     *
     * @param    CompNutri $l CompNutri
     * @return Source The current object (for fluent API support)
     */
    public function addCompNutri(CompNutri $l)
    {
        if ($this->collCompNutris === null) {
            $this->initCompNutris();
            $this->collCompNutrisPartial = true;
        }
        if (!in_array($l, $this->collCompNutris->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCompNutri($l);
        }

        return $this;
    }

    /**
     * @param	CompNutri $compNutri The compNutri object to add.
     */
    protected function doAddCompNutri($compNutri)
    {
        $this->collCompNutris[]= $compNutri;
        $compNutri->setSource($this);
    }

    /**
     * @param	CompNutri $compNutri The compNutri object to remove.
     */
    public function removeCompNutri($compNutri)
    {
        if ($this->getCompNutris()->contains($compNutri)) {
            $this->collCompNutris->remove($this->collCompNutris->search($compNutri));
            if (null === $this->compNutrisScheduledForDeletion) {
                $this->compNutrisScheduledForDeletion = clone $this->collCompNutris;
                $this->compNutrisScheduledForDeletion->clear();
            }
            $this->compNutrisScheduledForDeletion[]= $compNutri;
            $compNutri->setSource(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Source is new, it will return
     * an empty collection; or if this Source has previously
     * been saved, it will retrieve related CompNutris from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Source.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CompNutri[] List of CompNutri objects
     */
    public function getCompNutrisJoinAliment($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompNutriQuery::create(null, $criteria);
        $query->joinWith('Aliment', $join_behavior);

        return $this->getCompNutris($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Source is new, it will return
     * an empty collection; or if this Source has previously
     * been saved, it will retrieve related CompNutris from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Source.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CompNutri[] List of CompNutri objects
     */
    public function getCompNutrisJoinConstituant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompNutriQuery::create(null, $criteria);
        $query->joinWith('Constituant', $join_behavior);

        return $this->getCompNutris($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->numsource = null;
        $this->originesource = null;
        $this->citationsource = null;
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
            if ($this->collCompNutris) {
                foreach ($this->collCompNutris as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collCompNutris instanceof PropelCollection) {
            $this->collCompNutris->clearIterator();
        }
        $this->collCompNutris = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SourcePeer::DEFAULT_STRING_FORMAT);
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
