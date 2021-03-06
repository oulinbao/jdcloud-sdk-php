<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'streamcomputer',
        'protocol' => 'json',
//        'serviceFullName' => 'streamcomputer',
//        'serviceId' => 'streamcomputer',
    ],
    'operations' => [
        'DescribeJob' => [
            'name' => 'DescribeJob',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/job',
            ],
            'input' => [ 'shape' => 'DescribeJobRequestShape', ],
            'output' => [ 'shape' => 'DescribeJobResponseShape', ],
        ],
        'AddOrUpdateJob' => [
            'name' => 'AddOrUpdateJob',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/job',
            ],
            'input' => [ 'shape' => 'AddOrUpdateJobRequestShape', ],
            'output' => [ 'shape' => 'AddOrUpdateJobResponseShape', ],
        ],
        'DeleteJob' => [
            'name' => 'DeleteJob',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/job',
            ],
            'input' => [ 'shape' => 'DeleteJobRequestShape', ],
            'output' => [ 'shape' => 'DeleteJobResponseShape', ],
        ],
        'GetJobList' => [
            'name' => 'GetJobList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/jobList',
            ],
            'input' => [ 'shape' => 'GetJobListRequestShape', ],
            'output' => [ 'shape' => 'GetJobListResponseShape', ],
        ],
        'StartJob' => [
            'name' => 'StartJob',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/job:start',
            ],
            'input' => [ 'shape' => 'StartJobRequestShape', ],
            'output' => [ 'shape' => 'StartJobResponseShape', ],
        ],
        'StopJob' => [
            'name' => 'StopJob',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/job:stop',
            ],
            'input' => [ 'shape' => 'StopJobRequestShape', ],
            'output' => [ 'shape' => 'StopJobResponseShape', ],
        ],
        'QueryNamespaces' => [
            'name' => 'QueryNamespaces',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/namespaces',
            ],
            'input' => [ 'shape' => 'QueryNamespacesRequestShape', ],
            'output' => [ 'shape' => 'QueryNamespacesResponseShape', ],
        ],
        'QueryNamespaceDetail' => [
            'name' => 'QueryNamespaceDetail',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/namespaceDetail',
            ],
            'input' => [ 'shape' => 'QueryNamespaceDetailRequestShape', ],
            'output' => [ 'shape' => 'QueryNamespaceDetailResponseShape', ],
        ],
        'CreateNamespace' => [
            'name' => 'CreateNamespace',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/namespace',
            ],
            'input' => [ 'shape' => 'CreateNamespaceRequestShape', ],
            'output' => [ 'shape' => 'CreateNamespaceResponseShape', ],
        ],
        'UpdateNamespace' => [
            'name' => 'UpdateNamespace',
            'http' => [
                'method' => 'PUT',
                'requestUri' => '/v1/regions/{regionId}/namespace',
            ],
            'input' => [ 'shape' => 'UpdateNamespaceRequestShape', ],
            'output' => [ 'shape' => 'UpdateNamespaceResponseShape', ],
        ],
        'DeleteNamespace' => [
            'name' => 'DeleteNamespace',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/namespace',
            ],
            'input' => [ 'shape' => 'DeleteNamespaceRequestShape', ],
            'output' => [ 'shape' => 'DeleteNamespaceResponseShape', ],
        ],
        'DescribeStorage' => [
            'name' => 'DescribeStorage',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/storage',
            ],
            'input' => [ 'shape' => 'DescribeStorageRequestShape', ],
            'output' => [ 'shape' => 'DescribeStorageResponseShape', ],
        ],
        'AddOrUpdateStorage' => [
            'name' => 'AddOrUpdateStorage',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/storage',
            ],
            'input' => [ 'shape' => 'AddOrUpdateStorageRequestShape', ],
            'output' => [ 'shape' => 'AddOrUpdateStorageResponseShape', ],
        ],
        'DeleteStorage' => [
            'name' => 'DeleteStorage',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/storage',
            ],
            'input' => [ 'shape' => 'DeleteStorageRequestShape', ],
            'output' => [ 'shape' => 'DeleteStorageResponseShape', ],
        ],
        'GetStorageList' => [
            'name' => 'GetStorageList',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/storageList',
            ],
            'input' => [ 'shape' => 'GetStorageListRequestShape', ],
            'output' => [ 'shape' => 'GetStorageListResponseShape', ],
        ],
    ],
    'shapes' => [
        'OkInfo' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'StorageParameter' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'pKey' => [ 'type' => 'string', 'locationName' => 'pKey', ],
                'pValue' => [ 'type' => 'string', 'locationName' => 'pValue', ],
                'storageId' => [ 'type' => 'integer', 'locationName' => 'storageId', ],
                'deleted' => [ 'type' => 'byte', 'locationName' => 'deleted', ],
                'createTime' => [ 'type' => 'date', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'date', 'locationName' => 'updateTime', ],
            ],
        ],
        'JobStr' => [
            'type' => 'structure',
            'members' => [
                'namespaceId' => [ 'type' => 'string', 'locationName' => 'namespaceId', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'description' => [ 'type' => 'string', 'locationName' => 'description', ],
                'resourceConsume' => [ 'type' => 'integer', 'locationName' => 'resourceConsume', ],
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'status' => [ 'type' => 'byte', 'locationName' => 'status', ],
                'duration' => [ 'type' => 'integer', 'locationName' => 'duration', ],
                'appName' => [ 'type' => 'string', 'locationName' => 'appName', ],
                'deleted' => [ 'type' => 'byte', 'locationName' => 'deleted', ],
                'createTime' => [ 'type' => 'date', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'date', 'locationName' => 'updateTime', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
            ],
        ],
        'Namespace' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'pods' => [ 'type' => 'string', 'locationName' => 'pods', ],
                'type' => [ 'type' => 'byte', 'locationName' => 'type', ],
                'typeValue' => [ 'type' => 'string', 'locationName' => 'typeValue', ],
                'deleted' => [ 'type' => 'byte', 'locationName' => 'deleted', ],
                'createTime' => [ 'type' => 'date', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'date', 'locationName' => 'updateTime', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'status' => [ 'type' => 'string', 'locationName' => 'status', ],
                'sourceId' => [ 'type' => 'string', 'locationName' => 'sourceId', ],
                'resourceId' => [ 'type' => 'string', 'locationName' => 'resourceId', ],
                'podsUpdateTime' => [ 'type' => 'date', 'locationName' => 'podsUpdateTime', ],
            ],
        ],
        'Storage' => [
            'type' => 'structure',
            'members' => [
                'id' => [ 'type' => 'integer', 'locationName' => 'id', ],
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'uid' => [ 'type' => 'string', 'locationName' => 'uid', ],
                'type' => [ 'type' => 'string', 'locationName' => 'type', ],
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'userName' => [ 'type' => 'string', 'locationName' => 'userName', ],
                'createTime' => [ 'type' => 'date', 'locationName' => 'createTime', ],
                'updateTime' => [ 'type' => 'date', 'locationName' => 'updateTime', ],
                'namespaceId' => [ 'type' => 'string', 'locationName' => 'namespaceId', ],
                'deleted' => [ 'type' => 'byte', 'locationName' => 'deleted', ],
                'storageParameterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageParameter', ], ],
            ],
        ],
        'DescribeJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'namespaceId' => [ 'type' => 'integer', 'locationName' => 'namespaceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'StartJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'namespaceId' => [ 'type' => 'string', 'locationName' => 'namespaceId', ],
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddOrUpdateJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'okInfo' =>  [ 'shape' => 'OkInfo', ],
            ],
        ],
        'StartJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'DeleteJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'namespaceId' => [ 'type' => 'string', 'locationName' => 'namespaceId', ],
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetJobListResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobStr', ], ],
            ],
        ],
        'DescribeJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'jobStr' =>  [ 'shape' => 'JobStr', ],
            ],
        ],
        'AddOrUpdateJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'jobStr' =>  [ 'shape' => 'JobStr', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'GetJobListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'namespaceId' => [ 'type' => 'string', 'locationName' => 'namespaceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
        'StopJobResultShape' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'StopJobRequestShape' => [
            'type' => 'structure',
            'members' => [
                'namespaceId' => [ 'type' => 'string', 'locationName' => 'namespaceId', ],
                'jobId' => [ 'type' => 'integer', 'locationName' => 'jobId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteNamespaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'namespaceId' => [ 'type' => 'integer', 'locationName' => 'namespaceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryNamespacesResultShape' => [
            'type' => 'structure',
            'members' => [
                'namespaces' => [ 'type' => 'list', 'member' => [ 'shape' => 'Namespace', ], ],
            ],
        ],
        'UpdateNamespaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
        'CreateNamespaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'namespaceStr' =>  [ 'shape' => 'Namespace', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryNamespaceDetailResultShape' => [
            'type' => 'structure',
            'members' => [
                'namespace' =>  [ 'shape' => 'Namespace', ],
            ],
        ],
        'DeleteNamespaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
        'UpdateNamespaceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'namespaceStr' =>  [ 'shape' => 'Namespace', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'CreateNamespaceResultShape' => [
            'type' => 'structure',
            'members' => [
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
        'QueryNamespaceDetailRequestShape' => [
            'type' => 'structure',
            'members' => [
                'namespaceId' => [ 'type' => 'integer', 'locationName' => 'namespaceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'QueryNamespacesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'keyword' => [ 'type' => 'string', 'locationName' => 'keyword', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteStorageResultShape' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
            ],
        ],
        'GetStorageListResultShape' => [
            'type' => 'structure',
            'members' => [
                'storageList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Storage', ], ],
            ],
        ],
        'DescribeStorageResultShape' => [
            'type' => 'structure',
            'members' => [
                'data' =>  [ 'shape' => 'Storage', ],
            ],
        ],
        'DescribeStorageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'storageId' => [ 'type' => 'integer', 'locationName' => 'storageId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddOrUpdateStorageResultShape' => [
            'type' => 'structure',
            'members' => [
                'message' => [ 'type' => 'string', 'locationName' => 'message', ],
                'status' => [ 'type' => 'boolean', 'locationName' => 'status', ],
            ],
        ],
        'GetStorageListRequestShape' => [
            'type' => 'structure',
            'members' => [
                'storageType' => [ 'type' => 'string', 'locationName' => 'storageType', ],
                'namespaceId' => [ 'type' => 'string', 'locationName' => 'namespaceId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteStorageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'storageId' => [ 'type' => 'integer', 'locationName' => 'storageId', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'AddOrUpdateStorageRequestShape' => [
            'type' => 'structure',
            'members' => [
                'storageStr' =>  [ 'shape' => 'Storage', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
    ],
];
