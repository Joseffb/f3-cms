<?php

namespace FFCMS\CLI;

/**
 * Index CLI Class.
 *
 * @author Vijay Mahrra <vijay@yoyo.org>
 * @copyright (c) Copyright 2016 Vijay Mahrra
 * @license GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)
 */
class Index extends Base
{
    /**
     * @return void
     */
    public function index()
    {
        $cli = $this->cli;
        $cli->shoutBold(__METHOD__);
        $cli->shout('Hello World!');
    }

    /**
     * example to test if already running
     * run cli.php '/index/running' in two different terminals
     * @return bool
     */
    public function running()
    {
        $cli = $this->cli;
        $cli->shoutBold(__METHOD__);

        // use process id for log notifications
        $mypid = getmypid();
        $pid   = $mypid['PID'];
        $msg   = $pid . ': Starting...';
        $cli->shout($msg);
        $this->log($msg);

        // check if already running, quit if so
        exec('ps auxww | grep -i index/running | grep -v grep', $output);

        if (1 < count($output)) {
            $msg = $pid . ': Already running! Quitting.';
            $cli->shout($msg);
            $this->log($output[0]);
            $this->log($msg);
            return false;
        }

        sleep(10);

        return true;
    }
}
