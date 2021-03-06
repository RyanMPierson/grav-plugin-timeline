<?php

namespace Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/Muscle
 *
 *
 * -------------------------------- Action ---------------------------------------------
 *
 * @property string|string[] action
 *
 * @method string|string[] getAction() The movement the muscle generates.
 *
 * @method Muscle setAction(string $action ) setAction(string[] $action )The movement the muscle generates.
 *
 *
 * -------------------------------- Antagonist ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Muscle|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Muscle[] antagonist
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Muscle|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Muscle[] getAntagonist() The muscle whose action counteracts the specified muscle.
 *
 * @method Muscle setAntagonist(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Muscle $antagonist ) setAntagonist(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Muscle[] $antagonist )The muscle whose action counteracts the specified muscle.
 *
 *
 * -------------------------------- BloodSupply ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel[] bloodSupply
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel[] getBloodSupply() The blood vessel that carries blood from the heart to the muscle.
 *
 * @method Muscle setBloodSupply(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel $bloodSupply ) setBloodSupply(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel[] $bloodSupply )The blood vessel that carries blood from the heart to the muscle.
 *
 *
 * -------------------------------- Insertion ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure[] insertion
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure[] getInsertion() The place of attachment of a muscle, or what the muscle moves.
 *
 * @method Muscle setInsertion(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure $insertion ) setInsertion(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure[] $insertion )The place of attachment of a muscle, or what the muscle moves.
 *
 *
 * -------------------------------- Nerve ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Nerve|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Nerve[] nerve
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Nerve|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Nerve[] getNerve() The underlying innervation associated with the muscle.
 *
 * @method Muscle setNerve(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Nerve $nerve ) setNerve(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Nerve[] $nerve )The underlying innervation associated with the muscle.
 *
 *
 * -------------------------------- Origin ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure[] origin
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure[] getOrigin() The place or point where a muscle arises.
 *
 * @method Muscle setOrigin(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure $origin ) setOrigin(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure[] $origin )The place or point where a muscle arises.
 *
 *
 */
 class Muscle extends \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure {

 }