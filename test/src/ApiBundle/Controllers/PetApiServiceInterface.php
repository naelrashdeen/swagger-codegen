<?php

/**
 * Swagger Petstore
 * This is a sample server Petstore server.  You can find out more about Swagger at [http://swagger.io](http://swagger.io) or on [irc.freenode.net, #swagger](http://swagger.io/irc/).  For this sample, you can use the api key `special-key` to test the authorization filters.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


namespace App\Http\Controllers;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use JMS\Serializer\Serializer;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

interface PetApiServiceInterface
{

    /**
     * Operation addPet
     *
     * Add a new pet to the store.
     *
     * @param array $inputData Associative array containing the input data
     *
     * @return OutputData 
     */
    public function addPet(array $inputData);
        
    /**
     * Operation updatePet
     *
     * Update an existing pet.
     *
     * @param array $inputData Associative array containing the input data
     *
     * @return OutputData 
     */
    public function updatePet(array $inputData);
        
    /**
     * Operation findPetsByStatus
     *
     * Finds Pets by status.
     *
     * @param array $inputData Associative array containing the input data
     *
     * @return OutputData 
     */
    public function findPetsByStatus(array $inputData);
        
    /**
     * Operation findPetsByTags
     *
     * Finds Pets by tags.
     *
     * @param array $inputData Associative array containing the input data
     *
     * @return OutputData 
     */
    public function findPetsByTags(array $inputData);
        
    /**
     * Operation deletePet
     *
     * Deletes a pet.
     *
     * @param array $inputData Associative array containing the input data
     *
     * @return OutputData 
     */
    public function deletePet(array $inputData);
        
    /**
     * Operation getPetById
     *
     * Find pet by ID.
     *
     * @param array $inputData Associative array containing the input data
     *
     * @return OutputData 
     */
    public function getPetById(array $inputData);
        
    /**
     * Operation updatePetWithForm
     *
     * Updates a pet in the store with form data.
     *
     * @param array $inputData Associative array containing the input data
     *
     * @return OutputData 
     */
    public function updatePetWithForm(array $inputData);
        
    /**
     * Operation uploadFile
     *
     * uploads an image.
     *
     * @param array $inputData Associative array containing the input data
     *
     * @return OutputData 
     */
    public function uploadFile(array $inputData);
        

}
