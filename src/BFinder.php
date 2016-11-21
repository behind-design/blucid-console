<?php

namespace Behind\BLucidConsole;

trait BFinder
{
    /**
     * Get the path to the passed model.
     *
     * @param string $model
     * @return string
     */
    public function findModelPath($model)
    {
        return $this->getSourceDirectoryName() . '/Data/' . $model . '.php';
    }

    /**
     * Get the path to the policies directory.
     *
     * @return string
     */
    public function findPoliciesPath()
    {
        return $this->getSourceDirectoryName() . '/Domains/Policies';
    }

    /**
     * Get the path to the passed policy.
     *
     * @param string $policy
     * @return string
     */
    public function findPolicyPath($policy)
    {
        return $this->findPoliciesPath() . '/' . $policy . '.php';
    }

    /**
     * Get the path to the request directory of a specific service.
     *
     * @param string $service
     * @return string
     */
    public function findRequestsPath($service)
    {
        return $this->findServicePath($service) . '/Http/Requests';
    }

    /**
     * Get the path to a specific request.
     *
     * @param string $service
     * @param string $request
     * @return string
     */
    public function findRequestPath($service, $request)
    {
        return $this->findRequestsPath($service) . '/' . $request . '.php';
    }

    /**
     * Get the namespace for the Models.
     *
     * @return string
     */
    public function findModelNamespace()
    {
        return $this->findRootNamespace() . '\Data';
    }

    /**
     * Get the namespace for Policies
     *
     * @return mixed
     */
    public function findPolicyNamespace()
    {
        return $this->findDomainNamespace('Policies');
    }

    /**
     * Get the requests namespace for the service passed in.
     *
     * @param string $service
     * @return string
     */
    public function findRequestsNamespace($service)
    {
        return $this->findServiceNamespace($service) . '\Http\Requests';
    }
}
