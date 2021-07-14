<?php

/*
 * This file is part of the overtrue/Douyin.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyDouyin;

/**
 * Class Factory.
 *
 * @method static \EasyDouyin\Payment\Application            payment(array $config)
 * @method static \EasyDouyin\MiniProgram\Application        miniProgram(array $config)
 * @method static \EasyDouyin\OpenPlatform\Application       openPlatform(array $config)
 * @method static \EasyDouyin\OfficialAccount\Application    officialAccount(array $config)
 * @method static \EasyDouyin\BasicService\Application       basicService(array $config)
 * @method static \EasyDouyin\Work\Application               work(array $config)
 * @method static \EasyDouyin\OpenWork\Application           openWork(array $config)
 * @method static \EasyDouyin\MicroMerchant\Application      microMerchant(array $config)
 */
class Factory
{
    /**
     * @param string $name
     *
     * @return \EasyDouyin\Kernel\ServiceContainer
     */
    public static function make($name, array $config)
    {
        $namespace = Kernel\Support\Str::studly($name);
        $application = "\\EasyDouyin\\{$namespace}\\Application";

        return new $application($config);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}
