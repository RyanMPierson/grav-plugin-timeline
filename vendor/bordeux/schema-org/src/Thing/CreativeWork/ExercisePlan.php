<?php

namespace Bordeux\SchemaOrg\Thing\CreativeWork;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/ExercisePlan
 *
 *
 * -------------------------------- Code ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalCode|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalCode[] code
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalCode|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalCode[] getCode() A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
 *
 * @method ExercisePlan setCode(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalCode $code ) setCode(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalCode[] $code )A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
 *
 *
 * -------------------------------- Guideline ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalGuideline|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalGuideline[] guideline
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalGuideline|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalGuideline[] getGuideline() A medical guideline related to this entity.
 *
 * @method ExercisePlan setGuideline(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalGuideline $guideline ) setGuideline(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalGuideline[] $guideline )A medical guideline related to this entity.
 *
 *
 * -------------------------------- MedicineSystem ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicineSystem|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicineSystem[] medicineSystem
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicineSystem|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicineSystem[] getMedicineSystem() The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
 *
 * @method ExercisePlan setMedicineSystem(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicineSystem $medicineSystem ) setMedicineSystem(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicineSystem[] $medicineSystem )The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
 *
 *
 * -------------------------------- RecognizingAuthority ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Organization[] recognizingAuthority
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Organization[] getRecognizingAuthority() If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
 *
 * @method ExercisePlan setRecognizingAuthority(\Bordeux\SchemaOrg\Thing\Organization $recognizingAuthority ) setRecognizingAuthority(\Bordeux\SchemaOrg\Thing\Organization[] $recognizingAuthority )If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
 *
 *
 * -------------------------------- RelevantSpecialty ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty[] relevantSpecialty
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty[] getRelevantSpecialty() If applicable, a medical specialty in which this entity is relevant.
 *
 * @method ExercisePlan setRelevantSpecialty(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty $relevantSpecialty ) setRelevantSpecialty(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty[] $relevantSpecialty )If applicable, a medical specialty in which this entity is relevant.
 *
 *
 * -------------------------------- Study ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalStudy|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalStudy[] study
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalStudy|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalStudy[] getStudy() A medical study or trial related to this entity.
 *
 * @method ExercisePlan setStudy(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalStudy $study ) setStudy(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalStudy[] $study )A medical study or trial related to this entity.
 *
 *
 * -------------------------------- AdverseOutcome ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity|\Bordeux\SchemaOrg\Thing\MedicalEntity[] adverseOutcome
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity|\Bordeux\SchemaOrg\Thing\MedicalEntity[] getAdverseOutcome() A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
 *
 * @method ExercisePlan setAdverseOutcome(\Bordeux\SchemaOrg\Thing\MedicalEntity $adverseOutcome ) setAdverseOutcome(\Bordeux\SchemaOrg\Thing\MedicalEntity[] $adverseOutcome )A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
 *
 *
 * -------------------------------- Contraindication ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalContraindication|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalContraindication[] contraindication
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalContraindication|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalContraindication[] getContraindication() A contraindication for this therapy.
 *
 * @method ExercisePlan setContraindication(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalContraindication $contraindication ) setContraindication(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalContraindication[] $contraindication )A contraindication for this therapy.
 *
 *
 * -------------------------------- DuplicateTherapy ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy[] duplicateTherapy
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy[] getDuplicateTherapy() A therapy that duplicates or overlaps this one.
 *
 * @method ExercisePlan setDuplicateTherapy(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy $duplicateTherapy ) setDuplicateTherapy(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy[] $duplicateTherapy )A therapy that duplicates or overlaps this one.
 *
 *
 * -------------------------------- Indication ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIndication|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIndication[] indication
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIndication|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIndication[] getIndication() A factor that indicates use of this therapy for treatment and/or prevention of a condition, symptom, etc. For therapies such as drugs, indications can include both officially-approved indications as well as off-label uses. These can be distinguished by using the ApprovedIndication subtype of MedicalIndication.
 *
 * @method ExercisePlan setIndication(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIndication $indication ) setIndication(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIndication[] $indication )A factor that indicates use of this therapy for treatment and/or prevention of a condition, symptom, etc. For therapies such as drugs, indications can include both officially-approved indications as well as off-label uses. These can be distinguished by using the ApprovedIndication subtype of MedicalIndication.
 *
 *
 * -------------------------------- SeriousAdverseOutcome ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity|\Bordeux\SchemaOrg\Thing\MedicalEntity[] seriousAdverseOutcome
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity|\Bordeux\SchemaOrg\Thing\MedicalEntity[] getSeriousAdverseOutcome() A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
 *
 * @method ExercisePlan setSeriousAdverseOutcome(\Bordeux\SchemaOrg\Thing\MedicalEntity $seriousAdverseOutcome ) setSeriousAdverseOutcome(\Bordeux\SchemaOrg\Thing\MedicalEntity[] $seriousAdverseOutcome )A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
 *
 *
 * -------------------------------- AssociatedAnatomy ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem[]|\Bordeux\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy|\Bordeux\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy[]|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure[] associatedAnatomy
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem[]|\Bordeux\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy|\Bordeux\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy[]|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure|\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure[] getAssociatedAnatomy() The anatomy of the underlying organ system or structures associated with this entity.
 *
 * @method ExercisePlan setAssociatedAnatomy(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem $associatedAnatomy ) setAssociatedAnatomy(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem[] $associatedAnatomy ) setAssociatedAnatomy(\Bordeux\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy $associatedAnatomy ) setAssociatedAnatomy(\Bordeux\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy[] $associatedAnatomy ) setAssociatedAnatomy(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure $associatedAnatomy ) setAssociatedAnatomy(\Bordeux\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure[] $associatedAnatomy )The anatomy of the underlying organ system or structures associated with this entity.
 *
 *
 * -------------------------------- Category ---------------------------------------------
 *
 * @property string|string[]|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalActivityCategory|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalActivityCategory[]|\Bordeux\SchemaOrg\\Thing|\Bordeux\SchemaOrg\\Thing[] category
 *
 * @method string|string[]|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalActivityCategory|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalActivityCategory[]|\Bordeux\SchemaOrg\\Thing|\Bordeux\SchemaOrg\\Thing[] getCategory() A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
 *
 * @method ExercisePlan setCategory(string $category ) setCategory(string[] $category ) setCategory(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalActivityCategory $category ) setCategory(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\PhysicalActivityCategory[] $category ) setCategory(\Bordeux\SchemaOrg\\Thing $category ) setCategory(\Bordeux\SchemaOrg\\Thing[] $category )A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
 *
 *
 * -------------------------------- Epidemiology ---------------------------------------------
 *
 * @property string|string[] epidemiology
 *
 * @method string|string[] getEpidemiology() The characteristics of associated patients, such as age, gender, race etc.
 *
 * @method ExercisePlan setEpidemiology(string $epidemiology ) setEpidemiology(string[] $epidemiology )The characteristics of associated patients, such as age, gender, race etc.
 *
 *
 * -------------------------------- Pathophysiology ---------------------------------------------
 *
 * @property string|string[] pathophysiology
 *
 * @method string|string[] getPathophysiology() Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
 *
 * @method ExercisePlan setPathophysiology(string $pathophysiology ) setPathophysiology(string[] $pathophysiology )Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
 *
 *
 * -------------------------------- ActivityDuration ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration|\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration[] activityDuration
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration|\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration[] getActivityDuration() Length of time to engage in the activity.
 *
 * @method ExercisePlan setActivityDuration(\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration $activityDuration ) setActivityDuration(\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration[] $activityDuration )Length of time to engage in the activity.
 *
 *
 * -------------------------------- ActivityFrequency ---------------------------------------------
 *
 * @property string|string[] activityFrequency
 *
 * @method string|string[] getActivityFrequency() How often one should engage in the activity.
 *
 * @method ExercisePlan setActivityFrequency(string $activityFrequency ) setActivityFrequency(string[] $activityFrequency )How often one should engage in the activity.
 *
 *
 * -------------------------------- AdditionalVariable ---------------------------------------------
 *
 * @property string|string[] additionalVariable
 *
 * @method string|string[] getAdditionalVariable() Any additional component of the exercise prescription that may need to be articulated to the patient. This may include the order of exercises, the number of repetitions of movement, quantitative distance, progressions over time, etc.
 *
 * @method ExercisePlan setAdditionalVariable(string $additionalVariable ) setAdditionalVariable(string[] $additionalVariable )Any additional component of the exercise prescription that may need to be articulated to the patient. This may include the order of exercises, the number of repetitions of movement, quantitative distance, progressions over time, etc.
 *
 *
 * -------------------------------- ExerciseType ---------------------------------------------
 *
 * @property string|string[] exerciseType
 *
 * @method string|string[] getExerciseType() Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
 *
 * @method ExercisePlan setExerciseType(string $exerciseType ) setExerciseType(string[] $exerciseType )Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
 *
 *
 * -------------------------------- Intensity ---------------------------------------------
 *
 * @property string|string[] intensity
 *
 * @method string|string[] getIntensity() Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of the movement.
 *
 * @method ExercisePlan setIntensity(string $intensity ) setIntensity(string[] $intensity )Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of the movement.
 *
 *
 * -------------------------------- Repetitions ---------------------------------------------
 *
 * @property Number|Number[] repetitions
 *
 * @method Number|Number[] getRepetitions() Number of times one should repeat the activity.
 *
 * @method ExercisePlan setRepetitions(Number $repetitions ) setRepetitions(Number[] $repetitions )Number of times one should repeat the activity.
 *
 *
 * -------------------------------- RestPeriods ---------------------------------------------
 *
 * @property string|string[] restPeriods
 *
 * @method string|string[] getRestPeriods() How often one should break from the activity.
 *
 * @method ExercisePlan setRestPeriods(string $restPeriods ) setRestPeriods(string[] $restPeriods )How often one should break from the activity.
 *
 *
 * -------------------------------- Workload ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Energy|\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Energy[] workload
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Energy|\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Energy[] getWorkload() Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
 *
 * @method ExercisePlan setWorkload(\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Energy $workload ) setWorkload(\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Energy[] $workload )Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
 *
 *
 */
 class ExercisePlan extends \Bordeux\SchemaOrg\Thing\CreativeWork {

 }