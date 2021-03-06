<?php
/**
 * Rds
 *
 * @category Jdcloud
 * @package  Jdcloud\Rds
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Rds;

use Jdcloud\JdcloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with rds.
 *
 * @method \Jdcloud\Result describeAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountsAsync(array $args = [])
 * @method \Jdcloud\Result createAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccountAsync(array $args = [])
 * @method \Jdcloud\Result deleteAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccountAsync(array $args = [])
 * @method \Jdcloud\Result grantPrivilege(array $args = [])
 * @method \GuzzleHttp\Promise\Promise grantPrivilegeAsync(array $args = [])
 * @method \Jdcloud\Result resetPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetPasswordAsync(array $args = [])
 * @method \Jdcloud\Result describeAudit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAuditAsync(array $args = [])
 * @method \Jdcloud\Result createAudit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAuditAsync(array $args = [])
 * @method \Jdcloud\Result deleteAudit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAuditAsync(array $args = [])
 * @method \Jdcloud\Result getAuditOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuditOptionsAsync(array $args = [])
 * @method \Jdcloud\Result modifyAudit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyAuditAsync(array $args = [])
 * @method \Jdcloud\Result getAuditFiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuditFilesAsync(array $args = [])
 * @method \Jdcloud\Result getAuditDownloadURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuditDownloadURLAsync(array $args = [])
 * @method \Jdcloud\Result describeBackups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupsAsync(array $args = [])
 * @method \Jdcloud\Result createBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackupAsync(array $args = [])
 * @method \Jdcloud\Result deleteBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackupAsync(array $args = [])
 * @method \Jdcloud\Result describeBackupDownloadURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBackupDownloadURLAsync(array $args = [])
 * @method \Jdcloud\Result describeDatabases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDatabasesAsync(array $args = [])
 * @method \Jdcloud\Result createDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatabaseAsync(array $args = [])
 * @method \Jdcloud\Result deleteDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatabaseAsync(array $args = [])
 * @method \Jdcloud\Result restoreDatabaseFromBackup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreDatabaseFromBackupAsync(array $args = [])
 * @method \Jdcloud\Result restoreDatabaseFromFile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreDatabaseFromFileAsync(array $args = [])
 * @method \Jdcloud\Result restoreDatabaseFromOSS(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreDatabaseFromOSSAsync(array $args = [])
 * @method \Jdcloud\Result describeErrorLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeErrorLogsAsync(array $args = [])
 * @method \Jdcloud\Result describeImportFiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImportFilesAsync(array $args = [])
 * @method \Jdcloud\Result getUploadKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUploadKeyAsync(array $args = [])
 * @method \Jdcloud\Result setImportFileShared(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setImportFileSharedAsync(array $args = [])
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result createInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstanceAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAttributesAsync(array $args = [])
 * @method \Jdcloud\Result deleteInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceAsync(array $args = [])
 * @method \Jdcloud\Result setInstanceName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setInstanceNameAsync(array $args = [])
 * @method \Jdcloud\Result failoverInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise failoverInstanceAsync(array $args = [])
 * @method \Jdcloud\Result rebootInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeIndexPerformance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIndexPerformanceAsync(array $args = [])
 * @method \Jdcloud\Result describeQueryPerformance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeQueryPerformanceAsync(array $args = [])
 */
class RdsClient extends JdcloudClient
{
    public function __construct(array $args)
    {
        $args['with_resolved'] = function (array $args) {
            $this->getHandlerList()->appendInit(
                PresignUrlMiddleware::wrap(
                    $this,
                    $args['endpoint_provider'],
                    [
                        'operations' => [
                        ],
                        'service' => 'rds',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'rds'
            );
        };

        parent::__construct($args);
    }
}