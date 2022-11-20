<?php

namespace App\Helpers;

use App\Models\UserActionLog;

class UserHelpers
{
    /**
     * Save a user action log
     *
     * @param   int     $userId     the ID of the user you will be recording
     * @param   string  $action     the action of the user you will record
     * @param   string  $note       notes you want to add (optional)
     * @return  boolean
     */
    public static function recordUserLog(int $userId, string $action, string $note)
    {
        $newLog = new UserActionLog();
        $newLog->user_id = $userId;
        $newLog->action = $action;
        $newLog->note = $note;

        if ($newLog->save()) {
            return true;
        }

        return false;
    }
}
