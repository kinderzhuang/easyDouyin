<?php

/*
 * This file is part of the overtrue/Douyin.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyDouyin\MiniProgram;

use EasyDouyin\BasicService;
use EasyDouyin\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @author mingyoung <mingyoungcheung@gmail.com>
 *
 * @property \EasyDouyin\MiniProgram\Auth\AccessToken           $access_token
 * @property \EasyDouyin\MiniProgram\DataCube\Client            $data_cube
 * @property \EasyDouyin\MiniProgram\AppCode\Client             $app_code
 * @property \EasyDouyin\MiniProgram\Auth\Client                $auth
 * @property \EasyDouyin\OfficialAccount\Server\Guard           $server
 * @property \EasyDouyin\MiniProgram\Encryptor                  $encryptor
 * @property \EasyDouyin\MiniProgram\TemplateMessage\Client     $template_message
 * @property \EasyDouyin\OfficialAccount\CustomerService\Client $customer_service
 * @property \EasyDouyin\MiniProgram\Plugin\Client              $plugin
 * @property \EasyDouyin\MiniProgram\Plugin\DevClient           $plugin_dev
 * @property \EasyDouyin\MiniProgram\UniformMessage\Client      $uniform_message
 * @property \EasyDouyin\MiniProgram\ActivityMessage\Client     $activity_message
 * @property \EasyDouyin\MiniProgram\Express\Client             $logistics
 * @property \EasyDouyin\MiniProgram\NearbyPoi\Client           $nearby_poi
 * @property \EasyDouyin\MiniProgram\OCR\Client                 $ocr
 * @property \EasyDouyin\MiniProgram\Soter\Client               $soter
 * @property \EasyDouyin\BasicService\Media\Client              $media
 * @property \EasyDouyin\BasicService\ContentSecurity\Client    $content_security
 * @property \EasyDouyin\MiniProgram\Mall\ForwardsMall          $mall
 * @property \EasyDouyin\MiniProgram\SubscribeMessage\Client    $subscribe_message
 * @property \EasyDouyin\MiniProgram\RealtimeLog\Client         $realtime_log
 * @property \EasyDouyin\MiniProgram\Search\Client              $search
 * @property \EasyDouyin\MiniProgram\Live\Client                $live
 * @property \EasyDouyin\MiniProgram\Broadcast\Client           $broadcast
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Auth\ServiceProvider::class,
        DataCube\ServiceProvider::class,
        AppCode\ServiceProvider::class,
        Server\ServiceProvider::class,
        TemplateMessage\ServiceProvider::class,
        CustomerService\ServiceProvider::class,
        UniformMessage\ServiceProvider::class,
        ActivityMessage\ServiceProvider::class,
        OpenData\ServiceProvider::class,
        Plugin\ServiceProvider::class,
        Base\ServiceProvider::class,
        Express\ServiceProvider::class,
        NearbyPoi\ServiceProvider::class,
        OCR\ServiceProvider::class,
        Soter\ServiceProvider::class,
        Mall\ServiceProvider::class,
        SubscribeMessage\ServiceProvider::class,
        RealtimeLog\ServiceProvider::class,
        Search\ServiceProvider::class,
        Live\ServiceProvider::class,
        Broadcast\ServiceProvider::class,
        // Base services
        BasicService\Media\ServiceProvider::class,
        BasicService\ContentSecurity\ServiceProvider::class,
    ];

    /**
     * Handle dynamic calls.
     *
     * @param string $method
     * @param array  $args
     *
     * @return mixed
     */
    public function __call($method, $args)
    {
        return $this->base->$method(...$args);
    }
}
