<?php

namespace Bordeux\SchemaOrg\Thing\Action\CreateAction;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/CookAction
 *
 *
 * -------------------------------- FoodEstablishment ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization\LocalBusiness\FoodEstablishment|\Bordeux\SchemaOrg\Thing\Organization\LocalBusiness\FoodEstablishment[]|\Bordeux\SchemaOrg\Thing\Place|\Bordeux\SchemaOrg\Thing\Place[] foodEstablishment
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization\LocalBusiness\FoodEstablishment|\Bordeux\SchemaOrg\Thing\Organization\LocalBusiness\FoodEstablishment[]|\Bordeux\SchemaOrg\Thing\Place|\Bordeux\SchemaOrg\Thing\Place[] getFoodEstablishment() A sub property of location. The specific food establishment where the action occurreed.
 *
 * @method CookAction setFoodEstablishment(\Bordeux\SchemaOrg\Thing\Organization\LocalBusiness\FoodEstablishment $foodEstablishment ) setFoodEstablishment(\Bordeux\SchemaOrg\Thing\Organization\LocalBusiness\FoodEstablishment[] $foodEstablishment ) setFoodEstablishment(\Bordeux\SchemaOrg\Thing\Place $foodEstablishment ) setFoodEstablishment(\Bordeux\SchemaOrg\Thing\Place[] $foodEstablishment )A sub property of location. The specific food establishment where the action occurreed.
 *
 *
 * -------------------------------- FoodEvent ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Event\FoodEvent|\Bordeux\SchemaOrg\Thing\Event\FoodEvent[] foodEvent
 *
 * @method \Bordeux\SchemaOrg\Thing\Event\FoodEvent|\Bordeux\SchemaOrg\Thing\Event\FoodEvent[] getFoodEvent() A sub property of location. The specific food event where the action occurred.
 *
 * @method CookAction setFoodEvent(\Bordeux\SchemaOrg\Thing\Event\FoodEvent $foodEvent ) setFoodEvent(\Bordeux\SchemaOrg\Thing\Event\FoodEvent[] $foodEvent )A sub property of location. The specific food event where the action occurred.
 *
 *
 * -------------------------------- Recipe ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\Recipe|\Bordeux\SchemaOrg\Thing\CreativeWork\Recipe[] recipe
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\Recipe|\Bordeux\SchemaOrg\Thing\CreativeWork\Recipe[] getRecipe() A sub property of instrument. The recipe/instructions used to perform the action.
 *
 * @method CookAction setRecipe(\Bordeux\SchemaOrg\Thing\CreativeWork\Recipe $recipe ) setRecipe(\Bordeux\SchemaOrg\Thing\CreativeWork\Recipe[] $recipe )A sub property of instrument. The recipe/instructions used to perform the action.
 *
 *
 */
 class CookAction extends \Bordeux\SchemaOrg\Thing\Action\CreateAction {

 }