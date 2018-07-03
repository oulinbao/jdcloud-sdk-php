<?php
namespace Jdcloud\Mps;

use Jdcloud\JdcloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with mps.
 *
 * @method \Jdcloud\Result listThumbnailTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThumbnailTaskAsync(array $args = [])
 * @method \Jdcloud\Result createThumbnailTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createThumbnailTaskAsync(array $args = [])
 * @method \Jdcloud\Result getThumbnailTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getThumbnailTaskAsync(array $args = [])
 * @method \Jdcloud\Result getNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNotificationAsync(array $args = [])
 * @method \Jdcloud\Result setNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setNotificationAsync(array $args = [])
 */
class MpsClient extends JdcloudClient
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
                        'service' => 'mps',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'mps'
            );
        };

        parent::__construct($args);
    }
}