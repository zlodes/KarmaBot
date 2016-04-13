<?php
/**
 * This file is part of GitterBot package.
 *
 * @author Serafim <nesk@xakep.ru>
 * @date 12.04.2016 15:37
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Core\Io;
use Domains\Message\Message;

/**
 * Interface Response
 * @package Core\Io
 */
interface Response
{
    /**
     * @param mixed $data
     * @return bool
     */
    public function send($data) : bool;

    /**
     * @param Message $message
     * @param $data
     * @return bool
     */
    public function update(Message $message, $data) : bool;
}