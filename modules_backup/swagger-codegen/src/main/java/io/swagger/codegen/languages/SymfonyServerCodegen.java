package io.swagger.codegen.languages;

import io.swagger.codegen.*;
import io.swagger.models.properties.*;

import java.util.*;
import java.io.File;
import java.util.Comparator;
import java.util.HashMap;
import java.util.Map;
import java.util.TreeMap;


public class SymfonyServerCodegen extends AbstractPhpCodegen
{
    @SuppressWarnings("hiding")
    protected String apiVersion = "1.0.0";


    /**
     * Configures the type of generator.
     *
     * @return the CodegenType for this generator
     * @see io.swagger.codegen.CodegenType
     */
    @Override
    public CodegenType getTag() {
        return CodegenType.SERVER;
    }


    /**
     * Configures a friendly name for the generator. This will be used by the generator
     * to select the library with the -l flag.
     *
     * @return the friendly name for the generator
     */
    @Override
    public String getName() {
        return "symfony";
    }

    /**
     * Returns the human-friendly help for the generator. Provide the consumer with help
     * tips, parameters here
     *
     * @return A string value for the help message
     */

    @Override
    public String getHelp() {
        return "Generates a SymfonyServerCodegen server Library.";
    }

    // Contructor called here

    public SymfonyServerCodegen() {

        super();
        embeddedTemplateDir = templateDir = "symfony";

        /**
         * packPath
         */
        invokerPackage = "symfony";
        packagePath = "";
        srcBasePath = "src/ApiBundle";
        apiPackage = "Controllers";
        modelPackage = "Model";

        // template files want to be ignored
        apiTestTemplateFiles.clear();
        apiDocTemplateFiles.clear();
        modelDocTemplateFiles.clear();



        modelTemplateFiles.put("model.mustache", ".php");
        apiTemplateFiles.put("apiServiceInterface.mustache", "ServiceInterface.php");
        additionalProperties.put("apiVersion",apiVersion);

        /**
         * Creates resources directory in the ApiBundle. This contains the config directory with routing and service files.
         */
        supportingFiles.add(new SupportingFile("services.yml.mustache", packagePath + File.separator + srcBasePath + File.separator
        + "Resources" + File.separator + "config", "services.yml"));
        supportingFiles.add(new SupportingFile("routing.yml.mustache", packagePath + File.separator + srcBasePath + File.separator
        + "Resources" + File.separator + "config", "routing.yml"));

        /**
         * Creates ApiBundleExtension class which is needed to call the service.yml file
         */
        supportingFiles.add(new SupportingFile("SwaggerApiExtension.php.mustache", packagePath + File.separator + srcBasePath
        + File.separator + "DependencyInjection", "SwaggerApiExtension.php"));



    }


    // override with any special post-processing
    @Override
    public Map<String, Object> postProcessOperations(Map<String, Object> objs) {
        @SuppressWarnings("unchecked")
        Map<String, Object> objectMap = (Map<String, Object>) objs.get("operations");
        @SuppressWarnings("unchecked")
        List<CodegenOperation> operations = (List<CodegenOperation>) objectMap.get("operation");

        // sort the endpoints in ascending to avoid the route priority issure.
        // https://github.com/swagger-api/swagger-codegen/issues/2643
        Collections.sort(operations, new Comparator<CodegenOperation>() {
            @Override
            public int compare(CodegenOperation lhs, CodegenOperation rhs) {
                return lhs.path.compareTo(rhs.path);
            }
        });

        return objs;
    }
}
