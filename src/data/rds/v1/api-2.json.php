<?php
// This file was auto-generated
return [
//    'version' => '',
    'metadata' =>
    [
//        'apiVersion' => '',
//        'endpointPrefix' => 'rds',
        'protocol' => 'json',
//        'serviceFullName' => 'rds',
//        'serviceId' => 'rds',
    ],
    'operations' => [
        'DescribeAccounts' => [
            'name' => 'DescribeAccounts',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts',
            ],
            'input' => [ 'shape' => 'DescribeAccountsRequestShape', ],
            'output' => [ 'shape' => 'DescribeAccountsResponseShape', ],
        ],
        'CreateAccount' => [
            'name' => 'CreateAccount',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts',
            ],
            'input' => [ 'shape' => 'CreateAccountRequestShape', ],
            'output' => [ 'shape' => 'CreateAccountResponseShape', ],
        ],
        'DeleteAccount' => [
            'name' => 'DeleteAccount',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts/{accountName}',
            ],
            'input' => [ 'shape' => 'DeleteAccountRequestShape', ],
            'output' => [ 'shape' => 'DeleteAccountResponseShape', ],
        ],
        'GrantPrivilege' => [
            'name' => 'GrantPrivilege',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts/{accountName}:grantPrivilege',
            ],
            'input' => [ 'shape' => 'GrantPrivilegeRequestShape', ],
            'output' => [ 'shape' => 'GrantPrivilegeResponseShape', ],
        ],
        'ResetPassword' => [
            'name' => 'ResetPassword',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/accounts/{accountName}:resetPassword',
            ],
            'input' => [ 'shape' => 'ResetPasswordRequestShape', ],
            'output' => [ 'shape' => 'ResetPasswordResponseShape', ],
        ],
        'DescribeAudit' => [
            'name' => 'DescribeAudit',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit',
            ],
            'input' => [ 'shape' => 'DescribeAuditRequestShape', ],
            'output' => [ 'shape' => 'DescribeAuditResponseShape', ],
        ],
        'CreateAudit' => [
            'name' => 'CreateAudit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit',
            ],
            'input' => [ 'shape' => 'CreateAuditRequestShape', ],
            'output' => [ 'shape' => 'CreateAuditResponseShape', ],
        ],
        'DeleteAudit' => [
            'name' => 'DeleteAudit',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit',
            ],
            'input' => [ 'shape' => 'DeleteAuditRequestShape', ],
            'output' => [ 'shape' => 'DeleteAuditResponseShape', ],
        ],
        'GetAuditOptions' => [
            'name' => 'GetAuditOptions',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:getOptions',
            ],
            'input' => [ 'shape' => 'GetAuditOptionsRequestShape', ],
            'output' => [ 'shape' => 'GetAuditOptionsResponseShape', ],
        ],
        'ModifyAudit' => [
            'name' => 'ModifyAudit',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:modifyAudit',
            ],
            'input' => [ 'shape' => 'ModifyAuditRequestShape', ],
            'output' => [ 'shape' => 'ModifyAuditResponseShape', ],
        ],
        'GetAuditFiles' => [
            'name' => 'GetAuditFiles',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:getAuditFiles',
            ],
            'input' => [ 'shape' => 'GetAuditFilesRequestShape', ],
            'output' => [ 'shape' => 'GetAuditFilesResponseShape', ],
        ],
        'GetAuditDownloadURL' => [
            'name' => 'GetAuditDownloadURL',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/audit:getAuditDownloadURL',
            ],
            'input' => [ 'shape' => 'GetAuditDownloadURLRequestShape', ],
            'output' => [ 'shape' => 'GetAuditDownloadURLResponseShape', ],
        ],
        'DescribeBackups' => [
            'name' => 'DescribeBackups',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/backups',
            ],
            'input' => [ 'shape' => 'DescribeBackupsRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupsResponseShape', ],
        ],
        'CreateBackup' => [
            'name' => 'CreateBackup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/backups',
            ],
            'input' => [ 'shape' => 'CreateBackupRequestShape', ],
            'output' => [ 'shape' => 'CreateBackupResponseShape', ],
        ],
        'DeleteBackup' => [
            'name' => 'DeleteBackup',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/backups/{backupId}',
            ],
            'input' => [ 'shape' => 'DeleteBackupRequestShape', ],
            'output' => [ 'shape' => 'DeleteBackupResponseShape', ],
        ],
        'DescribeBackupDownloadURL' => [
            'name' => 'DescribeBackupDownloadURL',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/backups/{backupId}/downloadURLs',
            ],
            'input' => [ 'shape' => 'DescribeBackupDownloadURLRequestShape', ],
            'output' => [ 'shape' => 'DescribeBackupDownloadURLResponseShape', ],
        ],
        'DescribeDatabases' => [
            'name' => 'DescribeDatabases',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases',
            ],
            'input' => [ 'shape' => 'DescribeDatabasesRequestShape', ],
            'output' => [ 'shape' => 'DescribeDatabasesResponseShape', ],
        ],
        'CreateDatabase' => [
            'name' => 'CreateDatabase',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases',
            ],
            'input' => [ 'shape' => 'CreateDatabaseRequestShape', ],
            'output' => [ 'shape' => 'CreateDatabaseResponseShape', ],
        ],
        'DeleteDatabase' => [
            'name' => 'DeleteDatabase',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases/{dbName}',
            ],
            'input' => [ 'shape' => 'DeleteDatabaseRequestShape', ],
            'output' => [ 'shape' => 'DeleteDatabaseResponseShape', ],
        ],
        'RestoreDatabaseFromBackup' => [
            'name' => 'RestoreDatabaseFromBackup',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases/{dbName}:restoreDatabaseFromBackup',
            ],
            'input' => [ 'shape' => 'RestoreDatabaseFromBackupRequestShape', ],
            'output' => [ 'shape' => 'RestoreDatabaseFromBackupResponseShape', ],
        ],
        'RestoreDatabaseFromFile' => [
            'name' => 'RestoreDatabaseFromFile',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases/{dbName}:restoreDatabaseFromFile',
            ],
            'input' => [ 'shape' => 'RestoreDatabaseFromFileRequestShape', ],
            'output' => [ 'shape' => 'RestoreDatabaseFromFileResponseShape', ],
        ],
        'RestoreDatabaseFromOSS' => [
            'name' => 'RestoreDatabaseFromOSS',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/databases/{dbName}:restoreDatabaseFromOSS',
            ],
            'input' => [ 'shape' => 'RestoreDatabaseFromOSSRequestShape', ],
            'output' => [ 'shape' => 'RestoreDatabaseFromOSSResponseShape', ],
        ],
        'DescribeErrorLogs' => [
            'name' => 'DescribeErrorLogs',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/errorLogs',
            ],
            'input' => [ 'shape' => 'DescribeErrorLogsRequestShape', ],
            'output' => [ 'shape' => 'DescribeErrorLogsResponseShape', ],
        ],
        'DescribeImportFiles' => [
            'name' => 'DescribeImportFiles',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/importFiles',
            ],
            'input' => [ 'shape' => 'DescribeImportFilesRequestShape', ],
            'output' => [ 'shape' => 'DescribeImportFilesResponseShape', ],
        ],
        'GetUploadKey' => [
            'name' => 'GetUploadKey',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/importFiles:getUploadKey',
            ],
            'input' => [ 'shape' => 'GetUploadKeyRequestShape', ],
            'output' => [ 'shape' => 'GetUploadKeyResponseShape', ],
        ],
        'SetImportFileShared' => [
            'name' => 'SetImportFileShared',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/importFiles/{fileName}:setShared',
            ],
            'input' => [ 'shape' => 'SetImportFileSharedRequestShape', ],
            'output' => [ 'shape' => 'SetImportFileSharedResponseShape', ],
        ],
        'DescribeInstances' => [
            'name' => 'DescribeInstances',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'DescribeInstancesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstancesResponseShape', ],
        ],
        'CreateInstance' => [
            'name' => 'CreateInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances',
            ],
            'input' => [ 'shape' => 'CreateInstanceRequestShape', ],
            'output' => [ 'shape' => 'CreateInstanceResponseShape', ],
        ],
        'DescribeInstanceAttributes' => [
            'name' => 'DescribeInstanceAttributes',
            'http' => [
                'method' => 'GET',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DescribeInstanceAttributesRequestShape', ],
            'output' => [ 'shape' => 'DescribeInstanceAttributesResponseShape', ],
        ],
        'DeleteInstance' => [
            'name' => 'DeleteInstance',
            'http' => [
                'method' => 'DELETE',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}',
            ],
            'input' => [ 'shape' => 'DeleteInstanceRequestShape', ],
            'output' => [ 'shape' => 'DeleteInstanceResponseShape', ],
        ],
        'SetInstanceName' => [
            'name' => 'SetInstanceName',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:setInstanceName',
            ],
            'input' => [ 'shape' => 'SetInstanceNameRequestShape', ],
            'output' => [ 'shape' => 'SetInstanceNameResponseShape', ],
        ],
        'FailoverInstance' => [
            'name' => 'FailoverInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:failoverInstance',
            ],
            'input' => [ 'shape' => 'FailoverInstanceRequestShape', ],
            'output' => [ 'shape' => 'FailoverInstanceResponseShape', ],
        ],
        'RebootInstance' => [
            'name' => 'RebootInstance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}:rebootInstance',
            ],
            'input' => [ 'shape' => 'RebootInstanceRequestShape', ],
            'output' => [ 'shape' => 'RebootInstanceResponseShape', ],
        ],
        'DescribeIndexPerformance' => [
            'name' => 'DescribeIndexPerformance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/performance:describeIndexPerformance',
            ],
            'input' => [ 'shape' => 'DescribeIndexPerformanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeIndexPerformanceResponseShape', ],
        ],
        'DescribeQueryPerformance' => [
            'name' => 'DescribeQueryPerformance',
            'http' => [
                'method' => 'POST',
                'requestUri' => '/v1/regions/{regionId}/instances/{instanceId}/performance:describeQueryPerformance',
            ],
            'input' => [ 'shape' => 'DescribeQueryPerformanceRequestShape', ],
            'output' => [ 'shape' => 'DescribeQueryPerformanceResponseShape', ],
        ],
    ],
    'shapes' => [
        'Account' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'accountStatus' => [ 'type' => 'string', 'locationName' => 'accountStatus', ],
                'accountPrivileges' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccountPrivilege', ], ],
            ],
        ],
        'AccountPrivilege' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'privilege' => [ 'type' => 'string', 'locationName' => 'privilege', ],
            ],
        ],
        'AuditFile' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'sizeByte' => [ 'type' => 'int64', 'locationName' => 'sizeByte', ],
                'lastUpdateTime' => [ 'type' => 'string', 'locationName' => 'lastUpdateTime', ],
                'uploadTime' => [ 'type' => 'string', 'locationName' => 'uploadTime', ],
            ],
        ],
        'Backup' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
                'backupName' => [ 'type' => 'string', 'locationName' => 'backupName', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'backupStatus' => [ 'type' => 'string', 'locationName' => 'backupStatus', ],
                'backupStartTime' => [ 'type' => 'string', 'locationName' => 'backupStartTime', ],
                'backupEndTime' => [ 'type' => 'string', 'locationName' => 'backupEndTime', ],
                'backupType' => [ 'type' => 'string', 'locationName' => 'backupType', ],
                'backupMode' => [ 'type' => 'string', 'locationName' => 'backupMode', ],
                'backupUnit' => [ 'type' => 'string', 'locationName' => 'backupUnit', ],
                'backupFiles' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'backupSizeByte' => [ 'type' => 'integer', 'locationName' => 'backupSizeByte', ],
            ],
        ],
        'BackupSpec' => [
            'type' => 'structure',
            'members' => [
                'backupName' => [ 'type' => 'string', 'locationName' => 'backupName', ],
                'dbNames' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DBAccessPrivilege' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
                'privilege' => [ 'type' => 'string', 'locationName' => 'privilege', ],
            ],
        ],
        'DBInstance' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
            ],
        ],
        'Charge' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeStatus' => [ 'type' => 'string', 'locationName' => 'chargeStatus', ],
                'chargeStartTime' => [ 'type' => 'string', 'locationName' => 'chargeStartTime', ],
                'chargeExpiredTime' => [ 'type' => 'string', 'locationName' => 'chargeExpiredTime', ],
                'chargeRetireTime' => [ 'type' => 'string', 'locationName' => 'chargeRetireTime', ],
            ],
        ],
        'DBInstanceAttribute' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'instanceType' => [ 'type' => 'string', 'locationName' => 'instanceType', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'instanceStorageGB', ],
                'instanceCPU' => [ 'type' => 'integer', 'locationName' => 'instanceCPU', ],
                'instanceMemoryMB' => [ 'type' => 'integer', 'locationName' => 'instanceMemoryMB', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'internalDomainName' => [ 'type' => 'string', 'locationName' => 'internalDomainName', ],
                'publicDomainName' => [ 'type' => 'string', 'locationName' => 'publicDomainName', ],
                'instancePort' => [ 'type' => 'string', 'locationName' => 'instancePort', ],
                'connectionMode' => [ 'type' => 'string', 'locationName' => 'connectionMode', ],
                'auditStatus' => [ 'type' => 'string', 'locationName' => 'auditStatus', ],
                'instanceStatus' => [ 'type' => 'string', 'locationName' => 'instanceStatus', ],
                'createTime' => [ 'type' => 'string', 'locationName' => 'createTime', ],
                'charge' =>  [ 'shape' => 'Charge', ],
            ],
        ],
        'ChargeSpec' => [
            'type' => 'structure',
            'members' => [
                'chargeMode' => [ 'type' => 'string', 'locationName' => 'chargeMode', ],
                'chargeUnit' => [ 'type' => 'string', 'locationName' => 'chargeUnit', ],
                'chargeDuration' => [ 'type' => 'integer', 'locationName' => 'chargeDuration', ],
            ],
        ],
        'DBInstanceSpec' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => 'string', 'locationName' => 'instanceName', ],
                'engine' => [ 'type' => 'string', 'locationName' => 'engine', ],
                'engineVersion' => [ 'type' => 'string', 'locationName' => 'engineVersion', ],
                'instanceClass' => [ 'type' => 'string', 'locationName' => 'instanceClass', ],
                'instanceStorageGB' => [ 'type' => 'integer', 'locationName' => 'instanceStorageGB', ],
                'azId' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'vpcId' => [ 'type' => 'string', 'locationName' => 'vpcId', ],
                'subnetId' => [ 'type' => 'string', 'locationName' => 'subnetId', ],
                'chargeSpec' =>  [ 'shape' => 'ChargeSpec', ],
            ],
        ],
        'Database' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'dbStatus' => [ 'type' => 'string', 'locationName' => 'dbStatus', ],
                'characterSetName' => [ 'type' => 'string', 'locationName' => 'characterSetName', ],
                'accessPrivilege' => [ 'type' => 'list', 'member' => [ 'shape' => 'DBAccessPrivilege', ], ],
            ],
        ],
        'ErrorLog' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'sizeByte' => [ 'type' => 'int64', 'locationName' => 'sizeByte', ],
                'lastUpdateTime' => [ 'type' => 'string', 'locationName' => 'lastUpdateTime', ],
                'uploadTime' => [ 'type' => 'string', 'locationName' => 'uploadTime', ],
                'publicURL' => [ 'type' => 'string', 'locationName' => 'publicURL', ],
                'internalURL' => [ 'type' => 'string', 'locationName' => 'internalURL', ],
            ],
        ],
        'File' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'sizeByte' => [ 'type' => 'integer', 'locationName' => 'sizeByte', ],
            ],
        ],
        'FileDownloadURL' => [
            'type' => 'structure',
            'members' => [
                'publicURL' => [ 'type' => 'string', 'locationName' => 'publicURL', ],
                'internalURL' => [ 'type' => 'string', 'locationName' => 'internalURL', ],
            ],
        ],
        'ImportFile' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => 'string', 'locationName' => 'name', ],
                'sharedFileGid' => [ 'type' => 'string', 'locationName' => 'sharedFileGid', ],
                'sizeByte' => [ 'type' => 'integer', 'locationName' => 'sizeByte', ],
                'uploadTime' => [ 'type' => 'string', 'locationName' => 'uploadTime', ],
                'isLocal' => [ 'type' => 'string', 'locationName' => 'isLocal', ],
            ],
        ],
        'DeleteAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GrantPrivilegeResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountName' => [ 'type' => '', 'locationName' => 'accountName', ],
                'accountPassword' => [ 'type' => '', 'locationName' => 'accountPassword', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteAccountRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'GrantPrivilegeResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResetPasswordRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountPassword' => [ 'type' => '', 'locationName' => 'accountPassword', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'CreateAccountResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'ResetPasswordResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAccountResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeAccountsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ResetPasswordResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GrantPrivilegeRequestShape' => [
            'type' => 'structure',
            'members' => [
                'accountPrivileges' => [ 'type' => 'list', 'member' => [ 'type' => '', ], ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'accountName' => [ 'type' => 'string', 'locationName' => 'accountName', ],
            ],
        ],
        'DescribeAccountsResultShape' => [
            'type' => 'structure',
            'members' => [
                'accounts' => [ 'type' => 'list', 'member' => [ 'shape' => 'Account', ], ],
            ],
        ],
        'GetAuditDownloadURLResultShape' => [
            'type' => 'structure',
            'members' => [
                'publicURL' => [ 'type' => 'string', 'locationName' => 'publicURL', ],
                'internalURL' => [ 'type' => 'string', 'locationName' => 'internalURL', ],
            ],
        ],
        'ModifyAuditResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAuditResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteAuditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAuditResultShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'ModifyAuditResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetAuditFilesResultShape' => [
            'type' => 'structure',
            'members' => [
                'auditFiles' => [ 'type' => 'list', 'member' => [ 'shape' => 'AuditFile', ], ],
            ],
        ],
        'GetAuditFilesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteAuditResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateAuditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => '', 'locationName' => 'enabled', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateAuditResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetAuditDownloadURLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => '', 'locationName' => 'fileName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'GetAuditOptionsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'name' => [ 'type' => '', 'locationName' => 'name', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'ModifyAuditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'add' => [ 'type' => '', 'locationName' => 'add', ],
                'drop' => [ 'type' => '', 'locationName' => 'drop', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeAuditRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteAuditResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'GetAuditOptionsResultShape' => [
            'type' => 'structure',
            'members' => [
                'enabled' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
                'disabled' => [ 'type' => 'list', 'member' => [ 'type' => 'string', ], ],
            ],
        ],
        'DescribeBackupsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'auto' => [ 'type' => 'integer', 'locationName' => 'auto', ],
                'backupTypeFilter' => [ 'type' => 'string', 'locationName' => 'backupTypeFilter', ],
                'dbNameFilter' => [ 'type' => 'string', 'locationName' => 'dbNameFilter', ],
                'backupTimeRangeStartFilter' => [ 'type' => 'string', 'locationName' => 'backupTimeRangeStartFilter', ],
                'backupTimeRangeEndFilter' => [ 'type' => 'string', 'locationName' => 'backupTimeRangeEndFilter', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
            ],
        ],
        'CreateBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'backupSpec' =>  [ 'shape' => 'BackupSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeBackupDownloadURLResultShape' => [
            'type' => 'structure',
            'members' => [
                'publicURL' => [ 'type' => 'string', 'locationName' => 'publicURL', ],
                'internalURL' => [ 'type' => 'string', 'locationName' => 'internalURL', ],
            ],
        ],
        'CreateBackupResultShape' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
            ],
        ],
        'DeleteBackupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeBackupDownloadURLRequestShape' => [
            'type' => 'structure',
            'members' => [
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
                'urlExpirationSecond' => [ 'type' => 'string', 'locationName' => 'urlExpirationSecond', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'backupId' => [ 'type' => 'string', 'locationName' => 'backupId', ],
            ],
        ],
        'DescribeBackupsResultShape' => [
            'type' => 'structure',
            'members' => [
                'backup' => [ 'type' => 'list', 'member' => [ 'shape' => 'Backup', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'DeleteDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'DescribeDatabasesResultShape' => [
            'type' => 'structure',
            'members' => [
                'databases' => [ 'type' => 'list', 'member' => [ 'shape' => 'Database', ], ],
            ],
        ],
        'DescribeDatabasesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RestoreDatabaseFromOSSResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDatabaseFromOSSResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDatabaseFromFileRequestShape' => [
            'type' => 'structure',
            'members' => [
                'sharedFileGid' => [ 'type' => '', 'locationName' => 'sharedFileGid', ],
                'fileName' => [ 'type' => '', 'locationName' => 'fileName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'RestoreDatabaseFromOSSRequestShape' => [
            'type' => 'structure',
            'members' => [
                'ossURL' => [ 'type' => '', 'locationName' => 'ossURL', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'CreateDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DeleteDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDatabaseFromBackupRequestShape' => [
            'type' => 'structure',
            'members' => [
                'backupId' => [ 'type' => '', 'locationName' => 'backupId', ],
                'backupFileName' => [ 'type' => '', 'locationName' => 'backupFileName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'dbName' => [ 'type' => 'string', 'locationName' => 'dbName', ],
            ],
        ],
        'RestoreDatabaseFromFileResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateDatabaseRequestShape' => [
            'type' => 'structure',
            'members' => [
                'dbName' => [ 'type' => '', 'locationName' => 'dbName', ],
                'characterSetName' => [ 'type' => '', 'locationName' => 'characterSetName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteDatabaseResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateDatabaseResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDatabaseFromFileResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDatabaseFromBackupResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RestoreDatabaseFromBackupResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeErrorLogsRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeErrorLogsResultShape' => [
            'type' => 'structure',
            'members' => [
                'errorLogs' => [ 'type' => 'list', 'member' => [ 'shape' => 'ErrorLog', ], ],
            ],
        ],
        'DescribeImportFilesResultShape' => [
            'type' => 'structure',
            'members' => [
                'importFiles' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImportFile', ], ],
            ],
        ],
        'GetUploadKeyResultShape' => [
            'type' => 'structure',
            'members' => [
                'key' => [ 'type' => 'string', 'locationName' => 'key', ],
            ],
        ],
        'SetImportFileSharedResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetImportFileSharedResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetImportFileSharedRequestShape' => [
            'type' => 'structure',
            'members' => [
                'shared' => [ 'type' => '', 'locationName' => 'shared', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
                'fileName' => [ 'type' => 'string', 'locationName' => 'fileName', ],
            ],
        ],
        'GetUploadKeyRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeImportFilesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RebootInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'FailoverInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DeleteInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'RebootInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'rebootMaster' => [ 'type' => '', 'locationName' => 'rebootMaster', ],
                'rebootSlave' => [ 'type' => '', 'locationName' => 'rebootSlave', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'FailoverInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeInstanceAttributesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dbInstanceAttributes' =>  [ 'shape' => 'DBInstanceAttribute', ],
            ],
        ],
        'SetInstanceNameRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceName' => [ 'type' => '', 'locationName' => 'instanceName', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'CreateInstanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'instanceSpec' =>  [ 'shape' => 'DBInstanceSpec', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DescribeInstancesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
            ],
        ],
        'DeleteInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'SetInstanceNameResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'CreateInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstanceAttributesRequestShape' => [
            'type' => 'structure',
            'members' => [
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'DescribeInstancesResultShape' => [
            'type' => 'structure',
            'members' => [
                'dbInstances' => [ 'type' => 'list', 'member' => [ 'shape' => 'DBInstance', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
            ],
        ],
        'SetInstanceNameResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'RebootInstanceResponseShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'FailoverInstanceResultShape' => [
            'type' => 'structure',
            'members' => [
            ],
        ],
        'DescribeQueryPerformanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'queryPerformanceResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueryPerformanceResult', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'DescribeIndexPerformanceResultShape' => [
            'type' => 'structure',
            'members' => [
                'missingIndexResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'MissingIndexResult', ], ],
                'indexPerformanceResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'IndexPerformanceResult', ], ],
                'totalCount' => [ 'type' => 'integer', 'locationName' => 'totalCount', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
            ],
        ],
        'IndexPerformanceResult' => [
            'type' => 'structure',
            'members' => [
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'table' => [ 'type' => 'string', 'locationName' => 'table', ],
                'index' => [ 'type' => 'string', 'locationName' => 'index', ],
                'sizeKB' => [ 'type' => 'integer', 'locationName' => 'sizeKB', ],
                'userSeeks' => [ 'type' => 'integer', 'locationName' => 'userSeeks', ],
                'userScans' => [ 'type' => 'integer', 'locationName' => 'userScans', ],
                'userUpdates' => [ 'type' => 'integer', 'locationName' => 'userUpdates', ],
                'lastUserSeek' => [ 'type' => 'string', 'locationName' => 'lastUserSeek', ],
                'lastUserScan' => [ 'type' => 'string', 'locationName' => 'lastUserScan', ],
                'lastUserUpdate' => [ 'type' => 'string', 'locationName' => 'lastUserUpdate', ],
            ],
        ],
        'DescribeQueryPerformanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryType' => [ 'type' => 'string', 'locationName' => 'queryType', ],
                'threshold' => [ 'type' => 'integer', 'locationName' => 'threshold', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'QueryPerformanceResult' => [
            'type' => 'structure',
            'members' => [
                'sql' => [ 'type' => 'string', 'locationName' => 'sql', ],
                'lastExecutionTime' => [ 'type' => 'string', 'locationName' => 'lastExecutionTime', ],
                'elapsedTime' => [ 'type' => 'integer', 'locationName' => 'elapsedTime', ],
                'executionCount' => [ 'type' => 'integer', 'locationName' => 'executionCount', ],
                'workerTime' => [ 'type' => 'integer', 'locationName' => 'workerTime', ],
                'logicalReads' => [ 'type' => 'integer', 'locationName' => 'logicalReads', ],
                'logicalWrites' => [ 'type' => 'integer', 'locationName' => 'logicalWrites', ],
                'physicalReads' => [ 'type' => 'integer', 'locationName' => 'physicalReads', ],
                'lastRows' => [ 'type' => 'integer', 'locationName' => 'lastRows', ],
            ],
        ],
        'DescribeIndexPerformanceRequestShape' => [
            'type' => 'structure',
            'members' => [
                'queryType' => [ 'type' => 'string', 'locationName' => 'queryType', ],
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'pageNumber' => [ 'type' => 'integer', 'locationName' => 'pageNumber', ],
                'pageSize' => [ 'type' => 'integer', 'locationName' => 'pageSize', ],
                'regionId' => [ 'type' => 'string', 'locationName' => 'regionId', ],
                'instanceId' => [ 'type' => 'string', 'locationName' => 'instanceId', ],
            ],
        ],
        'MissingIndexResult' => [
            'type' => 'structure',
            'members' => [
                'db' => [ 'type' => 'string', 'locationName' => 'db', ],
                'table' => [ 'type' => 'string', 'locationName' => 'table', ],
                'equalityColumns' => [ 'type' => 'string', 'locationName' => 'equalityColumns', ],
                'inequalityColumns' => [ 'type' => 'string', 'locationName' => 'inequalityColumns', ],
                'includedColumns' => [ 'type' => 'string', 'locationName' => 'includedColumns', ],
                'avgUserImpact' => [ 'type' => 'float', 'locationName' => 'avgUserImpact', ],
                'userScans' => [ 'type' => 'integer', 'locationName' => 'userScans', ],
                'userSeeks' => [ 'type' => 'integer', 'locationName' => 'userSeeks', ],
            ],
        ],
    ],
];
