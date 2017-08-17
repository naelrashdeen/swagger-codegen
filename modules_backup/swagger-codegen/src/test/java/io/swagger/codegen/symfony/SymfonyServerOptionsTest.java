package io.swagger.codegen.symfony;

import io.swagger.codegen.AbstractOptionsTest;
import io.swagger.codegen.CodegenConfig;
import io.swagger.codegen.languages.SymfonyServerCodegen;
import io.swagger.codegen.options.SymfonyServerOptionsProvider;

import mockit.Expectations;
import mockit.Tested;

public class SymfonyServerOptionsTest extends AbstractOptionsTest {

    @Tested
    private SymfonyServerCodegen clientCodegen;

    public SymfonyServerOptionsTest() {
        super(new SymfonyServerOptionsProvider());
    }

    @Override
    protected CodegenConfig getCodegenConfig() {
        return clientCodegen;
    }

    @SuppressWarnings("unused")
    @Override
    protected void setExpectations() {
        new Expectations(clientCodegen) {{
            clientCodegen.setSortParamsByRequiredFlag(Boolean.valueOf(SymfonyServerOptionsProvider.SORT_PARAMS_VALUE));
            times = 1;
            clientCodegen.setParameterNamingConvention(SymfonyServerOptionsProvider.VARIABLE_NAMING_CONVENTION_VALUE);
            clientCodegen.setModelPackage(SymfonyServerOptionsProvider.MODEL_PACKAGE_VALUE);
            times = 1;
            clientCodegen.setApiPackage(SymfonyServerOptionsProvider.API_PACKAGE_VALUE);
            times = 1;
            times = 1;
            clientCodegen.setInvokerPackage(SymfonyServerOptionsProvider.INVOKER_PACKAGE_VALUE);
            times = 1;
            clientCodegen.setPackagePath(SymfonyServerOptionsProvider.PACKAGE_PATH_VALUE);
            times = 1;
            clientCodegen.setSrcBasePath(SymfonyServerOptionsProvider.SRC_BASE_PATH_VALUE);
            times = 1;
            clientCodegen.setGitUserId(SymfonyServerOptionsProvider.GIT_USER_ID_VALUE);
            times = 1;
            clientCodegen.setGitRepoId(SymfonyServerOptionsProvider.GIT_REPO_ID_VALUE);
            times = 1;
            clientCodegen.setArtifactVersion(SymfonyServerOptionsProvider.ARTIFACT_VERSION_VALUE);
            times = 1;
        }};
    }
}
