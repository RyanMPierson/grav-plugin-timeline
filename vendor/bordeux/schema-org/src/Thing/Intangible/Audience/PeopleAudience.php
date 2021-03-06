<?php

namespace Bordeux\SchemaOrg\Thing\Intangible\Audience;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/PeopleAudience
 *
 *
 * -------------------------------- HealthCondition ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalCondition|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalCondition[] healthCondition
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalCondition|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalCondition[] getHealthCondition() Expectations for health conditions of target audience
 *
 * @method PeopleAudience setHealthCondition(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalCondition $healthCondition ) setHealthCondition(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalCondition[] $healthCondition )Expectations for health conditions of target audience
 *
 *
 * -------------------------------- RequiredGender ---------------------------------------------
 *
 * @property string|string[] requiredGender
 *
 * @method string|string[] getRequiredGender() Audiences defined by a person's gender.
 *
 * @method PeopleAudience setRequiredGender(string $requiredGender ) setRequiredGender(string[] $requiredGender )Audiences defined by a person's gender.
 *
 *
 * -------------------------------- RequiredMaxAge ---------------------------------------------
 *
 * @property Integer|Integer[] requiredMaxAge
 *
 * @method Integer|Integer[] getRequiredMaxAge() Audiences defined by a person's maximum age.
 *
 * @method PeopleAudience setRequiredMaxAge(Integer $requiredMaxAge ) setRequiredMaxAge(Integer[] $requiredMaxAge )Audiences defined by a person's maximum age.
 *
 *
 * -------------------------------- RequiredMinAge ---------------------------------------------
 *
 * @property Integer|Integer[] requiredMinAge
 *
 * @method Integer|Integer[] getRequiredMinAge() Audiences defined by a person's minimum age.
 *
 * @method PeopleAudience setRequiredMinAge(Integer $requiredMinAge ) setRequiredMinAge(Integer[] $requiredMinAge )Audiences defined by a person's minimum age.
 *
 *
 * -------------------------------- SuggestedGender ---------------------------------------------
 *
 * @property string|string[] suggestedGender
 *
 * @method string|string[] getSuggestedGender() The gender of the person or audience.
 *
 * @method PeopleAudience setSuggestedGender(string $suggestedGender ) setSuggestedGender(string[] $suggestedGender )The gender of the person or audience.
 *
 *
 * -------------------------------- SuggestedMaxAge ---------------------------------------------
 *
 * @property Number|Number[] suggestedMaxAge
 *
 * @method Number|Number[] getSuggestedMaxAge() Maximal age recommended for viewing content
 *
 * @method PeopleAudience setSuggestedMaxAge(Number $suggestedMaxAge ) setSuggestedMaxAge(Number[] $suggestedMaxAge )Maximal age recommended for viewing content
 *
 *
 * -------------------------------- SuggestedMinAge ---------------------------------------------
 *
 * @property Number|Number[] suggestedMinAge
 *
 * @method Number|Number[] getSuggestedMinAge() Minimal age recommended for viewing content
 *
 * @method PeopleAudience setSuggestedMinAge(Number $suggestedMinAge ) setSuggestedMinAge(Number[] $suggestedMinAge )Minimal age recommended for viewing content
 *
 *
 */
 class PeopleAudience extends \Bordeux\SchemaOrg\Thing\Intangible\Audience {

 }