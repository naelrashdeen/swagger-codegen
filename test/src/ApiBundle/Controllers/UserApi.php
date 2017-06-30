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


namespace Controllers;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use JMS\Serializer\Serializer;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
// Need proper path to the ServiceInterface...
use UserApiServiceInterface;


class UserApi
{
    private $UserApiService;
    private $validator;
    private $serializer;

    public function setUserApiService(UserApiServiceInterface $service)
    {
        $this->UserApiService = $service;
    }

    public function setValidator(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    public function setSerializer(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * Operation createUser
     * Create user.
     *
     */
    public function createUser(Request $request)
    {
        $inputData = [];
        // Unwrap parameter value
        $inputData['body'] = $request->request->get('body');

        $asserts = [];

        $asserts[] = new Assert\Type("\Model\User");

        // Validate input parameter
        $this->validateData($inputData['body'], $asserts);


        // Call business logic with input data array.
        $output = $this->UserApiService->createUser($inputData);

        $validResponses = [];

        $assertsOutput = [];


        $validResponses['0'] = [
            'message'   => 'successful operation',
            'assertsOutput'  => $assertsOutput
        ];

        if (isset($validResponses[$output->responseCode])) {
            // Get the response type indicated by the business logic
            $response = $validResponses[$output->responseCode];
        } elseif (isset($validResponses['default'])) {
            $response = $validResponses['default'];
        } else {
            // We don't recognize this reponse type from the spec
            return new Response($output->data, $output->responseCode);
        }

        // Check if we have a schema defined for the response type
        if (!empty($response['assertsOutput'])) {
            // Validate response type
            $this->validateData($output->data, $response['assertsOutput']);
        }

        // Determine what to return as the response
        if (!empty($output->data)) {
            $responseData = $this->produceOutput($request, $output->data);
        } else {
            $responseData = $response['message'];
        }

        // Return response
        return new Response($responseData, $output->responseCode);
    }
    /**
     * Operation createUsersWithArrayInput
     * Creates list of users with given input array.
     *
     */
    public function createUsersWithArrayInput(Request $request)
    {
        $inputData = [];
        // Unwrap parameter value
        $inputData['body'] = $request->request->get('body');

        $asserts = [];

        $asserts[] = new Assert\All([
            new Assert\Type("\Model\User[]")
        ]);

        // Validate input parameter
        $this->validateData($inputData['body'], $asserts);


        // Call business logic with input data array.
        $output = $this->UserApiService->createUsersWithArrayInput($inputData);

        $validResponses = [];

        $assertsOutput = [];


        $validResponses['0'] = [
            'message'   => 'successful operation',
            'assertsOutput'  => $assertsOutput
        ];

        if (isset($validResponses[$output->responseCode])) {
            // Get the response type indicated by the business logic
            $response = $validResponses[$output->responseCode];
        } elseif (isset($validResponses['default'])) {
            $response = $validResponses['default'];
        } else {
            // We don't recognize this reponse type from the spec
            return new Response($output->data, $output->responseCode);
        }

        // Check if we have a schema defined for the response type
        if (!empty($response['assertsOutput'])) {
            // Validate response type
            $this->validateData($output->data, $response['assertsOutput']);
        }

        // Determine what to return as the response
        if (!empty($output->data)) {
            $responseData = $this->produceOutput($request, $output->data);
        } else {
            $responseData = $response['message'];
        }

        // Return response
        return new Response($responseData, $output->responseCode);
    }
    /**
     * Operation createUsersWithListInput
     * Creates list of users with given input array.
     *
     */
    public function createUsersWithListInput(Request $request)
    {
        $inputData = [];
        // Unwrap parameter value
        $inputData['body'] = $request->request->get('body');

        $asserts = [];

        $asserts[] = new Assert\All([
            new Assert\Type("\Model\User[]")
        ]);

        // Validate input parameter
        $this->validateData($inputData['body'], $asserts);


        // Call business logic with input data array.
        $output = $this->UserApiService->createUsersWithListInput($inputData);

        $validResponses = [];

        $assertsOutput = [];


        $validResponses['0'] = [
            'message'   => 'successful operation',
            'assertsOutput'  => $assertsOutput
        ];

        if (isset($validResponses[$output->responseCode])) {
            // Get the response type indicated by the business logic
            $response = $validResponses[$output->responseCode];
        } elseif (isset($validResponses['default'])) {
            $response = $validResponses['default'];
        } else {
            // We don't recognize this reponse type from the spec
            return new Response($output->data, $output->responseCode);
        }

        // Check if we have a schema defined for the response type
        if (!empty($response['assertsOutput'])) {
            // Validate response type
            $this->validateData($output->data, $response['assertsOutput']);
        }

        // Determine what to return as the response
        if (!empty($output->data)) {
            $responseData = $this->produceOutput($request, $output->data);
        } else {
            $responseData = $response['message'];
        }

        // Return response
        return new Response($responseData, $output->responseCode);
    }
    /**
     * Operation loginUser
     * Logs user into the system.
     *
     * @return string
     */
    public function loginUser(Request $request)
    {
        $inputData = [];
        // Unwrap parameter value
        $inputData['username'] = $request->query->get('username');

        $asserts = [];

        $asserts[] = new Assert\Type("string");

        // Validate input parameter
        $this->validateData($inputData['username'], $asserts);

        // Unwrap parameter value
        $inputData['password'] = $request->query->get('password');

        $asserts = [];

        $asserts[] = new Assert\Type("string");

        // Validate input parameter
        $this->validateData($inputData['password'], $asserts);


        // Call business logic with input data array.
        $output = $this->UserApiService->loginUser($inputData);

        $validResponses = [];

        $assertsOutput = [];


        $validResponses['200'] = [
            'message'   => 'successful operation',
            'assertsOutput'  => $assertsOutput
        ];


        $validResponses['400'] = [
            'message'   => 'Invalid username/password supplied',
            'assertsOutput'  => $assertsOutput
        ];

        if (isset($validResponses[$output->responseCode])) {
            // Get the response type indicated by the business logic
            $response = $validResponses[$output->responseCode];
        } elseif (isset($validResponses['default'])) {
            $response = $validResponses['default'];
        } else {
            // We don't recognize this reponse type from the spec
            return new Response($output->data, $output->responseCode);
        }

        // Check if we have a schema defined for the response type
        if (!empty($response['assertsOutput'])) {
            // Validate response type
            $this->validateData($output->data, $response['assertsOutput']);
        }

        // Determine what to return as the response
        if (!empty($output->data)) {
            $responseData = $this->produceOutput($request, $output->data);
        } else {
            $responseData = $response['message'];
        }

        // Return response
        return new Response($responseData, $output->responseCode);
    }
    /**
     * Operation logoutUser
     * Logs out current logged in user session.
     *
     */
    public function logoutUser(Request $request)
    {
        $inputData = [];

        // Call business logic with input data array.
        $output = $this->UserApiService->logoutUser($inputData);

        $validResponses = [];

        $assertsOutput = [];


        $validResponses['0'] = [
            'message'   => 'successful operation',
            'assertsOutput'  => $assertsOutput
        ];

        if (isset($validResponses[$output->responseCode])) {
            // Get the response type indicated by the business logic
            $response = $validResponses[$output->responseCode];
        } elseif (isset($validResponses['default'])) {
            $response = $validResponses['default'];
        } else {
            // We don't recognize this reponse type from the spec
            return new Response($output->data, $output->responseCode);
        }

        // Check if we have a schema defined for the response type
        if (!empty($response['assertsOutput'])) {
            // Validate response type
            $this->validateData($output->data, $response['assertsOutput']);
        }

        // Determine what to return as the response
        if (!empty($output->data)) {
            $responseData = $this->produceOutput($request, $output->data);
        } else {
            $responseData = $response['message'];
        }

        // Return response
        return new Response($responseData, $output->responseCode);
    }
    /**
     * Operation deleteUser
     * Delete user.
     *
     * @param string $username The name that needs to be deleted (required)
     */
    public function deleteUser(Request $request, $username)
    {
        $inputData = [];
        // Unwrap parameter value
        $inputData['username'] = $username;

        $asserts = [];

        $asserts[] = new Assert\Type("string");

        // Validate input parameter
        $this->validateData($inputData['username'], $asserts);


        // Call business logic with input data array.
        $output = $this->UserApiService->deleteUser($inputData);

        $validResponses = [];

        $assertsOutput = [];


        $validResponses['400'] = [
            'message'   => 'Invalid username supplied',
            'assertsOutput'  => $assertsOutput
        ];


        $validResponses['404'] = [
            'message'   => 'User not found',
            'assertsOutput'  => $assertsOutput
        ];

        if (isset($validResponses[$output->responseCode])) {
            // Get the response type indicated by the business logic
            $response = $validResponses[$output->responseCode];
        } elseif (isset($validResponses['default'])) {
            $response = $validResponses['default'];
        } else {
            // We don't recognize this reponse type from the spec
            return new Response($output->data, $output->responseCode);
        }

        // Check if we have a schema defined for the response type
        if (!empty($response['assertsOutput'])) {
            // Validate response type
            $this->validateData($output->data, $response['assertsOutput']);
        }

        // Determine what to return as the response
        if (!empty($output->data)) {
            $responseData = $this->produceOutput($request, $output->data);
        } else {
            $responseData = $response['message'];
        }

        // Return response
        return new Response($responseData, $output->responseCode);
    }
    /**
     * Operation getUserByName
     * Get user by user name.
     *
     * @param string $username The name that needs to be fetched. Use user1 for testing.  (required)
     * @return \Model\User
     */
    public function getUserByName(Request $request, $username)
    {
        $inputData = [];
        // Unwrap parameter value
        $inputData['username'] = $username;

        $asserts = [];

        $asserts[] = new Assert\Type("string");

        // Validate input parameter
        $this->validateData($inputData['username'], $asserts);


        // Call business logic with input data array.
        $output = $this->UserApiService->getUserByName($inputData);

        $validResponses = [];

        $assertsOutput = [];


        $validResponses['200'] = [
            'message'   => 'successful operation',
            'assertsOutput'  => $assertsOutput
        ];


        $validResponses['400'] = [
            'message'   => 'Invalid username supplied',
            'assertsOutput'  => $assertsOutput
        ];


        $validResponses['404'] = [
            'message'   => 'User not found',
            'assertsOutput'  => $assertsOutput
        ];

        if (isset($validResponses[$output->responseCode])) {
            // Get the response type indicated by the business logic
            $response = $validResponses[$output->responseCode];
        } elseif (isset($validResponses['default'])) {
            $response = $validResponses['default'];
        } else {
            // We don't recognize this reponse type from the spec
            return new Response($output->data, $output->responseCode);
        }

        // Check if we have a schema defined for the response type
        if (!empty($response['assertsOutput'])) {
            // Validate response type
            $this->validateData($output->data, $response['assertsOutput']);
        }

        // Determine what to return as the response
        if (!empty($output->data)) {
            $responseData = $this->produceOutput($request, $output->data);
        } else {
            $responseData = $response['message'];
        }

        // Return response
        return new Response($responseData, $output->responseCode);
    }
    /**
     * Operation updateUser
     * Updated user.
     *
     * @param string $username name that need to be updated (required)
     */
    public function updateUser(Request $request, $username)
    {
        $inputData = [];
        // Unwrap parameter value
        $inputData['username'] = $username;

        $asserts = [];

        $asserts[] = new Assert\Type("string");

        // Validate input parameter
        $this->validateData($inputData['username'], $asserts);

        // Unwrap parameter value
        $inputData['body'] = $request->request->get('body');

        $asserts = [];

        $asserts[] = new Assert\Type("\Model\User");

        // Validate input parameter
        $this->validateData($inputData['body'], $asserts);


        // Call business logic with input data array.
        $output = $this->UserApiService->updateUser($inputData);

        $validResponses = [];

        $assertsOutput = [];


        $validResponses['400'] = [
            'message'   => 'Invalid user supplied',
            'assertsOutput'  => $assertsOutput
        ];


        $validResponses['404'] = [
            'message'   => 'User not found',
            'assertsOutput'  => $assertsOutput
        ];

        if (isset($validResponses[$output->responseCode])) {
            // Get the response type indicated by the business logic
            $response = $validResponses[$output->responseCode];
        } elseif (isset($validResponses['default'])) {
            $response = $validResponses['default'];
        } else {
            // We don't recognize this reponse type from the spec
            return new Response($output->data, $output->responseCode);
        }

        // Check if we have a schema defined for the response type
        if (!empty($response['assertsOutput'])) {
            // Validate response type
            $this->validateData($output->data, $response['assertsOutput']);
        }

        // Determine what to return as the response
        if (!empty($output->data)) {
            $responseData = $this->produceOutput($request, $output->data);
        } else {
            $responseData = $response['message'];
        }

        // Return response
        return new Response($responseData, $output->responseCode);
    }

    private function validateData($data, $asserts)
    {
        $errors = $this->validator->validate($data, $asserts);

        if (count($errors) > 0) {
            $errorsString = (string)$errors;
            throw new BadRequestHttpException($errorsString);
        }
    }

    private function produceOutput(Request $request, $output)
    {
        $accept = $request->headers->has('accept')?$request->headers->get('accept'):'application/json';
        switch ($accept) {
            case 'application/json':
                return $this->serializer->serialize($output, 'json');
            case 'application/xml':
                return $this->serializer->serialize($output, 'xml');
            default:
                throw new BadRequestHttpException('Unsupported return format requested');
        }
    }
}
