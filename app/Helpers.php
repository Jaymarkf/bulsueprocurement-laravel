<?php

namespace App\Helpers;

use App\Models\UserActionLog;
use App\Models\ItemDetailHistory;
use Throwable;

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

    /**
     * Record the edit detail history
     *
     * @param   int    $userId          ID of the user who are making the changes
     * @param   int    $itemId          ID of the item that is edited
     * @param   string $beforeChange    The previous state of the item detail
     * @param   string $afterChange     The after state of the item detail
     * @return  boolean
     */
    public static function recordItemHistory(int $userId, int $itemId, string $beforeChange, string $afterChange)
    {
        try {
            $addItemHistory = new ItemDetailHistory();
            $addItemHistory->user_id = $userId;
            $addItemHistory->item_id = $itemId;
            $addItemHistory->before_change = $beforeChange;
            $addItemHistory->after_change = $afterChange;

            if ($addItemHistory->save()) {
                return true;
            }

            return false;
        } catch (Throwable $e) {
            return false;
        }
    }

    /**
     * Validate string
     * @param   string   $str   the string you want to validate
     * @return string;
     */
    public static function validateInput(string $str)
    {
        $str = str_replace(' ', '-', $str); // Replaces all spaces with hyphens.

        return preg_replace('/[^A-Za-z0-9\-]/', '', $str); // Removes special chars.
    }
}
